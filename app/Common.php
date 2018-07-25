<?php

namespace App;
use Illuminate\Http\Request;
use App\EmailConfig;
use App\SmsConfig;
use AWS;
use Auth;
use Redirect;
use Mandrill;
use App\Search;
use App\Airline;
use App\FareTrend;
use GuzzleHttp\Client;

class Common
{
	// Save Search to Database
	public static function saveSearch($triptype, $origin, $destination, $depart_date, $return_date, $class, $adults, $childs, $infants, $intl) {
		$user_id = 0;
		if (Auth::check())
		{
		    $user_id = Auth::user()->id;
		}
		$search = new Search();
		$search->user_id = $user_id;
		$search->triptype = $triptype;
		$search->origin = $origin;
		$search->destination = $destination;
		$search->depart_date = $depart_date;
		$search->return_date = $return_date;
		$search->class = $class;
		$search->adults = $adults;
		$search->childs = $childs;
		$search->infants = $infants;
		$search->visitor = \Request::ip();
		$search->intl = $intl;
		$search->save();

		return $search->id;
	}

	public static function rupeeFormat($num) {
        $explrestunits = "" ;
        if(strlen($num)>3) {
            $lastthree = substr($num, strlen($num)-3, strlen($num));
            $restunits = substr($num, 0, strlen($num)-3); // extracts the last three digits
            $restunits = (strlen($restunits)%2 == 1)?"0".$restunits:$restunits; // explodes the remaining digits in 2's formats, adds a zero in the beginning to maintain the 2's grouping.
            $expunit = str_split($restunits, 2);
            for($i=0; $i<sizeof($expunit); $i++) {
                // creates each of the 2's group and adds a comma to the end
                if($i==0) {
                    $explrestunits .= (int)$expunit[$i].","; // if is first value , convert into integer
                } else {
                    $explrestunits .= $expunit[$i].",";
                }
            }
            $thecash = $explrestunits.$lastthree;
        } else {
            $thecash = $num;
        }
        return $thecash; // writes the final format where $currency is the currency symbol.
    }

	// function to find mode of array
	private static function array_mode($array) {
		$count = array();
		foreach ( $array as $item) {
			if ( isset($count[$item]) ) {
				$count[$item]++;
			}
			else {
				$count[$item] = 1;
			};
		};
		$mostcommon = '';
		$iter = 0;
		foreach ( $count as $k => $v ) {
			if ( $v > $iter ) {
				$mostcommon = $k;
				$iter = $v;
			};
		};
		return $mostcommon;
	}

	// Save Trend to Database
	public static function saveTrend($response, $org, $dest, $date) {
		$data = json_decode($response);
	    $minFare = $data->OneWayAvailabilityResponse->ItinearyDetails[0]->Items[0]->FareDescription->PaxFareDetails[0]->OtherInfo->GrossAmount;
        $minDuration = $data->OneWayAvailabilityResponse->ItinearyDetails[0]->Items[0]->ElapsedTime[0];
        $minDurationFlightIata = $data->OneWayAvailabilityResponse->ItinearyDetails[0]->Items[0]->ValidatingCarrier;
        $items = $data->OneWayAvailabilityResponse->ItinearyDetails[0]->Items;

        $cheapAirlineIataArray = array(); // Iata Codes with cheapest fares
        $cheapAirlineNameArray = array(); // Airline Names with cheapest fares
        $cheapAirlineTime = array(); // Airline Departure Time with cheapest fares
        $cheapFlightNumArray = array(); // Airline Flight Number with cheapest fares
        $flightCount = array(); // Count of flights from Indivisual Airlines
        $flightDurationArray = array(); // array of all durations (used for finding mode of duration)
        $airlineList = array(); // array of distinct airlines
        $morningFlights = array(); // array of flights before 7 AM
        $nightFlights = array(); // array of flights after 10 PM
        $morningTime = strtotime("07:00:00");
        $nightTime = strtotime("22:00:00");

        foreach ($items as $item) {

        	$fare = $item->FareDescription->PaxFareDetails[0]->OtherInfo->GrossAmount;
        	$airline = Airline::where("iata", $item->ValidatingCarrier)->limit(1)->first();
        	if ($airline == NULL) {
        		continue;
        	}

        	// put all same priced values in a array
        	if ($fare == $minFare) {
        		array_push($cheapAirlineIataArray, $item->ValidatingCarrier);
        		array_push($cheapAirlineNameArray, $airline->airline);
        		array_push($cheapFlightNumArray, $item->FlightDetails[0]->FlightNum);
        		array_push($cheapAirlineTime, $item->FlightDetails[0]->DepartureDateTime);
        	}
        	
        	if (array_key_exists($item->ValidatingCarrier, $flightCount)) {
        		$flightCount[$item->ValidatingCarrier] = $flightCount[$item->ValidatingCarrier] + 1;
        	} else {
        		$flightCount[$item->ValidatingCarrier] = 0;
        	}

        	$departTime = strtotime(explode("T", $item->FlightDetails[0]->DepartureDateTime)[1]);
        	if ($departTime < $morningTime) {
        		$morningFlights[$item->ValidatingCarrier." ".$item->FlightDetails[0]->FlightNum] = $item->FlightDetails[0]->DepartureDateTime;
        	}
        	else if ($departTime > $nightTime) {
        		$nightFlights[$item->ValidatingCarrier." ".$item->FlightDetails[0]->FlightNum] = $item->FlightDetails[0]->DepartureDateTime;
        	}

        	array_push($flightDurationArray, $item->ElapsedTime[0]);
        	// asort($flightDurationArray);

        	if ($minDuration > $item->ElapsedTime[0]) {
        		$minDuration = $item->ElapsedTime[0];
        		$minDurationFlightIata = $item->ValidatingCarrier;
        	}

        	if (!in_array($airline->airline, $airlineList)) {
        		array_push($airlineList, $airline->airline);
        	}
        	
        }

        $totalFlights = count($items);
        arsort($flightCount); // reverse sort flight count
        asort($morningFlights); // sort morning flights array
        arsort($nightFlights); // sort night flights array

        $modeFlightDuration = self::array_mode($flightDurationArray); // mode of flight duration array

        // Update Data
      	FareTrend::updateOrCreate(
      		[
      			'date' => $date,
      			'org' => $org,
      			'dest' => $dest
      		],
      		[
      			'search_response' => $response,
      			'min_fare' => $minFare,
      			'min_duration' => $minDuration,
      			'min_duration_flight_iata' => $minDurationFlightIata,
      			'mode_flight_duration' => $modeFlightDuration,
      			'cheap_airline_iatas' => serialize($cheapAirlineIataArray),
      			'cheap_airline_names' => serialize($cheapAirlineNameArray),
      			'cheap_airline_times' => serialize($cheapAirlineTime),
      			'cheap_airline_flight_num' => serialize($cheapFlightNumArray),
      			'flight_counts' => serialize($flightCount),
      			'morning_flights' => serialize($morningFlights),
      			'night_flights' => serialize($nightFlights),
      			'airline_list' => serialize($airlineList),
      			'total_flights' => $totalFlights
      		]
      	);

	}

	// Get Search Response
	public static function getSearchResponse($jsonRequest) {
		$client = new Client([
			'headers' => [
				'apiKey' => setting('airhob.api_key'),
				'mode' => setting('airhob.api_mode'),
				'Content-Type' => 'application/json'
			]
		]);

		$response = $client->request(
			'POST',
			setting('airhob.search_api_url'),
			['body' => $jsonRequest]
		);

		return $response->getBody();
	}

	// Save Search to  S3
	public static function saveSearchToAWS($response) {
		// $timestamp = (new \DateTime())->getTimestamp();
        // $userid = Auth::guest()?0:Auth::user()->id;

        // $fileName = str_replace(".", "", \Request::ip()).$timestamp.".json";
        // $fp = fopen($fileName,"w");
        // if( $fp == false )
        // {
        //   return ( "Error in opening file" );
        // }
        // fwrite( $fp, $data );
        // fclose($fp);

        // $s3 = AWS::createClient('s3');
        // $s3->putObject(array(
        //     'Bucket'     => 'farespro',
        //     'Key'        => 'response/'.$userid."-".$timestamp.".json",
        //     'SourceFile' => $fileName,
        // ));
        // unlink($fileName);
	}

	// Validate Search Request
	public static function validateSearch($from, $to, $adults, $infants) {
        $msg = 0;
        if(count(Airport::where('iata', $from)->limit(1)->get())==0) {
            $msg = Redirect::back()->withErrors(['Please Enter a valid Departure Airport']);
        }
        else if(count(Airport::where('iata', $to)->limit(1)->get())==0) {
            $msg = Redirect::back()->withErrors(['Please Enter a valid Destination Airport']);
        }
        else if($from == $to) {
            $msg = Redirect::back()->withErrors(['Departure and Destination cannot be same']);
        }
        else if($adults<$infants) {
            $msg = Redirect::back()->withErrors(['Number of Infants must be less than or equal to number of adults']);
        }
        return $msg;
    }


    // One Way International SMS
    public static function sendOneWayIntlSMS($mobile, $org, $dest, $pnr) {

    }

    // Round Trip International SMS
    public static function sendRoundTripIntlSMS($mobile, $org, $dest, $pnr) {

    }

    // One Way Domestic SMS
    public static function sendOneWayDomSMS($mobile, $org, $dest, $pnr) {

    }

    // Send SMS
    public static function sendSMS($mobile, $msg) {
        /*Send SMS using PHP*/    
        
        //Your authentication key
        $authKey = setting('msg91.auth_key');
        
        //Multiple mobiles numbers separated by comma
        //$mobileNumber = "9999999";
        
        //Sender ID,While using route4 sender id should be 6 characters long.
        $senderId = setting('msg91.sender_id');
        
        //Your message to send, Add URL encoding here.
        $message = urlencode($msg);
        
        //Define route 
        $route = "4";
        //Prepare you post parameters
        $postData = array(
            'authkey' => $authKey,
            'mobiles' => $mobile,
            'message' => $message,
            'sender' => $senderId,
            'route' => $route
        );

        $curl = curl_init();

        curl_setopt_array($curl, array(
          CURLOPT_URL => "http://api.msg91.com/api/sendhttp.php?sender=FARPRO&route=4&mobiles=".$mobile."&authkey=".$authKey."&encrypt=1&country=0&message=".$message."",
          CURLOPT_RETURNTRANSFER => true,
          CURLOPT_ENCODING => "",
          CURLOPT_MAXREDIRS => 10,
          CURLOPT_TIMEOUT => 30,
          CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
          CURLOPT_CUSTOMREQUEST => "GET",
          CURLOPT_SSL_VERIFYHOST => 0,
          CURLOPT_SSL_VERIFYPEER => 0,
        ));

        $response = curl_exec($curl);
        $err = curl_error($curl);

        curl_close($curl);

        if ($err) {
          return "cURL Error #:" . $err;
        } else {
          return $response;
        }

		return $response->getBody();
    }


    public static function sendWelcomeMail($to_email, $to_name) {
        $emailConfig = EmailConfig::where('type', 'welcomeMail')->first();
        $subject = $emailConfig->subject;
        //replace USER_NAME
        $subject = str_replace("*|USER_NAME|*", $to_name, $subject);
        //replace USER_EMAIL
        $subject = str_replace("*|USER_EMAIL|*", $to_email, $subject);
        $from_email = $emailConfig->from_email;
        $from_name = $emailConfig->from_name;
        $reply_to = $emailConfig->reply_to;
        $template_name = $emailConfig->mandrill_template_slug;
        // $variable_names = unserialize($emailConfig->variable_names);
        // $variable_values = unserialize($emailConfig->variable_values);
        $variable_names = array();
        $variable_values = array();
        array_push($variable_names, "USER_NAME", "USER_EMAIL");
        array_push($variable_values, $to_name, $to_email);
        self::sendTemplateMail($subject, $from_email, $to_email, $from_name, $to_name, $reply_to, $template_name, $variable_names, $variable_values); 
    }

    public static function sendPasswordResetMail($to_email, $token) {
        $reset_link = url("/password/reset/".$token);
        $emailConfig = EmailConfig::where('type', 'forgotPasswordMail')->first();
        $subject = $emailConfig->subject;
        //replace USER_NAME
        $subject = str_replace("*|USER_EMAIL|*", $to_email, $subject);
        //replace RESET_LINK
        $subject = str_replace("*|RESET_LINK|*", $reset_link, $subject);
        $from_email = $emailConfig->from_email;
        $from_name = $emailConfig->from_name;
        $reply_to = $emailConfig->reply_to;
        $template_name = $emailConfig->mandrill_template_slug;
        // $variable_names = unserialize($emailConfig->variable_names);
        // $variable_values = unserialize($emailConfig->variable_values);
        $variable_names = array();
        $variable_values = array();
        array_push($variable_names, "USER_EMAIL", "RESET_LINK");
        array_push($variable_values, $to_email, $reset_link);
        self::sendTemplateMail($subject, $from_email, $to_email, $from_name, $to_email, $reply_to, $template_name, $variable_names, $variable_values);
    }

    public static function sendTemplateMail($subject, $from_email, $to_email, $from_name, $to_name, $reply_to, $template_name, $variable_names, $variable_values) {
        $api_key = setting('mandrill.api_key');
        $vars = array();
        for ($i=0; $i < count($variable_names); $i++) {
            $var = array(
                'name' => $variable_names[$i],
                'content' => $variable_values[$i]
            );
            array_push($vars, $var);
        }
        try {
            $mandrill = new Mandrill($api_key);
            $template_content = array(
            );
            $message = array(
                'subject' => $subject,
                'from_email' => $from_email,
                'from_name' => $from_name,
                'to' => array(
                    array(
                        'email' => $to_email,
                        'name' => $to_name,
                        'type' => 'to'
                    )
                ),
                'headers' => array('Reply-To' => $reply_to),
                'important' => false,
                'track_opens' => null,
                'track_clicks' => null,
                'auto_text' => null,
                'auto_html' => null,
                'inline_css' => null,
                'url_strip_qs' => null,
                'preserve_recipients' => null,
                'view_content_link' => null,
                'bcc_address' => null,
                'tracking_domain' => null,
                'signing_domain' => null,
                'return_path_domain' => null,
                'merge' => true,
                'merge_language' => 'mailchimp',
                'merge_vars' => array(
                    array(
                        'rcpt' => $to_email,
                        'vars' => $vars
                    )
                ),
                'tags' => array('password-resets')
            );
            $async = false;
            $ip_pool = 'Main Pool';
            $send_at = date("Y-m-d H:i:s");
            $result = $mandrill->messages->sendTemplate($template_name, $template_content, $message, $async, $ip_pool, $send_at);
            //return $result;
        } catch(Mandrill_Error $e) {
            // Mandrill errors are thrown as exceptions
            echo 'A mandrill error occurred: ' . get_class($e) . ' - ' . $e->getMessage();
            // A mandrill error occurred: Mandrill_Unknown_Subaccount - No subaccount exists with the id 'customer-123'
            throw $e;
        }
    }

    public static function getAirlinename($iata) {
    	return Airline::where("iata", $iata)->limit(1)->first()->airline;
    }
}
