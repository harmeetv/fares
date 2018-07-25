<?php

namespace App\Http\Controllers;
use App\LookRequest;
use App\Airport;
use App\BookingDetail;
use DB;
use App\OfferCode;

use Illuminate\Http\Request;

class BookingController extends Controller
{
    public function postBookingDetails(Request $request) {

    	if($request->input('triptype')=="DOMR"){

    		//onward look request
    		$lookRequest = new \stdClass();
	    	$lookRequest->TrackId = $request->input('onward_trackId');
	    	$segments = array();
	    	$segment = new \stdClass();
	    	$segment->ValidatingCarrier = $request->input('onward_validatingCarrier');
	    	$segment->Price = $request->input('onward_price');
	    	$items = array();
	    	for($i=0;$i<count($request->input('onward_flightId'));$i++) {
	    		$item = new \stdClass();
		    	$item->FlightID = $request->input('onward_flightId')[$i];
		    	$item->FlightNum = $request->input('onward_flightNum')[$i];
		    	$item->CarrierId = $request->input('onward_carrierId')[$i];
		    	$item->AircraftType = $request->input('onward_aircraftType')[$i];
		    	$item->Origin = $request->input('onward_origin')[$i];
		    	$item->Destination = $request->input('onward_destination')[$i];
		    	$item->DepartureDateTime = $request->input('onward_departureDateTime')[$i];
		    	$item->ArrivalDateTime = $request->input('onward_arrivalDateTime')[$i];
		    	$item->ClassCode = $request->input('onward_classCode')[$i];
		    	$item->EquipmentType = $request->input('onward_equipmentType')[$i];
		    	$item->OperatingCarrierId = $request->input('onward_operatingCarrierId')[$i];
		    	$item->Meal = $request->input('onward_meal')[$i];
		    	$item->OrgTerminal = $request->input('onward_orgTerminal')[$i];
		    	$item->DestTerminal = $request->input('onward_desTerminal')[$i];
		    	$item->MajorClassCode = $request->input('onward_majorClassCode')[$i];
		    	$item->Duration = $request->input('onward_duration')[$i];
		    	$baggage = new \stdClass();
		    	$baggage->Weight = $request->input('onward_baggage')['weight'][$i];
		    	$baggage->Unit = $request->input('onward_baggage')['unit'][$i];
		    	$baggage->Pieces = $request->input('onward_baggage')['pieces'][$i];
		    	$item->Baggage = $baggage;
		    	$item->ApiProvider = $request->input('onward_apiProvider')[$i];
		    	$item->MarriageGroup = $request->input('onward_marriageGroup')[$i];
		    	$item->IsStopAirport = $request->input('onward_isStopAirport')[$i];
		    	array_push($items, $item);
		    }
		    $segment->item = $items;
	    	array_push($segments, $segment);
	    	$itinearyDetails = new \stdClass();
	    	$itinearyDetails->Segments = $segments;
	    	$lookRequest->ItinearyDetails=$itinearyDetails;

	    	$lookRequestJson =  str_replace('"null"', 'null', json_encode($lookRequest));
	    	$lookRequestJson = str_replace('"false"', 'false', $lookRequestJson);

	    	$onwardLookRequestDb = new LookRequest;
	    	$onwardLookRequestDb->lookrequest = $lookRequestJson;
	    	$onwardLookRequestDb->searchid = $request->searchid;
	    	$onwardLookRequestDb->save();


	    	//return look request
	    	$lookRequest = new \stdClass();
	    	$lookRequest->TrackId = $request->input('return_trackId');
	    	$segments = array();
	    	$segment = new \stdClass();
	    	$segment->ValidatingCarrier = $request->input('return_validatingCarrier');
	    	$segment->Price = $request->input('return_price');
	    	$items = array();
	    	for($i=0;$i<count($request->input('return_flightId'));$i++) {
	    		$item = new \stdClass();
		    	$item->FlightID = $request->input('return_flightId')[$i];
		    	$item->FlightNum = $request->input('return_flightNum')[$i];
		    	$item->CarrierId = $request->input('return_carrierId')[$i];
		    	$item->AircraftType = $request->input('return_aircraftType')[$i];
		    	$item->Origin = $request->input('return_origin')[$i];
		    	$item->Destination = $request->input('return_destination')[$i];
		    	$item->DepartureDateTime = $request->input('return_departureDateTime')[$i];
		    	$item->ArrivalDateTime = $request->input('return_arrivalDateTime')[$i];
		    	$item->ClassCode = $request->input('return_classCode')[$i];
		    	$item->EquipmentType = $request->input('return_equipmentType')[$i];
		    	$item->OperatingCarrierId = $request->input('return_operatingCarrierId')[$i];
		    	$item->Meal = $request->input('return_meal')[$i];
		    	$item->OrgTerminal = $request->input('return_orgTerminal')[$i];
		    	$item->DestTerminal = $request->input('return_desTerminal')[$i];
		    	$item->MajorClassCode = $request->input('return_majorClassCode')[$i];
		    	$item->Duration = $request->input('return_duration')[$i];
		    	$baggage = new \stdClass();
		    	$baggage->Weight = $request->input('return_baggage')['weight'][$i];
		    	$baggage->Unit = $request->input('return_baggage')['unit'][$i];
		    	$baggage->Pieces = $request->input('return_baggage')['pieces'][$i];
		    	$item->Baggage = $baggage;
		    	$item->ApiProvider = $request->input('return_apiProvider')[$i];
		    	$item->MarriageGroup = $request->input('return_marriageGroup')[$i];
		    	$item->IsStopAirport = $request->input('return_isStopAirport')[$i];
		    	array_push($items, $item);
		    }
		    $segment->item = $items;
	    	array_push($segments, $segment);
	    	$itinearyDetails = new \stdClass();
	    	$itinearyDetails->Segments = $segments;
	    	$lookRequest->ItinearyDetails=$itinearyDetails;

	    	$lookRequestJson =  str_replace('"null"', 'null', json_encode($lookRequest));
	    	$lookRequestJson = str_replace('"false"', 'false', $lookRequestJson);

	    	$returnLookRequestDb = new LookRequest;
	    	$returnLookRequestDb->lookrequest = $lookRequestJson;
	    	$returnLookRequestDb->searchid = $request->searchid;
	    	$returnLookRequestDb->save();

	    	$redirect_link ="/bookingDetails/request/$onwardLookRequestDb->id/$returnLookRequestDb->id";

	    	return redirect($redirect_link);
    	}

    	else {
	    	$lookRequest = new \stdClass();
	    	$lookRequest->TrackId = $request->input('trackId');
	    	$segments = array();
	    	$segment = new \stdClass();
	    	$segment->ValidatingCarrier = $request->input('validatingCarrier');
	    	$segment->Price = $request->input('price');
	    	$items = array();
	    	for($i=0;$i<count($request->input('flightId'));$i++) {
	    		$item = new \stdClass();
		    	$item->FlightID = $request->input('flightId')[$i];
		    	$item->FlightNum = $request->input('flightNum')[$i];
		    	$item->CarrierId = $request->input('carrierId')[$i];
		    	$item->AircraftType = $request->input('aircraftType')[$i];
		    	$item->Origin = $request->input('origin')[$i];
		    	$item->Destination = $request->input('destination')[$i];
		    	$item->DepartureDateTime = $request->input('departureDateTime')[$i];
		    	$item->ArrivalDateTime = $request->input('arrivalDateTime')[$i];
		    	$item->ClassCode = $request->input('classCode')[$i];
		    	$item->EquipmentType = $request->input('equipmentType')[$i];
		    	$item->OperatingCarrierId = $request->input('operatingCarrierId')[$i];
		    	$item->Meal = $request->input('meal')[$i];
		    	$item->OrgTerminal = $request->input('orgTerminal')[$i];
		    	$item->DestTerminal = $request->input('desTerminal')[$i];
		    	$item->MajorClassCode = $request->input('majorClassCode')[$i];
		    	$item->Duration = $request->input('duration')[$i];
		    	$baggage = new \stdClass();
		    	$baggage->Weight = $request->input('baggage')['weight'][$i];
		    	$baggage->Unit = $request->input('baggage')['unit'][$i];
		    	$baggage->Pieces = $request->input('baggage')['pieces'][$i];
		    	$item->Baggage = $baggage;
		    	$item->ApiProvider = $request->input('apiProvider')[$i];
		    	$item->MarriageGroup = $request->input('marriageGroup')[$i];
		    	$item->IsStopAirport = $request->input('isStopAirport')[$i];
		    	array_push($items, $item);
		    }
		    $segment->item = $items;
	    	array_push($segments, $segment);
	    	$itinearyDetails = new \stdClass();
	    	$itinearyDetails->Segments = $segments;
	    	$lookRequest->ItinearyDetails=$itinearyDetails;

	    	$lookRequestJson =  str_replace('"null"', 'null', json_encode($lookRequest));
	    	$lookRequestJson = str_replace('"false"', 'false', $lookRequestJson);

	    	$lookRequestDb = new LookRequest;
	    	$lookRequestDb->lookrequest = $lookRequestJson;
	    	$lookRequestDb->searchid = $request->searchid;
	    	$lookRequestDb->save();

	    	$redirect_link ="/bookingDetails/request/$lookRequestDb->id";

	    	return redirect($redirect_link);
	    }
	}

	public function getBookingDetails($lookrequestid) {
		$lookrequest = LookRequest::join('searches', 'look_requests.searchid', '=', 'searches.id')->where('look_requests.id', $lookrequestid)->get()->first();
		$total_passengers = $lookrequest->adults + $lookrequest->childs + $lookrequest->infants;

		$org_city = Airport::where('iata', $lookrequest->origin)->first()->city;
		$dest_city = Airport::where('iata', $lookrequest->destination)->first()->city;

		$from_country = Airport::where('iata', $lookrequest->origin)->first()->country;
		$to_country = Airport::where('iata', $lookrequest->destination)->first()->country;
		$intl="DOM";

		if($from_country!=$to_country) {
			$intl="INTL";
		}

		$lookrequestdata = json_decode($lookrequest->lookrequest);

		$flightDetailCount = count($lookrequestdata->ItinearyDetails->Segments[0]->item);

		$onwardStops = 0;

		$returnStops = 0;

		if ($lookrequest->triptype=="R") {
			for ($i=0; $i<$flightDetailCount; $i++) {
				if ($lookrequest->destination != $lookrequestdata->ItinearyDetails->Segments[0]->item[$i]->Destination) {
					$onwardStops++;
				}
				else {
					break;
				}
			}
			$returnStops = $flightDetailCount - $onwardStops - 2;
		}

		$reconfirmFareUrl = "/reconfirmfare/$";

		return view('pages.bookingDetails')
			->with('adults', $lookrequest->adults)
			->with('childs', $lookrequest->childs)
			->with('infants', $lookrequest->infants)
			->with('total_passengers', $total_passengers)
			->with('intl', $intl)
			->with('org_city', $org_city)
			->with('dest_city', $dest_city)
			->with('org', $lookrequest->origin)
			->with('dest', $lookrequest->destination)
			->with('onward_stops', $onwardStops)
			->with('return_stops', $returnStops)
			->with('flight_count', $flightDetailCount)
			->with('lookrequest', $lookrequestdata->ItinearyDetails->Segments[0])
			->with('triptype', $lookrequest->triptype)
			->with('lookrequestid', $lookrequestid);
	}

	//get booking detail for domestic round trip
	public function getBookingDetailsDomr($onwardlookrequestid, $returnlookrequestid) {
		$onwardlookrequest = LookRequest::join('searches', 'look_requests.searchid', '=', 'searches.id')->where('look_requests.id', $onwardlookrequestid)->get()->first();
		$total_passengers = $onwardlookrequest->adults + $onwardlookrequest->childs + $onwardlookrequest->infants;

		$org_city = Airport::where('iata', $onwardlookrequest->origin)->first()->city;
		$dest_city = Airport::where('iata', $onwardlookrequest->destination)->first()->city;

		$from_country = Airport::where('iata', $onwardlookrequest->origin)->first()->country;
		$to_country = Airport::where('iata', $onwardlookrequest->destination)->first()->country;
		$intl="DOM";

		$onwardlookrequestdata = json_decode($onwardlookrequest->lookrequest);

		$returnlookrequest = LookRequest::join('searches', 'look_requests.searchid', '=', 'searches.id')->where('look_requests.id', $returnlookrequestid)->get()->first();

		$returnlookrequestdata = json_decode($returnlookrequest->lookrequest);

		return view('pages.bookingDetailsDomr')
			->with('adults', $onwardlookrequest->adults)
			->with('childs', $onwardlookrequest->childs)
			->with('infants', $onwardlookrequest->infants)
			->with('total_passengers', $total_passengers)
			->with('intl', $intl)
			->with('org_city', $org_city)
			->with('dest_city', $dest_city)
			->with('org', $onwardlookrequest->origin)
			->with('dest', $onwardlookrequest->destination)
			->with('onwardlookrequest', $onwardlookrequestdata->ItinearyDetails->Segments[0])
			->with('returnlookrequest', $returnlookrequestdata->ItinearyDetails->Segments[0])
			->with('onwardlookrequestid', $onwardlookrequestid)
			->with('returnlookrequestid', $returnlookrequestid);		
	}

	public function postConfirmDetails(Request $request) {

		$couponcode = $request->input("couponcode");

		foreach ($request->input('firstname') as $fn) {
			if(!preg_match('/^[a-z ]+$/i', $fn)) {
				return Redirect::back()->withErrors(['Given Name cannot have special characters.']);
			}
		}

		foreach ($request->input('lastname') as $ln) {
			if(!preg_match('/^[a-z ]+$/i', $ln)) {
				return Redirect::back()->withErrors(['Surname cannot have special characters.']);
			}
		}

		if($request->input('isdomr')=="DOMR") {

			//for onward request
			$onwardLookRequest=LookRequest::join('searches', 'look_requests.searchid', '=', 'searches.id')->where('look_requests.id', $request->input('onwardlookrequestid'))->get()->first();
			$curl = curl_init();
				curl_setopt_array($curl, array(
				  CURLOPT_URL => setting('airhob.look_api_url'),
				  CURLOPT_RETURNTRANSFER => true,
				  CURLOPT_ENCODING => "",
				  CURLOPT_MAXREDIRS => 10,
				  CURLOPT_TIMEOUT => 180,
				  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
				  CURLOPT_CUSTOMREQUEST => "POST",
				  CURLOPT_POSTFIELDS => $onwardLookRequest->lookrequest,
				  CURLOPT_HTTPHEADER => array(
					"apikey: ".setting('airhob.api_key'),
				    "content-type: application/json",
				    "mode: ".setting('airhob.api_mode')
				  ),
				));

			$response = curl_exec($curl);
			$err = curl_error($curl);

			if($response==false) {
				return $err;
			}

			LookRequest::where('id', $request->input('onwardlookrequestid'))
				->update(['response' => $response, 'executed' => 1]);

			curl_close($curl);

			$responseJson = json_decode($response);

			if($responseJson->Status == 0) {
				return view("pages.bookingFailed");
			}

			$price1 = $responseJson->PricingInfo[0]->GrossAmount;

			$onwardSellRequestId = LookRequest::select([DB::raw('response->>"$.SellRequestId" as SellRequestId')])->where('id', $request->input('onwardlookrequestid'))->get()->first()->SellRequestId;

			$from_country = Airport::where('iata', $onwardLookRequest->origin)->first()->country;
			$to_country = Airport::where('iata', $onwardLookRequest->destination)->first()->country;
			$intl="DOM";

			$onwardlookrequestdata = json_decode($onwardLookRequest->lookrequest);

			$priceApiJson = '{"sellRequestId":"'.$onwardSellRequestId.'","customer":{"PhoneNumber":"'.$request->input('contact_phone').'","CountryCode":"91","Email":"'.$request->input('contact_email').'","CustomerDetails":[';
			for($i=0; $i<count($request->input('firstname')); $i++) {
				$passenger_type = "ADT";
				if ($request->input('passenger_type')[$i] == "Child") {
					$passenger_type = "CHD";
				} else if ($request->input('passenger_type')[$i] == "infant") {
					$passenger_type = "INF";
				}

				$dob_array = explode("/", $request->input('dob')[$i]);
				$passport_expiry_array = explode("/", $request->input('passport_expiry')[$i]);

				if($intl=="INTL") {
					$priceApiJson .= '{"PassengerType":"'. $passenger_type .'","Title":"'. $request->input('title')[$i] .'","FirstName":"'. $request->input('firstname')[$i] .'","LastName":"'. $request->input('lastname')[$i] .'","NationalityCountry":"'. $request->input('countrycode')[$i] .'","DOB":{"Day":"'. $dob_array[1] .'","Month":"'. $dob_array[0] .'","Year":"'. $dob_array[2] .'"},"PassportExpiryDay":"'. $passport_expiry_array[1] .'","PassportExpiryMonth":"'. $passport_expiry_array[0] .'","PassportExpiryYear":"'. $passport_expiry_array[2] .'","PassportNumber":"'. $request->input('passport_number')[$i] .'","IssueCountry":"'. $request->input('countrycode')[$i] .'"},';
				} else {
					$priceApiJson .= '{"PassengerType":"'. $passenger_type .'","Title":"'. $request->input('title')[$i] .'","FirstName":"'. $request->input('firstname')[$i] .'","LastName":"'. $request->input('lastname')[$i] .'","DOB":{"Day":"'. $dob_array[1] .'","Month":"'. $dob_array[0] .'","Year":"'. $dob_array[2] .'"}},';
				}
			}
			$priceApiJson = substr($priceApiJson, 0, -1);
			$priceApiJson .= ']}}';


			//delete old entry
			BookingDetail::where('domrcode', $request->input('onwardlookrequestid')."-".$request->input('returnlookrequestid'))->delete();


			$bookingDetailDb = new BookingDetail;
			$bookingDetailDb->name = $request->input('contact_name');
			$bookingDetailDb->phone = $request->input('contact_phone');
			$bookingDetailDb->email = $request->input('contact_email');
			$bookingDetailDb->lookrequestid = $request->input('onwardlookrequestid');
			$bookingDetailDb->sellrequestid = $onwardSellRequestId;
			$bookingDetailDb->pricerequest = $priceApiJson;
			$bookingDetailDb->domrcode = $request->input('onwardlookrequestid')."-".$request->input('returnlookrequestid');
			$bookingDetailDb->org = $onwardLookRequest->destination;
			$bookingDetailDb->dest = $onwardLookRequest->origin;
			$bookingDetailDb->tripdirection = 'R';
			$bookingDetailDb->save();




			// for return request
			$returnLookRequest=LookRequest::join('searches', 'look_requests.searchid', '=', 'searches.id')->where('look_requests.id', $request->input('returnlookrequestid'))->get()->first();

			$curl = curl_init();
				curl_setopt_array($curl, array(
				  CURLOPT_URL => setting('airhob.look_api_url'),
				  CURLOPT_RETURNTRANSFER => true,
				  CURLOPT_ENCODING => "",
				  CURLOPT_MAXREDIRS => 10,
				  CURLOPT_TIMEOUT => 180,
				  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
				  CURLOPT_CUSTOMREQUEST => "POST",
				  CURLOPT_POSTFIELDS => $returnLookRequest->lookrequest,
				  CURLOPT_HTTPHEADER => array(
					"apikey: ".setting('airhob.api_key'),
				    "content-type: application/json",
				    "mode: ".setting('airhob.api_mode')
				  ),
				));

			$response = curl_exec($curl);
			$err = curl_error($curl);

			if($response==false) {
				return $err;
			}

			LookRequest::where('id', $request->input('returnlookrequestid'))
				->update(['response' => $response, 'executed' => 1]);

			curl_close($curl);

			$responseJson = json_decode($response);

			if($responseJson->Status == 0) {
				return view("pages.bookingFailed");
			}

			$price2 = $responseJson->PricingInfo[0]->GrossAmount;

			$returnSellRequestId = LookRequest::select([DB::raw('response->>"$.SellRequestId" as SellRequestId')])->where('id', $request->input('returnlookrequestid'))->get()->first()->SellRequestId;

			$from_country = Airport::where('iata', $returnLookRequest->origin)->first()->country;
			$to_country = Airport::where('iata', $returnLookRequest->destination)->first()->country;
			$intl="DOM";

			$returnlookrequestdata = json_decode($returnLookRequest->lookrequest);

			$priceApiJson = '{"sellRequestId":"'.$returnSellRequestId.'","customer":{"PhoneNumber":"'.$request->input('contact_phone').'","CountryCode":"91","Email":"'.$request->input('contact_email').'","CustomerDetails":[';
			for($i=0; $i<count($request->input('firstname')); $i++) {
				$passenger_type = "ADT";
				if ($request->input('passenger_type')[$i] == "Child") {
					$passenger_type = "CHD";
				} else if ($request->input('passenger_type')[$i] == "infant") {
					$passenger_type = "INF";
				}

				$dob_array = explode("/", $request->input('dob')[$i]);
				$passport_expiry_array = explode("/", $request->input('passport_expiry')[$i]);

				if($intl=="INTL") {
					$priceApiJson .= '{"PassengerType":"'. $passenger_type .'","Title":"'. $request->input('title')[$i] .'","FirstName":"'. $request->input('firstname')[$i] .'","LastName":"'. $request->input('lastname')[$i] .'","NationalityCountry":"'. $request->input('countrycode')[$i] .'","DOB":{"Day":"'. $dob_array[1] .'","Month":"'. $dob_array[0] .'","Year":"'. $dob_array[2] .'"},"PassportExpiryDay":"'. $passport_expiry_array[1] .'","PassportExpiryMonth":"'. $passport_expiry_array[0] .'","PassportExpiryYear":"'. $passport_expiry_array[2] .'","PassportNumber":"'. $request->input('passport_number')[$i] .'","IssueCountry":"'. $request->input('countrycode')[$i] .'"},';
				} else {
					$priceApiJson .= '{"PassengerType":"'. $passenger_type .'","Title":"'. $request->input('title')[$i] .'","FirstName":"'. $request->input('firstname')[$i] .'","LastName":"'. $request->input('lastname')[$i] .'","DOB":{"Day":"'. $dob_array[1] .'","Month":"'. $dob_array[0] .'","Year":"'. $dob_array[2] .'"}},';
				}
			}
			$priceApiJson = substr($priceApiJson, 0, -1);
			$priceApiJson .= ']}}';

			$bookingDetailDb = new BookingDetail;
			$bookingDetailDb->name = $request->input('contact_name');
			$bookingDetailDb->phone = $request->input('contact_phone');
			$bookingDetailDb->email = $request->input('contact_email');
			$bookingDetailDb->lookrequestid = $request->input('returnlookrequestid');
			$bookingDetailDb->sellrequestid = $returnSellRequestId;
			$bookingDetailDb->pricerequest = $priceApiJson;
			$bookingDetailDb->domrcode = $request->input('onwardlookrequestid')."-".$request->input('returnlookrequestid');
			$bookingDetailDb->org = $returnLookRequest->origin;
			$bookingDetailDb->dest = $returnLookRequest->destination;
			$bookingDetailDb->tripdirection = 'O';
			$bookingDetailDb->save();

			$total_passengers = $onwardLookRequest->adults + $onwardLookRequest->childs + $onwardLookRequest->infants;

			$org_city = Airport::where('iata', $onwardLookRequest->origin)->first()->city;
			$dest_city = Airport::where('iata', $onwardLookRequest->destination)->first()->city;

			$finalAmount = $price1 + $price2;

			$offerCode = OfferCode::where("offer_code", $request->input('couponcode'))->first();
	    	if($offerCode) {
	    		if($offerCode->discount_type == "flat") {
	    			$finalAmount -= $offerCode->discount_value;
	    		}
	    		else {
	    			$finalAmount -= ($finalAmount * $offerCode->discount_value)/100;
	    		}
	    	}

			return view('pages.confirmDetailsDomr')
				->with('onwardSellRequestId', $onwardSellRequestId)
				->with('returnSellRequestId', $returnSellRequestId)
				->with('isdomr', 'domr')
				->with('price', $price1 + $price2)
				->with('adults', $onwardLookRequest->adults)
				->with('childs', $onwardLookRequest->childs)
				->with('infants', $onwardLookRequest->infants)
				->with('total_passengers', $total_passengers)
				->with('intl', 'dom')
				->with('org_city', $org_city)
				->with('dest_city', $dest_city)
				->with('org', $onwardLookRequest->origin)
				->with('dest', $onwardLookRequest->destination)
				->with('onwardlookrequest', $onwardlookrequestdata->ItinearyDetails->Segments[0])
				->with('returnlookrequest', $returnlookrequestdata->ItinearyDetails->Segments[0])
				->with('triptype', 'R')
				->with('contact_name', $request->input('contact_name'))
				->with('contact_phone', $request->input('contact_phone'))
				->with('contact_email', $request->input('contact_email'))
				->with('firstname', $request->input('firstname'))
				->with('lastname', $request->input('lastname'))
				->with('dob', $request->input('dob'))
				->with('title', $request->input('title'))
				->with('issuecountry', $request->input('issuecountry'))
				->with('nationality', $request->input('nationality'))
				->with('passport_number', $request->input('passport_number'))
				->with('passport_expiry', $request->input('passport_expiry'))
				->with('couponcode', $request->input('couponcode'))
				->with('finalAmount', $finalAmount);				

		}
		else {
			$lookRequest=LookRequest::join('searches', 'look_requests.searchid', '=', 'searches.id')->where('look_requests.id', $request->input('lookrequestid'))->get()->first();

			$curl = curl_init();
			curl_setopt_array($curl, array(
			  CURLOPT_URL => setting('airhob.look_api_url'),
			  CURLOPT_RETURNTRANSFER => true,
			  CURLOPT_ENCODING => "",
			  CURLOPT_MAXREDIRS => 10,
			  CURLOPT_TIMEOUT => 180,
			  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
			  CURLOPT_CUSTOMREQUEST => "POST",
			  CURLOPT_POSTFIELDS => $lookRequest->lookrequest,
			  CURLOPT_HTTPHEADER => array(
				"apikey: ".setting('airhob.api_key'),
			    "content-type: application/json",
			    "mode: ".setting('airhob.api_mode')
			  ),
			));

			$response = curl_exec($curl);
			$err = curl_error($curl);

			if($response==false) {
				return $err;
			}

			LookRequest::where('id', $request->input('lookrequestid'))
				->update(['response' => $response, 'executed' => 1]);

			curl_close($curl);

			$responseJson = json_decode($response);

			//fare may expire here

			if($responseJson->Status == 0) {
				return view("pages.bookingFailed");
			}

			$price = $responseJson->PricingInfo[0]->GrossAmount;

			$sellRequestId = LookRequest::select([DB::raw('response->>"$.SellRequestId" as SellRequestId')])->where('id', $request->input('lookrequestid'))->get()->first()->SellRequestId;


			$total_passengers = $lookRequest->adults + $lookRequest->childs + $lookRequest->infants;

			$org_city = Airport::where('iata', $lookRequest->origin)->first()->city;
			$dest_city = Airport::where('iata', $lookRequest->destination)->first()->city;

			$from_country = Airport::where('iata', $lookRequest->origin)->first()->country;
			$to_country = Airport::where('iata', $lookRequest->destination)->first()->country;
			$intl="DOM";

			if($from_country!=$to_country) {
				$intl="INTL";
			}

			$lookrequestdata = json_decode($lookRequest->lookrequest);

			$flightDetailCount = count($lookrequestdata->ItinearyDetails->Segments[0]->item);

			$onwardStops = 0;

			$returnStops = 0;

			if ($lookRequest->triptype=="R") {
				for ($i=0; $i<$flightDetailCount; $i++) {
					if ($lookRequest->destination != $lookrequestdata->ItinearyDetails->Segments[0]->item[$i]->Destination) {
						$onwardStops++;
					}
					else {
						break;
					}
				}
				$returnStops = $flightDetailCount - $onwardStops - 2;
			}

			$priceApiJson = '{"sellRequestId":"'.$sellRequestId.'","customer":{"PhoneNumber":"'.$request->input('contact_phone').'","CountryCode":"91","Email":"'.$request->input('contact_email').'","CustomerDetails":[';
			for($i=0; $i<count($request->input('firstname')); $i++) {
				$passenger_type = "ADT";
				if ($request->input('passenger_type')[$i] == "Child") {
					$passenger_type = "CHD";
				} else if ($request->input('passenger_type')[$i] == "infant") {
					$passenger_type = "INF";
				}

				$dob_array = explode("/", $request->input('dob')[$i]);
				$passport_expiry_array = explode("/", $request->input('passport_expiry')[$i]);

				if($intl=="INTL") {
					$priceApiJson .= '{"PassengerType":"'. $passenger_type .'","Title":"'. $request->input('title')[$i] .'","FirstName":"'. $request->input('firstname')[$i] .'","LastName":"'. $request->input('lastname')[$i] .'","NationalityCountry":"'. $request->input('nationality')[$i] .'","DOB":{"Day":"'. $dob_array[1] .'","Month":"'. $dob_array[0] .'","Year":"'. $dob_array[2] .'"},"PassportExpiryDay":"'. $passport_expiry_array[1] .'","PassportExpiryMonth":"'. $passport_expiry_array[0] .'","PassportExpiryYear":"'. $passport_expiry_array[2] .'","PassportNumber":"'. $request->input('passport_number')[$i] .'","IssueCountry":"'. $request->input('issuecountry')[$i] .'"},';
				} else {
					$priceApiJson .= '{"PassengerType":"'. $passenger_type .'","Title":"'. $request->input('title')[$i] .'","FirstName":"'. $request->input('firstname')[$i] .'","LastName":"'. $request->input('lastname')[$i] .'","DOB":{"Day":"'. $dob_array[1] .'","Month":"'. $dob_array[0] .'","Year":"'. $dob_array[2] .'"}},';
				}
			}
			$priceApiJson = substr($priceApiJson, 0, -1);
			$priceApiJson .= ']}}';

			$bookingDetailDb = new BookingDetail;
			$bookingDetailDb->name = $request->input('contact_name');
			$bookingDetailDb->phone = $request->input('contact_phone');
			$bookingDetailDb->email = $request->input('contact_email');
			$bookingDetailDb->lookrequestid = $request->input('lookrequestid');
			$bookingDetailDb->sellrequestid = $sellRequestId;
			$bookingDetailDb->pricerequest = $priceApiJson;
			$bookingDetailDb->org = $lookRequest->origin;
			$bookingDetailDb->dest = $lookRequest->destination;
			$bookingDetailDb->save();

			$finalAmount = $price;

			$offerCode = OfferCode::where("offer_code", $request->input('couponcode'))->first();
	    	if($offerCode) {
	    		if($offerCode->discount_type == "flat") {
	    			$finalAmount -= $offerCode->discount_value;
	    		}
	    		else {
	    			$finalAmount -= ($finalAmount * $offerCode->discount_value)/100;
	    		}
	    	}

			return view('pages.confirmDetails')
				->with('sellRequestId', $sellRequestId)
				->with('isdomr', '-')
				->with('price', $price)
				->with('adults', $lookRequest->adults)
				->with('childs', $lookRequest->childs)
				->with('infants', $lookRequest->infants)
				->with('total_passengers', $total_passengers)
				->with('intl', $intl)
				->with('org_city', $org_city)
				->with('dest_city', $dest_city)
				->with('org', $lookRequest->origin)
				->with('dest', $lookRequest->destination)
				->with('onward_stops', $onwardStops)
				->with('return_stops', $returnStops)
				->with('flight_count', $flightDetailCount)
				->with('lookrequest', $lookrequestdata->ItinearyDetails->Segments[0])
				->with('triptype', $lookRequest->triptype)
				->with('contact_name', $request->input('contact_name'))
				->with('contact_phone', $request->input('contact_phone'))
				->with('contact_email', $request->input('contact_email'))
				->with('firstname', $request->input('firstname'))
				->with('lastname', $request->input('lastname'))
				->with('dob', $request->input('dob'))
				->with('title', $request->input('title'))
				->with('issuecountry', $request->input('issuecountry'))
				->with('nationality', $request->input('nationality'))
				->with('passport_number', $request->input('passport_number'))
				->with('passport_expiry', $request->input('passport_expiry'))
				->with('couponcode', $request->input('couponcode'))
				->with('finalAmount', $finalAmount);
		}

	}
}
