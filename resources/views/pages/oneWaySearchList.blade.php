@extends('main')
@section('metaTags')
<title>{{ $org_city}}-{{ $dest_city }} | FaresPro</title>
@endsection
@section('content')
<!-- Filter button for mobile -->
<div class="row hidden-md hidden-lg hidden-xl mobile-filter-button-container">
    <div class="col-xs-12">
        <span class="mobile-filter-button btn btn-primary"><span>Filter Search <i class="fa fa-filter" aria-hidden="true"></i></span><span style="display: none;">Done</span></span>
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
            <h5 class="booking-filters-title">Departure Time</h5>
            <div class="checkbox">
                <label>
                    <input class="i-check depart-time-filter-checkbox" type="checkbox" name="departTimeFilter[]" value="0" />Before 6AM</label>
            </div>
            <div class="checkbox">
                <label>
                    <input class="i-check depart-time-filter-checkbox" type="checkbox" name="departTimeFilter[]" value="1" />6AM - 12PM</label>
            </div>
            <div class="checkbox">
                <label>
                    <input class="i-check depart-time-filter-checkbox" type="checkbox" name="departTimeFilter[]" value="2" />12PM - 6PM</label>
            </div>
            <div class="checkbox">
                <label>
                    <input class="i-check depart-time-filter-checkbox" type="checkbox" name="departTimeFilter[]" value="3" />After 6PM</label>
            </div>
        </li>
        <li>
            <h5 class="booking-filters-title">Arrival Time</h5>
            <div class="checkbox">
                <label>
                    <input class="i-check arrival-time-filter-checkbox" type="checkbox" name="arrivalTimeFilter[]" value="0" />Before 6AM</label>
            </div>
            <div class="checkbox">
                <label>
                    <input class="i-check arrival-time-filter-checkbox" type="checkbox" name="arrivalTimeFilter[]" value="1" />6AM - 12PM</label>
            </div>
            <div class="checkbox">
                <label>
                    <input class="i-check arrival-time-filter-checkbox" type="checkbox" name="arrivalTimeFilter[]" value="2" />12PM - 6PM</label>
            </div>
            <div class="checkbox">
                <label>
                    <input class="i-check arrival-time-filter-checkbox" type="checkbox" name="arrivalTimeFilter[]" value="3" />After 6PM</label>
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
                        <h5 class="booking-filters-title">Departure Time</h5>
                        <div class="checkbox">
                            <label>
                                <input class="i-check depart-time-filter-checkbox" type="checkbox" name="departTimeFilter[]" value="0" />Before 6AM</label>
                        </div>
                        <div class="checkbox">
                            <label>
                                <input class="i-check depart-time-filter-checkbox" type="checkbox" name="departTimeFilter[]" value="1" />6AM - 12PM</label>
                        </div>
                        <div class="checkbox">
                            <label>
                                <input class="i-check depart-time-filter-checkbox" type="checkbox" name="departTimeFilter[]" value="2" />12PM - 6PM</label>
                        </div>
                        <div class="checkbox">
                            <label>
                                <input class="i-check depart-time-filter-checkbox" type="checkbox" name="departTimeFilter[]" value="3" />After 6PM</label>
                        </div>
                    </li>
                    <li>
                        <h5 class="booking-filters-title">Arrival Time</h5>
                        <div class="checkbox">
                            <label>
                                <input class="i-check arrival-time-filter-checkbox" type="checkbox" name="arrivalTimeFilter[]" value="0" />Before 6AM</label>
                        </div>
                        <div class="checkbox">
                            <label>
                                <input class="i-check arrival-time-filter-checkbox" type="checkbox" name="arrivalTimeFilter[]" value="1" />6AM - 12PM</label>
                        </div>
                        <div class="checkbox">
                            <label>
                                <input class="i-check arrival-time-filter-checkbox" type="checkbox" name="arrivalTimeFilter[]" value="2" />12PM - 6PM</label>
                        </div>
                        <div class="checkbox">
                            <label>
                                <input class="i-check arrival-time-filter-checkbox" type="checkbox" name="arrivalTimeFilter[]" value="3" />After 6PM</label>
                        </div>
                    </li>
                    <li class="airlines-filter">  
                    </li>
                </ul>
            </aside>
        </div>

        @include("partials._bookingPreloader")

        <div class="col-md-9 flight-list-div" style="display: none;">
            @include("partials._fareTrendCarousel", ["faretrend" => $faretrend, "from" => $org, "to" => $dest, "intl" => $intl])

            <!-- sort option row -->
            <div class="row mt10">
                <div class="col-md-2 hidden-xs hidden-sm"></div>
                <div class="col-md-2 col-xs-4 text-right sort-option depart-sort">Depart</div>
                <div class="col-md-2 hidden-xs hidden-sm text-right sort-option arrive-sort">Arrive</div>
                <div class="col-md-2 col-xs-4 text-right sort-option duration-sort">Duration</div>
                <div class="col-md-2 col-xs-4 text-right sort-option price-sort asc-sort">Price</div>
                <div class="col-md-2 hidden-xs hidden-sm"></div>
            </div>
            <!-- sort option row /-->

            <ul class="booking-list">
            
            </ul>
            <p class="text-right">Not what you're looking for? <a class="popup-text" href="#search-dialog" data-effect="mfp-zoom-out">Try your search again</a>
            </p>
        </div>
    </div>
    <div class="gap"></div>
</div>

@endsection
@section("customScripts")
<script type="text/javascript">

// set current search url
$.cookie("search-url", window.location.href);

var flightresult = "{}";
var stopsFilter = [];
var fromNumber = 0;
var toNumber = 1000000;
var airlines = [];
var departTimeFilter = [];
var arrivalTimeFilter = [];
var sortOrder = 0;
var sortType = 'Price';
var csrf = "{{ csrf_token() }}";

function populateData(result) {
    let htmlData = '';
    let formData = '';
    for(let i = 0; i < result.flight_data.length; i++) {
        let refundable = "Refundable";
        if(result.flight_data[i].is_non_refundable == true) {
            refundable = "Non-Refundable";
        }
        let depart_date = moment(result.flight_data[i].depart_datetime).format("ddd, MMM DD");
        let arrival_date = moment(result.flight_data[i].arrival_datetime).format("ddd, MMM DD");
        let depart_time = moment(result.flight_data[i].depart_datetime).format("h:mm A");
        let arrival_time = moment(result.flight_data[i].arrival_datetime).format("h:mm A");
        let airlineCodes = [];
        formData = '<input type="hidden" name="searchid" value="<?= $searchid ?>" /> <input type="hidden" name="intl" value="' + result.intl + '" /> <input type="hidden" name="adults" value="<?= $adults ?>" /> <input type="hidden" name="childs" value="<?= $childs ?>" /> <input type="hidden" name="infants" value="<?= $infants ?>" /> <input type="hidden" name="trackId" value="' + result.trackId + '" /> <input type="hidden" name="_token" value="' + csrf + '"> <input type="hidden" name="validatingCarrier" value="' + result.flight_data[i].validating_carrier + '" /> <input type="hidden" name="price" value="' + result.flight_data[i].fare + '" />';
        for(let j = 0; j < result.flight_data[i].flight_details.length; j++) {
            formData += '<input type="hidden" name="flightId[]" value="' + result.flight_data[i].flight_details[j].FlightID + '" /> <input type="hidden" name="flightNum[]" value="' + result.flight_data[i].flight_details[j].FlightNum + '" /> <input type="hidden" name="carrierId[]" value="' + result.flight_data[i].flight_details[j].CarrierCode + '" /> <input type="hidden" name="aircraftType[]" value="' + result.flight_data[i].flight_details[j].AirCraftType + '" /> <input type="hidden" name="origin[]" value="' + result.flight_data[i].flight_details[j].Origin + '" /> <input type="hidden" name="destination[]" value="' + result.flight_data[i].flight_details[j].Destination + '" /> <input type="hidden" name="departureDateTime[]" value="' + result.flight_data[i].flight_details[j].DepartureDateTime + '" /> <input type="hidden" name="arrivalDateTime[]" value="' + result.flight_data[i].flight_details[j].ArrivalDateTime + '" /> <input type="hidden" name="classCode[]" value="' + result.flight_data[i].flight_details[j].ClassCode + '" /> <input type="hidden" name="equipmentType[]" value="' + result.flight_data[i].flight_details[j].AirEquipType + '" /> <input type="hidden" name="operatingCarrierId[]" value="' + result.flight_data[i].flight_details[j].CarrierCode + '" /> <input type="hidden" name="meal[]" value="' + result.flight_data[i].flight_details[j].MealCode.MealCode + '" /> <input type="hidden" name="orgTerminal[]" value="' + result.flight_data[i].flight_details[j].OrgTerminal + '" /> <input type="hidden" name="desTerminal[]" value="' + result.flight_data[i].flight_details[j].DesTerminal + '" /> <input type="hidden" name="majorClassCode[]" value="' + result.flight_data[i].flight_details[j].MajorClassCode + '" /> <input type="hidden" name="duration[]" value="' + result.flight_data[i].flight_details[j].Duration + '" /> <input type="hidden" name="marriageGroup[]" value="' + result.flight_data[i].flight_details[j].MarriageGroup + '" /> <input type="hidden" name="isStopAirport[]" value="' + result.flight_data[i].flight_details[j].IsStopAirport + '" /> <input type="hidden" name="apiProvider[]" value="' + result.flight_data[i].api_provider + '" /> <input type="hidden" name="baggage[weight][]" value="' + result.flight_data[i].flight_details[j].Baggage.Weight + '" /> <input type="hidden" name="baggage[unit][]" value="' + result.flight_data[i].flight_details[j].Baggage.Unit + '" /> <input type="hidden" name="baggage[pieces][]" value="' + result.flight_data[i].flight_details[j].Baggage.Pieces + '" />';
            airlineCodes.push(result.flight_data[i].flight_details[j].CarrierCode+result.flight_data[i].flight_details[j].FlightNum);
        }
        formData += '<input type="submit" class="btn btn-primary select-flight-button" value="Book" />';
        htmlData += '<li> <div class="booking-item-container"> <div class="booking-item flight-details-click">';
        htmlData += '<div class="row hidden-xs hidden-sm"> <div class="col-md-2"> <div class="booking-item-airline-logo"> <img src="/img/airline-logo/' + result.flight_data[i].carrier_code.toLowerCase() + '.png" alt="Image Alternative text" title="Image Title"/> <p>' + result.flight_data[i].airline + '</p><p>&nbsp;' + airlineCodes.join("|") + '</p></div></div><div class="col-md-4 text-right"> <div class="booking-item-flight-details"> <div class="booking-item-departure"> <h5>' + depart_time + '</h5> <p class="booking-item-date">' + depart_date + '</p></div><div class="booking-item-arrival"> <h5>' + arrival_time + '</h5> <p class="booking-item-date">' + arrival_date + '</p></div></div></div><div class="col-md-2 text-right"> <h5 class="search-list-h5">' + Math.floor(result.flight_data[i].duration/60) + 'h ' + result.flight_data[i].duration % 60 + 'm</h5> <p class="search-list-p">' + result.flight_data[i].stops +' stop</p></div><div class="col-md-2 text-right"><span class="booking-item-price">₹' + rupeeFormat(result.flight_data[i].fare) + '</span> <p class="search-list-p">' + refundable + '</p><p class="search-list-p flight-details-button"><i class="fa fa-chevron-down" aria-hidden="true"></i><i class="fa fa-chevron-up" aria-hidden="true"></i> Flight Details</p></div> <div class="col-md-2 text-right"><form method="post" action="/bookingDetails" class="hidden-xs hidden-sm">' + formData + '</form> </div> <div class="col-xs-4 text-align-right hidden-md hidden-lg hidden-xl"> <form method="post" action="/bookingDetails">' + formData + '</form></div> </div>';
        htmlData += '<div class="row hidden-md hidden-lg hidden-xl"><div class="col-sm-12" style="display: flex;flex-direction: row;align-items: center;"> <div class="booking-item-airline-logo" style="max-width: 50px;"> <img src="/img/airline-logo/' + result.flight_data[i].carrier_code.toLowerCase() + '.png" alt="Image Alternative text" title="Image Title" style=" width: 35px;"> <p>' + result.flight_data[i].airline + '</p><p>&nbsp;' + airlineCodes.join("|") + '</p></div><div style="flex: 1;margin: 0 18px;font-size: 11px;"> <div style="display: flex;flex-direction: row;align-items: center;"> <div><strong>' + depart_time + '</strong></div><div style=" flex: 1; text-align: center;">' + Math.floor(result.flight_data[i].duration/60) + 'h ' + result.flight_data[i].duration % 60 + 'm</div><div><strong>' + arrival_time + '</strong></div></div><hr style=" margin: 0 auto; width: 85%; background: #333;"><div style=" text-align: center; color: #888;">' + result.flight_data[i].stops +' stop</div></div><div class="text-center"><span class="booking-item-price" style=" font-size: 15px;">₹' + rupeeFormat(result.flight_data[i].fare) + '</span><form method="post" action="/bookingDetails">' + formData + '</form><p class="flight-details-button" style="font-size: 10px;"><i class="fa fa-chevron-down" aria-hidden="true"></i><i class="fa fa-chevron-up" aria-hidden="true"></i> Flight Details</p></div></div></div>';
        htmlData += '</div><div class="booking-item-details"> <div class="row"> <div class="col-md-12 search-tabs search-tabs-bg pl5 pr5"> <div class="tabbable detailTab"> <ul class="nav nav-pills nav-justified" id="detailTab' + i + '"> <li class="active"><a href="#tab-1-' + i + '" data-toggle="tab">Basic Details</a> </li><li><a href="#tab-2-' + i + '" data-toggle="tab">Fare Breakup</a> </li> <li><a href="#tab-3-' + i + '" data-toggle="tab">Baggage Rules</a> </li> </li> <li><a href="#tab-4-' + i + '" data-toggle="tab">Fare Rules</a> </li> </ul> <div class="tab-content"> <div class="tab-pane fade in active" id="tab-1-' + i + '">';
        for(let j = 0; j < result.flight_data[i].flight_details.length; j++) {
            if(j != 0) {
                let landingTime = moment(result.flight_data[i].flight_details[j-1].ArrivalDateTime);
                let takeOffTime = moment(result.flight_data[i].flight_details[j].DepartureDateTime);
                let stopTime = takeOffTime.diff(landingTime);
                htmlData += '<h5>Stopover: ' + result.flight_data[i].flight_details[j].OriginAirportCity + ' (' + result.flight_data[i].flight_details[j].Origin + ') ' + moment.utc(stopTime).format('h[h] mm[m]') + '</h5>';
            }
            let flight_depart_time = moment(result.flight_data[i].flight_details[j].DepartureDateTime).format("h:mm A");
            let flight_arrival_time = moment(result.flight_data[i].flight_details[j].ArrivalDateTime).format("h:mm A");
            htmlData += '<h5 class="list-title">' + result.flight_data[i].flight_details[j].OriginAirportCity + ' (' + result.flight_data[i].flight_details[j].Origin + ') to ' + result.flight_data[i].flight_details[j].DestinationAirportCity + ' (' + result.flight_data[i].flight_details[j].Destination + ')</h5> <ul class="list"> <li>' + result.flight_data[i].flight_details[j].AirlineName + ' ' + result.flight_data[i].flight_details[j].CarrierCode + '-' + result.flight_data[i].flight_details[j].FlightNum + '</li><li>' + result.flight_data[i].flight_details[j].MajorClassCode + '</li><li>Depart ' + flight_depart_time + ' Arrive ' + flight_arrival_time + '</li><li>Duration: ' + Math.floor(result.flight_data[i].flight_details[j].Duration/60) + 'h ' + result.flight_data[i].flight_details[j].Duration % 60 + 'm</li></ul>';
        }
        htmlData += '<p>Total trip time: ' + Math.floor(result.flight_data[i].duration/60) + 'h ' + result.flight_data[i].duration % 60 + 'm</p></div>';
        let tab2 = '<div class="tab-pane fade lh-2" id="tab-2-' + i + '"><div><strong>Base Fare</strong> = ₹ ' + rupeeFormat(result.flight_data[i].basefare) + '/-</div><div><strong>Taxes & Fees</strong> = ₹ ' + rupeeFormat(result.flight_data[i].fare - result.flight_data[i].basefare) + '/-</div><div><strong>Total Fare</strong> = ₹ ' + rupeeFormat(result.flight_data[i].fare) + '/-</div></div>';
        let bgg = "";
        if(result.flight_data[i].baggage.Unit=="kg" && result.flight_data[i].baggage.Weight!="") {
            bgg = result.flight_data[i].baggage.Weight + " kg / Person"
        }
        else if(result.flight_data[i].baggage.Unit=="kg" && result.flight_data[i].baggage.Weight=="") {
            bgg = "no info / Person"
        }
        else if(result.flight_data[i].baggage.Weight==null && result.flight_data[i].baggage.Unit==null) {
            bgg = result.flight_data[i].baggage.Pieces + " Pieces / Person";
        }

        let tab3 = '<div class="tab-pane fade lh-2" id="tab-3-' + i + '"><div><strong>Check-in: </strong>' + bgg + '</div><div><strong>Cabin: </strong>7kg / Person</div>';
        tab3 += '<br/><div>Disclaimer : Listed above is the baggage information from Airline distribution system. Actual Information may differ under certain guidelines, including connecting flights or stopover. To confirm baggage Information for your reservation or for information on additional Baggage Please Confirm with the Airline.</div>';
        tab3 += '</div>';

        let cancelFee = "N/A";
        let dateChangeFee = "N/A";
        let fareproCancelFee = "N/A";
        let faresproDateChangeFee = "N/A";

        if(refundable == "Refundable") {
            fareproCancelFee = "₹ {{ setting('farespro-fees.cancellation_fee') }}";
            faresproDateChangeFee = "₹ {{ setting('farespro-fees.date_change_fee') }}";
            cancelFee = result.flight_data[i].cancelFee;
            dateChangeFee = result.flight_data[i].dateChangeFee;
        }

        let tab4 = '<div class="tab-pane fade lh-2" id="tab-4-' + i + '">';
        tab4 += '<div>Cancellation<span style="float: right;">' + cancelFee + '</span></div><div>FaresPro Cancellation Fee<span style="float: right;">' + fareproCancelFee + '</span></div><div>Date Change<span style="float: right;">' + dateChangeFee + '</span></div><div>FaresPro Date Change Fee<span style="float: right;">' + faresproDateChangeFee + '</span></div><br/><div>Minimum 24h before the scheduled flight departure.</div><br/><div>Airline penalty needs to be reconfirmed prior to any ammendments or cancellation.</div><br/><div>Disclaimer: Airline Penalty changes are indicative and can change without any prior notice.</div><br/><div>N/A means Not Available. Please check with airline for penalty information.</div>';
        tab4 += '</div>';

        htmlData += tab2 + tab3 + tab4 + '</div></div></div></div></div></li>';
    }
    $(".flight-list-div .booking-list").html(htmlData);
}

function applyFilter() {
    let tempResult = JSON.parse(JSON.stringify(flightresult));
    let tempData = tempResult.flight_data;
    console.log(tempData);
    tempData = tempData.filter(function(flightdata){return flightdata.fare<=toNumber});
    tempData = tempData.filter(function(flightdata){return flightdata.fare>=fromNumber});
    if(stopsFilter.length!=0) {
        tempData = tempData.filter(function(flightdata){
            if(flightdata.stops>=2 && stopsFilter.includes(2)) {
                return true;
            }
            return stopsFilter.includes(flightdata.stops);
        }); 
    }
    if(airlines.length!=0) {
        tempData = tempData.filter(function(flightdata){
            return airlines.includes(flightdata.carrier_code);
        }); 
    }
    if(departTimeFilter.length!=0) {
        tempData = tempData.filter(function(flightdata){
            if(moment(flightdata.depart_datetime.split("T")[1], "HH:mm:ss").isBetween(moment('12:00am', 'h:mma'), moment('6:00am', 'h:mma')) && departTimeFilter.includes(0)) {
                return true;
            }
            if(moment(flightdata.depart_datetime.split("T")[1], "HH:mm:ss").isBetween(moment('6:00am', 'h:mma'), moment('12:00pm', 'h:mma')) && departTimeFilter.includes(1)) {
                return true;
            }
            if(moment(flightdata.depart_datetime.split("T")[1], "HH:mm:ss").isBetween(moment('12:00pm', 'h:mma'), moment('6:00pm', 'h:mma')) && departTimeFilter.includes(2)) {
                return true;
            }
            if(moment(flightdata.depart_datetime.split("T")[1], "HH:mm:ss").isBetween(moment('6:00pm', 'h:mma'), moment('12:00am', 'h:mma')) && departTimeFilter.includes(3)) {
                return true;
            }
        });
    }
    if(arrivalTimeFilter.length!=0) {
        tempData = tempData.filter(function(flightdata){
            if(moment(flightdata.depart_datetime.split("T")[1], "HH:mm:ss").isBetween(moment('12:00am', 'h:mma'), moment('6:00am', 'h:mma')) && arrivalTimeFilter.includes(0)) {
                return true;
            }
            if(moment(flightdata.depart_datetime.split("T")[1], "HH:mm:ss").isBetween(moment('6:00am', 'h:mma'), moment('12:00pm', 'h:mma')) && arrivalTimeFilter.includes(1)) {
                return true;
            }
            if(moment(flightdata.depart_datetime.split("T")[1], "HH:mm:ss").isBetween(moment('12:00pm', 'h:mma'), moment('6:00pm', 'h:mma')) && arrivalTimeFilter.includes(2)) {
                return true;
            }
            if(moment(flightdata.depart_datetime.split("T")[1], "HH:mm:ss").isBetween(moment('6:00pm', 'h:mma'), moment('12:00am', 'h:mma')) && arrivalTimeFilter.includes(3)) {
                return true;
            }
        });
    }
    if(sortOrder==1) {
        switch(sortType) {
            case 'Price': 
               tempData = _.sortBy(tempData, [function(o) { return o.fare; }]).reverse();
               break;

            case 'Duration': 
               tempData = _.sortBy(tempData, [function(o) { return parseInt(o.duration[0]) }]).reverse();
               break;

            case 'Arrival':
                tempData = _.sortBy(tempData, [function(o) { return new moment(o.arrival_datetime)}]).reverse();
                break;

            case 'Departure':
                tempData = _.sortBy(tempData, [function(o) { return new moment(o.depart_datetime)}]).reverse();
                break;

            case 'Stops':
                tempData = _.sortBy(tempData, [function(o) { return o.stops}]).reverse();
                break;
        }
        
    }
    else {
        switch(sortType) {
            case 'Price': 
               tempData = _.sortBy(tempData, [function(o) { return o.fare; }]);
               break;

            case 'Duration': 
               tempData = _.sortBy(tempData, [function(o) { return parseInt(o.duration[0]) }]);
               break;

            case 'Arrival':
                tempData = _.sortBy(tempData, [function(o) { return new moment(o.arrival_datetime)}]);
                break;

            case 'Departure':
                tempData = _.sortBy(tempData, [function(o) { return new moment(o.depart_datetime)}]);
                break;

            case 'Stops':
                tempData = _.sortBy(tempData, [function(o) { return o.stops}]);
                break;

        }
    }
    tempResult.flight_data = tempData;
    populateData(tempResult);
}

$.ajax({url: "<?php echo $api_url; ?>", success: function(result) {
    if(result.error == 1) {
        window.location.href = "/noFlights";
    }
    flightresult = result;
    $(".loader-col").hide();
    $(".flight-list-div").show();
    $(".booking-title-text").html(result.flight_data.length + " Flights Found from <?= $org_city ?> to <?= $dest_city ?>");

    populateData(result);

    $(".price-slider").ionRangeSlider({
    min: result.min_price,
    max: result.max_price,
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
    for(let key in result.airlines) {
        airlineFilterHtml += '<div class="checkbox"> <label> <input class="i-check airline-filter-i-check" type="checkbox" name="airlineFilterCheckbox[]" value="' + key + '"/>' + result.airlines[key] + '</label> </div>';
    }

    $(".airlines-filter").html(airlineFilterHtml);

    $('.airline-filter-i-check').iCheck({
        checkboxClass: 'i-check'
    });

    $(".airline-filter-i-check").on('ifChanged', function(event) {
        if(event.target.checked) {
            airlines.push(event.target.value);
        }
        else {
            let i = airlines.indexOf(event.target.value);
            if(i != -1) {
                airlines.splice(i, 1);
            }
        }
        applyFilter();
    });

    $(".depart-time-filter-checkbox").on('ifChanged', function(event) {
        if(event.target.checked) {
            departTimeFilter.push(parseInt(event.target.value));
        }
        else {
            let i = departTimeFilter.indexOf(parseInt(event.target.value));
            if(i != -1) {
                departTimeFilter.splice(i, 1);
            }
        }
        applyFilter();
    });

    $(".arrival-time-filter-checkbox").on('ifChanged', function(event) {
        if(event.target.checked) {
            arrivalTimeFilter.push(parseInt(event.target.value));
        }
        else {
            let i = arrivalTimeFilter.indexOf(parseInt(event.target.value));
            if(i != -1) {
                arrivalTimeFilter.splice(i, 1);
            }
        }
        applyFilter();
    });

    $('.sort-option').click(function() {
        if ($(this).hasClass("asc-sort")) {
            $(this).addClass("desc-sort");
            $(this).removeClass("asc-sort");
            sortOrder = 1;
        }
        else if ($(this).hasClass("desc-sort")) {
            $(this).removeClass("desc-sort");
            $(this).addClass("asc-sort");
            sortOrder = 0;
        }
        else {
            $(this).addClass("asc-sort");
            sortOrder = 0;
        }
        if ($(this).hasClass("depart-sort")) {
            sortType = "Departure";
            $(".arrive-sort, .duration-sort, .price-sort").removeClass("asc-sort");
            $(".arrive-sort, .duration-sort, .price-sort").removeClass("desc-sort");
        }
        else if ($(this).hasClass("arrive-sort")) {
            sortType = "Arrival";
            $(".depart-sort, .duration-sort, .price-sort").removeClass("asc-sort");
            $(".depart-sort, .duration-sort, .price-sort").removeClass("desc-sort");
        }
        else if ($(this).hasClass("duration-sort")) {
            sortType = "Duration";
            $(".depart-sort, .arrive-sort, .price-sort").removeClass("asc-sort");
            $(".depart-sort, .arrive-sort, .price-sort").removeClass("desc-sort");
        }
        else if ($(this).hasClass("price-sort")) {
            sortType = "Price";
            $(".depart-sort, .duration-sort, .arrive-sort").removeClass("asc-sort");
            $(".depart-sort, .duration-sort, .arrive-sort").removeClass("desc-sort");
        }
        applyFilter();
    });

    // $('#loading').hide();
    
}, error: function(err) {
    console.log(err);
}
});

$('.mobile-filter-button, .close-filter').click(function() {
    $('.mobile-booking-filter').slideToggle(200);
    $('.close-filter').slideToggle(200);
    $('.mobile-filter-button > span').toggle();
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
