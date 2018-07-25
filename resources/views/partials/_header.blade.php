<header id="main-header">
    <div class="header-top">
        <div class="container">
            <div class="row">
                <div class="col-xs-3">
                    <a class="logo" href="/">
                        <img src="{{ Voyager::image(setting('site.logo')) }}" alt="Logo" title="Logo" style="height: 100%;" />
                    </a>
                </div>
                <div class="col-xs-9">
                    <div class="top-user-area clearfix">
                        <ul class="top-user-area-list list list-horizontal list-border">
                                                            <!-- <li>
                                    <a href="#" onclick="openLoginModal()">Login</a>
                                </li> -->
                                <!-- <li>
                                    <a href="#" onclick="openRegisterModal()">Register</a>
                                </li> -->
                                <li class="top-user-area-avatar">
                                    <a href="#" onclick="openLoginModal()"><img class="origin round" src="/img/avatar.jpg" alt="Image Alternative text" title="AMaze" />My Account</a>
                                </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid mobile-menu hidden-md hidden-lg hidden-xl">
        <div class="nav">
            <ul class="slimmenu" id="slimmenu">
                <li class="active"><a href="/userProfile"><i class="fa fa-plane"></i> Flights</a>
                </li>
                <li><a href="/userBookingHistory"><i class="fa fa-cog"></i> Manage Booking</a>
                </li>
                <li><a href="/userBookingHistory"><i class="fa fa-print"></i> Print Ticket</a>
                </li>
                <li><a href="/userBookingHistory"><i class="fa fa-ban"></i> Cancellations</a>
                </li>
                <li><a href="/contactUs"><i class="fa fa-phone"></i> Contact Us</a>
                </li>
            </ul>
        </div>
    </div>
</header>