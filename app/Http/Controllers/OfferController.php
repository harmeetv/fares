<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\OfferPage;
use Carbon\Carbon;

class OfferController extends Controller
{
    public function getOffers() {
    	$breadcrumbs = array("Home", "Offers");

        $offers = OfferPage::where("valid_upto", ">=", Carbon::now())->get();
    	return view("pages.offers")
    		->with("offers", $offers)
            ->with("breadcrumbs", $breadcrumbs);
    }

    public function getSingleOffer($offerslug) {
        $offer = OfferPage::where("slug", $offerslug)->first();
        $breadcrumbs = array("Home", "Offers", $offer->page_title);
        return view("pages.singleOffer")
            ->with("offer", $offer)
            ->with("breadcrumbs", $breadcrumbs);
    }
}
