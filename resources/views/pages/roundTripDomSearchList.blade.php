@extends('main')
@section('metaTags')
<title>{{ $org_city}}-{{ $dest_city }} | FaresPro</title>
@endsection
@section('content')
<!-- Filter button for mobile -->
<div class="row hidden-md hidden-lg hidden-xl mobile-filter-button-container domr">
    <div class="col-xs-12">
        <!-- <span class="close-filter"><i class="fa fa-times" aria-hidden="true"></i></span> -->
        <div class="col-xs-12 mobile-sticky-bottom">
            <div class="col-xs-5 pr5 pl5">
                <p><?= $org ?>-<?= $dest ?> <?= $date1 ?> <?= date('M', mktime(0, 0, 0, $month1, 10)) ?></p>
                <p id="mobile-depart-airline-codes"></h4>
            </div>
            <div class="col-xs-5 pr5 pl5">
                <p><?= $dest ?>-<?= $org ?> <?= $date2 ?>  <?= date('M', mktime(0, 0, 0, $month2, 10)) ?></p>
                <p id="mobile-return-airline-codes"></h4>
            </div>
            <div class="col-xs-2 pr5 mobile-book-button-div">
                <form method="post" class="finalform" action="/bookingDetails" style="margin-top: 5px;">
                    <input type="hidden" name="triptype" value="DOMR">
                    <div class="finalonwardform" style="display: none;"></div>
                    <div class="finalreturnform" style="display: none"></div>
                    <input class="btn btn-primary pull-right" type="submit" value="Book" />
                </form>
            </div>
            <div class="col-xs-12 pl5 pr5">
                <p id="mobile-final-price"></p>
            </div>
        </div>
        <span class="mobile-filter-button domr btn btn-primary"><span>Filter Search <i class="fa fa-filter" aria-hidden="true"></i></span><span style="display: none;">Done</span></span>
    </div>
</div>
<!-- /Filter Button for mobile -->
<!-- Filter for mobile -->
<aside class="booking-filters mobile-booking-filter text-white hidden-md hidden-lg hidden-xl">
    <h3>Filter By:</h3>
    <ul class="list booking-filters-list">
        <li>
            <h5 class="booking-filters-title">Stops</h5>
            <div class="checkbox">
                <label>
                    <input class="i-check stopsFilterCheckbox" type="checkbox" name="stops[]" value="0" />Non-stop
                </label>
            </div>
            <div class="checkbox">
                <label>
                    <input class="i-check stopsFilterCheckbox" type="checkbox" name="stops[]" value="1" />1 Stop
                </label>
            </div>
            <div class="checkbox">
                <label>
                    <input class="i-check stopsFilterCheckbox" type="checkbox" name="stops[]" value="2" />2+ Stops
                </label>
            </div>
        </li>
        <!-- <li>
            <h5 class="booking-filters-title">Price </h5>
            <input type="text" class="price-slider">
        </li> -->
        <li>
            <h5 class="booking-filters-title">Onward Departure Time</h5>
            <div class="checkbox">
                <label>
                    <input class="i-check onward-depart-time-filter-checkbox" type="checkbox" name="onwardDepartTimeFilter[]" value="0" />Before 6AM</label>
            </div>
            <div class="checkbox">
                <label>
                    <input class="i-check onward-depart-time-filter-checkbox" type="checkbox" name="onwardDepartTimeFilter[]" value="1" />6AM - 12PM</label>
            </div>
            <div class="checkbox">
                <label>
                    <input class="i-check onward-depart-time-filter-checkbox" type="checkbox" name="onwardDepartTimeFilter[]" value="2" />12PM - 6PM</label>
            </div>
            <div class="checkbox">
                <label>
                    <input class="i-check onward-depart-time-filter-checkbox" type="checkbox" name="onwardDepartTimeFilter[]" value="3" />After 6PM</label>
            </div>
        </li>
        <li>
            <h5 class="booking-filters-title">Return Departure Time</h5>
            <div class="checkbox">
                <label>
                    <input class="i-check return-depart-time-filter-checkbox" type="checkbox" name="returnDepartTimeFilter[]" value="0" />Before 6AM</label>
            </div>
            <div class="checkbox">
                <label>
                    <input class="i-check return-depart-time-filter-checkbox" type="checkbox" name="returnDepartTimeFilter[]" value="1" />6AM - 12PM</label>
            </div>
            <div class="checkbox">
                <label>
                    <input class="i-check return-depart-time-filter-checkbox" type="checkbox" name="returnDepartTimeFilter[]" value="2" />12PM - 6PM</label>
            </div>
            <div class="checkbox">
                <label>
                    <input class="i-check return-depart-time-filter-checkbox" type="checkbox" name="returnDepartTimeFilter[]" value="3" />After 6PM</label>
            </div>
        </li>
        <li class="airlines-filter">  
        </li>
    </ul>
</aside>
<!-- /Filter for mobile -->
<div class="container">
    @include('partials._searchModal')
    <h4 class="booking-title"><span class="booking-title-text">Searching for flights from <?= $org_city ?> to <?= $dest_city ?>...</span> <small><a class="popup-text" href="#search-dialog" data-effect="mfp-zoom-out">Edit search</a></small></h4>
    <div class="row">
        <div class="col-md-3 flight-filter-div hidden-xs hidden-sm">
            <aside class="booking-filters text-white">
                <h3>Filter By:</h3>
                <ul class="list booking-filters-list">
                    <li>
                        <h5 class="booking-filters-title">Stops</h5>
                        <div class="checkbox">
                            <label>
                                <input class="i-check stopsFilterCheckbox" type="checkbox" name="stops[]" value="0" />Non-stop
                            </label>
                        </div>
                        <div class="checkbox">
                            <label>
                                <input class="i-check stopsFilterCheckbox" type="checkbox" name="stops[]" value="1" />1 Stop
                            </label>
                        </div>
                        <div class="checkbox">
                            <label>
                                <input class="i-check stopsFilterCheckbox" type="checkbox" name="stops[]" value="2" />2+ Stops
                            </label>
                        </div>
                    </li>
                    <li>
                        <h5 class="booking-filters-title">Price </h5>
                        <input type="text" class="price-slider">
                    </li>
                    <li>
                        <h5 class="booking-filters-title">Onward Departure Time</h5>
                        <div class="checkbox">
                            <label>
                                <input class="i-check onward-depart-time-filter-checkbox" type="checkbox" name="onwardDepartTimeFilter[]" value="0" />Before 6AM</label>
                        </div>
                        <div class="checkbox">
                            <label>
                                <input class="i-check onward-depart-time-filter-checkbox" type="checkbox" name="onwardDepartTimeFilter[]" value="1" />6AM - 12PM</label>
                        </div>
                        <div class="checkbox">
                            <label>
                                <input class="i-check onward-depart-time-filter-checkbox" type="checkbox" name="onwardDepartTimeFilter[]" value="2" />12PM - 6PM</label>
                        </div>
                        <div class="checkbox">
                            <label>
                                <input class="i-check onward-depart-time-filter-checkbox" type="checkbox" name="onwardDepartTimeFilter[]" value="3" />After 6PM</label>
                        </div>
                    </li>
                    <li>
                        <h5 class="booking-filters-title">Return Departure Time</h5>
                        <div class="checkbox">
                            <label>
                                <input class="i-check return-depart-time-filter-checkbox" type="checkbox" name="returnDepartTimeFilter[]" value="0" />Before 6AM</label>
                        </div>
                        <div class="checkbox">
                            <label>
                                <input class="i-check return-depart-time-filter-checkbox" type="checkbox" name="returnDepartTimeFilter[]" value="1" />6AM - 12PM</label>
                        </div>
                        <div class="checkbox">
                            <label>
                                <input class="i-check return-depart-time-filter-checkbox" type="checkbox" name="returnDepartTimeFilter[]" value="2" />12PM - 6PM</label>
                        </div>
                        <div class="checkbox">
                            <label>
                                <input class="i-check return-depart-time-filter-checkbox" type="checkbox" name="returnDepartTimeFilter[]" value="3" />After 6PM</label>
                        </div>
                    </li>
                    <li class="airlines-filter">  
                    </li>
                </ul>
            </aside>
        </div>

        @include("partials._bookingPreloader")

        <div class="col-md-9 flight-list-div roundtrip" style="display: none;">
            <div class="col-xs-6">

                <div class="hidden-xs hidden-sm">
                    <div style="display: inline-block; width: 26%;"></div>
                    <div class="onward-sort-option text-center onward-depart-sort" style="display: inline-block; width: 16%;">Depart</div>
                    <div class="onward-sort-option text-center onward-arrive-sort" style="display: inline-block; width: 15%;">Arrive</div>
                    <div class="onward-sort-option text-center onward-duration-sort" style="display: inline-block; width: 19%;">Duration</div>
                    <div class="onward-sort-option text-center onward-price-sort asc-sort" style="display: inline-block; width: 20%;">Price</div>
                </div>

                <ul class="booking-list onward-flight-list">

                </ul>
                
            </div>

            <div class="col-xs-6">

                <div class="hidden-xs hidden-sm">
                    <div style="display: inline-block; width: 26%;"></div>
                    <div class="return-sort-option text-center return-depart-sort" style="display: inline-block; width: 16%;">Depart</div>
                    <div class="return-sort-option text-center return-arrive-sort" style="display: inline-block; width: 15%;">Arrive</div>
                    <div class="return-sort-option text-center return-duration-sort" style="display: inline-block; width: 19%;">Duration</div>
                    <div class="return-sort-option text-center return-price-sort asc-sort" style="display: inline-block; width: 20%;">Price</div>
                </div>

                <ul class="booking-list return-flight-list">

                </ul>
                
            </div>

        </div>
    </div>
    <div class="gap"></div>
    <div class="stickyBottom hidden-xs hidden-sm">
        <div class="container">
            <div class="col-md-4 stickyBottomSection onward">
                <div class="row">
                    <div class="col-md-4 pr0 pl0">
                        <span class="stickyBottomAirlineLogo"></span>
                        <span class="stickyBottomFlightCode"><span class="stickyBottomAirlineName"></span><br><span class="stickyBottomAirlineCode"></span></span>
                    </div>
                    <div class="col-md-2">
                        <p class="stickyBottomDepartFlightTime"></p>
                        <p class="stickyBottomOrgCity"></p>
                    </div>
                    <div class="col-md-1">
                        <i class="fa fa-long-arrow-right stickyBottomArrow" aria-hidden="true"></i>
                    </div>
                    <div class="col-md-2">
                        <p class="stickyBottomArrivalFlightTime"></p>
                        <p class="stickyBottomDestCity"></p>
                    </div>
                    <div class="col-md-3 text-right">
                        <p class="stickyBottomPrice"></p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 stickyBottomSection return">
                <div class="row">
                    <div class="col-md-4 pr0 pl0">
                        <span class="stickyBottomAirlineLogo"></span>
                        <span class="stickyBottomFlightCode"><span class="stickyBottomAirlineName"></span><br><span class="stickyBottomAirlineCode"></span></span>
                    </div>
                    <div class="col-md-2">
                        <p class="stickyBottomDepartFlightTime"></p>
                        <p class="stickyBottomOrgCity"></p>
                    </div>
                    <div class="col-md-1">
                        <i class="fa fa-long-arrow-right stickyBottomArrow" aria-hidden="true"></i>
                    </div>
                    <div class="col-md-2">
                        <p class="stickyBottomArrivalFlightTime"></p>
                        <p class="stickyBottomDestCity"></p>
                    </div>
                    <div class="col-md-3 text-right">
                        <p class="stickyBottomPrice"></p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="row">
                    <div class="col-md-5"></div>
                    <div class="col-md-7">
                        <div class="stickyBottomTotalAmount pull-left">
                            <p class="text-right font-11">Total Amount</p>
                            <p class="stickyBottomFinalPrice text-right">₹6970</p>
                        </div>
                        <form method="post" class="finalform" action="/bookingDetails">
                            <input type="hidden" name="triptype" value="DOMR">
                            <div class="finalonwardform" style="display: none;"></div>
                            <div class="finalreturnform" style="display: none"></div>
                            <input class="btn btn-primary pull-right" type="submit" value="Book" />
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
@section("customScripts")
<script type="text/javascript">

// set current search url
$.cookie("search-url", window.location.href);

var selectedOnwardPrice = 0;
var selectedReturnPrice = 0;

var flightresult = "{}";
var stopsFilter = [];
var fromNumber = 0;
var toNumber = 1000000;
var airlines = [];
var onwardDepartTimeFilter = [];
var returnDepartTimeFilter = [];
var onwardSortOrder = 0;
var onwardSortType = 'Price';
var returnSortOrder = 0;
var returnSortType = 'Price';
var csrf = "{{ csrf_token() }}";

function populateData(result) {
    let htmlData = '';
    let formData = '';
    let onwardAirlineCodes = [];
    let returnAirlineCodes = [];
    for(let i = 0; i < result.onward_flight_data.length; i++) {
        let refundable = "Refundable";
        if(result.onward_flight_data[i].is_non_refundable == true) {
            refundable = "Non-Refundable";
        }
        onwardAirlineCodes = [];
        let depart_date = moment(result.onward_flight_data[i].depart_datetime).format("ddd, MMM DD");
        let arrival_date = moment(result.onward_flight_data[i].arrival_datetime).format("ddd, MMM DD");
        let depart_time = moment(result.onward_flight_data[i].depart_datetime).format("HH:mm");
        let arrival_time = moment(result.onward_flight_data[i].arrival_datetime).format("HH:mm");
        formData = '<form class="onward_form"> <input type="hidden" name="searchid" value="<?= $searchid ?>" /> <input type="hidden" name="intl" value="' + result.intl + '" /> <input type="hidden" name="adults" value="<?= $adults ?>" /> <input type="hidden" name="childs" value="<?= $childs ?>" /> <input type="hidden" name="infants" value="<?= $infants ?>" /> <input type="hidden" name="onward_trackId" value="' + result.onward_trackId + '" /> <input type="hidden" name="_token" value="' + csrf + '"> <input type="hidden" name="onward_validatingCarrier" value="' + result.onward_flight_data[i].validating_carrier + '" /> <input type="hidden" name="onward_price" value="' + result.onward_flight_data[i].fare + '" />';
        for(let j = 0; j < result.onward_flight_data[i].flight_details.length; j++) {
            formData += '<input type="hidden" name="onward_flightId[]" value="' + result.onward_flight_data[i].flight_details[j].FlightID + '" /> <input type="hidden" name="onward_flightNum[]" value="' + result.onward_flight_data[i].flight_details[j].FlightNum + '" /> <input type="hidden" name="onward_carrierId[]" value="' + result.onward_flight_data[i].flight_details[j].CarrierCode + '" /> <input type="hidden" name="onward_aircraftType[]" value="' + result.onward_flight_data[i].flight_details[j].AirCraftType + '" /> <input type="hidden" name="onward_origin[]" value="' + result.onward_flight_data[i].flight_details[j].Origin + '" /> <input type="hidden" name="onward_destination[]" value="' + result.onward_flight_data[i].flight_details[j].Destination + '" /> <input type="hidden" name="onward_departureDateTime[]" value="' + result.onward_flight_data[i].flight_details[j].DepartureDateTime + '" /> <input type="hidden" name="onward_arrivalDateTime[]" value="' + result.onward_flight_data[i].flight_details[j].ArrivalDateTime + '" /> <input type="hidden" name="onward_classCode[]" value="' + result.onward_flight_data[i].flight_details[j].ClassCode + '" /> <input type="hidden" name="onward_equipmentType[]" value="' + result.onward_flight_data[i].flight_details[j].AirEquipType + '" /> <input type="hidden" name="onward_operatingCarrierId[]" value="' + result.onward_flight_data[i].flight_details[j].CarrierCode + '" /> <input type="hidden" name="onward_meal[]" value="' + result.onward_flight_data[i].flight_details[j].MealCode.MealCode + '" /> <input type="hidden" name="onward_orgTerminal[]" value="' + result.onward_flight_data[i].flight_details[j].OrgTerminal + '" /> <input type="hidden" name="onward_desTerminal[]" value="' + result.onward_flight_data[i].flight_details[j].DesTerminal + '" /> <input type="hidden" name="onward_majorClassCode[]" value="' + result.onward_flight_data[i].flight_details[j].MajorClassCode + '" /> <input type="hidden" name="onward_duration[]" value="' + result.onward_flight_data[i].flight_details[j].Duration + '" /> <input type="hidden" name="onward_marriageGroup[]" value="' + result.onward_flight_data[i].flight_details[j].MarriageGroup + '" /> <input type="hidden" name="onward_isStopAirport[]" value="' + result.onward_flight_data[i].flight_details[j].IsStopAirport + '" /> <input type="hidden" name="onward_apiProvider[]" value="' + result.onward_flight_data[i].api_provider + '" /> <input type="hidden" name="onward_baggage[weight][]" value="' + result.onward_flight_data[i].flight_details[j].Baggage.Weight + '" /> <input type="hidden" name="onward_baggage[unit][]" value="' + result.onward_flight_data[i].flight_details[j].Baggage.Unit + '" /> <input type="hidden" name="onward_baggage[pieces][]" value="' + result.onward_flight_data[i].flight_details[j].Baggage.Pieces + '" />';
            onwardAirlineCodes.push(result.onward_flight_data[i].flight_details[j].CarrierCode + "-" + result.onward_flight_data[i].flight_details[j].FlightNum);
        }
        formData += '</form>';
        htmlData += '<li> <div class="booking-item-container"> <div class="booking-item">';
        htmlData += '<div class="row hidden-xs hidden-sm"> <div class="roundtrip-col"> <div class="roundtrip-radio-box"> <input data-airline-codes="' + onwardAirlineCodes.join("|") + '" data-logo="/img/airline-logo/' + result.onward_flight_data[i].carrier_code.toLowerCase() + '.png" data-airline="' + result.onward_flight_data[i].airline + '" data-fare="' + result.onward_flight_data[i].fare + '" data-depart="' + depart_time + '" data-arrival="' + arrival_time + '" data-org="' + result.onward_flight_data[i].org + '" data-dest="' + result.onward_flight_data[i].dest + '" class="i-radio fromRoundTrip-radio" type="radio" name="fromRoundTrip"/>'+ formData +' </div></div><div class="roundtrip-col"> <div class="booking-item-airline-logo"> <img src="/img/airline-logo/' + result.onward_flight_data[i].carrier_code.toLowerCase() + '.png" alt="Image Alternative text" title="Image Title"/> <p>' + result.onward_flight_data[i].airline + '</p></div></div><div class="roundtrip-col"> <div class="booking-item-flight-details"> <div class="booking-item-departure"> <h5>' + depart_time + '</h5> </div></div></div><div class="roundtrip-col"> <div class="booking-item-flight-details"> <div class="booking-item-arrival"> <h5>' + arrival_time + '</h5> </div></div></div><div class="roundtrip-col"> <h5>' + Math.floor(result.onward_flight_data[i].duration/60) + 'h ' + result.onward_flight_data[i].duration % 60 + 'm</h5> <p class="search-list-p">' + result.onward_flight_data[i].stops +' stop</p></div><div class="roundtrip-col text-center"><span class="booking-item-price">₹' + rupeeFormat(result.onward_flight_data[i].fare) + '</span> <span class="label label-default refundable-badge">' + refundable + '</span><p class="search-list-p flight-details-button flight-details-click" style="font-size: 10px; margin-top: 4px;"><i class="fa fa-chevron-down" aria-hidden="true"></i><i class="fa fa-chevron-up" aria-hidden="true"></i> Flight Details</p> </div></div>';
        htmlData += '<div class="row hidden-md hidden-lg hidden-xl"><div class="col-sm-12" style="display: flex;flex-direction: row;justify-content: space-between;"> <div class="booking-item-airline-logo" style="max-width: 40px;"> <img src="/img/airline-logo/' + result.onward_flight_data[i].carrier_code.toLowerCase() + '.png" alt="Image Alternative text" title="Image Title" style="width: 21px;"> <p style=" font-size: 9px;">' + result.onward_flight_data[i].airline + '</p></div><div style=" line-height: 1.3;"><div style=""><strong style=" font-size: 13px;">' + depart_time + '</strong></div><div style=" font-size: 10px;">' + Math.floor(result.onward_flight_data[i].duration/60) + 'h ' + result.onward_flight_data[i].duration % 60 + 'm</div></div><div style=" line-height: 1.3;"><div><strong style=" font-size: 13px;">' + arrival_time + '</strong></div><div style=" font-size: 10px;">' + result.onward_flight_data[i].stops +' stop</div><div style=" font-size: 14px; color: #2e80b9;">₹' + rupeeFormat(result.onward_flight_data[i].fare) + '</div></div></div></div>';
        htmlData += '</div><div class="booking-item-details hidden-xs hidden-sm"> <div class="row"> <div class="col-md-12 search-tabs search-tabs-bg"> <div class="tabbable detailTab"> <ul class="nav nav-pills nav-justified" id="detailTab' + i + '"> <li class="active"><a href="#tab-o-1-' + i + '" data-toggle="tab">Basic Details</a> </li><li><a href="#tab-o-2-' + i + '" data-toggle="tab">Fare Breakup</a> </li> <li><a href="#tab-o-3-' + i + '" data-toggle="tab">Baggage Rules</a> </li> <li><a href="#tab-o-4-' + i + '" data-toggle="tab">Fare Rules</a> </li> </ul> <div class="tab-content"> <div class="tab-pane fade in active" id="tab-o-1-' + i + '">';
        for(let j = 0; j < result.onward_flight_data[i].flight_details.length; j++) {
            if(j != 0) {
                let landingTime = moment(result.onward_flight_data[i].flight_details[j-1].ArrivalDateTime);
                let takeOffTime = moment(result.onward_flight_data[i].flight_details[j].DepartureDateTime);
                let stopTime = takeOffTime.diff(landingTime);
                htmlData += '<h5>Stopover: ' + result.onward_flight_data[i].flight_details[j].OriginAirportCity + ' (' + result.onward_flight_data[i].flight_details[j].Origin + ') ' + moment.utc(stopTime).format('h[h] mm[m]') + '</h5>';
            }
            let flight_depart_time = moment(result.onward_flight_data[i].flight_details[j].DepartureDateTime).format("h:mm A");
            let flight_arrival_time = moment(result.onward_flight_data[i].flight_details[j].ArrivalDateTime).format("h:mm A");
            htmlData += '<h5 class="list-title">' + result.onward_flight_data[i].flight_details[j].OriginAirportCity + ' (' + result.onward_flight_data[i].flight_details[j].Origin + ') to ' + result.onward_flight_data[i].flight_details[j].DestinationAirportCity + ' (' + result.onward_flight_data[i].flight_details[j].Destination + ')</h5> <ul class="list"> <li>' + result.onward_flight_data[i].flight_details[j].AirlineName + ' ' + result.onward_flight_data[i].flight_details[j].CarrierCode + '-' + result.onward_flight_data[i].flight_details[j].FlightNum + '</li><li>' + result.onward_flight_data[i].flight_details[j].MajorClassCode + '</li><li>Depart ' + flight_depart_time + ' Arrive ' + flight_arrival_time + '</li><li>Duration: ' + Math.floor(result.onward_flight_data[i].flight_details[j].Duration/60) + 'h ' + result.onward_flight_data[i].flight_details[j].Duration % 60 + 'm</li></ul>';
        }
        htmlData += '<p>Total trip time: ' + Math.floor(result.onward_flight_data[i].duration/60) + 'h ' + result.onward_flight_data[i].duration % 60 + 'm</p></div>';
        let tab2 = '<div class="tab-pane fade lh-2" id="tab-o-2-' + i + '"><div><strong>Base Fare</strong> = ₹ ' + rupeeFormat(result.onward_flight_data[i].basefare) + '/-</div><div><strong>Taxes & Fees</strong> = ₹ ' + rupeeFormat(result.onward_flight_data[i].fare - result.onward_flight_data[i].basefare) + '/-</div><div><strong>Total Fare</strong> = ₹ ' + rupeeFormat(result.onward_flight_data[i].fare) + '/-</div></div>';
        let bgg = "";
        if(result.onward_flight_data[i].baggage.Unit=="kg" || result.onward_flight_data[i].baggage.Weight!="") {
            bgg = result.onward_flight_data[i].baggage.Weight + " kg / Person"
        }
        else if(result.onward_flight_data[i].baggage.Unit=="kg" || result.onward_flight_data[i].baggage.Weight=="") {
            bgg = "no info / Person"
        }
        else if(result.onward_flight_data[i].baggage.Weight==null && result.onward_flight_data[i].baggage.Unit==null) {
            bgg = result.onward_flight_data[i].baggage.Pieces + " Pieces / Person";
        }
        let tab3 = '<div class="tab-pane fade lh-2" id="tab-o-3-' + i + '"><div><strong>Check-in: </strong>' + bgg + '</div><div><strong>Cabin: </strong>7kg / Person</div></div>';

        let cancelFee = "N/A";
        let dateChangeFee = "N/A";
        let fareproCancelFee = "N/A";
        let faresproDateChangeFee = "N/A";

        if(refundable == "Refundable") {
            fareproCancelFee = "₹ {{ setting('farespro-fees.cancellation_fee') }}";
            faresproDateChangeFee = "₹ {{ setting('farespro-fees.date_change_fee') }}";
            cancelFee = result.onward_flight_data[i].cancelFee;
            dateChangeFee = result.onward_flight_data[i].dateChangeFee;
        }

        let tab4 = '<div class="tab-pane fade lh-2" id="tab-o-4-' + i + '">';
        tab4 += '<div>Cancellation<span style="float: right;">' + cancelFee + '</span></div><div>FaresPro Cancellation Fee<span style="float: right;">' + fareproCancelFee + '</span></div><div>Date Change<span style="float: right;">' + dateChangeFee + '</span></div><div>FaresPro Date Change Fee<span style="float: right;">' + faresproDateChangeFee + '</span></div><br/><div>Minimum 24h before the scheduled flight departure.</div><br/><div>Airline penalty needs to be reconfirmed prior to any ammendments or cancellation.</div><br/><div>Disclaimer: Airline Penalty changes are indicative and can change without any prior notice.</div><br/><div>N/A means Not Available. Please check with airline for penalty information.</div>';
        tab4 += '</div>';

        htmlData += tab2 + tab3 + tab4 + '</div></div></div></div></li>';
    }
    $(".onward-flight-list").html(htmlData);
    $(".onward-flight-list .i-radio").first().prop('checked', true);
    $(".onward-flight-list .booking-item-container").first().addClass("active-background");

    htmlData = '';
    formData = '';
    for(let i = 0; i < result.return_flight_data.length; i++) {
        let refundable = "Refundable";
        if(result.return_flight_data[i].is_non_refundable == true) {
            refundable = "Non-Refundable";
        }
        returnAirlineCodes = [];
        let depart_date = moment(result.return_flight_data[i].depart_datetime).format("ddd, MMM DD");
        let arrival_date = moment(result.return_flight_data[i].arrival_datetime).format("ddd, MMM DD");
        let depart_time = moment(result.return_flight_data[i].depart_datetime).format("HH:mm");
        let arrival_time = moment(result.return_flight_data[i].arrival_datetime).format("HH:mm");
        formData = '<form class="return_form"> <input type="hidden" name="searchid" value="<?= $searchid ?>" /> <input type="hidden" name="intl" value="' + result.intl + '" /> <input type="hidden" name="adults" value="<?= $adults ?>" /> <input type="hidden" name="childs" value="<?= $childs ?>" /> <input type="hidden" name="infants" value="<?= $infants ?>" /> <input type="hidden" name="return_trackId" value="' + result.return_trackId + '" /> <input type="hidden" name="_token" value="' + csrf + '"> <input type="hidden" name="return_validatingCarrier" value="' + result.return_flight_data[i].validating_carrier + '" /> <input type="hidden" name="return_price" value="' + result.return_flight_data[i].fare + '" />';
        for(let j = 0; j < result.return_flight_data[i].flight_details.length; j++) {
            formData += '<input type="hidden" name="return_flightId[]" value="' + result.return_flight_data[i].flight_details[j].FlightID + '" /> <input type="hidden" name="return_flightNum[]" value="' + result.return_flight_data[i].flight_details[j].FlightNum + '" /> <input type="hidden" name="return_carrierId[]" value="' + result.return_flight_data[i].flight_details[j].CarrierCode + '" /> <input type="hidden" name="return_aircraftType[]" value="' + result.return_flight_data[i].flight_details[j].AirCraftType + '" /> <input type="hidden" name="return_origin[]" value="' + result.return_flight_data[i].flight_details[j].Origin + '" /> <input type="hidden" name="return_destination[]" value="' + result.return_flight_data[i].flight_details[j].Destination + '" /> <input type="hidden" name="return_departureDateTime[]" value="' + result.return_flight_data[i].flight_details[j].DepartureDateTime + '" /> <input type="hidden" name="return_arrivalDateTime[]" value="' + result.return_flight_data[i].flight_details[j].ArrivalDateTime + '" /> <input type="hidden" name="return_classCode[]" value="' + result.return_flight_data[i].flight_details[j].ClassCode + '" /> <input type="hidden" name="return_equipmentType[]" value="' + result.return_flight_data[i].flight_details[j].AirEquipType + '" /> <input type="hidden" name="return_operatingCarrierId[]" value="' + result.return_flight_data[i].flight_details[j].CarrierCode + '" /> <input type="hidden" name="return_meal[]" value="' + result.return_flight_data[i].flight_details[j].MealCode.MealCode + '" /> <input type="hidden" name="return_orgTerminal[]" value="' + result.return_flight_data[i].flight_details[j].OrgTerminal + '" /> <input type="hidden" name="return_desTerminal[]" value="' + result.return_flight_data[i].flight_details[j].DesTerminal + '" /> <input type="hidden" name="return_majorClassCode[]" value="' + result.return_flight_data[i].flight_details[j].MajorClassCode + '" /> <input type="hidden" name="return_duration[]" value="' + result.return_flight_data[i].flight_details[j].Duration + '" /> <input type="hidden" name="return_marriageGroup[]" value="' + result.return_flight_data[i].flight_details[j].MarriageGroup + '" /> <input type="hidden" name="return_isStopAirport[]" value="' + result.return_flight_data[i].flight_details[j].IsStopAirport + '" /> <input type="hidden" name="return_apiProvider[]" value="' + result.return_flight_data[i].api_provider + '" /> <input type="hidden" name="return_baggage[weight][]" value="' + result.return_flight_data[i].flight_details[j].Baggage.Weight + '" /> <input type="hidden" name="return_baggage[unit][]" value="' + result.return_flight_data[i].flight_details[j].Baggage.Unit + '" /> <input type="hidden" name="return_baggage[pieces][]" value="' + result.return_flight_data[i].flight_details[j].Baggage.Pieces + '" />';
            returnAirlineCodes.push(result.return_flight_data[i].flight_details[j].CarrierCode + "-" + result.return_flight_data[i].flight_details[j].FlightNum);
        }
        formData += '</form>';
        htmlData += '<li> <div class="booking-item-container"> <div class="booking-item">';
        htmlData += '<div class="row hidden-xs hidden-sm"> <div class="roundtrip-col"> <div class="roundtrip-radio-box"> <input data-airline-codes="' + returnAirlineCodes.join('|') + '" data-logo="/img/airline-logo/' + result.return_flight_data[i].carrier_code.toLowerCase() + '.png" data-airline="' + result.return_flight_data[i].airline + '" data-fare="' + result.return_flight_data[i].fare + '" data-depart="' + depart_time + '" data-arrival="' + arrival_time + '" data-org="' + result.return_flight_data[i].org + '" data-dest="' + result.return_flight_data[i].dest + '" class="i-radio toRoundTrip-radio" type="radio" name="toRoundTrip"/>'+ formData +' </div></div><div class="roundtrip-col"> <div class="booking-item-airline-logo"> <img src="/img/airline-logo/' + result.return_flight_data[i].carrier_code.toLowerCase() + '.png" alt="Image Alternative text" title="Image Title"/> <p>' + result.return_flight_data[i].airline + '</p></div></div><div class="roundtrip-col"> <div class="booking-item-flight-details"> <div class="booking-item-departure"> <h5>' + depart_time + '</h5> </div></div></div><div class="roundtrip-col"> <div class="booking-item-flight-details"> <div class="booking-item-arrival"> <h5>' + arrival_time + '</h5> </div></div></div><div class="roundtrip-col"> <h5>' + Math.floor(result.return_flight_data[i].duration/60) + 'h ' + result.return_flight_data[i].duration % 60 + 'm</h5> <p class="search-list-p">' + result.return_flight_data[i].stops +' stop</p></div><div class="roundtrip-col text-center"><span class="booking-item-price">₹' + rupeeFormat(result.return_flight_data[i].fare) + '</span> <span class="label label-default refundable-badge">' + refundable + '</span> <p class="search-list-p flight-details-button flight-details-click" style="font-size: 10px; margin-top: 4px;"><i class="fa fa-chevron-down" aria-hidden="true"></i><i class="fa fa-chevron-up" aria-hidden="true"></i> Flight Details</p> </div></div>';
        htmlData += '<div class="row hidden-md hidden-lg hidden-xl"><div class="col-sm-12" style="display: flex;flex-direction: row;justify-content: space-between;"> <div class="booking-item-airline-logo" style="max-width: 40px;"> <img src="/img/airline-logo/' + result.return_flight_data[i].carrier_code.toLowerCase() + '.png" alt="Image Alternative text" title="Image Title" style="width: 21px;"> <p style=" font-size: 9px;">' + result.return_flight_data[i].airline + '</p></div><div style=" line-height: 1.3;"><div style=""><strong style=" font-size: 13px;">' + depart_time + '</strong></div><div style=" font-size: 10px;">' + Math.floor(result.return_flight_data[i].duration/60) + 'h ' + result.return_flight_data[i].duration % 60 + 'm</div></div><div style=" line-height: 1.3;"><div><strong style=" font-size: 13px;">' + arrival_time + '</strong></div><div style=" font-size: 10px;">' + result.return_flight_data[i].stops +' stop</div><div style=" font-size: 14px; color: #2e80b9;">₹' + rupeeFormat(result.return_flight_data[i].fare) + '</div></div></div></div>';
        htmlData += '</div><div class="booking-item-details hidden-xs hidden-sm"> <div class="row"> <div class="col-md-12 search-tabs search-tabs-bg"> <div class="tabbable detailTab"> <ul class="nav nav-pills nav-justified" id="detailTab' + i + '"> <li class="active"><a href="#tab-r-1-' + i + '" data-toggle="tab">Basic Details</a> </li><li><a href="#tab-r-2-' + i + '" data-toggle="tab">Fare Breakup</a> </li> <li><a href="#tab-r-3-' + i + '" data-toggle="tab">Baggage Rules</a> </li> <li><a href="#tab-r-4-' + i + '" data-toggle="tab">Fare Rules</a> </li> </ul> <div class="tab-content"> <div class="tab-pane fade in active" id="tab-r-1-' + i + '">';
        for(let j = 0; j < result.return_flight_data[i].flight_details.length; j++) {
            if(j != 0) {
                let landingTime = moment(result.return_flight_data[i].flight_details[j-1].ArrivalDateTime);
                let takeOffTime = moment(result.return_flight_data[i].flight_details[j].DepartureDateTime);
                let stopTime = takeOffTime.diff(landingTime);
                htmlData += '<h5>Stopover: ' + result.return_flight_data[i].flight_details[j].OriginAirportCity + ' (' + result.return_flight_data[i].flight_details[j].Origin + ') ' + moment.utc(stopTime).format('h[h] mm[m]') + '</h5>';
            }
            let flight_depart_time = moment(result.return_flight_data[i].flight_details[j].DepartureDateTime).format("h:mm A");
            let flight_arrival_time = moment(result.return_flight_data[i].flight_details[j].ArrivalDateTime).format("h:mm A");
            htmlData += '<h5 class="list-title">' + result.return_flight_data[i].flight_details[j].OriginAirportCity + ' (' + result.return_flight_data[i].flight_details[j].Origin + ') to ' + result.return_flight_data[i].flight_details[j].DestinationAirportCity + ' (' + result.return_flight_data[i].flight_details[j].Destination + ')</h5> <ul class="list"> <li>' + result.return_flight_data[i].flight_details[j].AirlineName + ' ' + result.return_flight_data[i].flight_details[j].CarrierCode + '-' + result.return_flight_data[i].flight_details[j].FlightNum + '</li><li>' + result.return_flight_data[i].flight_details[j].MajorClassCode + '</li><li>Depart ' + flight_depart_time + ' Arrive ' + flight_arrival_time + '</li><li>Duration: ' + Math.floor(result.return_flight_data[i].flight_details[j].Duration/60) + 'h ' + result.return_flight_data[i].flight_details[j].Duration % 60 + 'm</li></ul>';
        }
        htmlData += '<p>Total trip time: ' + Math.floor(result.return_flight_data[i].duration/60) + 'h ' + result.return_flight_data[i].duration % 60 + 'm</p></div>';
        let tab2 = '<div class="tab-pane fade lh-2" id="tab-r-2-' + i + '"><div><strong>Base Fare</strong> = ₹ ' + rupeeFormat(result.return_flight_data[i].basefare) + '/-</div><div><strong>Taxes & Fees</strong> = ₹ ' + rupeeFormat(result.return_flight_data[i].fare - result.return_flight_data[i].basefare) + '/-</div><div><strong>Total Fare</strong> = ₹ ' + rupeeFormat(result.return_flight_data[i].fare) + '/-</div></div>';
        let bgg = "";
        if(result.return_flight_data[i].baggage.Unit=="kg" && result.return_flight_data[i].baggage.Weight!="") {
            bgg = result.return_flight_data[i].baggage.Weight + " kg / Person"
        }
        else if(result.return_flight_data[i].baggage.Unit=="kg" && result.return_flight_data[i].baggage.Weight=="") {
            bgg = "no info / Person"
        }
        else if(result.return_flight_data[i].baggage.Weight==null && result.return_flight_data[i].baggage.Unit==null) {
            bgg = result.return_flight_data[i].baggage.Pieces + " Pieces / Person";
        }
        let tab3 = '<div class="tab-pane fade lh-2" id="tab-r-3-' + i + '"><div><strong>Check-in: </strong>' + bgg + '</div><div><strong>Cabin: </strong>7kg / Person</div></div>';

        let cancelFee = "N/A";
        let dateChangeFee = "N/A";
        let fareproCancelFee = "N/A";
        let faresproDateChangeFee = "N/A";

        if(refundable == "Refundable") {
            fareproCancelFee = "₹ 200";
            faresproDateChangeFee = "₹ 200";
            cancelFee = result.return_flight_data[i].cancelFee;
            dateChangeFee = result.return_flight_data[i].dateChangeFee;
        }

        let tab4 = '<div class="tab-pane fade lh-2" id="tab-r-4-' + i + '">';
        tab4 += '<div>Cancellation<span style="float: right;">' + cancelFee + '</span></div><div>FaresPro Cancellation Fee<span style="float: right;">' + fareproCancelFee + '</span></div><div>Date Change<span style="float: right;">' + dateChangeFee + '</span></div><div>FaresPro Date Change Fee<span style="float: right;">' + faresproDateChangeFee + '</span></div><br/><div>Minimum 24h before the scheduled flight departure.</div><br/><div>Airline penalty needs to be reconfirmed prior to any ammendments or cancellation.</div><br/><div>Disclaimer: Airline Penalty changes are indicative and can change without any prior notice.</div><br/><div>N/A means Not Available. Please check with airline for penalty information.</div>';
        tab4 += '</div>';

        htmlData += tab2 + tab3 + tab4 + '</div></div></div></div></li>';
    }
    $(".return-flight-list").html(htmlData);
    $(".return-flight-list .i-radio").first().prop('checked', true);
    $(".return-flight-list .booking-item-container").first().addClass("active-background");

    $(".stickyBottom .onward .stickyBottomAirlineLogo").css("background-image", "url(/img/airline-logo/" + result.onward_flight_data[0].carrier_code.toLowerCase() + ".png)");
    $(".stickyBottom .return .stickyBottomAirlineLogo").css("background-image", "url(/img/airline-logo/" + result.return_flight_data[0].carrier_code.toLowerCase() + ".png)");

    let depart_time = moment(result.onward_flight_data[0].depart_datetime).format("HH:mm");
    $(".stickyBottom .onward .stickyBottomDepartFlightTime").first().html(depart_time);
    depart_time = moment(result.return_flight_data[0].depart_datetime).format("HH:mm");
    $(".stickyBottom .return .stickyBottomDepartFlightTime").first().html(depart_time);

    let arrival_time = moment(result.onward_flight_data[0].arrival_datetime).format("HH:mm");
    $(".stickyBottom .onward .stickyBottomArrivalFlightTime").first().html(arrival_time);
    arrival_time = moment(result.return_flight_data[0].arrival_datetime).format("HH:mm");
    $(".stickyBottom .return .stickyBottomArrivalFlightTime").first().html(arrival_time);

    $(".stickyBottom .onward .stickyBottomOrgCity").first().html(result.onward_flight_data[0].org_city);
    $(".stickyBottom .return .stickyBottomDestCity").first().html(result.return_flight_data[0].dest_city);

    $(".stickyBottom .onward .stickyBottomPrice").first().html("₹" + rupeeFormat(result.onward_flight_data[0].fare));
    $(".stickyBottom .return .stickyBottomPrice").first().html("₹" + rupeeFormat(result.return_flight_data[0].fare));

    $("#mobile-depart-price").html("₹" + rupeeFormat(result.onward_flight_data[0].fare));
    $("#mobile-return-price").html("₹" + rupeeFormat(result.return_flight_data[0].fare));    

    $(".stickyBottom .onward .stickyBottomOrgCity").first().html(result.onward_flight_data[0].org);
    $(".stickyBottom .return .stickyBottomOrgCity").first().html(result.return_flight_data[0].org);

    $(".stickyBottom .onward .stickyBottomDestCity").first().html(result.onward_flight_data[0].dest);
    $(".stickyBottom .return .stickyBottomDestCity").first().html(result.return_flight_data[0].dest);

    $(".stickyBottom .onward .stickyBottomAirlineName").first().html(result.onward_flight_data[0].airline);
    $(".stickyBottom .return .stickyBottomAirlineName").first().html(result.return_flight_data[0].airline);

    let airCodes = [];
    for($i=0; $i<result.onward_flight_data[0].flight_details.length; $i++) {
        airCodes.push(result.onward_flight_data[0].flight_details[$i].CarrierCode + "-" + result.onward_flight_data[0].flight_details[$i].FlightNum);
    }
    $(".stickyBottom .onward .stickyBottomAirlineCode").first().html(airCodes.join("|"));
    $("#mobile-depart-airline-codes").html(airCodes.join("|"));
    airCodes = [];
    for($i=0; $i<result.return_flight_data[0].flight_details.length; $i++) {
        airCodes.push(result.return_flight_data[0].flight_details[$i].CarrierCode + "-" + result.return_flight_data[0].flight_details[$i].FlightNum);
    }
    $(".stickyBottom .return .stickyBottomAirlineCode").first().html(airCodes.join("|"));
    $("#mobile-return-airline-codes").html(airCodes.join("|"));

    $('.finalonwardform').html($('.onward_form').first().html());
    $('.finalreturnform').html($('.return_form').first().html());

    $(".stickyBottomFinalPrice").html("₹" + rupeeFormat(result.onward_flight_data[0].fare + result.return_flight_data[0].fare));

    selectedOnwardPrice = result.onward_flight_data[0].fare;
    selectedReturnPrice = result.return_flight_data[0].fare;   

    $("#mobile-final-price").html("Total Amount: ₹" + rupeeFormat(selectedOnwardPrice + selectedReturnPrice));     

    $(".stickyBottom").show();

    $('.i-radio').iCheck({
        radioClass: 'i-radio'
    });


    // On selecting Onward Flight Update Data
    $('.onward-flight-list .i-radio.fromRoundTrip-radio').on('ifChecked', function(event) {

        onwardAirlineCodes = [];

        $(".stickyBottom .onward .stickyBottomAirlineLogo").css("background-image", "url(" + $(this).data( 'logo' ) + ")");

        $(".stickyBottom .onward .stickyBottomDepartFlightTime").first().html($(this).data( 'depart' ));

        $(".stickyBottom .onward .stickyBottomArrivalFlightTime").first().html($(this).data( 'arrival' ));

        $(".stickyBottom .onward .stickyBottomPrice").first().html("₹" + rupeeFormat($(this).data( 'fare' )));

        $(".stickyBottom .onward .stickyBottomOrgCity").first().html($(this).data( 'org' ));

        $(".stickyBottom .onward .stickyBottomDestCity").first().html($(this).data( 'dest' ));

        $(".stickyBottom .onward .stickyBottomAirlineName").first().html($(this).data( 'airline' ));

        $(".stickyBottom .onward .stickyBottomAirlineCode").first().html($(this).data( 'airline-codes' ));

        selectedOnwardPrice = $(this).data( 'fare' );

        $("#mobile-depart-airline-codes").html($(this).data( 'airline-codes' ));

        $(".stickyBottomFinalPrice").html("₹" + rupeeFormat(selectedOnwardPrice + selectedReturnPrice));

        $("#mobile-final-price").html("Total: ₹" + rupeeFormat(selectedOnwardPrice + selectedReturnPrice));

        $('.finalonwardform').html($(this).parent().next().html());
    });

    // On selecting Return Fight Update Data
    $('.return-flight-list .i-radio.toRoundTrip-radio').on('ifChecked', function(event) {
        
        returnAirlineCodes = [];

        $(".stickyBottom .return .stickyBottomAirlineLogo").css("background-image", "url(" + $(this).data( 'logo' ) + ")");

        $(".stickyBottom .return .stickyBottomDepartFlightTime").first().html($(this).data( 'depart' ));

        $(".stickyBottom .return .stickyBottomArrivalFlightTime").first().html($(this).data( 'arrival' ));

        $(".stickyBottom .return .stickyBottomPrice").first().html("₹" + rupeeFormat($(this).data( 'fare' )));

        $(".stickyBottom .return .stickyBottomOrgCity").first().html($(this).data( 'org' ));

        $(".stickyBottom .return .stickyBottomDestCity").first().html($(this).data( 'dest' ));

        $(".stickyBottom .return .stickyBottomAirlineName").first().html($(this).data( 'airline' ));

        $(".stickyBottom .return .stickyBottomAirlineCode").first().html($(this).data( 'airline-codes' ));

        selectedReturnPrice = $(this).data( 'fare' );

        $("#mobile-return-airline-codes").html($(this).data( 'airline-codes' ));

        $(".stickyBottomFinalPrice").html("₹" + rupeeFormat(selectedOnwardPrice + selectedReturnPrice));

        $("#mobile-final-price").html("Total: ₹" + rupeeFormat(selectedOnwardPrice + selectedReturnPrice));

        $('.finalreturnform').html($(this).parent().next().html());
    });
}

function applyFilter(type=0) {
    let tempResult = JSON.parse(JSON.stringify(flightresult));
    let onwardTempData = tempResult.onward_flight_data;
    let returnTempData = tempResult.return_flight_data;
    onwardTempData = onwardTempData.filter(function(flightdata){return flightdata.fare<=toNumber});
    onwardTempData = onwardTempData.filter(function(flightdata){return flightdata.fare>=fromNumber});
    returnTempData = returnTempData.filter(function(flightdata){return flightdata.fare<=toNumber});
    returnTempData = returnTempData.filter(function(flightdata){return flightdata.fare>=fromNumber});
    if(stopsFilter.length!=0) {
        onwardTempData = onwardTempData.filter(function(flightdata){
            if((flightdata.stops>=2 || flightdata.stops>=2) && stopsFilter.includes(2)) {
                return true;
            }
            return stopsFilter.includes(flightdata.stops) || stopsFilter.includes(flightdata.stops);
        });
        returnTempData = returnTempData.filter(function(flightdata){
            if((flightdata.stops>=2 || flightdata.stops>=2) && stopsFilter.includes(2)) {
                return true;
            }
            return stopsFilter.includes(flightdata.stops) || stopsFilter.includes(flightdata.stops);
        }); 
    }
    if(airlines.length!=0) {
        onwardTempData = onwardTempData.filter(function(flightdata){
            return airlines.includes(flightdata.carrier_code) || airlines.includes(flightdata.carrier_code);
        });
        returnTempData = returnTempData.filter(function(flightdata){
            return airlines.includes(flightdata.carrier_code) || airlines.includes(flightdata.carrier_code);
        });
    }
    if(onwardDepartTimeFilter.length!=0) {
        onwardTempData = onwardTempData.filter(function(flightdata){
            if(moment(flightdata.depart_datetime.split("T")[1], "HH:mm:ss").isBetween(moment('12:00am', 'h:mma'), moment('6:00am', 'h:mma')) && onwardDepartTimeFilter.includes(0)) {
                return true;
            }
            if(moment(flightdata.depart_datetime.split("T")[1], "HH:mm:ss").isBetween(moment('6:00am', 'h:mma'), moment('12:00pm', 'h:mma')) && onwardDepartTimeFilter.includes(1)) {
                return true;
            }
            if(moment(flightdata.depart_datetime.split("T")[1], "HH:mm:ss").isBetween(moment('12:00pm', 'h:mma'), moment('6:00pm', 'h:mma')) && onwardDepartTimeFilter.includes(2)) {
                return true;
            }
            if(moment(flightdata.depart_datetime.split("T")[1], "HH:mm:ss").isBetween(moment('6:00pm', 'h:mma'), moment('12:00am', 'h:mma')) && onwardDepartTimeFilter.includes(3)) {
                return true;
            }
        });
    }
    if(returnDepartTimeFilter.length!=0) {
        returnTempData = returnTempData.filter(function(flightdata){
            if(moment(flightdata.depart_datetime.split("T")[1], "HH:mm:ss").isBetween(moment('12:00am', 'h:mma'), moment('6:00am', 'h:mma')) && returnDepartTimeFilter.includes(0)) {
                return true;
            }
            if(moment(flightdata.depart_datetime.split("T")[1], "HH:mm:ss").isBetween(moment('6:00am', 'h:mma'), moment('12:00pm', 'h:mma')) && returnDepartTimeFilter.includes(1)) {
                return true;
            }
            if(moment(flightdata.depart_datetime.split("T")[1], "HH:mm:ss").isBetween(moment('12:00pm', 'h:mma'), moment('6:00pm', 'h:mma')) && returnDepartTimeFilter.includes(2)) {
                return true;
            }
            if(moment(flightdata.depart_datetime.split("T")[1], "HH:mm:ss").isBetween(moment('6:00pm', 'h:mma'), moment('12:00am', 'h:mma')) && returnDepartTimeFilter.includes(3)) {
                return true;
            }
        });
    }

    if (type == 0 || type == 1) {
        if(onwardSortOrder==1) {
            switch(onwardSortType) {
                case 'Price': 
                   onwardTempData = _.sortBy(onwardTempData, [function(o) { return o.fare; }]).reverse();
                   break;

                case 'Duration': 
                   onwardTempData = _.sortBy(onwardTempData, [function(o) { return parseInt(o.duration[0]) }]).reverse();
                   break;

                case 'Arrival':
                    onwardTempData = _.sortBy(onwardTempData, [function(o) { return new moment(o.arrival_datetime)}]).reverse();
                    break;

                case 'Departure':
                    onwardTempData = _.sortBy(onwardTempData, [function(o) { return new moment(o.depart_datetime)}]).reverse();
                    break;

                case 'Stops':
                    onwardTempData = _.sortBy(onwardTempData, [function(o) { return o.stops}]).reverse();
                    break;
            }
        }
        else {
            switch(onwardSortType) {
                case 'Price': 
                   onwardTempData = _.sortBy(onwardTempData, [function(o) { return o.fare; }]);
                   break;

                case 'Duration': 
                   onwardTempData = _.sortBy(onwardTempData, [function(o) { return parseInt(o.duration[0]) }]);
                   break;

                case 'Arrival':
                    onwardTempData = _.sortBy(onwardTempData, [function(o) { return new moment(o.arrival_datetime)}]);
                    break;

                case 'Departure':
                    onwardTempData = _.sortBy(onwardTempData, [function(o) { return new moment(o.depart_datetime)}]);
                    break;

                case 'Stops':
                    onwardTempData = _.sortBy(onwardTempData, [function(o) { return o.stops}]);
                    break;

            }
        }
    }

    if (type == 0 || type == 2) {
        if(returnSortOrder==1) {
            switch(returnSortType) {
                case 'Price': 
                   returnTempData = _.sortBy(returnTempData, [function(o) { return o.fare; }]).reverse();
                   break;

                case 'Duration': 
                   returnTempData = _.sortBy(returnTempData, [function(o) { return parseInt(o.duration[0]) }]).reverse();
                   break;

                case 'Arrival':
                    returnTempData = _.sortBy(returnTempData, [function(o) { return new moment(o.arrival_datetime)}]).reverse();
                    break;

                case 'Departure':
                    returnTempData = _.sortBy(returnTempData, [function(o) { return new moment(o.depart_datetime)}]).reverse();
                    break;

                case 'Stops':
                    returnTempData = _.sortBy(returnTempData, [function(o) { return o.stops}]).reverse();
                    break;
            }
        }
        else {
            switch(returnSortType) {
                case 'Price': 
                   returnTempData = _.sortBy(returnTempData, [function(o) { return o.fare; }]);
                   break;

                case 'Duration': 
                   returnTempData = _.sortBy(returnTempData, [function(o) { return parseInt(o.duration[0]) }]);
                   break;

                case 'Arrival':
                    returnTempData = _.sortBy(returnTempData, [function(o) { return new moment(o.arrival_datetime)}]);
                    break;

                case 'Departure':
                    returnTempData = _.sortBy(returnTempData, [function(o) { return new moment(o.depart_datetime)}]);
                    break;

                case 'Stops':
                    returnTempData = _.sortBy(returnTempData, [function(o) { return o.stops}]);
                    break;

            }
        }
    }

    tempResult.onward_flight_data = onwardTempData;
    tempResult.return_flight_data = returnTempData;
    populateData(tempResult);
}

$.ajax({url: "<?php echo $api_url; ?>", success: function(result) {
    if(result.error == 1) {
        window.location.href = "/noFlights";
    }
    flightresult = result;
    $(".loader-col").hide();
    $(".flight-list-div").show();
    $(".booking-title-text").html("Round Trip Flights from <?= $org_city ?> to <?= $dest_city ?>");

    populateData(result);

    $(".price-slider").ionRangeSlider({
    min: Math.min(result.onward_min_price, result.return_min_price),
    max: Math.max(result.onward_max_price, result.return_max_price),
    type: 'double',
    prefix: "₹",
    prettify: false,
    hasGrid: true,
    onFinish: function (data) {
        fromNumber = data.fromNumber;
        toNumber = data.toNumber;
        applyFilter();
        }
    });
    
    $(".stopsFilterCheckbox").on('ifChanged', function(event) {
        if(event.target.checked) {
            stopsFilter.push(parseInt(event.target.value));
        }
        else {
            let i = stopsFilter.indexOf(parseInt(event.target.value));
            if(i != -1) {
                stopsFilter.splice(i, 1);
            }
        }
        applyFilter();
    });

    let airlineFilterHtml = '<h5 class="booking-filters-title">Airlines</h5>';
    for(let key in result.onward_airlines) {
        airlineFilterHtml += '<div class="checkbox"> <label> <input class="i-check airline-filter-i-check" type="checkbox" name="airlineFilterCheckbox[]" value="' + key + '"/>' + result.onward_airlines[key] + '<span class="pull-right">₹3215</span> </label> </div>';
    }
    
    for(let key in result.return_airlines) {
        if(!result.onward_airlines.hasOwnProperty(key)) {
            airlineFilterHtml += '<div class="checkbox"> <label> <input class="i-check airline-filter-i-check" type="checkbox" name="airlineFilterCheckbox[]" value="' + key + '"/>' + result.return_airlines[key] + '</label> </div>';
        }
    }

    $(".airlines-filter").html(airlineFilterHtml);

    $('.airline-filter-i-check').iCheck({
        checkboxClass: 'i-check'
    });

    $(".airline-filter-i-check").on('ifChanged', function(event) {
        console.log("event target");
        console.log(event.target.checked);
        if(event.target.checked) {
            airlines.push(event.target.value);
        }
        else {
            let i = airlines.indexOf(event.target.value);
            console.log("i");
            console.log(i);
            if(i != -1) {
                airlines.splice(i, 1);
            }
        }
        applyFilter();
    });

    $(".onward-depart-time-filter-checkbox").on('ifChanged', function(event) {
        if(event.target.checked) {
            onwardDepartTimeFilter.push(parseInt(event.target.value));
        }
        else {
            let i = onwardDepartTimeFilter.indexOf(parseInt(event.target.value));
            if(i != -1) {
                onwardDepartTimeFilter.splice(i, 1);
            }
        }
        applyFilter(1);
    });

    $(".return-depart-time-filter-checkbox").on('ifChanged', function(event) {
        if(event.target.checked) {
            returnDepartTimeFilter.push(parseInt(event.target.value));
        }
        else {
            let i = returnDepartTimeFilter.indexOf(parseInt(event.target.value));
            if(i != -1) {
                returnDepartTimeFilter.splice(i, 1);
            }
        }
        applyFilter(2);
    });

    $('.onward-sort-option').click(function() {
        if ($(this).hasClass("asc-sort")) {
            $(this).addClass("desc-sort");
            $(this).removeClass("asc-sort");
            onwardSortOrder = 1;
        }
        else if ($(this).hasClass("desc-sort")) {
            $(this).removeClass("desc-sort");
            $(this).addClass("asc-sort");
            onwardSortOrder = 0;
        }
        else {
            $(this).addClass("asc-sort");
            onwardSortOrder = 0;
        }
        if ($(this).hasClass("onward-depart-sort")) {
            onwardSortType = "Departure";
            $(".onward-arrive-sort, .onward-duration-sort, .onward-price-sort").removeClass("asc-sort");
            $(".onward-arrive-sort, .onward-duration-sort, .onward-price-sort").removeClass("desc-sort");
        }
        else if ($(this).hasClass("onward-arrive-sort")) {
            onwardSortType = "Arrival";
            $(".onward-depart-sort, .onward-duration-sort, .onward-price-sort").removeClass("asc-sort");
            $(".onward-depart-sort, .onward-duration-sort, .onward-price-sort").removeClass("desc-sort");
        }
        else if ($(this).hasClass("onward-duration-sort")) {
            onwardSortType = "Duration";
            $(".onward-depart-sort, .onward-arrive-sort, .onward-price-sort").removeClass("asc-sort");
            $(".onward-depart-sort, .onward-arrive-sort, .onward-price-sort").removeClass("desc-sort");
        }
        else if ($(this).hasClass("onward-price-sort")) {
            onwardSortType = "Price";
            $(".onward-depart-sort, .onward-duration-sort, .onward-arrive-sort").removeClass("asc-sort");
            $(".onward-depart-sort, .onward-duration-sort, .onward-arrive-sort").removeClass("desc-sort");
        }
        applyFilter();
    });


    $('.return-sort-option').click(function() {
        if ($(this).hasClass("asc-sort")) {
            $(this).addClass("desc-sort");
            $(this).removeClass("asc-sort");
            returnSortOrder = 1;
        }
        else if ($(this).hasClass("desc-sort")) {
            $(this).removeClass("desc-sort");
            $(this).addClass("asc-sort");
            returnSortOrder = 0;
        }
        else {
            $(this).addClass("asc-sort");
            returnSortOrder = 0;
        }
        if ($(this).hasClass("return-depart-sort")) {
            returnSortType = "Departure";
            $(".return-arrive-sort, .return-duration-sort, .return-price-sort").removeClass("asc-sort");
            $(".return-arrive-sort, .return-duration-sort, .return-price-sort").removeClass("desc-sort");
        }
        else if ($(this).hasClass("return-arrive-sort")) {
            returnSortType = "Arrival";
            $(".return-depart-sort, .return-duration-sort, .return-price-sort").removeClass("asc-sort");
            $(".return-depart-sort, .return-duration-sort, .return-price-sort").removeClass("desc-sort");
        }
        else if ($(this).hasClass("return-duration-sort")) {
            returnSortType = "Duration";
            $(".return-depart-sort, .return-arrive-sort, .return-price-sort").removeClass("asc-sort");
            $(".return-depart-sort, .return-arrive-sort, .return-price-sort").removeClass("desc-sort");
        }
        else if ($(this).hasClass("return-price-sort")) {
            returnSortType = "Price";
            $(".return-depart-sort, .return-duration-sort, .return-arrive-sort").removeClass("asc-sort");
            $(".return-depart-sort, .return-duration-sort, .return-arrive-sort").removeClass("desc-sort");
        }
        applyFilter();
    });

}});

$('.mobile-filter-button, .close-filter').click(function() {
    $('.mobile-booking-filter').slideToggle(200);
    $('.close-filter').slideToggle(200);
    $('.mobile-filter-button > span').toggle();
});

$(document).on('click','.onward-flight-list .booking-item-container', function() {
    $(".onward-flight-list .booking-item-container").removeClass("active-background");
    $(this).addClass("active-background");
    $(this).closest("li").find(".i-radio").first().iCheck('check'); 
});

$(document).on('click','.return-flight-list .booking-item-container', function() {
    $(".return-flight-list .booking-item-container").removeClass("active-background");
    $(this).addClass("active-background");
    $(this).closest("li").find(".i-radio").first().iCheck('check'); 
});

setTimeout(function(){
    swal({
            title: "Session Timed Out!",
            text: "Please Search Again",
            type: "warning",
            confirmButtonText: 'Search Again'
        }
    ).then((result) => {
        window.location.href=$.cookie("search-url");
    })
}, 600000);
</script>
@endsection
