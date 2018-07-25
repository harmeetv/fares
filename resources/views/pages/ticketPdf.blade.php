
<html xmlns="http://www.w3.org/1999/xhtml" xmlns:v="urn:schemas-microsoft-com:vml"
xmlns:o="urn:schemas-microsoft-com:office:office">
<head>
  <meta name="generator" content=
  "HTML Tidy for Linux (vers 25 March 2009), see www.w3.org" /><!--[if gte mso 9]><xml>
     <o:OfficeDocumentSettings>
      <o:AllowPNG/>
      <o:PixelsPerInch>96</o:PixelsPerInch>
     </o:OfficeDocumentSettings>
    </xml><![endif]-->
  <meta http-equiv="Content-Type" content="text/html; charset=us-ascii" />
  <meta name="viewport" content="width=device-width" /><!--[if !mso]><!-->
  <meta http-equiv="X-UA-Compatible" content="IE=edge" /><!--<![endif]-->

  <title>Farespro Ticket</title><!--[if !mso]><!== -->

</head>

<body>
<img src="{{ url('/') }}/img/logo.png" />
<hr />
<br />
<div style="text-align: center; font-size: 18px;"><strong>Hi <?= $name ?></strong></div>
<div style="text-align: center; font-size: 14px;">Your flight has been booked and here are your PNR details.<br />Booking ID: <?= $id ?></div>
<br />
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
</body>
</html>
