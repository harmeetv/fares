<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use PDF;
use App\BookingDetail;
use App\Common;

class TicketController extends Controller {
    public function printTicket($payment_id, $payment_request_id, $tripdir) {
    	$bookingDetail = BookingDetail::where([
		    ['paymentid', $payment_id],
		    ['paymentrequestid', $payment_request_id],
		    ['tripdirection', $tripdir]
		])->limit(1)->get()->first();

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

        $pdf = PDF::loadView('pages.ticketPdf', $data);
        return $pdf->stream();
    }

    public function printTicketUsingId($id) {
    	$bookingDetail = BookingDetail::where('id', $id)->limit(1)->get()->first();

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

        $pdf = PDF::loadView('pages.ticketPdf', $data);
        return $pdf->stream();
    }

    public function printTicketDomr($payment_id, $payment_request_id) {
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
        $pdf = PDF::loadView('pages.ticketPdf', $data);
        return $pdf->stream();
    }

    public function cancelTicketAdmin($id) {
    	BookingDetail::where('id', $id)->update(['cancelrequest' => 2]);
    	$bookingDetail = BookingDetail::where('id', $id)->limit(1)->first();
    	$tripdetail = json_decode($bookingDetail->tripdetail);
    	//mail cancellation code
    	Common::sendSms($bookingDetail->phone, "Your ticket from ".$bookingDetail->org." to ".$bookingDetail->dest." with PNR ".$tripdetail->Airline[0]->AirlinePnr." has been cancelled. You will recieve your refunds within 48 hours.");
    	return response('{"cancelled":1}', 200)
                  ->header('Content-Type', 'application/json');
    }
}
