<?php
    $date = strtotime($from_to->date);
    $f_link=App\SeoTemplate::where([["iata1", "=", $from_to->org], ["iata2", "=", $from_to->dest]])->limit(1)->first();
?>
@if ($f_link)
<a class="flightDealBlock" href="/flights/$f_link->slug">
@else
<?php
$from_slug = str_replace(" ", "_", strtolower(App\Airport::where("iata", $from_to->org)->limit(1)->first()->city));
$to_slug = str_replace(" ", "_", strtolower(App\Airport::where("iata", $from_to->dest)->limit(1)->first()->city));
?>
<a class="flightDealBlock" href="/flights/{{ $from_slug }}-{{ $to_slug }}-flights">
@endif
    <div class="flightDealBlockImage" style="background-image: url('/img/airline-logo/{{ strtolower(unserialize($from_to->cheap_airline_iatas)[0]) }}.png');"></div>
    <div class="flightDealBlockDetail">
        <div class="flightDealBlockDates"> Dep: <span class="dep">{{ date('d M', $date) }}</span></div>
        <div class="flightDealBlockFlights"><div><h4 class="merch-card-title">{{ $from_to->org }}</h4><span class="merch-card-location">{{ \App\Airport::where('iata', $from_to->org)->limit(1)->get()->first()->city }}</span></div><div class="flight-path-indicator"><hr></div><div><h4 class="merch-card-title">{{ $from_to->dest }}</h4><span class="merch-card-location">{{ \App\Airport::where('iata', $from_to->dest)->limit(1)->get()->first()->city }}</span></div></div>
    </div>
    <div class="flightDealBlockSpace"></div>
    <div class="flightDealPriceBlock">
        <div class="priceFromText">
            Prices From
        </div>
        <div class="price">
            <span class="rupeeSymbol">₹</span><span class="priceValue">{{ App\Common::rupeeFormat($from_to->min_fare) }}</span>
        </div>
        <div class="updateAgo"><i class="fa fa-clock-o" aria-hidden="true"></i> 3h ago</div>
    </div>
</a>
