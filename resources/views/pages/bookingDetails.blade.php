@extends('main')
@section('metaTags')
<title>FaresPro</title>
@endsection
@section('content')
<?php Session::put('url.intended', URL::full()); ?>
<div class="gap"></div>
<div class="container">
    <div class="row">
        <div class="col-md-4 col-xs-12 col-sm-12 pull-right">
            <div class="booking-item-payment">
                <header class="clearfix">
                    <h5 class="mb0"><?= $org_city ?> - <?= $dest_city ?></h5>
                </header>
                <ul class="booking-item-payment-details">
                    <li>
                        <h5>Flight Details</h5>
                        @if ($triptype=="R" && $intl=="INTL")
                            <div class="booking-detail-trip-direction mb10">
                                <strong>ONWARD</strong>
                            </div>
                            <div class="booking-item-payment-flight">
                                @for ($i=0; $i<=$onward_stops; $i++)
                                    @if ($i!=0)
                                        <?php
                                            $landingTime = new \DateTime($lookrequest->item[$i-1]->ArrivalDateTime);
                                            $takeOffTime = new \DateTime($lookrequest->item[$i]->DepartureDateTime);
                                            $stopTime = $takeOffTime->diff($landingTime);
                                        ?>
                                        <p>STOP <?= $stopTime->format('%h h %i min') ?> <?= App\Airport::where('iata', $lookrequest->item[$i]->Origin)->first()->label ?></p>
                                    @endif
                                    <div class="row flight-id-row">
                                        <div class="col-md-12">
                                            <strong>Flight: </strong><img src="/img/airline-logo/{{ strtolower($lookrequest->item[$i]->CarrierId) }}.png" style="height: 24px;width: auto;">{{ $lookrequest->item[$i]->CarrierId }}-{{ $lookrequest->item[$i]->FlightID }} ({{ App\Airline::where('iata', $lookrequest->item[$i]->CarrierId)->first()->airline }})
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-9">
                                            <div class="booking-item-flight-details">
                                                <div class="booking-item-departure"><i class="fa fa-plane"></i>
                                                    <h5><?= (new \DateTime($lookrequest->item[$i]->DepartureDateTime))->format('h:i A') ?></h5>
                                                    <p class="booking-item-date"><?= (new \DateTime($lookrequest->item[$i]->DepartureDateTime))->format("D, d M") ?></p>
                                                    <p class="booking-item-destination"><?= App\Airport::where('iata', $lookrequest->item[$i]->Origin)->first()->label ?></p>
                                                </div>
                                                <div class="booking-item-arrival"><i class="fa fa-plane fa-flip-vertical"></i>
                                                    <h5><?= (new \DateTime($lookrequest->item[$i]->ArrivalDateTime))->format('h:i A') ?></h5>
                                                    <p class="booking-item-date"><?= (new \DateTime($lookrequest->item[$i]->DepartureDateTime))->format("D, d M") ?></p>
                                                    <p class="booking-item-destination"><?= App\Airport::where('iata', $lookrequest->item[$i]->Destination)->first()->label ?></p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="booking-item-flight-duration">
                                                <p>Duration</p>
                                                <h6><b><?= floor($lookrequest->item[$i]->Duration/60) ?>h <?= floor($lookrequest->item[$i]->Duration%60) ?>m</b></h6>
                                            </div>
                                        </div>
                                    </div>
                                @endfor
                            </div>
                            <div class="booking-detail-trip-direction mb10">
                                <strong>RETURN</strong>
                            </div>
                            <div class="booking-item-payment-flight">
                                @for ($i=$onward_stops+1; $i<$flight_count; $i++)
                                    @if ($i!=$onward_stops+1)
                                        <?php
                                            $landingTime = new \DateTime($lookrequest->item[$i-1]->ArrivalDateTime);
                                            $takeOffTime = new \DateTime($lookrequest->item[$i]->DepartureDateTime);
                                            $stopTime = $takeOffTime->diff($landingTime);
                                        ?>
                                        <p>STOP <?= $stopTime->format('%h h %i min') ?> <?= App\Airport::where('iata', $lookrequest->item[$i]->Origin)->first()->label ?></p>
                                    @endif
                                    <div class="row flight-id-row">
                                        <div class="col-md-12">
                                            <strong>Flight: </strong><img src="/img/airline-logo/{{ strtolower($lookrequest->item[$i]->CarrierId) }}.png" style="height: 24px;width: auto;">{{ $lookrequest->item[$i]->CarrierId }}-{{ $lookrequest->item[$i]->FlightID }} ({{ App\Airline::where('iata', $lookrequest->item[$i]->CarrierId)->first()->airline }})
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-9">
                                            <div class="booking-item-flight-details">
                                                <div class="booking-item-departure"><i class="fa fa-plane"></i>
                                                    <h5><?= (new \DateTime($lookrequest->item[$i]->DepartureDateTime))->format('h:i A') ?></h5>
                                                    <p class="booking-item-date"><?= (new \DateTime($lookrequest->item[$i]->DepartureDateTime))->format("D, d M") ?></p>
                                                    <p class="booking-item-destination"><?= App\Airport::where('iata', $lookrequest->item[$i]->Origin)->first()->label ?></p>
                                                </div>
                                                <div class="booking-item-arrival"><i class="fa fa-plane fa-flip-vertical"></i>
                                                    <h5><?= (new \DateTime($lookrequest->item[$i]->ArrivalDateTime))->format('h:i A') ?></h5>
                                                    <p class="booking-item-date"><?= (new \DateTime($lookrequest->item[$i]->DepartureDateTime))->format("D, d M") ?></p>
                                                    <p class="booking-item-destination"><?= App\Airport::where('iata', $lookrequest->item[$i]->Destination)->first()->label ?></p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="booking-item-flight-duration">
                                                <p>Duration</p>
                                                <h6><b><?= floor($lookrequest->item[$i]->Duration/60) ?>h <?= floor($lookrequest->item[$i]->Duration%60) ?>m</b></h6>
                                            </div>
                                        </div>
                                    </div>
                                @endfor
                            </div>
                        @elseif ($triptype=="O")
                            <div class="booking-item-payment-flight">
                                @for ($i=0; $i<$flight_count; $i++)
                                    @if ($i!=0)
                                        <?php
                                            $landingTime = new \DateTime($lookrequest->item[$i-1]->ArrivalDateTime);
                                            $takeOffTime = new \DateTime($lookrequest->item[$i]->DepartureDateTime);
                                            $stopTime = $takeOffTime->diff($landingTime);
                                        ?>
                                        <p>STOP <?= $stopTime->format('%h h %i min') ?> <?= App\Airport::where('iata', $lookrequest->item[$i]->Origin)->first()->label ?></p>
                                    @endif
                                    <div class="row flight-id-row">
                                        <div class="col-md-12">
                                            <strong>Flight: </strong><img src="/img/airline-logo/{{ strtolower($lookrequest->item[$i]->CarrierId) }}.png" style="height: 24px;width: auto;">{{ $lookrequest->item[$i]->CarrierId }}-{{ $lookrequest->item[$i]->FlightID }} ({{ App\Airline::where('iata', $lookrequest->item[$i]->CarrierId)->first()->airline }})
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-9">
                                            <div class="booking-item-flight-details">
                                                <div class="booking-item-departure"><i class="fa fa-plane"></i>
                                                    <h5><?= (new \DateTime($lookrequest->item[$i]->DepartureDateTime))->format('h:i A') ?></h5>
                                                    <p class="booking-item-date"><?= (new \DateTime($lookrequest->item[$i]->DepartureDateTime))->format("D, d M") ?></p>
                                                    <p class="booking-item-destination"><?= App\Airport::where('iata', $lookrequest->item[$i]->Origin)->first()->label ?></p>
                                                </div>
                                                <div class="booking-item-arrival"><i class="fa fa-plane fa-flip-vertical"></i>
                                                    <h5><?= (new \DateTime($lookrequest->item[$i]->ArrivalDateTime))->format('h:i A') ?></h5>
                                                    <p class="booking-item-date"><?= (new \DateTime($lookrequest->item[$i]->DepartureDateTime))->format("D, d M") ?></p>
                                                    <p class="booking-item-destination"><?= App\Airport::where('iata', $lookrequest->item[$i]->Destination)->first()->label ?></p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="booking-item-flight-duration">
                                                <p>Duration</p>
                                                <h6><b><?= floor($lookrequest->item[$i]->Duration/60) ?>h <?= floor($lookrequest->item[$i]->Duration%60) ?>m</b></h6>
                                            </div>
                                        </div>
                                    </div>
                                @endfor
                            </div>
                        @endif
                    </li>
                    <li>
                        <h5>Flight (<?= $total_passengers ?> Passengers)</h5>
                    </li>
                </ul>
                <p class="booking-item-payment-total">Total trip: <span id="trip-total">₹<?= App\Common::rupeeFormat($lookrequest->Price) ?></span></p>
                <p id="recheck-fare-loader">Rechecking Fare<img src="/img/preloader.svg"></p>
            </div>
            <div class="coupon-input mt20 mb20">
                <input type="hidden" id="trip-price" value="<?= $lookrequest->Price ?>">
                <input class="form-control" type="text" id="coupon-code" placeholder="Enter Coupon Code">
                <div class="alert alert-success mt10" id="coupon-success-alert" style="display: none; margin: 0;"></div>
                <div class="alert alert-danger mt10" id="coupon-failed-alert" style="display: none; margin: 0;"></div>
                <img src="/img/preloader.svg" id="coupon-loader" style="display: none;" />
                <button class="btn btn-primary mt10" id="apply-coupon-button">Apply Code</button>
            </div>
        </div>
        <div class="col-md-8">
            <form method="post" action="/confirmDetails">
                <input type="hidden" name="couponcode" id="couponcode-form" value="">
                @include('partials._bookingDetailContactInfo')
                <div class="gap gap-small"></div>
                <input type="hidden" name="lookrequestid" value="<?= $lookrequestid ?>">
                {{ csrf_field() }}
                <h3>Passengers</h3>
                @if($errors->any())
                    <div class="row">
                        <div class="col-md-12">
                            <div class="alert alert-danger">{{$errors->first()}}</div>
                        </div>
                    </div>
                 @endif
                <ul class="list booking-item-passengers">
                    <input type="hidden" name="intl" value="<?= $intl ?>">
                    @for ($i=0; $i<$adults; $i++)
                        @include('partials._passengerBookingDetails', ['passengerType' => "Adult", 'passengerCount' => $i + 1])
                    @endfor
                    @for ($i=0; $i<$childs; $i++)
                        @include('partials._passengerBookingDetails', ['passengerType' => "Child", 'passengerCount' => $adults + $i + 1])
                    @endfor
                    @for ($i=0; $i<$infants; $i++)
                        @include('partials._passengerBookingDetails', ['passengerType' => "Infant", 'passengerCount' => $adults + $childs + $i + 1])
                    @endfor
                </ul>
                <div class="row">
                    <div class="col-md-6">
                        <input type="submit" class="btn btn-primary" value="Submit Details" style="margin-bottom: 15px" />
                    </div>
                </div>
            </form>
        </div>
    </div>
    <div class="gap"></div>
</div>
@endsection
@section('customScripts')
<script type="text/javascript">

    let adultEndDate = new Date();
    adultEndDate.setFullYear(adultEndDate.getFullYear() - 12);
    $('input.dob-years-adult').datepicker({
        startView: 2,
        endDate: adultEndDate
    });

    let childEndDate = new Date();
    childEndDate.setFullYear(childEndDate.getFullYear() - 2);
    $('input.dob-years-child').datepicker({
        startView: 2,
        startDate: adultEndDate,
        endDate: childEndDate
    });

    let infantEndDate = new Date();
    $('input.dob-years-infant').datepicker({
        startView: 2,
        startDate: childEndDate,
        endDate: infantEndDate
    });

    setTimeout(function(){
        swal(
            'Session Timed Out!',
            'Please Search Again!',
            'warning'
        ).then((result) => {
            window.location.href="/";
        })
    }, 900000);

    $( document ).ready(function() {
        $(".booking-item-payment-total").hide();
        $("#recheck-fare-loader").show();
        $.ajax({
          url: "/recheckFares",
          type: 'POST',
          success: function(result) {
            if(result.success==true) {
                $("#recheck-fare-loader").hide();
                $(".booking-item-payment-total").show();
            } else {

            }
          }
        });
    });

</script>
@endsection
