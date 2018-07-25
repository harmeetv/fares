@extends('main')
@section('metaTags')
<title>FaresPro</title>
@endsection
@section('content')
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
                <p class="booking-item-payment-total">Total trip: <span>₹<?= App\Common::rupeeFormat($finalAmount) ?></span></p>
            </div>
            <div class="row mt20 mb20">
                <div class="col-md-6">
                    <form action="/payment" method="post">
                        {{ csrf_field() }}
                        <input type="hidden" name="couponcode" value="{{ $couponcode }}">
                        @if($isdomr!="domr")
                            <input type="hidden" name="isdomr" value="-">
                            <input type="hidden" name="sellRequestId" value=<?= $sellRequestId ?>>
                        @else
                            <input type="hidden" name="isdomr" value="domr">
                            <input type="hidden" name="onwardSellRequestId" value=<?= $onwardSellRequestId ?>>
                            <input type="hidden" name="returnSellRequestId" value=<?= $returnSellRequestId ?>>
                        @endif
                        <button type="submit" class="btn btn-primary">
                            <span class="fa fa-lock"></span> Make Secure Payment
                        </button>
                    </form>
                </div>
            </div>
        </div>
        <div class="col-md-8 col-xs-12 col-sm-12">
            <!-- <form method="post" action="/confirmDetails"> -->
                <div class="booking-sign-in-form">
				    <h4>Contact Information</h4>
				        <div class="row">
				        <div class="col-md-4">
				            <div class="form-group">
				                <label>First & Last Name</label>
				                <input class="form-control" type="text" value="{{ $contact_name }}" disabled />
				            </div>
				        </div>
				        <div class="col-md-4">
				            <div class="form-group">
				                <label>Phone Number</label>
				                <input class="form-control" type="text" value="{{ $contact_phone }}" disabled />
				            </div>
				        </div>
				        <div class="col-md-4">
				            <div class="form-group">
				                <label>E-mail</label>
				                <input class="form-control" type="text" value="{{ $contact_email }}" disabled />
				            </div>
				        </div>
				    </div>
				</div>
                <div class="gap gap-small"></div>
                <h4>Passengers</h4>
                <ul class="list booking-item-passengers">
                    <input type="hidden" name="intl" value="<?= $intl ?>">
                    @for ($i=0; $i<$adults; $i++)
                        @include('partials._confirmPassengerDetails', ['passengerType' => "Adult", 'passengerCount' => $i + 1, 'title' => $title[$i], 'firstname' => $firstname[$i], 'lastname' => $lastname[$i], 'dob' => $dob[$i], 'issuecountry' => $issuecountry[$i], 'nationality' => $nationality[$i], 'passport_number' => $passport_number[$i], 'passport_expiry' => $passport_expiry[$i]])
                    @endfor
                    @for ($i=0; $i<$childs; $i++)
                        @include('partials._confirmPassengerDetails', ['passengerType' => "Child", 'passengerCount' => $adults + $i + 1, 'title' => $title[$i], 'firstname' => $firstname[$i], 'lastname' => $lastname[$i], 'dob' => $dob[$i], 'issuecountry' => $issuecountry[$i], 'nationality' => $nationality[$i], 'passport_number' => $passport_number[$i], 'passport_expiry' => $passport_expiry[$i]])
                    @endfor
                    @for ($i=0; $i<$infants; $i++)
                        @include('partials._confirmPassengerDetails', ['passengerType' => "Infant", 'passengerCount' => $adults + $childs + $i + 1, 'title' => $title[$i], 'firstname' => $firstname[$i], 'lastname' => $lastname[$i], 'dob' => $dob[$i], 'issuecountry' => $issuecountry[$i], 'nationality' => $nationality[$i], 'passport_number' => $passport_number[$i], 'passport_expiry' => $passport_expiry[$i]])
                    @endfor
                </ul>
                <div class="gap gap-small"></div>
                <div class="row">
                    <!-- <div class="col-md-6">
                    	<form action="/payment" method="post">
							{{ csrf_field() }}
                            <input type="hidden" name="couponcode" value="{{ $couponcode }}">
							@if($isdomr!="domr")
								<input type="hidden" name="isdomr" value="-">
								<input type="hidden" name="sellRequestId" value=<?= $sellRequestId ?>>
							@else
								<input type="hidden" name="isdomr" value="domr">
								<input type="hidden" name="onwardSellRequestId" value=<?= $onwardSellRequestId ?>>
								<input type="hidden" name="returnSellRequestId" value=<?= $returnSellRequestId ?>>
							@endif
							<button type="submit" class="btn btn-primary">
								<span class="fa fa-lock"></span> Make Secure Payment
							</button>
						</form>
                    </div> -->
                    <div class="col-md-6 ">
                    	<button type="submit" class="btn btn-primary" onclick="window.history.back();">
							<span class="fa fa-pencil"></span> Edit Details
						</button>
                    </div>
                </div>
            <!-- </form> -->
        </div>
    </div>
    <div class="gap"></div>
</div>
@endsection
