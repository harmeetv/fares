<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\BookingDetail;
use App\Booking;
use App\Search;
use App\Common;
use App\Payment;
use App\OfferCode;
use App\TotalQuery;

class PaymentController extends Controller
{
    public function postMakePayment(Request $request) {

    	$couponcode = $request->input('couponcode');
    	$couponDiscount = 0;

    	//for domestic round trip
    	if($request->input('isdomr')=="domr") {
    		//for onward request
    		$sellRequestId = $request->input('onwardSellRequestId');
	    	$onwardBookingDetail = BookingDetail::join('look_requests', 'booking_details.lookrequestid', '=', 'look_requests.id')->where('sellrequestid', $sellRequestId)->limit(1)->get()->first();
	    	$curl = curl_init();
				curl_setopt_array($curl, array(
				  CURLOPT_URL => setting('airhob.price_api_url'),
				  CURLOPT_RETURNTRANSFER => true,
				  CURLOPT_ENCODING => "",
				  CURLOPT_MAXREDIRS => 10,
				  CURLOPT_TIMEOUT => 180,
				  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
				  CURLOPT_CUSTOMREQUEST => "POST",
				  CURLOPT_POSTFIELDS => $onwardBookingDetail->pricerequest,
				  CURLOPT_HTTPHEADER => array(
					"apikey: ".setting('airhob.api_key'),
				    "content-type: application/json",
				    "mode: ".setting('airhob.api_mode')
				  ),
				));

				$response = curl_exec($curl);
				$err = curl_error($curl);

				curl_close($curl);

				BookingDetail::where('sellrequestid', $sellRequestId)
					->update(['response' => $response]);

				$responseJson = json_decode($response);

				if(!$responseJson->IsTicketSuccess) {
					return view('pages.bookingFailed');
				}

			//for return request
    		$sellRequestId = $request->input('returnSellRequestId');
	    	$returnBookingDetail = BookingDetail::join('look_requests', 'booking_details.lookrequestid', '=', 'look_requests.id')->where('sellrequestid', $sellRequestId)->limit(1)->get()->first();

	    	$curl = curl_init();
				curl_setopt_array($curl, array(
				  CURLOPT_URL => setting('airhob.price_api_url'),
				  CURLOPT_RETURNTRANSFER => true,
				  CURLOPT_ENCODING => "",
				  CURLOPT_MAXREDIRS => 10,
				  CURLOPT_TIMEOUT => 180,
				  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
				  CURLOPT_CUSTOMREQUEST => "POST",
				  CURLOPT_POSTFIELDS => $returnBookingDetail->pricerequest,
				  CURLOPT_HTTPHEADER => array(
					"apikey: ".setting('airhob.api_key'),
				    "content-type: application/json",
				    "mode: ".setting('airhob.api_mode')
				  ),
				));

				$response = curl_exec($curl);
				$err = curl_error($curl);

				curl_close($curl);

				BookingDetail::where('sellrequestid', $sellRequestId)
					->update(['response' => $response]);

				$responseJson = json_decode($response);

				if(!$responseJson->IsTicketSuccess) {
					return view('pages.bookingFailed');
				} 

				//redirect to payment
				$api = new \Instamojo\Instamojo("test_0b948a87e1e5a5b566a12636a71", "test_d7f879d0cd522c011864fcf015d", 'https://test.instamojo.com/api/1.1/');
				$onwardLookrequest = json_decode($onwardBookingDetail->lookrequest);
				$returnLookrequest = json_decode($returnBookingDetail->lookrequest);
				$search = Search::where('id', $onwardBookingDetail->searchid)->limit(1)->get()->first();
				$org = $search->origin;
				$dest = $search->destination;

				$amount = $onwardLookrequest->ItinearyDetails->Segments[0]->Price + $returnLookrequest->ItinearyDetails->Segments[0]->Price;

				if($couponcode!="") {
		    		$offer = OfferCode::where('offer_code', $couponcode)->limit(1)->first();
		    		if($offer) {
		    			if($offer->discount_type == "flat") {
		    				$couponDiscount = $offer->discount_value;
		    			}
		    			else {
		    				$couponDiscount = ($amount * $offer->discount_value)/100;
		    			}
		    		}
		    	}

		    	$amount -= $couponDiscount;

				try {
				    $response = $api->paymentRequestCreate(array(
				    	"buyer_name" => $onwardBookingDetail->name,
				        "purpose" => "Round Trip Flight ". $org ." to ".$dest,
				        "amount" => $amount,
				        "send_email" => false,
				        "email" => $onwardBookingDetail->email,
				        "phone" => $onwardBookingDetail->phone,
				        "redirect_url" => url('/')."/paymentSuccess/domr"
				        ));
				    BookingDetail::where('sellrequestid', $request->input('onwardSellRequestId'))
						->update(['paymentrequestid' => $response['id']]);
					BookingDetail::where('sellrequestid', $request->input('returnSellRequestId'))
						->update(['paymentrequestid' => $response['id']]);
					$payment = new Payment;
					$payment->paymentrequestid = $response['id'];
					$payment->name = $onwardBookingDetail->name;
					$payment->phone = $onwardBookingDetail->phone;
					$payment->email = $onwardBookingDetail->email;
					$payment->couponcode = $couponcode;
					$payment->paymentamount = $amount;
					$payment->save();
				    return redirect($response['longurl']);
				}
				catch (Exception $e) {
				    return 'Error: ' . $e->getMessage();
				}
    	}


    	else {
	    	$sellRequestId = $request->input('sellRequestId');
	    	$bookingDetail = BookingDetail::join('look_requests', 'booking_details.lookrequestid', '=', 'look_requests.id')->where('sellrequestid', $sellRequestId)->limit(1)->get()->first();

	    	$curl = curl_init();
				curl_setopt_array($curl, array(
				  CURLOPT_URL => setting('airhob.price_api_url'),
				  CURLOPT_RETURNTRANSFER => true,
				  CURLOPT_ENCODING => "",
				  CURLOPT_MAXREDIRS => 10,
				  CURLOPT_TIMEOUT => 180,
				  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
				  CURLOPT_CUSTOMREQUEST => "POST",
				  CURLOPT_POSTFIELDS => $bookingDetail->pricerequest,
				  CURLOPT_HTTPHEADER => array(
					"apikey: ".setting('airhob.api_key'),
				    "content-type: application/json",
				    "mode: ".setting('airhob.api_mode')
				  ),
				));

				$response = curl_exec($curl);
				$err = curl_error($curl);

				curl_close($curl);

				BookingDetail::where('sellrequestid', $sellRequestId)
					->update(['response' => $response]);

				$responseJson = json_decode($response);

				if(!$responseJson->IsTicketSuccess) {
					return view('pages.bookingFailed');
				}

				$api = new \Instamojo\Instamojo("test_0b948a87e1e5a5b566a12636a71", "test_d7f879d0cd522c011864fcf015d", 'https://test.instamojo.com/api/1.1/');
				$lookrequest = json_decode($bookingDetail->lookrequest);

				$items = $lookrequest->ItinearyDetails->Segments[0]->item;

				$search = Search::where('id', $bookingDetail->searchid)->limit(1)->get()->first();
				$org = $search->origin;
				$dest = $search->destination;

				$purpose = "Flight from ". $org ." to ".$dest;

				if($items[0]->Origin == $items[count($items)-1]->Destination) {
					$purpose = "Round Trip Flight ". $org ." to ".$dest;
				}

				$amount = $lookrequest->ItinearyDetails->Segments[0]->Price;

				if($couponcode!="") {
		    		$offer = OfferCode::where('offer_code', $couponcode)->limit(1)->first();
		    		if($offer) {
		    			if($offer->discount_type == "flat") {
		    				$couponDiscount = $offer->discount_value;
		    			}
		    			else {
		    				$couponDiscount = ($amount * $offer->discount_value)/100;
		    			}
		    		}
		    	}

		    	$amount -= $couponDiscount;

				try {
				    $response = $api->paymentRequestCreate(array(
				    	"buyer_name" => $bookingDetail->name,
				        "purpose" => $purpose,
				        "amount" => $amount,
				        "send_email" => false,
				        "email" => $bookingDetail->email,
				        "phone" => $bookingDetail->phone,
				        "redirect_url" => url('/')."/paymentSuccess"
				        ));
				    BookingDetail::where('sellrequestid', $sellRequestId)
						->update(['paymentrequestid' => $response['id']]);
					$payment = new Payment;
					$payment->paymentrequestid = $response['id'];
					$payment->name = $bookingDetail->name;
					$payment->phone = $bookingDetail->phone;
					$payment->email = $bookingDetail->email;
					$payment->couponcode = $couponcode;
					$payment->paymentamount = $amount;
					$payment->save();
					return redirect($response['longurl']);
				}
				catch (Exception $e) {
				    return 'Error: ' . $e->getMessage();
				}
		}
	}

	public function getPaymentSuccess(Request $request) {
		$payment_id = $request->query('payment_id');
		$payment_request_id = $request->query('payment_request_id');
		$bookingDetail = BookingDetail::where('paymentrequestid', $payment_request_id)->limit(1)->get()->first();
		$sellRequestId = $bookingDetail->sellrequestid;
		$bookingDetailId = $bookingDetail->id;

		Payment::where('paymentrequestid', $payment_request_id)
				->limit(1)
				->update(['paymentid' => $payment_id]);

		$api = new \Instamojo\Instamojo("test_0b948a87e1e5a5b566a12636a71", "test_d7f879d0cd522c011864fcf015d", 'https://test.instamojo.com/api/1.1/');

		try {
		    $response = $api->paymentRequestStatus($payment_request_id);
		    if ($response["payments"][0]["payment_id"]==$payment_id) {
		    	if($bookingDetail->ismailsent==0) {
			    	//issue ticket
			    	$curl = curl_init();
					curl_setopt_array($curl, array(
					  CURLOPT_URL => setting('airhob.issue_api_url'),
					  CURLOPT_RETURNTRANSFER => true,
					  CURLOPT_ENCODING => "",
					  CURLOPT_MAXREDIRS => 10,
					  CURLOPT_TIMEOUT => 180,
					  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
					  CURLOPT_CUSTOMREQUEST => "POST",
					  CURLOPT_POSTFIELDS => '{"sellRequestId":"'.$sellRequestId.'"}',
					  CURLOPT_HTTPHEADER => array(
						"apikey: ".setting('airhob.api_key'),
					    "content-type: application/json",
					    "mode: ".setting('airhob.api_mode')
					  ),
					));

					$response = curl_exec($curl);
					$err = curl_error($curl);

					curl_close($curl);

					$responseJson = json_decode($response);

					if($responseJson->ProductErrors->ErrorCode != NULL) {
						return view('pages.paymentFailed');
					}

					$newBooking = new Booking;
					$newBooking->booking_detail_id = $bookingDetailId;
					$newBooking->booking_response = $response;
					$newBooking->is_success = 1;
					$newBooking->save();

					//get trip details
					$curl = curl_init();
					curl_setopt_array($curl, array(
					  CURLOPT_URL => setting('airhob.itinerary_url'),
					  CURLOPT_RETURNTRANSFER => true,
					  CURLOPT_ENCODING => "",
					  CURLOPT_MAXREDIRS => 10,
					  CURLOPT_TIMEOUT => 180,
					  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
					  CURLOPT_CUSTOMREQUEST => "POST",
					  CURLOPT_POSTFIELDS => '{"TripId":"'.$responseJson->TripId.'"}',
					  CURLOPT_HTTPHEADER => array(
						"apikey: ".setting('airhob.api_key'),
					    "content-type: application/json",
					    "mode: ".setting('airhob.api_mode')
					  ),
					));

					$response = curl_exec($curl);
					$err = curl_error($curl);

					curl_close($curl);

					$responseJson = json_decode($response);

			    	BookingDetail::where('paymentrequestid', $payment_request_id)
						->update(['paymentid' => $payment_id, "tripdetail" => $response]);

					//increase booking count
					$booking_count = TotalQuery::where('id', '1')->first()->booking_count;
    				TotalQuery::where('id', '1')->update(["booking_count" => $booking_count + 1]);

					$bookingDetail = BookingDetail::where('paymentid', $payment_id)->get()->first();

					$link = url('/printTicket/'.$bookingDetail->paymentid.'/'.$bookingDetail->paymentrequestid.'/O');
					//$sms = "Dear ".$bookingDetail->name.", thanks for booking your flight with us. Your PNR no is ".$responseJson->Airline[0]->AirlinePnr." on ".(new \DateTime($responseJson->Item[0]->DepartureTime))->format("d M")." from ".$bookingDetail->org." to ".$bookingDetail->dest." at ".(new \DateTime($responseJson->Item[0]->DepartureTime))->format("h:i A").". Your ticket here: ".$link." can be found. For any help contact our helpline no. ".PortalDetail::where('property', 'phone')->first()->propvalue." or email us at ".PortalDetail::where('property', 'email')->first()->propvalue.". Please reach airport 2-2.30 hours before the departure time.";

					$items = $responseJson->Item;
					if($items[0] == $items[count($items)-1]) {
						//$sms = "Dear ".$bookingDetail->name.", thanks for booking your flight with us. Your PNR no is ".$responseJson->Airline[0]->AirlinePnr.". Your ticket here: ".$link." can be found. For any help contact our helpline no. ".PortalDetail::where('property', 'phone')->first()->propvalue." or email us at ".PortalDetail::where('property', 'email')->first()->propvalue.". Please reach airport 2-2.30 hours before the departure time.";
					}

					$this->mailTicket($payment_id, $payment_request_id, 'O');
					BookingDetail::where('paymentid', $payment_id)->update(['ismailsent' => 1]);
					//Common::sendSms($bookingDetail->phone, $sms);
				
				}

				$tripDetail = json_decode($bookingDetail->tripdetail);
				$items = $tripDetail->Item;
				$itemLength = count($items);
				$triptype = "O";
				$onwardOrg = $bookingDetail->org;
				//return $bookingDetail;
				$onwardDest = $bookingDetail->dest;
				if($items[0]->Origin == $items[$itemLength - 1]->Destination) {
					$triptype = "R";
				}

				return view('pages.paymentSuccess')
					->with('name', $bookingDetail->name)
					->with('email', $bookingDetail->email)
					->with('payment_id', $payment_id)
					->with('payment_request_id', $payment_request_id)
					->with('domr', '')
					->with('id', $bookingDetail->id)
			        ->with('triptype', $triptype)
			        ->with('items', $items)
			        ->with('onwardOrg', $onwardOrg)
			        ->with('onwardDest', $onwardDest)
			        ->with('basefare', $tripDetail->BaseFare)
			        ->with('totaltax', $tripDetail->TotalTax)
			        ->with('totalfare', $tripDetail->TotalFare)
			        ->with('pnr', $tripDetail->Airline[0]->AirlinePnr)
			        ->with('passengers', $tripDetail->Passenger);
		    }
		    else {
		    	return view('pages.paymentFailed');
		    }
		}
		catch (Exception $e) {
		    return 'Error: ' . $e->getMessage();
		}
	}

	public function getPaymentSuccessDomr(Request $request) {
		$payment_id = $request->query('payment_id');
		$payment_request_id = $request->query('payment_request_id');
		$bookingDetail = BookingDetail::where('paymentrequestid', $payment_request_id)->limit(2)->get();

		$onwardBookingDetail = $bookingDetail[0];
		$returnBookingDetail = $bookingDetail[1];

		Payment::where('paymentrequestid', $payment_request_id)
				->limit(1)
				->update(['paymentid' => $payment_id]);


		//onward request
		$sellRequestId = $onwardBookingDetail->sellrequestid;
		$bookingDetailId = $onwardBookingDetail->id;

		$response1='';
		$response2='';
		$response3='';
		$response4='';

		$api = new \Instamojo\Instamojo("test_0b948a87e1e5a5b566a12636a71", "test_d7f879d0cd522c011864fcf015d", 'https://test.instamojo.com/api/1.1/');

		try {
		    $response = $api->paymentRequestStatus($payment_request_id);
		    if ($response["payments"][0]["payment_id"]==$payment_id) {
		    	if ($onwardBookingDetail->ismailsent==0) {
			    	//issue ticket
			    	$curl = curl_init();
					curl_setopt_array($curl, array(
					  CURLOPT_URL => setting('airhob.issue_api_url'),
					  CURLOPT_RETURNTRANSFER => true,
					  CURLOPT_ENCODING => "",
					  CURLOPT_MAXREDIRS => 10,
					  CURLOPT_TIMEOUT => 180,
					  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
					  CURLOPT_CUSTOMREQUEST => "POST",
					  CURLOPT_POSTFIELDS => '{"sellRequestId":"'.$sellRequestId.'"}',
					  CURLOPT_HTTPHEADER => array(
						"apikey: ".setting('airhob.api_key'),
					    "content-type: application/json",
					    "mode: ".setting('airhob.api_mode')
					  ),
					));

					$response = curl_exec($curl);
					$err = curl_error($curl);

					curl_close($curl);

					$responseJson = json_decode($response);
					$response1 = $response;

					if($responseJson->ProductErrors->ErrorCode != NULL) {
						return view('pages.paymentFailed');
					}

					$newBooking = new Booking;
					$newBooking->booking_detail_id = $bookingDetailId;
					$newBooking->booking_response = $response;
					$newBooking->is_success = 1;
					$newBooking->save();

					//get trip details
					$curl = curl_init();
					curl_setopt_array($curl, array(
					  CURLOPT_URL => setting('airhob.itinerary_url'),
					  CURLOPT_RETURNTRANSFER => true,
					  CURLOPT_ENCODING => "",
					  CURLOPT_MAXREDIRS => 10,
					  CURLOPT_TIMEOUT => 180,
					  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
					  CURLOPT_CUSTOMREQUEST => "POST",
					  CURLOPT_POSTFIELDS => '{"TripId":"'.$responseJson->TripId.'"}',
					  CURLOPT_HTTPHEADER => array(
						"apikey: ".setting('airhob.api_key'),
					    "content-type: application/json",
					    "mode: ".setting('airhob.api_mode')
					  ),
					));

					$response = curl_exec($curl);
					$err = curl_error($curl);

					curl_close($curl);

					$responseJson = json_decode($response);
					$response2 = $response;

			    	BookingDetail::where('paymentrequestid', $payment_request_id)
						->update(['paymentid' => $payment_id, "tripdetail" => $response]);

					//booking count
					$booking_count = TotalQuery::where('id', '1')->first()->booking_count;
    				TotalQuery::where('id', '1')->update(["booking_count" => $booking_count + 1]);

					$bookingDetail = BookingDetail::where(['paymentid' => $payment_id, 'tripdirection' => 'O'])->get()->first();

					$link = url('/printTicket/'.$bookingDetail->paymentid.'/'.$bookingDetail->paymentrequestid.'/O');
					//$sms = "Dear ".$bookingDetail->name.", thanks for booking your flight with us. Your PNR no is ".$responseJson->Airline[0]->AirlinePnr." on ".(new \DateTime($responseJson->Item[0]->DepartureTime))->format("d M")." from ".$bookingDetail->org." to ".$bookingDetail->dest." at ".(new \DateTime($responseJson->Item[0]->DepartureTime))->format("h:i A").". Your ticket here: ".$link." can be found. For any help contact our helpline no. ".PortalDetail::where('property', 'phone')->first()->propvalue." or email us at ".PortalDetail::where('property', 'email')->first()->propvalue.". Please reach airport 2-2.30 hours before the departure time.";

					//$this->mailTicket($payment_id, $payment_request_id, 'O');
					BookingDetail::where('paymentid', $payment_id)->update(['ismailsent' => 1]);
					Common::sendSms($bookingDetail->phone, $sms);


				}
		    }
		    else {
		    	return view('pages.paymentFailed');
		    }
		}
		catch (Exception $e) {
		    return 'Error: ' . $e->getMessage();
		}


		//return request
		$sellRequestId = $returnBookingDetail->sellrequestid;
		$bookingDetailId = $returnBookingDetail->id;

		$api = new \Instamojo\Instamojo("test_0b948a87e1e5a5b566a12636a71", "test_d7f879d0cd522c011864fcf015d", 'https://test.instamojo.com/api/1.1/');

		try {
		    $response = $api->paymentRequestStatus($payment_request_id);
		    if ($response["payments"][0]["payment_id"]==$payment_id) {
		    	if ($returnBookingDetail->ismailsent==0) {
			    	//issue ticket
			    	$curl = curl_init();
					curl_setopt_array($curl, array(
					  CURLOPT_URL => setting('airhob.issue_api_url'),
					  CURLOPT_RETURNTRANSFER => true,
					  CURLOPT_ENCODING => "",
					  CURLOPT_MAXREDIRS => 10,
					  CURLOPT_TIMEOUT => 180,
					  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
					  CURLOPT_CUSTOMREQUEST => "POST",
					  CURLOPT_POSTFIELDS => '{"sellRequestId":"'.$sellRequestId.'"}',
					  CURLOPT_HTTPHEADER => array(
						"apikey: ".setting('airhob.api_key'),
					    "content-type: application/json",
					    "mode: ".setting('airhob.api_mode')
					  ),
					));

					$response = curl_exec($curl);
					$err = curl_error($curl);

					curl_close($curl);

					$responseJson = json_decode($response);
					$response3 = $response;

					if($responseJson->ProductErrors->ErrorCode != NULL) {
						return view('pages.paymentFailed');
					}

					$newBooking = new Booking;
					$newBooking->booking_detail_id = $bookingDetailId;
					$newBooking->booking_response = $response;
					$newBooking->is_success = 1;
					$newBooking->save();

					//get trip details
					$curl = curl_init();
					curl_setopt_array($curl, array(
					  CURLOPT_URL => setting('airhob.itinerary_url'),
					  CURLOPT_RETURNTRANSFER => true,
					  CURLOPT_ENCODING => "",
					  CURLOPT_MAXREDIRS => 10,
					  CURLOPT_TIMEOUT => 180,
					  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
					  CURLOPT_CUSTOMREQUEST => "POST",
					  CURLOPT_POSTFIELDS => '{"TripId":"'.$responseJson->TripId.'"}',
					  CURLOPT_HTTPHEADER => array(
						"apikey: ".setting('airhob.api_key'),
					    "content-type: application/json",
					    "mode: ".setting('airhob.api_mode')
					  ),
					));

					$response = curl_exec($curl);
					$err = curl_error($curl);

					curl_close($curl);

					$responseJson = json_decode($response);
					$response4 = $response;

			    	BookingDetail::where('paymentrequestid', $payment_request_id)->offset(1)->limit(1)
						->update(['paymentid' => $payment_id, "tripdetail" => $response]);

					//booking count
					$booking_count = TotalQuery::where('id', '1')->first()->booking_count;
    				TotalQuery::where('id', '1')->update(["booking_count" => $booking_count + 1]);

					$bookingDetail = BookingDetail::where(['paymentid' => $payment_id, 'tripdirection' => 'R'])->limit(1)->get()->first();

					$link = url('/printTicket/'.$bookingDetail->paymentid.'/'.$bookingDetail->paymentrequestid.'/R');
					//$sms = "Dear ".$bookingDetail->name.", thanks for booking your flight with us. Your PNR no is ".$responseJson->Airline[0]->AirlinePnr." on ".(new \DateTime($responseJson->Item[0]->DepartureTime))->format("d M")." from ".$bookingDetail->org." to ".$bookingDetail->dest." at ".(new \DateTime($responseJson->Item[0]->DepartureTime))->format("h:i A").". Your ticket here: ".$link." can be found. For any help contact our helpline no. ".PortalDetail::where('property', 'phone')->first()->propvalue." or email us at ".PortalDetail::where('property', 'email')->first()->propvalue.". Please reach airport 2-2.30 hours before the departure time.";

					//$this->mailTicket($payment_id, $payment_request_id, 'R');
					BookingDetail::where('paymentid', $payment_id)->update(['ismailsent' => 1]);
					Common::sendSms($bookingDetail->phone, $sms);

				}

				$tripDetail = json_decode($returnBookingDetail->tripdetail);
				$items = $tripDetail->Item;
				$triptype = "O";
				$onwardOrg = $returnBookingDetail->org;
				//return $bookingDetail;
				$onwardDest = $returnBookingDetail->dest;

				$returnTripDetail = json_decode($onwardBookingDetail->tripdetail);
				$returnItems = $returnTripDetail->Item;

//				return $response1."\n\n".$response2."\n\n".$response3."\n\n".$response4;

				return view('pages.paymentSuccess')
					->with('name', $onwardBookingDetail->name)
					->with('email', $onwardBookingDetail->email)
					->with('payment_id', $payment_id)
					->with('payment_request_id', $payment_request_id)
					->with('domr', 'domr')
					->with('id', $onwardBookingDetail->id)
			        ->with('triptype', $triptype)
			        ->with('items', $items)
			        ->with('onwardOrg', $onwardOrg)
			        ->with('onwardDest', $onwardDest)
			        ->with('basefare', $tripDetail->BaseFare)
			        ->with('totaltax', $tripDetail->TotalTax)
			        ->with('totalfare', $tripDetail->TotalFare)
			        ->with('pnr', $tripDetail->Airline[0]->AirlinePnr)
			        ->with('passengers', $tripDetail->Passenger)
			        ->with('returnPnr', $returnTripDetail->Airline[0]->AirlinePnr)
	        		->with('returnItems', $returnItems);
		    }
		    else {
		    	return view('pages.paymentFailed');
		    }
		}
		catch (Exception $e) {
		    return 'Error: ' . $e->getMessage();
		}

	}

	public function mailTicket($payment_id, $payment_request_id, $tripdir) {
    	$bookingDetail = BookingDetail::where([
		    ['paymentid', $payment_id],
		    ['paymentrequestid', $payment_request_id],
		    ['tripdirection', $tripdir]
		])->get()->first();
		if ($bookingDetail->tripdetail==NULL) {
			return "No Ticket Found";
		}
		$tripDetail = json_decode($bookingDetail->tripdetail);
		$items = $tripDetail->Item;
		$itemLength = count($items);
		$triptype = "O";
		$onwardOrg = $bookingDetail->org;
		//return $bookingDetail;
		$onwardDest = $bookingDetail->dest;
		if($items[0]->Origin == $items[$itemLength - 1]->Destination) {
			$triptype = "R";
		}
        $data = [
	        'payment_id' => $bookingDetail->paymentid,
	        'payment_request_id' => $bookingDetail->paymentrequestid,
	        'name' => $bookingDetail->name,
	        'email' => $bookingDetail->email,
	        'id' => $bookingDetail->id,
	        'triptype' => $triptype,
	        'items' => $items,
	        'onwardOrg' => $onwardOrg,
	        'onwardDest' => $onwardDest,
	        'basefare' => $tripDetail->BaseFare,
	        'totaltax' => $tripDetail->TotalTax,
	        'totalfare' => $tripDetail->TotalFare,
	        'pnr' => $tripDetail->Airline[0]->AirlinePnr,
	        'passengers' => $tripDetail->Passenger,
	        'domr' => ''
	    ];
        
        //Mail::to($bookingDetail->email)->send(new MailTicket($data));
        //Common::sendTicketMail($bookingDetail->email, $data);
    }


	public function mailTicketDomr($payment_id, $payment_request_id) {
    	$bookingDetail = BookingDetail::where([
		    ['paymentid', $payment_id],
		    ['paymentrequestid', $payment_request_id],
		])->orderBy('id','desc')->limit(2)->get();
		// if ($bookingDetail->tripdetail==NULL) {
		// 	return "No Ticket Found";
		// }
		$tripDetail = json_decode($bookingDetail[0]->tripdetail);
		$items = $tripDetail->Item;
		$triptype = "O";
		$onwardOrg = $bookingDetail[0]->org;
		//return $bookingDetail;
		$onwardDest = $bookingDetail[0]->dest;


		$returnTripDetail = json_decode($bookingDetail[1]->tripdetail);
		$returnItems = $returnTripDetail->Item;

        $data = [
	        'payment_id' => $bookingDetail[0]->paymentid,
	        'payment_request_id' => $bookingDetail[0]->paymentrequestid,
	        'name' => $bookingDetail[0]->name,
	        'email' => $bookingDetail[0]->email,
	        'id' => $bookingDetail[0]->id,
	        'triptype' => $triptype,
	        'items' => $items,
	        'onwardOrg' => $onwardOrg,
	        'onwardDest' => $onwardDest,
	        'basefare' => $tripDetail->BaseFare + $returnTripDetail->BaseFare,
	        'totaltax' => $tripDetail->TotalTax + $returnTripDetail->TotalTax,
	        'totalfare' => $tripDetail->TotalFare + $returnTripDetail->TotalFare,
	        'pnr' => $tripDetail->Airline[0]->AirlinePnr,
	        'passengers' => $tripDetail->Passenger,
	        'domr' => 'domr',
	        'returnPnr' => $returnTripDetail->Airline[0]->AirlinePnr,
	        'returnItems' => $returnItems
	    ];
        
        //Mail::to($bookingDetail[0]->email)->send(new MailTicket($data));
        //Common::sendTicketMail($bookingDetail->email, $data);
    }

}
