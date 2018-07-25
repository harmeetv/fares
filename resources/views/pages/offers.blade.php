@extends('main')
@section('metaTags')
<title>{{ setting('offer-page.page_title') }}</title>
<meta name="description" content="{{ setting('offer-page.meta_description') }}"/>
<meta name="keywords" content="{{ setting('offer-page.meta_keywords') }}"/>
@endsection
@section('content')
<div class="container">
    @include("partials._breadcrumbs", ['breadcrumbs' => $breadcrumbs])
    <div class="offer-cover-section">
        <img src="{{ Voyager::image(setting('offer-page.page_banner')) }}">
    </div>
    <h1 class="page-heading">{{ setting('offer-page.page_heading') }}</h1>
    <h2 class="sub-heading">{!! setting('offer-page.page_subheading') !!}</h2>
</div>
<section id="offer-section">
<div class="container">
    <div class="row">
        @foreach($offers as $offer)
        <div class="col-md-4">
            @include("partials._offerBlock", ['offer' => $offer])
        </div>
        @endforeach
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
