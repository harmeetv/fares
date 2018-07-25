<!-- Booking List Loader -->
<div class="col-md-9 loader-col">
    <ul class="booking-list">
        @for ($i = 0; $i < 10; $i++)
        <li>
            <div class="booking-item-container">
                <div class="booking-item viewed">
                    <div class="row hidden-xs hidden-sm">
                        <div class="col-md-2">
                            <div class="booking-item-airline-logo">
                                <div class="airline-logo-loader loader-animated-background"></div>
                                <div class="airline-name-loader loader-animated-background"></div>
                            </div>
                        </div>
                        <div class="col-md-4 text-right">
                            <div class="booking-item-flight-details">
                                <div class="booking-item-departure">
                                    <div class="time-loader loader-animated-background"></div>
                                    <div class="date-loader loader-animated-background"></div>
                                </div>
                            <div class="booking-item-arrival">
                                <div class="time-loader loader-animated-background"></div>
                                <div class="date-loader loader-animated-background"></div>
                            </div>
                            </div>
                        </div>
                        <div class="col-md-2 text-right">
                            <div class="time-loader loader-animated-background"></div>
                            <div class="date-loader loader-animated-background"></div>
                        </div>
                        <div class="col-md-2 text-right">
                            <div class="time-loader loader-animated-background"></div>
                            <div class="refund-loader loader-animated-background"></div>
                        </div> 
                        <div class="col-md-2 text-right">
                            <div class="book-button-loader loader-animated-background"></div>
                        </div>
                    </div>
                    <div class="row hidden-md hidden-lg hidden-xl">
                        <div class="col-sm-12" style="display: flex;flex-direction: row;align-items: center;">
                            <div class="booking-item-airline-logo" style="max-width: 50px;text-align: center;">
                                <div class="m-airline-logo loader-animated-background"></div>
                                <div class="m-airline-name loader-animated-background"></div>
                            </div>
                            <div style="flex: 1;margin: 0 18px;font-size: 11px;">
                                <div class="upper-mid-col-loader loader-animated-background" > </div>
                                <div class="lower-mid-col-loader loader-animated-background"></div>
                            </div>
                            <div class="m-right-col-loader">
                                <div class="m-price-loader loader-animated-background"></div>
                                <div class="m-book-button-loader loader-animated-background"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </li>
        @endfor
    </ul>
</div>
<!-- Booking List Loader -->