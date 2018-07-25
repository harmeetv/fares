<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Airport;
use App\Countrycode;
use App\Common;
use App\TotalQuery;
use Response;
use DB;

class APIController extends Controller
{
	// Get Search
	public function getSearch($org,$dest,$date1,$month1,$year1,$date2,$month2,$year2,$triptype,$intl,$class,$adults,$childs,$infants) {

    	$search_count = TotalQuery::where('id', '1')->first()->search_count;
    	TotalQuery::where('id', '1')->update(["search_count" => $search_count + 1]);

    	if($triptype=="O") {
			$jsonRequest = "{ \"TripType\": \"$triptype\", \"NoOfAdults\": $adults, \"NoOfChilds\": $childs, \"NoOfInfants\": $infants, \"ClassType\": \"$class\", \"OriginDestination\": [ { \"Origin\": \"$org\", \"Destination\": \"$dest\", \"TravelDate\": \"$month1/$date1/$year1\" }], \"Currency\": \"INR\" }";

			$response = Common::getSearchResponse($jsonRequest);

			// save trend
			Common::saveTrend($response, $org, $dest, "$year1-$month1-$date1");

			//save to s3
			Common::saveSearchToAWS($response);

			$flight_data=json_decode($response);

			if($flight_data->ProductErrors->ErrorCode == "E_F_17") {
				return response('{"error":1}', 200)
                  ->header('Content-Type', 'application/json');
			}

			$data = new \stdClass();

			$response_data = array();

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

			return Response::json($data);
		}
		else if($triptype=="R" && $intl=="DOM") {
	    	
	    	$jsonRequest = "{ \"TripType\": \"O\", \"NoOfAdults\": $adults, \"NoOfChilds\": $childs, \"NoOfInfants\": $infants, \"ClassType\": \"$class\", \"OriginDestination\": [ { \"Origin\": \"$org\", \"Destination\": \"$dest\", \"TravelDate\": \"$month1/$date1/$year1\" }], \"Currency\": \"INR\" }";

	    	$response = Common::getSearchResponse($jsonRequest);

	    	// save trend
			Common::saveTrend($response, $org, $dest, "$year1-$month1-$date1");

			//save to s3
			Common::saveSearchToAWS($response);

			$onward_flight_data=json_decode($response);

			if($onward_flight_data->ProductErrors->ErrorCode == "E_F_17") {
				return response('{"error":1}', 200)
                  ->header('Content-Type', 'application/json');
			}

			$jsonRequest = "{ \"TripType\": \"O\", \"NoOfAdults\": $adults, \"NoOfChilds\": $childs, \"NoOfInfants\": $infants, \"ClassType\": \"$class\", \"OriginDestination\": [ { \"Origin\": \"$dest\", \"Destination\": \"$org\", \"TravelDate\": \"$month2/$date2/$year2\" }], \"Currency\": \"INR\" }";

			$response = Common::getSearchResponse($jsonRequest);

			// save trend
			Common::saveTrend($response, $dest, $org, "$year2-$month2-$date2");

			//save to s3
			Common::saveSearchToAWS($response);

			$return_flight_data=json_decode($response);

			if($return_flight_data->ProductErrors->ErrorCode == "E_F_17") {
				return response('{"error":1}', 200)
                  ->header('Content-Type', 'application/json');
			}

			$flight_data = new \stdClass();

			$response_data = array();

			foreach ($onward_flight_data->OneWayAvailabilityResponse->ItinearyDetails[0]->Items as $item) {
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
				$response_obj->org_city = $item->FlightDetails[0]->OriginAirportCity;
				$response_obj->dest_city = $item->FlightDetails[$item->Connection->Onward->NoOfStops]->DestinationAirportCity;
				$response_obj->org_airport = $item->FlightDetails[0]->OriginAirportName;
				$response_obj->dest_airport = $item->FlightDetails[$item->Connection->Onward->NoOfStops]->DestinationAirportName;
				$response_obj->flight_details = $item->FlightDetails;
				$response_obj->baggage = $item->FlightDetails[0]->Baggage;
				$response_obj->validating_carrier = $item->ValidatingCarrier;
				$response_obj->api_provider = $item->ApiProvider;
				$response_obj->is_non_refundable = $item->FareDescription->IsNonRefundable;
				if($item->ValidatingCarrier == "6E" || $item->ValidatingCarrier == "SG") {
					$response_obj->cancelFee = "₹ 3000";
					$response_obj->dateChangeFee = "₹ 2250";
				}
				else if ($item->ValidatingCarrier == "G8") {
					$response_obj->cancelFee = "₹ 2950";
					$response_obj->dateChangeFee = "₹ 2225";
				}
				else if ($item->ValidatingCarrier == "UK") {
					$response_obj->cancelFee = "₹ 3500";
					$response_obj->dateChangeFee = "₹ 3500";
				}
				else if ($item->ValidatingCarrier == "AI") {
					$response_obj->cancelFee = "₹ 2500";
					$response_obj->dateChangeFee = "₹ 2500";
				}
				else {
					$response_obj->cancelFee = "As Per Airline Policy";
					$response_obj->dateChangeFee = "As Per Airline Policy";
				}
				array_push($response_data, $response_obj);
			}

			$flight_data->onward_flight_data = $response_data;

			$response_data = array();

			foreach ($return_flight_data->OneWayAvailabilityResponse->ItinearyDetails[0]->Items as $item) {
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
				$response_obj->org_city = $item->FlightDetails[0]->OriginAirportCity;
				$response_obj->dest_city = $item->FlightDetails[$item->Connection->Onward->NoOfStops]->DestinationAirportCity;
				$response_obj->org_airport = $item->FlightDetails[0]->OriginAirportName;
				$response_obj->dest_airport = $item->FlightDetails[$item->Connection->Onward->NoOfStops]->DestinationAirportName;
				$response_obj->flight_details = $item->FlightDetails;
				$response_obj->baggage = $item->FlightDetails[0]->Baggage;
				$response_obj->validating_carrier = $item->ValidatingCarrier;
				$response_obj->api_provider = $item->ApiProvider;
				$response_obj->is_non_refundable = $item->FareDescription->IsNonRefundable;
				if($item->ValidatingCarrier == "6E" || $item->ValidatingCarrier == "SG") {
					$response_obj->cancelFee = "₹ 3000";
					$response_obj->dateChangeFee = "₹ 2250";
				}
				else if ($item->ValidatingCarrier == "G8") {
					$response_obj->cancelFee = "₹ 2950";
					$response_obj->dateChangeFee = "₹ 2225";
				}
				else if ($item->ValidatingCarrier == "UK") {
					$response_obj->cancelFee = "₹ 3500";
					$response_obj->dateChangeFee = "₹ 3500";
				}
				else if ($item->ValidatingCarrier == "AI") {
					$response_obj->cancelFee = "₹ 2500";
					$response_obj->dateChangeFee = "₹ 2500";
				}
				else {
					$response_obj->cancelFee = "As Per Airline Policy";
					$response_obj->dateChangeFee = "As Per Airline Policy";
				}
				array_push($response_data, $response_obj);
			}

			$flight_data->return_flight_data = $response_data;

			$flight_data->intl = $intl;

			$flight_data->onward_trackId = $onward_flight_data->OneWayAvailabilityResponse->TrackId;
			$flight_data->onward_airlines = $onward_flight_data->SearchFilter->Airlines;
			$flight_data->onward_min_stops = $onward_flight_data->SearchFilter->MinStops;
			$flight_data->onward_max_stops = $onward_flight_data->SearchFilter->MaxStops;
			$flight_data->onward_min_price = $onward_flight_data->SearchFilter->Price->Min;
			$flight_data->onward_max_price = $onward_flight_data->SearchFilter->Price->Max;

			$flight_data->return_trackId = $return_flight_data->OneWayAvailabilityResponse->TrackId;
			$flight_data->return_airlines = $return_flight_data->SearchFilter->Airlines;
			$flight_data->return_min_stops = $return_flight_data->SearchFilter->MinStops;
			$flight_data->return_max_stops = $return_flight_data->SearchFilter->MaxStops;
			$flight_data->return_min_price = $return_flight_data->SearchFilter->Price->Min;
			$flight_data->return_max_price = $return_flight_data->SearchFilter->Price->Max;

			return Response::json($flight_data);
		}
		else if ($triptype=="R" && $intl=="INTL") {

			$jsonRequest = "{ \"TripType\": \"$triptype\", \"NoOfAdults\": $adults, \"NoOfChilds\": $childs, \"NoOfInfants\": $infants, \"ClassType\": \"$class\", \"OriginDestination\": [ { \"Origin\": \"$org\", \"Destination\": \"$dest\", \"TravelDate\": \"$month1/$date1/$year1\" }, { \"Origin\": \"$dest\", \"Destination\": \"$org\", \"TravelDate\": \"$month2/$date2/$year2\" } ], \"Currency\": \"INR\" }";

			$response = Common::getSearchResponse($jsonRequest);

			//save to s3
			Common::saveSearchToAWS($response);

			$flight_data = json_decode($response);

			if($flight_data->ProductErrors->ErrorCode == "E_F_17") {
				return response('{"error":1}', 200)
                  ->header('Content-Type', 'application/json');
			}

			$data = new \stdClass();

			$response_data = array();

			foreach ($flight_data->OneWayAvailabilityResponse->ItinearyDetails[0]->Items as $item) {
				$response_obj = new \stdClass();
				$response_obj->onward_stops = $item->Connection->Onward->NoOfStops;
				$response_obj->return_stops = $item->Connection->Return->NoOfStops;
				$response_obj->onward_duration = $item->ElapsedTime[0];
				$response_obj->return_duration = $item->ElapsedTime[1];
				$response_obj->onward_class = $item->FlightDetails[0]->MajorClassCode;
				$response_obj->return_class = $item->FlightDetails[$item->Connection->Onward->NoOfStops + 1]->MajorClassCode;
				$response_obj->fare = $item->FareDescription->PaxFareDetails[0]->OtherInfo->GrossAmount;
				$response_obj->basefare = $item->FareDescription->PaxFareDetails[0]->BasicAmount;
				$response_obj->onward_depart_datetime = $item->FlightDetails[0]->DepartureDateTime;
				$response_obj->onward_arrival_datetime = $item->FlightDetails[$item->Connection->Onward->NoOfStops]->ArrivalDateTime;
				$response_obj->return_depart_datetime = $item->FlightDetails[$item->Connection->Onward->NoOfStops + 1]->DepartureDateTime;
				$response_obj->return_arrival_datetime = $item->FlightDetails[$item->Connection->Onward->NoOfStops + $item->Connection->Return->NoOfStops + 1]->ArrivalDateTime;
				$response_obj->onward_airline = $item->FlightDetails[0]->AirlineName;
				$response_obj->return_airline = $item->FlightDetails[$item->Connection->Onward->NoOfStops + 1]->AirlineName;
				$response_obj->onward_carrier_code = $item->FlightDetails[0]->CarrierCode;
				$response_obj->return_carrier_code = $item->FlightDetails[$item->Connection->Onward->NoOfStops + 1]->CarrierCode;
				$response_obj->onward_org = $item->FlightDetails[0]->Origin;
				$response_obj->onward_dest = $item->FlightDetails[$item->Connection->Onward->NoOfStops]->Destination;
				$response_obj->return_org = $item->FlightDetails[$item->Connection->Onward->NoOfStops + 1]->Origin;
				$response_obj->return_dest = $item->FlightDetails[$item->Connection->Onward->NoOfStops + $item->Connection->Return->NoOfStops + 1]->Destination;
				$response_obj->onward_org_airport = $item->FlightDetails[0]->OriginAirportName;
				$response_obj->onward_dest_airport = $item->FlightDetails[$item->Connection->Onward->NoOfStops]->DestinationAirportName;
				$response_obj->return_org_airport = $item->FlightDetails[$item->Connection->Onward->NoOfStops + 1]->OriginAirportName;
				$response_obj->return_dest_airport = $item->FlightDetails[$item->Connection->Onward->NoOfStops + $item->Connection->Return->NoOfStops + 1]->DestinationAirportName;
				$response_obj->flight_details = $item->FlightDetails;
				$response_obj->validating_carrier = $item->ValidatingCarrier;
				$response_obj->api_provider = $item->ApiProvider;
				$response_obj->baggage = $item->FlightDetails[0]->Baggage;
				$response_obj->is_non_refundable = $item->FareDescription->IsNonRefundable;
				$response_obj->cancelFee = "As Per Airline Policy";
				$response_obj->dateChangeFee = "As Per Airline Policy";

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
			
			return Response::json($data);
		}
	}

	// Fare Trend
	public function getFareTrend($org, $dest) {
		$fare_trends = DB::table('fare_trends')
			->select(DB::raw('distinct date, MIN(min_fare) minfare'))
			->where([['org', '=', $org], ['dest', '=', $dest], ['date', ">=", date("Y-m-d", strtotime('+2 hours'))]])
			->groupBy('id')
			->get();
		$response_obj = new \stdClass();
		foreach ($fare_trends as $fare_trend) {
			$depart_date = $fare_trend->date;
			$response_obj->$depart_date = $fare_trend->minfare;
		}
		return Response::json($response_obj);
	}

	// Airports Auto Complete
    public function getAutocompleteAirports($query) {
		$airports=Airport::where('label','LIKE','%'.$query.'%')->get();        
        $data=array();
        foreach ($airports as $airport) {
        	$response_obj = new \stdClass();
        	$response_obj->label=$airport->label;
        	$response_obj->iata=$airport->iata;
            $data[]=$response_obj;
        }
        return $data;
	}

	// Country Codes Auto Complete
	public function getAutocompleteCountryCodes($query) {
		$countrycodes=Countrycode::where('country','LIKE','%'.$query.'%')->get();        
        $data=array();
        foreach ($countrycodes as $countrycode) {
        	$response_obj = new \stdClass();
        	$response_obj->code=$countrycode->code;
        	$response_obj->country=$countrycode->country;
            $data[]=$response_obj;
        }
        return $data;
	}
}
