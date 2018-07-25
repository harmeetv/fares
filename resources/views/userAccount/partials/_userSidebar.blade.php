<aside class="user-profile-sidebar">
    <div class="user-profile-avatar text-center">
        <img src="img/avatar.jpg" alt="Image Alternative text" title="AMaze" />
        <h5>{{ Auth::user()->name }}</h5>
    </div>
    <ul class="list user-profile-nav">
        <!-- <li><a href="/userProfile"><i class="fa fa-user"></i>Overview</a>
        </li> -->
        <li><a href="/userSettings"><i class="fa fa-cog"></i>Settings</a>
        </li>
        <!-- <li><a href="#"><i class="fa fa-camera"></i>My Travel Photos</a>
        </li> -->
        <li><a href="/userBookingHistory"><i class="fa fa-clock-o"></i>Booking History</a>
        </li>
        <!-- <li><a href="/userCreditCards"><i class="fa fa-credit-card"></i>Credit/Debit Cards</a>
        </li>
        <li><a href="/userWishlist"><i class="fa fa-heart-o"></i>Wishlist</a>
        </li> -->
    </ul>
</aside>