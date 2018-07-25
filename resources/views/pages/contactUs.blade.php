@extends('main')
@section('metaTags')
<title>{{ setting('contact-us-page.title') }}</title>
<meta name="description" content="{{ setting('contact-us-page.meta_description') }}"/>
<meta name="keywords" content="{{ setting('contact-us-page.meta_keywords') }}"/>
@endsection
@section('content')

<div class="container">
    <h1 class="page-title">Contact Us</h1>
    @if (session('status'))
        <div class="alert alert-success mt10">
            {{ session('status') }}
        </div>
    @endif
</div>
<div id="map-canvas" style="height:400px;"></div>
<div class="container">
    <div class="gap"></div>
    <div class="row">
        <div class="col-md-7">
            <form action="/contact-us" method="post">
                {{ csrf_field() }}
                <div class="row">
                    <div class="col-md-4">
                        <div class="form-group">
                            <label>Name</label>
                            <input class="form-control" type="text" name="name" />
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label>Phone</label>
                            <input class="form-control" type="text" name="phone" />
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label>E-mail</label>
                            <input class="form-control" type="text" name="email" />
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <label>Message</label>
                    <textarea class="form-control" name="message"></textarea>
                </div>
                <input class="btn btn-primary" type="submit" value="Send Message" />
            </form>
        </div>
        <div class="col-md-4">
            <aside class="sidebar-right">
                <ul class="address-list list">
                    <li>
                        <h5>Email</h5><a href="mailto:{{ setting('site.email') }}">{{ setting('site.email') }}</a>
                    </li>
                    <li>
                        <h5>Phone Number</h5><a href="#">{{ setting('site.phone') }}</a>
                    </li>
                    <li>
                        <h5>Skype</h5><a href="#">farespro</a>
                    </li>
                    <li>
                        <h5>Address</h5><address>Farespro<br />{{ setting('site.address') }}<br />{{ setting('site.city') }} {{ setting('site.pincode') }}<br />India<br /></address>
                    </li>
                </ul>
            </aside>
        </div>
    </div>
    <div class="gap"></div>
</div>
@endsection