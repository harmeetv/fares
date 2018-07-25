@extends('main')
@section('metaTags')
<title>{{ $offer->page_title }}</title>
@endsection
@section('content')
<div class="container">
    @include("partials._breadcrumbs", ['breadcrumbs' => $breadcrumbs])
</div>
<section id="offer-section">
    <div class="container">
        <div class="row">
            <div class="offer-cover-image">
                <img src="{{ Voyager::image($offer->cover_image) }}" />
            </div>
            <div class="offer-cover-image-square">
                <img src="{{ Voyager::image($offer->cover_image_mobile) }}" />
            </div>
        </div>
        <?php try { ?>
        <div class="row offer-info mt-20">
            @if($offer->offer_info != "")
            <?php $offer_blocks = explode(",", $offer->offer_info); ?>
            @foreach($offer_blocks as $offer_block)
            <?php $offer_block_array = explode(":", $offer_block); ?>
            <div class="col-md-3 col-sm-3 col-xs-6 offer-info-block">
                <div class="offer-info-block-key">{{ trim($offer_block_array[0]) }}</div>
                <div class="offer-info-block-value"><strong class="blue-offer-block">{{ trim($offer_block_array[1]) }}</strong></div>
            </div>
            @endforeach
            @endif
        </div>
        <?php } catch(Exception $e) {} ?>
        <div class="mt20">
        {!! $offer->details !!}
        </div>
    </div>
</section>
<div class="gap"></div>
@endsection
@section('customStylesheet')
<style type="text/css">
.display-5 {
    background: #efefef;
    padding: 10px 25px;
}
</style>
@endsection
