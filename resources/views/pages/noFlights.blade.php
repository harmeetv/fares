@extends('main')
@section('metaTags')
<title>FaresPro</title>
@endsection
@section('content')
<div class="gap"></div>

<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <i class="fa fa-frown-o round box-icon-large box-icon-center box-icon-warning mb30"></i>	
            <h3 class="text-center">Sorry, No flights found for your search</h3>
            <h5 class="text-center mb30"><a href="/">Please Try Again with other Date or Class</a></h5>
        </div>
    </div>
    <div class="gap"></div>
</div>
@endsection