<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\Airport;
use App\Search;
use App\Common;
use DB;
use Cookie;

class SearchListController extends Controller
{
    public function getSearchList($org,$dest,$date1,$month1,$year1,$date2,$month2,$year2,$triptype,$intl,$class,$adults,$childs,$infants) {

    	$searchid = Common::saveSearch($triptype, $org, $dest, $year1."-".$month1."-".$date1, $year2."-".$month2."-".$date2, $class, $adults, $childs, $infants, $intl);

    	Cookie::queue("searchid", $searchid, 1440);

		$apiUrl = "/api/search/$org/$dest/$date1/$month1/$year1/$date2/$month2/$year2/$triptype/$intl/$class/$adults/$childs/$infants";
		$orgCity = Airport::where('iata', $org)->first()->city;
		$destCity = Airport::where('iata', $dest)->first()->city;

		$fareTrends = DB::table('fare_trends')
			->select(DB::raw('distinct date, MIN(min_fare) minfare'))
			->where([['org', '=', $org], ['dest', '=', $dest], ['date', ">=", date("Y-m-d", strtotime('+2 hours'))]])
			->groupBy('id')
			->get();

		$faredata = array();
		foreach ($fareTrends as $fareTrend) {
			$departDate = $fareTrend->date;
			$faredata[$departDate] = $fareTrend->minfare;
		}

		if($triptype=="O") {
			return view('pages.oneWaySearchList')
				->with('api_url', $apiUrl)
				->with('org_city', $orgCity)
				->with('dest_city', $destCity)
				->with('org', $org)
				->with('dest', $dest)
				->with('intl', $intl)
				->with('faretrend', $faredata)
				->with('adults', $adults)
				->with('childs', $childs)
				->with('infants', $infants)
				->with('searchid', $searchid);
		}
		else if($triptype=="R" && $intl=="INTL") {
			return view('pages.roundTripIntlSearchList')
				->with('api_url', $apiUrl)
				->with('org_city', $orgCity)
				->with('dest_city', $destCity)
				->with('adults', $adults)
				->with('childs', $childs)
				->with('infants', $infants)
				->with('searchid', $searchid);
		}
		else if($triptype=="R" && $intl=="DOM") {
			return view('pages.roundTripDomSearchList')
				->with('api_url', $apiUrl)
				->with('org', $org)
				->with('dest', $dest)
				->with('org_city', $orgCity)
				->with('dest_city', $destCity)
				->with('adults', $adults)
				->with('childs', $childs)
				->with('infants', $infants)
				->with('searchid', $searchid)
				->with('date1', $date1)
				->with('month1', $month1)
				->with('date2', $date2)
				->with('month2', $month2);
		}
	}

	/*public function generateSearch($org, $dest) {
		$date1 = new \DateTime();
		date_add($date1, date_interval_create_from_date_string("3 days"));
		$date2 = new \DateTime();
		date_add($date2, date_interval_create_from_date_string("8 days"));
		$from_country = Airport::where('iata', $org)->first()->country;
		$to_country = Airport::where('iata', $dest)->first()->country;
		$intl="DOM";

		if($from_country!=$to_country) {
			$intl="INTL";
		}

		$search = new Search;
		$search->triptype = "R";
		$search->origin = $org;
		$search->destination = $dest;
		$search->class = "Economy";
		$search->adults = "1";
		$search->childs = "0";
		$search->infants = "0";
		$search->intl = $intl;
		$search->visitor = \Request::ip();
		$search->isguest = Auth::guest();

		if(!Auth::guest()) {
			$search->user_id = Auth::user()->id;
		}
		else {
			$search->user_id = 0;
		}

		$depart_date = date_format($date1, "d/m/Y");
		$return_date = date_format($date2, "d/m/Y");

		$depart_date_array = explode("/", $depart_date);
		$return_date_array = explode("/", $return_date);

		$search->depart_date = $depart_date_array[2]."-".$depart_date_array[1]."-".$depart_date_array[0];
		$search->return_date = $return_date_array[2]."-".$return_date_array[1]."-".$return_date_array[0];

		$search->save();

		$redirect_link = "/flights/$org/$dest/$depart_date/$return_date/R/$intl/Economy/1/0/0/$search->id";
		return redirect($redirect_link);

	}*/

	// public function makeSearch($org,$dest,$date1,$month1,$year1,$date2,$month2,$year2,$triptype,$intl,$class,$adults,$childs,$infants) {
	// 	$from_country = Airport::where('iata', $org)->first()->country;
	// 	$to_country = Airport::where('iata', $dest)->first()->country;

	// 	if($triptype=="R") {

	// 		$searchId = Common::saveSearch($triptype, $org, $dest, $year1."-".$month1."-".$date1, $year2."-".$month2."-".$date2, $class, $adults, $childs, $infants, $intl);

	// 		$redirect_link = "/flights/$org/$dest/$date1/$month1/$year1/$date2/$month2/$year2/R/$intl/$class/$adults/$childs/$infants/$searchId";
	// 		return redirect($redirect_link);
	// 	}
	// 	else if($triptype=="O") {

	// 		$searchId = Common::saveSearch($triptype, $org, $dest, $year1."-".$month1."-".$date1, $year1."-".$month1."-".$date1, $class, $adults, $childs, $infants, $intl);

	// 		$redirect_link = "/flights/$org/$dest/$date1/$month1/$year1/$date1/$month1/$year1/O/$intl/$class/$adults/$childs/$infants/$searchId";
	// 		return redirect($redirect_link);
	// 	}
	// }

	public function postFlightSearch(Request $request) {
		$msg = Common::validateSearch($request->input('from-iata'), $request->input('to-iata'), $request->input('adults'), $request->input('infants'));
		if(!is_int($msg)) {
			return $msg;
		}
		$triptype=$request->input('triptype');
		$from_iata = $request->input('from-iata');
		$to_iata = $request->input('to-iata');
		$class = $request->input('class');
		$from_country = Airport::where('iata', $from_iata)->first()->country;
		$to_country = Airport::where('iata', $to_iata)->first()->country;
		$intl="DOM";

		$adults=$request->input('adults');
		$childs=$request->input('childs');
		$infants=$request->input('infants');

		if($from_country!=$to_country) {
			$intl="INTL";
		}

		if($triptype=="R") {
			$depart_date = $request->input('roundtrip-from-date');
			$return_date = $request->input('roundtrip-to-date');

			$depart_date_array = explode("/", $depart_date);
			$return_date_array = explode("/", $return_date);

			$redirect_link = "/flight/$from_iata/$to_iata/$depart_date/$return_date/R/$intl/$class/$adults/$childs/$infants";
			return redirect($redirect_link);
		}
		else if($triptype=="O") {
			$depart_date = $request->input('oneway-from-date');
			$depart_date_array = explode("/", $depart_date);

			$redirect_link = "/flight/$from_iata/$to_iata/$depart_date/$depart_date/O/$intl/$class/$adults/$childs/$infants";
			return redirect($redirect_link);
		}
	}
}
