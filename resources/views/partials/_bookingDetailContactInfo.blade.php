<div class="booking-sign-in-form">
    <h3>Contact Information</h3>
        <div class="row">
        <div class="col-md-4">
            <div class="form-group">
                <label>First & Last Name</label>
                <input class="form-control" type="text" name="contact_name" value="<?php echo \Auth::guest()?'':\Auth::user()->name; ?>" />
            </div>
        </div>
        <div class="col-md-4">
            <div class="form-group">
                <label>Phone Number</label>
                <input class="form-control" type="text" name="contact_phone" value="<?php echo \Auth::guest()?'':\Auth::user()->phone; ?>" />
            </div>
        </div>
        <div class="col-md-4">
            <div class="form-group">
                <label>E-mail</label>
                @if (Auth::guest())
                    <input class="form-control" type="text" name="contact_email" />
                @else
                    <input class="form-control" type="text" value="{{ Auth::user()->email }}" disabled />
                    <input type="hidden" name="contact_email" value="{{ Auth::user()->email }}" />
                @endif
            </div>
        </div>
    </div>
    @if (Auth::guest())
        <p>Sign in to your <a data-toggle="modal" data-target="#loginModal">FaresPro account</a> for fast booking.</p>
    @endif
</div>