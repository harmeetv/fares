<script src="/js/jquery.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-cookie/1.4.1/jquery.cookie.min.js"></script>
<script src="/js/bootstrap.js"></script>
<script src="/js/slimmenu.js"></script>
<script src="/js/bootstrap-datepicker.js"></script>
<script src="/js/bootstrap-timepicker.js"></script>
<script src="/js/nicescroll.js"></script>
<script src="/js/dropit.js"></script>
<script src="/js/ionrangeslider.js"></script>
<script src="/js/icheck.js"></script>
<script src="/js/fotorama.js"></script>
<script src="https://maps.googleapis.com/maps/api/js?v=3.exp&amp;sensor=false"></script>
<script src="/js/typeahead.js"></script>
<script src="/js/card-payment.js"></script>
<script src="/js/magnific.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.2.1/owl.carousel.min.js"></script>
<script src="/js/fitvids.js"></script>
<script src="/js/tweet.js"></script>
<script src="/js/countdown.js"></script>
<script src="/js/gridrotator.js"></script>
<script src="/js/custom.js"></script>
<script src="/js/switcher.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.devbridge-autocomplete/1.4.7/jquery.autocomplete.min.js"></script>
<script type="/js/bootstrap-confirmation.js"></script>
<script type="/js/bootbox.js"></script>
<script src="/js/login-register.js" type="text/javascript"></script>
<script type="text/javascript" src="https://unpkg.com/sweetalert2@7.9.0/dist/sweetalert2.all.js"></script>
<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id={{ setting('site.google_analytics_tracking_id') }}"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', '{{ setting("site.google_analytics_tracking_id") }}');
</script>
@yield('customScripts')