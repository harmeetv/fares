<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\OfferCode;

class CouponController extends Controller
{
    public function checkCoupon($couponcode, $amount) {
    	$OfferCode = OfferCode::where("offer_code", $couponcode)->first();
    	$finalAmount = $amount;
    	if($OfferCode) {
    		if($OfferCode->discount_type == "flat") {
    			$finalAmount -= $OfferCode->discount_value;
    		}
    		else {
    			$finalAmount -= ($finalAmount * $OfferCode->discount_value)/100;
    		}
    		return response('{"success":true, "amount":'. $finalAmount .', "msg": "Coupon Applied Succesfully"}', 200)
                  ->header('Content-Type', 'application/json');
    	}
    	else {
    		return response('{"success":false, "msg": "No Coupon Found"}', 200)
                  ->header('Content-Type', 'application/json');
    	}
    }
    public function recheckFares(Request $request) {
    	sleep(8);
    	return response('{"success":true, "msg": "No Price Change"}', 200)
                  ->header('Content-Type', 'application/json');
    }
}
