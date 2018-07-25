<div class="row">
    <div class="fareTrendCarousel owl-carousel owl-theme">
        @for($i=1; $i<30; $i++)
        <?php
            $link = "/flight/$from/$to/".date("d/m/Y", strtotime('+'.$i.' days'))."/".date("d/m/Y", strtotime('+'.$i.' days'))."/O/$intl/Economy/1/0/0";
			//href="{{ $link }}"
		?>
        <a class="text-center" href="{{ $link }}">
            <div class="date">{{ date("D, d M", strtotime('+'.$i.' days')) }}</div>
            @if(array_key_exists(date("Y-m-d", strtotime('+'.$i.' days')), $faretrend))
            <div class="price">₹{{ App\Common::rupeeFormat($faretrend[date("Y-m-d", strtotime('+'.$i.' days'))]) }}</div>
            @else
            <div class="price">Check Price</div>
            @endif
        </a>
        @endfor
    </div>
</div>
