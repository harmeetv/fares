@extends('main')
@section('content')
<div class="container">
    
</div>
<div class="container">
    <h1 class="page-title">Booking History</h1>
</div>

<div class="container">
    <div class="row">
        <div class="col-md-3">
            @include('userAccount.partials._userSidebar')
        </div>
        <div class="col-md-9">
            @if(session()->has('flash'))
                <div class="alert alert-success alert-dismissable fade in">
                    <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                    {{ session('flash') }}
                </div>
            @endif
            <table class="table table-bordered table-striped table-booking-history">
                <thead>
                    <tr>
                        <th>Booking ID</th>
                        <th>PNR</th>
                        <th>Origin</th>
                        <th>Destination</th>
                        <th>Trip Type</th>
                        <th>Departure Date</th>
                        <th>Return Date</th>
                        <th>Print Ticket</th>
                        <th>Cancel</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($bookingDetails as $bookingDetail)
                        <?php
                            $tripdetail = json_decode($bookingDetail->tripdetail);
                            if($tripdetail == NULL || count($tripdetail->Airline)==0)
                                continue;
                            $tripitems = count($tripdetail->Item);
                            $triptype = "O";
                            if($tripdetail->Item[0]->Origin == $tripdetail->Item[$tripitems-1]->Destination) {
                                $triptype="R";
                            }
                            $pnr = $tripdetail->Airline[0]->AirlinePnr;
                            $org = $bookingDetail->org;
                            $departdate = $tripdetail->Item[0]->DepartureTime;
                            //$des = $tripdetail->Item[$tripitems-1]->Destination;
                            $des = $bookingDetail->dest;
                            $returndate = "-";
                            if($triptype == "R") {
                                // for($i=0; $i<$tripitems-1; $i++) {
                                //     if($tripdetail->Item[$i]->Destination == $tripdetail->Item[$i+1]->Origin) {
                                //         $des = $tripdetail->Item[$i]->Origin;
                                //         $returndate = $tripdetail->Item[$i]->DepartureTime;
                                //     }
                                // }
                                foreach ($tripdetail->Item as $tripitem) {
                                    if ($bookingDetail->dest==$tripitem->Origin) {
                                        $returndate = $tripitem->DepartureTime;
                                        break;
                                    }
                                }
                            }
                        ?>
                        <tr>
                            <td>{{ $bookingDetail->id }}</td>
                            <td class="booking-history-type"><?= $pnr ?></td>
                            <td class="booking-history-title"><?= App\Airport::where('iata', $org)->first()->label ?></td>
                            <td class="booking-history-title"><?= App\Airport::where('iata', $des)->first()->label ?></td>
                            <td><?php if($triptype=="R") echo "Round Trip"; else echo "One Way"; ?></td>
                            <td><?= (new \DateTime($departdate))->format("d M Y") ?></td>
                            <?php
                                $date1 = new \DateTime();
                                $date2 = new \DateTime($departdate);
                                $cancellable = false;
                                if ($date1 < $date2) {
                                    $cancellable = true;
                                }
                            ?>
                            <td><?php if($triptype=="R") echo (new \DateTime($returndate))->format("d M Y"); else "-"; ?></td>
                            <td class="text-center"><a target="_blank" href="/printTicket/<?= $bookingDetail->paymentid ?>/<?= $bookingDetail->paymentrequestid ?>/{{ $bookingDetail->tripdirection }}" class="btn btn-default btn-sm" href="#">Print</a></td>
                            <td class="text-center">
                                @if($cancellable)
                                    @if ($bookingDetail->cancelrequest == 0)
                                        <form method="post" action="/cancelTicket">
                                            {{ csrf_field() }}
                                            <input type="hidden" value="{{ Auth::user()->email }}" name="email" />
                                            <input type="hidden" value="<?= $bookingDetail->id ?>" name="bookingid" />
                                            <input type="submit" class="btn btn-default btn-sm" value="Request Cancellation" href="#" />
                                        </form>
                                    @elseif ($bookingDetail->cancelrequest == 1)
                                        Cancellation Requested
                                    @elseif ($bookingDetail->cancelrequest == 2)
                                        Cancelled
                                    @endif
                                    @endif
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>

<div class="gap"></div>
<!-- Modal -->
@endsection
