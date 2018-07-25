@extends('main')
@section('metaTags')
<title>{{ $page->title }}</title>
<meta name="description" content="{{ $page->meta_description }}"/>
<meta name="keywords" content="{{ $page->meta_keywords }}"/>
@endsection
@section('content')
<div class="container"> 
{!! $page->body !!}
</div>
@endsection
@section('customStylesheet')
<style type="text/css">
.display-5 {
    background: #efefef;
    padding: 10px 25px;
}
</style>
@endsection
