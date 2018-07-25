<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

//==================
// Routes for Public 
//==================

// Homepage
Route::get('/', array("as" => "pages.index", "uses" => "PagesController@getIndex"));

// Offers
    // All Offers Page
    Route::get('/offers', array("as" => "offer.getOffers", "uses" => "OfferController@getOffers"));

    // Single Offer page
    Route::get('/offers/{offerslug}', array("as" => "offer.getSingleOffer", "uses" => "OfferController@getSingleOffer"));

// Contact Us
    // Contact Us Get Route
    Route::get('/contact-us', function () {
	    return view('pages.contactUs');
	});

    // Contact Us Post Route
    Route::post('/contact-us', array("as" => "pages.postContactUs", "uses" => "PagesController@postContactUs"));

// Newsletter Subscriptions
Route::post('/newsletter', array("as" => "pages.postNewsLetter", "uses" => "PagesController@postNewsLetter"));

// Flight Search List Post Route
Route::post('/flight', array("as" => "search.flightSearch", "uses" => "SearchListController@postFlightSearch"));

// Seo Slug
Route::get('/flights/{slug}', array("as" => "seoControllers.flights", "uses" => "SeoController@getSeoFlights"));

// Search List
Route::get('/flight/{org}/{dest}/{date1}/{month1}/{year1}/{date2}/{month2}/{year2}/{triptype}/{intl}/{class}/{adults}/{childs}/{infants}', array("as" => "search.searchList", "uses" => "SearchListController@getSearchList"));

// Booking Details
Route::post('/bookingDetails', array("as" => "booking.bookingDetails", "uses" => "BookingController@postBookingDetails"));

Route::get('/bookingDetails/request/{lookrequestid}', array("as" => "booking.bookingDetails", "uses" => "BookingController@getBookingDetails"));

Route::get('/bookingDetails/request/{onwardlookrequestid}/{returnlookrequestid}', array("as" => "booking.bookingDetailsDomr", "uses" => "BookingController@getBookingDetailsDomr"));

Route::post('/confirmDetails', array("as" => "booking.confirmDetails", "uses" => "BookingController@postConfirmDetails"));

// Check Coupon
Route::get('/checkCoupon/{couponcode}/{amount}', array("as" => "coupon.checkCoupon", "uses" => "CouponController@checkCoupon"));
// Recheck fares
Route::post('/recheckFares', array("as" => "coupon.recheckFares", "uses" => "CouponController@recheckFares"));

// Payment
Route::post('/payment', array("as" => "payment.makePayment", "uses" => "PaymentController@postMakePayment"));

Route::get('/paymentSuccess', array("as" => "booking.paymentSuccess", "uses" => "PaymentController@getPaymentSuccess"));

Route::get('/paymentSuccess/domr', array("as" => "booking.paymentSuccessDomr", "uses" => "PaymentController@getPaymentSuccessDomr"));

// Print Ticket
Route::get('/printTicket/{payment_id}/{payment_request_id}/{tripdir}', array("as" => "ticket.print", "uses" => "TicketController@printTicket"));

//Route::get('/printTicket/{id}', array("as" => "ticket.printUsingId", "uses" => "TicketController@printTicketUsingId"))->middleware('admin');

Route::get('/printTicket/{payment_id}/{payment_request_id}/domr', array("as" => "ticket.printDomr", "uses" => "TicketController@printTicketDomr"));

//==================
// Auth Routes 
//==================
Auth::routes();

//==================
// API Routes 
//==================

// Airports Auto Complete
Route::get('/api/airportSearch/{query}', array("as" => "api.airportSearch", "uses" => "APIController@getAutocompleteAirports"));

// Country Codes Auto Complete
Route::get('/api/countryCodeSearch/{query}', array("as" => "api.countryCodeSearch", "uses" => "APIController@getAutocompleteCountryCodes"));

// API search
Route::get('/api/search/{org}/{dest}/{date1}/{month1}/{year1}/{date2}/{month2}/{year2}/{triptype}/{intl}/{class}/{adults}/{childs}/{infants}', array("as" => "api.search", "uses" => "APIController@getSearch"));

// Fare Trend for Calender
Route::get('/api/faretrend/{org}/{dest}', array("as" => "api.faretrend", "uses" => "APIController@getFareTrend"));

//==================
// Admin Routes 
//==================
Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});

//==================
// Test Routes 
//==================
Route::get('/test', array("as" => "test.settings", "uses" => "TestController@getSettings"));

//==================
// Page Routes 
//==================
Route::get('/{pageslug}', array("as" => "pages.getPages", "uses" => "PagesController@getPages"));
