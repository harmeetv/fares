@extends('main')
@section('metaTags')
<title>FaresPro</title>
@endsection
@section('content')
<div class="gap"></div>
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">	
            <h4 class="text-center"><i class="fa fa-check round box-icon-success" style="display: inline-block;"></i> <?= $name ?>, your payment was successful!</h4>
            <h5 class="text-center mb30">Booking details has been sent to <?= $email ?></h5>
            @if($domr=="domr")
            <div class="row">
	            <div class="col-sm-6 text-center">
	            	<a target="blank" class="btn btn-primary" href="/printTicket/<?= $payment_id ?>/<?= $payment_request_id ?>/O">Print Onward Ticket</a>
	            </div>
	            <div class="col-sm-6 text-center">
	            	<a target="blank" class="btn btn-primary" href="/printTicket/<?= $payment_id ?>/<?= $payment_request_id ?>/R">Print Return Ticket</a>
	            </div>
            </div>
            @else
            <div class="text-center"><a target="blank" class="btn btn-primary" href="/printTicket/<?= $payment_id ?>/<?= $payment_request_id ?>/O">Print Ticket</a></div>
            @endif
        </div>
    </div>
    <div class="row mt30">
        <div style="text-align: left; background: #71777d; color: #fff; padding: 10px;"><strong>Your Trips <?= $domr=="domr"?"(Onward Flight)":"" ?></strong></div>
        <br/>
        @if($triptype=="R")
        <div><strong>ONWARD FLIGHT</strong></div>
        <br />
        @endif
        <!-- onward -->
        <div><strong><?= $onwardOrg ?> - <?= $onwardDest ?></strong></div>
        <div><?= (new \DateTime($items[0]->DepartureTime))->format("l, d F Y") ?></div>
        <!-- <div>Non Stop | Non Refundable | Economy</div> -->
        <br />
        <?php $itemCount = 0; ?>
        @foreach($items as $item)
        <div><u><?= $item->CarrierId ?>-<?= $item->FlightId ?></u></div>
        <table width="100%">
        <tbody>
        <tr>
        <td>
        <div><strong><?= $item->Origin ?> <?= (new \DateTime($item->DepartureTime))->format("h:m A") ?></strong><br /><?= (new \DateTime($item->DepartureTime))->format("l, d F Y") ?><br /><?= App\Airport::where('iata', $item->Origin)->get()->first()->label ?></div>
        </td>
        <td><?= floor($item->Duration/60) ?>h <?= $item->Duration%60 ?>m</td>
        <td>
        <div><strong><?= $item->Destination ?> <?= (new \DateTime($item->ArrivalTime))->format("h:m A") ?></strong><br /><?= (new \DateTime($item->ArrivalTime))->format("l, d F Y") ?><br /><?= App\Airport::where('iata', $item->Destination)->get()->first()->label ?></div>
        </td>
        </tr>
        </tbody>
        </table>
        <br />
        @if($onwardDest==$item->Destination && $triptype=="R")
        <hr />
        <div><strong>RETURN FLIGHT</strong></div>
        <br />
        <div><strong><?= $onwardDest ?> - <?= $onwardOrg ?></strong></div>
        <div><?= (new \DateTime($items[$itemCount+1]->DepartureTime))->format("l, d F Y") ?></div>
        <!-- <div>Non Stop | Non Refundable | Economy</div> -->
        <br />
        @endif
        <?php $itemCount++ ?>
        @endforeach
        <br />
        <div style="text-align: left; background: #71777d; color: #fff; padding: 10px;"><strong>Traveller and PNR Details</strong></div>
        <br />
        <table width="100%">
        <tbody>
        <tr>
        <th style="text-align: left;">Passenger Name</th>
        <th style="text-align: left;">PNR</th>
        </tr>
        @foreach($passengers as $passenger)
        <tr>
        <td><?= $passenger->Title ?> <?= $passenger->FirstName ?> <?= $passenger->LastName ?></td>
        <td><?= $pnr ?></td>
        </tr>
        @endforeach
        </tbody>
        </table>



        @if($domr=="domr")
        <br />
        <div style="text-align: left; background: #71777d; color: #fff; padding: 10px;"><strong>Your Trips (Return Flight)</strong></div>
        <br/>
        <!-- onward -->
        <div><strong><?= $onwardDest ?> - <?= $onwardOrg ?></strong></div>
        <div><?= (new \DateTime($returnItems[0]->DepartureTime))->format("l, d F Y") ?></div>
        <!-- <div>Non Stop | Non Refundable | Economy</div> -->
        <br />
        @foreach($returnItems as $returnItem)
        <div><u><?= $returnItem->CarrierId ?>-<?= $returnItem->FlightId ?></u></div>
        <table width="100%">
        <tbody>
        <tr>
        <td>
        <div><strong><?= $returnItem->Origin ?> <?= (new \DateTime($returnItem->DepartureTime))->format("h:m A") ?></strong><br /><?= (new \DateTime($returnItem->DepartureTime))->format("l, d F Y") ?><br /><?= App\Airport::where('iata', $returnItem->Origin)->get()->first()->label ?></div>
        </td>
        <td><?= floor($returnItem->Duration/60) ?>h <?= $returnItem->Duration%60 ?>m</td>
        <td>
        <div><strong><?= $returnItem->Destination ?> <?= (new \DateTime($returnItem->ArrivalTime))->format("h:m A") ?></strong><br /><?= (new \DateTime($returnItem->ArrivalTime))->format("l, d F Y") ?><br /><?= App\Airport::where('iata', $returnItem->Destination)->get()->first()->label ?></div>
        </td>
        </tr>
        </tbody>
        </table>
        <br />
        @endforeach
        <br />
        <div style="text-align: left; background: #71777d; color: #fff; padding: 10px;"><strong>Traveller and PNR Details</strong></div>
        <br />
        <table width="100%">
        <tbody>
        <tr>
        <th style="text-align: left;">Passenger Name</th>
        <th style="text-align: left;">PNR</th>
        </tr>
        @foreach($passengers as $passenger)
        <tr>
        <td><?= $passenger->Title ?> <?= $passenger->FirstName ?> <?= $passenger->LastName ?></td>
        <td><?= $returnPnr ?></td>
        </tr>
        @endforeach
        </tbody>
        </table>
        @endif




        <br />
        <div style="text-align: left; background: #71777d; color: #fff; padding: 10px;"><strong>Fare Details</strong></div>
        <br />
        <table width="100%">
        <tbody>
        <tr>
        <td>Total Base Fare</td>
        <td>Rs. <?= $basefare ?>/-</td>
        </tr>
        <tr>
        <td>Total Taxes and Surcharge</td>
        <td>Rs. <?= $totaltax ?>/-</td>
        </tr>
        <tr>
        <td><strong>TOTAL</strong></td>
        <td><strong>Rs. <?= $totalfare ?>/-</strong></td>
        </tr>
        </tbody>
        </table>
        <hr />
    </div>
    <div class="gap"></div>
</div>
@endsection
