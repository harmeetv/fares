<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\SeoTemplate;
use App\FareTrend;
use App\Airport;
use App\Airline;
use App\Common;
use DB;
use Response;

class SeoController extends Controller
{
    public function getSeoFlights($slug, Request $request) {
		
		$seoTemplates = SeoTemplate::where("slug", $slug)->limit(1)->get();
		$atf = "";
		$btf = "";
		$templatetype = "";
		$intl = "DOM";
		
		if(count($seoTemplates) == 1) {
			$seoTemplate = $seoTemplates[0];
			$atf = "";
			$btf = "";
			
			$templatetype = $seoTemplate->type;
			//$intl = "DOM";
		}

		else {
			$atf = "";
			$btf = "";

			$slug_parts = explode("-", $slug);

			$templatetype = "";

			if($slug_parts[2] == "flights") {
				$templatetype = "route";
			}
			else if($slug_parts[1] == "flight" && $slug_parts[2] == "booking") {
				$templatetype = "airline";
			}
			else if($slug_parts[0] == "flights" && $slug_parts[1] == "to") {
				$templatetype = "city";
			}

			//$intl = "DOM";
		}

    	if ($templatetype == "route") {
			$from_city = "";
			$to_city = "";
			if(count($seoTemplates) == 1) {
				$from = $seoTemplates[0]->iata1;
				$to = $seoTemplates[0]->iata2;
				$from_city = Airport::where("iata", $from)->first()->city;
				$to_city = Airport::where("iata", $to)->first()->city;
			}
			else {
				$from_city = str_replace("_", " ", $slug_parts[0]);
				$to_city = str_replace("_", " ", $slug_parts[1]);
			}
    		$from = Airport::where("city", $from_city)->first()->iata;
    		$to = Airport::where("city", $to_city)->first()->iata;
    		$from_city_label = Airport::where("city", $from_city)->first()->city;
    		$to_city_label = Airport::where("city", $to_city)->first()->city;

    		$breadcrumbs = array("Home", "Routes", "$from_city_label to $to_city_label Flights");

    		$dep_date = $request->query('depart_date', date("Y-m-d", strtotime('+2 hours')));
    		$fareTrend = FareTrend::where([['org', '=', $from], ['dest', '=', $to], ['date', '=', $dep_date]])
    			->orderBy("id", "DESC")
    			->first();

    		$fareTrend2 = FareTrend::where([['org', '=', $from], ['dest', '=', $to], ['date', '=', date("Y-m-d", strtotime('+2 days'))]])
    			->orderBy("id", "DESC")
    			->first();

    		$fare_trends = DB::table('fare_trends')
				->select(DB::raw('distinct date, MIN(min_fare) minfare'))
				->where([['org', '=', $from], ['dest', '=', $to], ['date', ">=", $dep_date]])
				->groupBy('id')
				->get();

			$faredata = array();
			foreach ($fare_trends as $fare_trend) {
				$depart_date = $fare_trend->date;
				$faredata[$depart_date] = $fare_trend->minfare;
			}

			if(isset($faredata[date("Y-m-d")])) {
				$title_minfare = Common::rupeeFormat($faredata[date("Y-m-d")]);
				if(count($seoTemplates) == 1) {
					$title = str_replace("|minfare|", $title_minfare, $seoTemplates[0]->meta_title);
				}
				else {
					$title = $title = "$from_city_label to $to_city_label Flights Starting @ ₹".$title_minfare;
				}
				$days30cheap = min($faredata);
				$days30cheapindex = array_keys($faredata, $days30cheap);
			}
			else {
				$title = "$from_city_label to $to_city_label Flights";
				$days30cheap = 0;
				$days30cheapindex = -1;
			}

			$keywords = "";
			$description = "";
			if(count($seoTemplates) == 1) {
				$keywords = $seoTemplates[0]->meta_description;
				$description = $seoTemplates[0]->meta_keywords;
			}
			else {
				$keywords = "$from_city_label to $to_city_label Flights, $from_city_label to $to_city_label Flight booking, $from_city_label to $to_city_label Flight tickets";
				$description = "$from_city_label to $to_city_label Flights: Book your flight today.";
			}

			$data = new \stdClass();

			$response_data = array();

    		if(!$fareTrend) {
    			$data->flight_data = $response_data;
    			$jsonData = json_encode($data);

    			return view("pages.seoFlights")
    			->with("data", $jsonData)
    			->with("rawdata", $data)
    			->with("title", $title)
    			->with("btf", $btf)
    			->with("atf", $atf)
    			->with("keywords", $keywords)
    			->with("description", $description)
    			->with("templatetype", $templatetype)
    			->with("faretrend", $faredata)
    			->with("from", $from)
    			->with("to", $to)
    			->with("from_city_label", $from_city_label)
    			->with("to_city_label", $to_city_label)
    			->with("breadcrumbs", $breadcrumbs)
    			->with("days30cheap", $days30cheap)
    			->with("days30cheapindex", $days30cheapindex);
    		}

    		$flight_data = json_decode($fareTrend->search_response);

    		if($flight_data->ProductErrors->ErrorCode == "E_F_17") {
				return "Something went wrong";
			}

			foreach ($flight_data->OneWayAvailabilityResponse->ItinearyDetails[0]->Items as $item) {
				$response_obj = new \stdClass();
				$response_obj->stops = $item->Connection->Onward->NoOfStops;
				$response_obj->duration = $item->ElapsedTime;
				$response_obj->class = $item->FlightDetails[0]->MajorClassCode;
				$response_obj->fare = $item->FareDescription->PaxFareDetails[0]->OtherInfo->GrossAmount;
				$response_obj->basefare = $item->FareDescription->PaxFareDetails[0]->BasicAmount;
				$response_obj->depart_datetime = $item->FlightDetails[0]->DepartureDateTime;
				$response_obj->arrival_datetime = $item->FlightDetails[$item->Connection->Onward->NoOfStops]->ArrivalDateTime;
				$response_obj->airline = $item->FlightDetails[0]->AirlineName;
				$response_obj->carrier_code = $item->FlightDetails[0]->CarrierCode;
				$response_obj->org = $item->FlightDetails[0]->Origin;
				$response_obj->dest = $item->FlightDetails[$item->Connection->Onward->NoOfStops]->Destination;
				$response_obj->org_airport = $item->FlightDetails[0]->OriginAirportName;
				$response_obj->dest_airport = $item->FlightDetails[$item->Connection->Onward->NoOfStops]->DestinationAirportName;
				$response_obj->flight_details = $item->FlightDetails;
				$response_obj->validating_carrier = $item->ValidatingCarrier;
				$response_obj->api_provider = $item->ApiProvider;
				$response_obj->baggage = $item->FlightDetails[0]->Baggage;
				$response_obj->is_non_refundable = $item->FareDescription->IsNonRefundable;
				if($item->ValidatingCarrier == "6E" || $item->ValidatingCarrier == "SG" && $intl == "DOM") {
					$response_obj->cancelFee = "₹ 3000";
					$response_obj->dateChangeFee = "₹ 2250";
				}
				else if ($item->ValidatingCarrier == "G8" && $intl == "DOM") {
					$response_obj->cancelFee = "₹ 2950";
					$response_obj->dateChangeFee = "₹ 2225";
				}
				else if ($item->ValidatingCarrier == "UK" && $intl == "DOM") {
					$response_obj->cancelFee = "₹ 3500";
					$response_obj->dateChangeFee = "₹ 3500";
				}
				else if ($item->ValidatingCarrier == "AI" && $intl == "DOM") {
					$response_obj->cancelFee = "₹ 2500";
					$response_obj->dateChangeFee = "₹ 2500";
				}
				else {
					$response_obj->cancelFee = "As Per Airline Policy";
					$response_obj->dateChangeFee = "As Per Airline Policy";
				}
				array_push($response_data, $response_obj);
			}
			
			$data->flight_data = $response_data;
			$data->trackId = $flight_data->OneWayAvailabilityResponse->TrackId;
			$data->intl = $intl;
			$data->airlines = $flight_data->SearchFilter->Airlines;
			$data->min_stops = $flight_data->SearchFilter->MinStops;
			$data->max_stops = $flight_data->SearchFilter->MaxStops;
			$data->min_price = $flight_data->SearchFilter->Price->Min;
			$data->max_price = $flight_data->SearchFilter->Price->Max;

			$jsonData = json_encode($data);

			//return var_dump($data->flight_data);

    		return view("pages.seoFlights")
    			->with("data", $jsonData)
    			->with("rawdata", $data)
    			->with("title", $title)
    			->with("btf", $btf)
    			->with("atf", $atf)
    			->with("keywords", $keywords)
    			->with("description", $description)
    			->with("templatetype", $templatetype)
    			->with("faretrend", $faredata)
    			->with("todayTrend", $fareTrend)
    			->with("todayTrend2", $fareTrend2)
    			->with("from", $from)
    			->with("to", $to)
    			->with("from_city_label", $from_city_label)
    			->with("to_city_label", $to_city_label)
    			->with("breadcrumbs", $breadcrumbs)
    			->with("days30cheap", $days30cheap)
    			->with("days30cheapindex", $days30cheapindex);
    	}
    	else if ($templatetype == "city") {
    		$to_city = str_replace("_", " ", $slug_parts[2]);
    		$to = Airport::where("city", $to_city)->first()->iata;
    		$to_city_label = Airport::where("city", $to_city)->first()->city;

    		$title = "Flights to $to_city_label: Book your flight today";
    		$keywords = "Flights to $to_city_label, Flights to $to_city_label booking, Flights to $to_city_label tickets";
    		$description = "Flights to $to_city_label: Book your flight today.";

    		$dep_date = $request->query('depart_date', date("Y-m-d", strtotime('+2 hours')));

    		$fareTrends = DB::table('fare_trends')
				->select(DB::raw('distinct fares'))
				->where([['dest', '=', $to], ['depart_date', "=", $dep_date]])
				->groupBy('id')
				->get();

    		$data = new \stdClass();

			$response_data = array();

			$flight_data = "";

    		foreach($fareTrends as $fareTrend) {
	    		$flight_data = json_decode($fareTrend->search_response);

	    		if($flight_data->ProductErrors->ErrorCode == "E_F_17") {
					return "Something went wrong";
				}

				foreach ($flight_data->OneWayAvailabilityResponse->ItinearyDetails[0]->Items as $item) {
					$response_obj = new \stdClass();
					$response_obj->stops = $item->Connection->Onward->NoOfStops;
					$response_obj->duration = $item->ElapsedTime;
					$response_obj->class = $item->FlightDetails[0]->MajorClassCode;
					$response_obj->fare = $item->FareDescription->PaxFareDetails[0]->OtherInfo->GrossAmount;
					$response_obj->basefare = $item->FareDescription->PaxFareDetails[0]->BasicAmount;
					$response_obj->depart_datetime = $item->FlightDetails[0]->DepartureDateTime;
					$response_obj->arrival_datetime = $item->FlightDetails[$item->Connection->Onward->NoOfStops]->ArrivalDateTime;
					$response_obj->airline = $item->FlightDetails[0]->AirlineName;
					$response_obj->carrier_code = $item->FlightDetails[0]->CarrierCode;
					$response_obj->org = $item->FlightDetails[0]->Origin;
					$response_obj->dest = $item->FlightDetails[$item->Connection->Onward->NoOfStops]->Destination;
					$response_obj->org_airport = $item->FlightDetails[0]->OriginAirportName;
					$response_obj->dest_airport = $item->FlightDetails[$item->Connection->Onward->NoOfStops]->DestinationAirportName;
					$response_obj->flight_details = $item->FlightDetails;
					$response_obj->validating_carrier = $item->ValidatingCarrier;
					$response_obj->api_provider = $item->ApiProvider;
					$response_obj->baggage = $item->FlightDetails[0]->Baggage;
					$response_obj->is_non_refundable = $item->FareDescription->IsNonRefundable;
					if($item->ValidatingCarrier == "6E" || $item->ValidatingCarrier == "SG" && $intl == "DOM") {
						$response_obj->cancelFee = "₹ 3000";
						$response_obj->dateChangeFee = "₹ 2250";
					}
					else if ($item->ValidatingCarrier == "G8" && $intl == "DOM") {
						$response_obj->cancelFee = "₹ 2950";
						$response_obj->dateChangeFee = "₹ 2225";
					}
					else if ($item->ValidatingCarrier == "UK" && $intl == "DOM") {
						$response_obj->cancelFee = "₹ 3500";
						$response_obj->dateChangeFee = "₹ 3500";
					}
					else if ($item->ValidatingCarrier == "AI" && $intl == "DOM") {
						$response_obj->cancelFee = "₹ 2500";
						$response_obj->dateChangeFee = "₹ 2500";
					}
					else {
						$response_obj->cancelFee = "As Per Airline Policy";
						$response_obj->dateChangeFee = "As Per Airline Policy";
					}
					array_push($response_data, $response_obj);
				}
			}
			
			$data->flight_data = $response_data;
			// $data->trackId = $flight_data->OneWayAvailabilityResponse->TrackId;
			$data->intl = $intl;
			// $data->airlines = $flight_data->SearchFilter->Airlines;
			// $data->min_stops = $flight_data->SearchFilter->MinStops;
			// $data->max_stops = $flight_data->SearchFilter->MaxStops;
			// $data->min_price = $flight_data->SearchFilter->Price->Min;
			// $data->max_price = $flight_data->SearchFilter->Price->Max;

			$jsonData = json_encode($data);

			$from = "DEL";
			if($to == "DEL") {
				$from = "BOM";
			}

			$fare_trends = DB::table('fare_trends')
				->select(DB::raw('distinct depart_date, MIN(fare) minfare'))
				->where([['dest', '=', $to], ['depart_date', ">=", $dep_date]])
				->groupBy('id')
				->get();

			$faredata = array();
			foreach ($fare_trends as $fare_trend) {
				$depart_date = $fare_trend->depart_date;
				$faredata[$depart_date] = $fare_trend->minfare;
			}

    		return view("pages.seoFlights")
    			->with("data", $jsonData)
    			->with("title", $title)
    			->with("btf", $btf)
    			->with("atf", $atf)
    			->with("keywords", $keywords)
    			->with("description", $description)
    			->with("templatetype", $templatetype)
    			->with("faretrend", $faredata)
    			->with("to", $to)
    			->with("from", $from);

    	}
    	else if ($templatetype == "airline") {
			$airline_name = "";
			if(count($seoTemplates) == 1) {
				$airline_name = $seoTemplates[0]->iata1;
			}
			else {
				$airline_name = str_replace("_", " ", $slug_parts[0]);
			}
    		$airline = Airline::where("airline", $airline_name)->first()->iata;
    		$airline_label = Airline::where("airline", $airline_name)->first()->airline;

    		$title = "$airline_label Flight Tickets Booking: Check Routes, Reviews & Schedule";
    		$keywords = "$airline_label Flights, $airline_label Flight booking, $airline_label Flight tickets";
    		$description = "$airline_label Flights: Book your flight today.";
    		$breadcrumbs = array("Cheap Flights", "Airlines", "$airline_label");

    		$dep_date = $request->query('depart_date', date("Y-m-d", strtotime('+2 hours')));

    		$fareTrends = DB::table('fare_trends')
				->select(DB::raw('search_response'))
				->where('date', $dep_date)
				->groupBy('id')
				->get();

			$data = new \stdClass();
			$response_data = array();

			$flight_data="";

    		foreach($fareTrends as $fareTrend) {
	    		$flight_data = json_decode($fareTrend->search_response);

	    		if($flight_data->ProductErrors->ErrorCode == "E_F_17") {
					return "Something went wrong";
				}

				// $response_data = array();

				foreach ($flight_data->OneWayAvailabilityResponse->ItinearyDetails[0]->Items as $item) {
					if($item->FlightDetails[0]->CarrierCode != $airline) {
						continue;
					}
					$response_obj = new \stdClass();
					$response_obj->stops = $item->Connection->Onward->NoOfStops;
					$response_obj->duration = $item->ElapsedTime;
					$response_obj->class = $item->FlightDetails[0]->MajorClassCode;
					$response_obj->fare = $item->FareDescription->PaxFareDetails[0]->OtherInfo->GrossAmount;
					$response_obj->basefare = $item->FareDescription->PaxFareDetails[0]->BasicAmount;
					$response_obj->depart_datetime = $item->FlightDetails[0]->DepartureDateTime;
					$response_obj->arrival_datetime = $item->FlightDetails[$item->Connection->Onward->NoOfStops]->ArrivalDateTime;
					$response_obj->airline = $item->FlightDetails[0]->AirlineName;
					$response_obj->carrier_code = $item->FlightDetails[0]->CarrierCode;
					$response_obj->org = $item->FlightDetails[0]->Origin;
					$response_obj->dest = $item->FlightDetails[$item->Connection->Onward->NoOfStops]->Destination;
					$response_obj->org_airport = $item->FlightDetails[0]->OriginAirportName;
					$response_obj->dest_airport = $item->FlightDetails[$item->Connection->Onward->NoOfStops]->DestinationAirportName;
					$response_obj->flight_details = $item->FlightDetails;
					$response_obj->validating_carrier = $item->ValidatingCarrier;
					$response_obj->api_provider = $item->ApiProvider;
					$response_obj->baggage = $item->FlightDetails[0]->Baggage;
					$response_obj->is_non_refundable = $item->FareDescription->IsNonRefundable;
					if($item->ValidatingCarrier == "6E" || $item->ValidatingCarrier == "SG" && $intl == "DOM") {
						$response_obj->cancelFee = "₹ 3000";
						$response_obj->dateChangeFee = "₹ 2250";
					}
					else if ($item->ValidatingCarrier == "G8" && $intl == "DOM") {
						$response_obj->cancelFee = "₹ 2950";
						$response_obj->dateChangeFee = "₹ 2225";
					}
					else if ($item->ValidatingCarrier == "UK" && $intl == "DOM") {
						$response_obj->cancelFee = "₹ 3500";
						$response_obj->dateChangeFee = "₹ 3500";
					}
					else if ($item->ValidatingCarrier == "AI" && $intl == "DOM") {
						$response_obj->cancelFee = "₹ 2500";
						$response_obj->dateChangeFee = "₹ 2500";
					}
					else {
						$response_obj->cancelFee = "As Per Airline Policy";
						$response_obj->dateChangeFee = "As Per Airline Policy";
					}
					array_push($response_data, $response_obj);
				}
			}

			$data->flight_data = $response_data;
			// $data->trackId = $flight_data->OneWayAvailabilityResponse->TrackId;
			$data->intl = $intl;
			// $data->airlines = $flight_data->SearchFilter->Airlines;
			// $data->min_stops = $flight_data->SearchFilter->MinStops;
			// $data->max_stops = $flight_data->SearchFilter->MaxStops;
			// $data->min_price = $flight_data->SearchFilter->Price->Min;
			// $data->max_price = $flight_data->SearchFilter->Price->Max;

			$data->min_price = 500;
			$data->max_price = 1000000;

			$jsonData = json_encode($data);

    		return view("pages.seoFlights")
    			->with("data", $jsonData)
    			->with("rawdata", $data)
    			->with("title", $title)
    			->with("btf", $btf)
    			->with("atf", $atf)
    			->with("keywords", $keywords)
    			->with("description", $description)
    			->with("templatetype", $templatetype)
    			->with("breadcrumbs", $breadcrumbs)
    			->with("airline", $airline)
    			->with("airlinelabel", $airline_label);				
    	}
    	return 0;
    }
}
