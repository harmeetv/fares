<!DOCTYPE html>
<html lang="en">
@include('partials._head')
<body>
   <!-- FACEBOOK WIDGET -->
    <div id="fb-root"></div>
    <script>
        (function(d, s, id) {
            var js, fjs = d.getElementsByTagName(s)[0];
            if (d.getElementById(id)) return;
            js = d.createElement(s);
            js.id = id;
            js.src = "https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.0";
            fjs.parentNode.insertBefore(js, fjs);
        }(document, 'script', 'facebook-jssdk'));
    </script>
    <!-- /FACEBOOK WIDGET -->
    <div class="global-wrap">
        @include('partials._header')
		@yield('content')
        @include('partials._footer')
    </div>
    @if(Auth::guest())
        @include("partials._loginModal")
    @endif
    @include('partials._scripts')
</body>
</html>