<div class="offer-block" onclick="window.location.href='/offers/{{ $offer->slug }}/'">
    <div class="offer-image-section">
        <img src="{{ Voyager::image($offer->display_image) }}">
    </div>
    <div class="offer-bot-section">
        <p class="offer-sub-heading">{{ $offer->offer_title }}</p>
        <div class="offer-view-div"><a href="#" class="btn btn-primary btn-sm">View Details</a></div>
    </div>
    <div class="offer-footer-section">
        <div class="offer-footer-left">
            <i class="fa fa-clock-o" aria-hidden="true"></i>&nbsp;<span>{{ date('jS F Y', strtotime($offer->valid_upto)) }}</span>
        </div>
        <div class="offer-footer-right"><i class="fa fa-file-text-o" aria-hidden="true">&nbsp;</i><span>T&amp;C Apply</span>
        </div>
    </div>
</div>
