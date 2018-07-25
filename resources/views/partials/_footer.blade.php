<?php
    //$seoLinks = \App\SeoLink::get();
?>
<footer id="main-footer">
    <div class="container footer-seo-links">
        <div class="row">
            
        </div>
        <div class="gap"></div>
    </div>
    <div class="container">
        <div class="row row-wrap">
            <div class="col-md-3">
                <h4>Book With Confidence</h4>
                <img src="/img/mcafeesecure.png" />
                <img src="/img/trustedsite.png" class="mt10" />
                <img src="/img/cards.png" class="mt10" />
            </div>

            <div class="col-md-3">
                <h4>Newsletter</h4>
                <form action="/newsletter" method="post">
                    {{ csrf_field() }}
                    <label>Enter your E-mail Address</label>
                    <input type="text" name="email" class="form-control">
                    <p class="mt5"><small>*We Never Send Spam</small>
                    </p>
                    <input type="submit" class="btn btn-primary" value="Subscribe">
                </form>
            </div>
            <div class="col-md-3">
                <h4>Important Links</h4>
                <ul class="list list-footer">
                    <li><a href="/about">About US</a>
                    </li>
                    <li><a href="/contact-us">Contact Us</a>
                    </li>
                    <li><a href="/privacy-policy">Privacy Policy</a>
                    </li>
                    <li><a href="/terms">Term of Use</a>
                    </li>
                    <li><a href="/faqs">FAQs</a>
                    </li>
                </ul>
            </div>
            <div class="col-md-3">
                <h4>Have Questions?</h4>
                <h4 class="text-color">{{ setting('site.phone') }}</h4>
                <h4><a href="#" class="text-color">{{ setting('site.email') }}</a></h4>
                <p>24/7 Dedicated Customer Support</p>
                <ul class="list list-horizontal list-space mt10">
                    @if (setting('social.facebook') != "")
                    <li>
                        <a class="fa fa-facebook box-icon-normal" href="{{ setting('social.facebook') }}"></a>
                    </li>
                    @endif
                    @if (setting('social.twitter') != "")
                    <li>
                        <a class="fa fa-twitter box-icon-normal" href="{{ setting('social.twitter') }}"></a>
                    </li>
                    @endif
                    @if (setting('social.google_plus') != "")
                    <li>
                        <a class="fa fa-google-plus box-icon-normal" href="{{ setting('social.google_plus') }}"></a>
                    </li>
                    @endif
                    @if (setting('social.linkedin') != "")
                    <li>
                        <a class="fa fa-linkedin box-icon-normal" href="{{ setting('social.linkedin') }}"></a>
                    </li>
                    @endif
                    @if (setting('social.youtube') != "")
                    <li>
                        <a class="fa fa-youtube-play box-icon-normal" href="{{ setting('social.youtube') }}"></a>
                    </li>
                    @endif
                </ul>
            </div>

        </div>
        <div class="row text-center">{{ setting('footer.text') }}</div>
    </div>
</footer>
