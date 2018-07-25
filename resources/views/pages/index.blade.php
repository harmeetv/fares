@extends('main')
@section('metaTags')
<title>{{ setting('site.title') }}</title>
<meta name="description" content="{{ setting('site.description') }}"/>
<meta name="keywords" content="{{ setting('site.meta_keywords') }}"/>
@endsection
@section('content')
<div class="show-onload">
    <div class="bg-holder full">
        <div class="bg-parallax" style="background-image: url('{{ Voyager::image(setting("site-ad-banners.home_background")) }}'); background-position: 50% 0px;"></div>
        <div class="bg-content">
            <div class="container">
                <div class="row">
                    <div class="col-md-3 hidden-xs hidden-sm">
                        <aside class="user-profile-sidebar mt20">  
                            <ul class="list user-profile-nav">
                                <li class="active"><a href="/userProfile"><i class="fa fa-plane"></i>Flights</a>
                                </li>
                                <li><a href="/userBookingHistory"><i class="fa fa-cog"></i>Manage Booking</a>
                                </li>
                                <li><a href="/userBookingHistory"><i class="fa fa-print"></i>Print Ticket</a>
                                </li>
                                <li><a href="/userBookingHistory"><i class="fa fa-ban"></i>Cancellations</a>
                                </li>
                                <li><a href="/contact-us"><i class="fa fa-phone"></i>Contact Us</a>
                                </li>
                            </ul>
                        </aside>
                    </div>
                    <div class="col-md-6">
                        @if (session('status'))
                            <div class="alert alert-success mt10">
                                {{ session('status') }}
                            </div>
                        @endif
                        <div class="search-tabs search-tabs-bg mt20">
                            <div class="tabbable">
                                <!-- <ul class="nav nav-tabs" id="myTab">
                                    <li class="active"><a href="#tab-1" data-toggle="tab"><i class="fa fa-plane"></i> <span >Flights</span></a>
                                    </li>
                                </ul> -->
                                <div class="tab-content">
                                    <div class="tab-pane fade in active" id="tab-1">
                                            <h1 style="font-size: 24px;">{{ setting('site.search_heading') }}</h1>
                                            <div class="tabbable">
                                                <ul class="nav nav-pills nav-sm nav-no-br mb10" id="flightChooseTab">
                                                    <li class="active"><a href="#flight-search-1" data-toggle="tab">Round Trip</a>
                                                    </li>
                                                    <li><a href="#flight-search-2" data-toggle="tab">One Way</a>
                                                    </li>
                                                </ul>
                                                <div class="tab-content">
                                                    <div class="tab-pane fade in active" id="flight-search-1">
                                                        <form action="/flight" method="post" class="homepage-form rt-form">
                                                            <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                                            <input type="hidden" name="triptype" value="R"/>
                                                            @if($errors->any())
                                                                <div class="row">
                                                                    <div class="col-md-12">
                                                                        <h5 class="searchError">{{$errors->first()}}</h5>
                                                                    </div>
                                                                </div>
                                                             @endif
                                                            <div class="row">
                                                                <div class="col-md-6">
                                                                    <div class="form-group form-group-lg form-group-icon-left"><i class="fa fa-map-marker input-icon"></i>
                                                                        <label>From</label>
                                                                        <input class="typeahead form-control from-label" id="rt-from-label" placeholder="City or Airport" type="text" />
                                                                        <input type="hidden" id="rt-from-iata" class="from-iata" name="from-iata">
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-6">
                                                                    <div class="form-group form-group-lg form-group-icon-left"><i class="fa fa-map-marker input-icon"></i>
                                                                        <label>To</label>
                                                                        <input class="typeahead form-control to-label" id="rt-to-label" placeholder="City or Airport" type="text" />
                                                                        <input class="to-iata" id="rt-to-iata" type="hidden" name="to-iata">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="input-daterange" data-date-format="M d, D">
                                                                <div class="row">
                                                                    <div class="col-xs-6">
                                                                        <div class="form-group form-group-lg form-group-icon-left"><i class="fa fa-calendar input-icon input-icon-highlight"></i>
                                                                            <label>Departing</label>
                                                                            <input class="form-control from-date-pick" name="start" type="text" data-date-format="M d, D" id="roundtrip-from-date-pick" readonly />
                                                                            <input class="from-date" type="hidden" name="roundtrip-from-date" id="roundtrip-from-date"/>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-xs-6">
                                                                        <div class="form-group form-group-lg form-group-icon-left"><i class="fa fa-calendar input-icon input-icon-highlight"></i>
                                                                            <label>Returning</label>
                                                                            <input class="form-control to-date-pick" name="end" type="text" data-date-format="M d, D" id="roundtrip-to-date-pick" readonly />
                                                                            <input class="to-date" type="hidden" name="roundtrip-to-date" id="roundtrip-to-date"/>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="col-md-6">
                                                                    <div class="form-group form-group-lg form-group-icon-left"><i class="fa fa-briefcase input-icon"></i>
                                                                        <label>Class</label>
                                                                        <select name="class" class="form-control classtype" id="rt-class">
                                                                            <option value="Economy">Economy</option>
                                                                            <option value="PremiumEconomy">Premium Economy</option>
                                                                            <option value="Business">Business</option>
                                                                            <option value="First">First</option>
                                                                        </select>
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-2 col-xs-4 pr0">
                                                                    <div class="form-group form-group-lg">
                                                                        <label>Adults</label>
                                                                        <select name="adults" class="form-control adult-count" id="rt-adult">
                                                                            <option value="1" selected="selected">1</option>
                                                                            <option value="2">2</option>
                                                                            <option value="3">3</option>
                                                                            <option value="4">4</option>
                                                                            <option value="5">5</option>
                                                                            <option value="6">6</option>
                                                                            <option value="7">7</option>
                                                                            <option value="8">8</option>
                                                                            <option value="9">9</option>
                                                                            <option value="10">10</option>
                                                                            <option value="11">11</option>
                                                                            <option value="12">12</option>
                                                                            <option value="13">13</option>
                                                                            <option value="14">14</option>
                                                                        </select>
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-2 col-xs-4">
                                                                    <div class="form-group form-group-lg">
                                                                        <label>Childs</label>
                                                                        <select name="childs" class="form-control pr10 pl10 child-count" id="rt-child">
                                                                            <option value="0" selected="selected">0</option>
                                                                            <option value="1">1</option>
                                                                            <option value="2">2</option>
                                                                            <option value="3">3</option>
                                                                            <option value="4">4</option>
                                                                            <option value="5">5</option>
                                                                            <option value="6">6</option>
                                                                            <option value="7">7</option>
                                                                            <option value="8">8</option>
                                                                            <option value="9">9</option>
                                                                            <option value="10">10</option>
                                                                            <option value="11">11</option>
                                                                            <option value="12">12</option>
                                                                            <option value="13">13</option>
                                                                            <option value="14">14</option>
                                                                        </select>
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-2 col-xs-4 pl0">
                                                                    <div class="form-group form-group-lg">
                                                                        <label>Infants</label>
                                                                        <select name="infants" class="form-control infant-count" id="rt-infant">
                                                                            <option value="0" selected="selected">0</option>
                                                                            <option value="1">1</option>
                                                                            <option value="2">2</option>
                                                                            <option value="3">3</option>
                                                                            <option value="4">4</option>
                                                                            <option value="5">5</option>
                                                                            <option value="6">6</option>
                                                                            <option value="7">7</option>
                                                                            <option value="8">8</option>
                                                                            <option value="9">9</option>
                                                                            <option value="10">10</option>
                                                                            <option value="11">11</option>
                                                                            <option value="12">12</option>
                                                                            <option value="13">13</option>
                                                                            <option value="14">14</option>
                                                                        </select>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <button id="rt-search-button" onclick="rtSubmit()" class="btn btn-primary btn-lg">Search for Flights</button>
                                                        </form>
                                                    </div>
                                                
                                                    <div class="tab-pane fade" id="flight-search-2">
                                                        <form action="/flight" method="post" class="homepage-form" id="oneway-form">
                                                            <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                                            <input type="hidden" name="triptype" value="O"/>
                                                            @if($errors->any())
                                                                <div class="row">
                                                                    <div class="col-md-12">
                                                                        <h5 class="searchError">{{$errors->first()}}</h5>
                                                                    </div>
                                                                </div>
                                                             @endif
                                                            <div class="row">
                                                                <div class="col-md-6">
                                                                    <div class="form-group form-group-lg form-group-icon-left"><i class="fa fa-map-marker input-icon"></i>
                                                                        <label>From</label>
                                                                        <input class="typeahead form-control from-label" id="oneway-from-label" placeholder="City or Airport" type="text" />
                                                                        <input type="hidden" class="from-iata" name="from-iata" id="oneway-from-iata">
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-6">
                                                                    <div class="form-group form-group-lg form-group-icon-left"><i class="fa fa-map-marker input-icon"></i>
                                                                        <label>To</label>
                                                                        <input class="typeahead form-control to-label" id="oneway-to-label" placeholder="City or Airport" type="text" />
                                                                        <input type="hidden" class="to-iata" name="to-iata" id="oneway-to-iata">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="col-xs-6">
                                                                    <div class="form-group form-group-lg form-group-icon-left"><i class="fa fa-calendar input-icon input-icon-highlight"></i>
                                                                        <label>Departing</label>
                                                                        <input class="date-pick form-control from-date-pick" data-date-format="D, M d" type="text" id="oneway-from-date-pick" readonly />
                                                                        <input class="from-date" type="hidden" name="oneway-from-date" id="oneway-from-date">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="col-md-6">
                                                                    <div class="form-group form-group-lg form-group-icon-left"><i class="fa fa-briefcase input-icon"></i>
                                                                        <label>Class</label>
                                                                        <select name="class" class="form-control classtype" id="oneway-class">
                                                                            <option value="Economy">Economy</option>
                                                                            <option value="PremiumEconomy">Premium Economy</option>
                                                                            <option value="Business">Business</option>
                                                                            <option value="First">First</option>
                                                                        </select>
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-2 col-xs-4 pr0">
                                                                    <div class="form-group form-group-lg">
                                                                        <label>Adults</label>
                                                                        <select name="adults" class="form-control adult-count" id="oneway-adult">
                                                                            <option value="1" selected="selected">1</option>
                                                                            <option value="2">2</option>
                                                                            <option value="3">3</option>
                                                                            <option value="4">4</option>
                                                                            <option value="5">5</option>
                                                                            <option value="6">6</option>
                                                                            <option value="7">7</option>
                                                                            <option value="8">8</option>
                                                                            <option value="9">9</option>
                                                                            <option value="10">10</option>
                                                                            <option value="11">11</option>
                                                                            <option value="12">12</option>
                                                                            <option value="13">13</option>
                                                                            <option value="14">14</option>
                                                                        </select>
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-2 col-xs-4">
                                                                    <div class="form-group form-group-lg">
                                                                        <label>Childs</label>
                                                                        <select name="childs" class="form-control pr10 pl10 child-count" id="oneway-child">
                                                                            <option value="0" selected="selected">0</option>
                                                                            <option value="1">1</option>
                                                                            <option value="2">2</option>
                                                                            <option value="3">3</option>
                                                                            <option value="4">4</option>
                                                                            <option value="5">5</option>
                                                                            <option value="6">6</option>
                                                                            <option value="7">7</option>
                                                                            <option value="8">8</option>
                                                                            <option value="9">9</option>
                                                                            <option value="10">10</option>
                                                                            <option value="11">11</option>
                                                                            <option value="12">12</option>
                                                                            <option value="13">13</option>
                                                                            <option value="14">14</option>
                                                                        </select>
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-2 col-xs-4 pl0">
                                                                    <div class="form-group form-group-lg">
                                                                        <label>Infants</label>
                                                                        <select name="infants" class="form-control infant-count" id="oneway-infant">
                                                                            <option value="0" selected="selected">0</option>
                                                                            <option value="1">1</option>
                                                                            <option value="2">2</option>
                                                                            <option value="3">3</option>
                                                                            <option value="4">4</option>
                                                                            <option value="5">5</option>
                                                                            <option value="6">6</option>
                                                                            <option value="7">7</option>
                                                                            <option value="8">8</option>
                                                                            <option value="9">9</option>
                                                                            <option value="10">10</option>
                                                                            <option value="11">11</option>
                                                                            <option value="12">12</option>
                                                                            <option value="13">13</option>
                                                                            <option value="14">14</option>
                                                                        </select>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <button id="one-way-search-button" onclick="oneWaySubmit()" class="btn btn-primary btn-lg">Search for Flights</button>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 hidden-xs hidden-sm">
                        <div class="adspace mt20">
                            <img src="{{ Voyager::image(setting('site-ad-banners.ad_banner_2')) }}" />
                        </div>
                    </div>
                </div>
                <div class="mt20"></div>
            </div>
        </div>
    </div>
</div>
<div class="container-fluid" style="background: #f9f9f9;">
    <div class="container hidden-xs">
        <div class="row mt20">
            <img style="width: 100%;" src="{{ Voyager::image(setting('site-ad-banners.ad_banner_1')) }}" />
        </div>
    </div>
    <div class="container">
        <div class="row mt20">
            <div class="offerBlockCarousel owl-carousel owl-theme">
                @foreach($offers as $offer)
                    @include('partials._offerBlock', ['offer', $offer])
                @endforeach
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row mt20">
            <div class="col-md-12">
                <h3>Today's top cheap flight offers and deals</h3>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                @include('partials._flightDealBlock', ['from_to' => $del_bom])
            </div>
            <div class="col-md-6">
                @include('partials._flightDealBlock', ['from_to' => $bom_del])
            </div>
            <div class="col-md-6">
                @include('partials._flightDealBlock', ['from_to' => $del_goi])
            </div>
            <div class="col-md-6">
                @include('partials._flightDealBlock', ['from_to' => $blr_del])
            </div>
            <div class="col-md-6">
                @include('partials._flightDealBlock', ['from_to' => $blr_bom])
            </div>
            <div class="col-md-6">
                @include('partials._flightDealBlock', ['from_to' => $bom_goi])
            </div>
        </div>
    </div>
    <div class="container">
        {!! $seo_content->content !!}
    </div>
    <div class="gap"></div>
</div>
@endsection
@section('customStylesheet')
<style type="text/css">
    .user-profile-sidebar {
        margin-right: 0 !important;
    }
    .adspace {
        background: #fff;
    }
</style>
@endsection
@section('customScripts')
<script type="text/javascript">
    openLoginModal();
    $('.offerBlockCarousel').owlCarousel({
        stagePadding: 20,
        loop:true,
        nav:true,
        autoplay:true,
        dots: false,
        navText: [
      "<i class='fa fa-chevron-left' aria-hidden='true'></i>",
      "<i class='fa fa-chevron-right' aria-hidden='true'></i>"
      ],
        responsive:{
            0:{
                items:1
            },
            600:{
                items:2
            },
            1000:{
                items:3
            }
        }
    });
</script>
@endsection
