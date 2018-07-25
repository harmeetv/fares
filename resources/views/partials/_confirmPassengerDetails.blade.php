<li>
    <div class="row mb10">
        <div class="col-md-12 passenger-type-col">
            <span><?= $passengerType ?> <?= $i+1 ?>:</span>
        </div>
    </div>
    <div class="row">
        <div class="col-md-3">
            <div class="form-group">
                <label>Title</label>
                <input class="form-control" type="text" value="{{ $title }}" disabled />
            </div>
        </div>
        <div class="col-md-3">
            <div class="form-group">
                <label>Given Name</label>
                <input class="form-control" type="text" value="{{ $firstname }}" disabled />
            </div>
        </div>
        <div class="col-md-3">
            <div class="form-group">
                <label>Surname</label>
                <input class="form-control" type="text" value="{{ $lastname }}" disabled />
            </div>
        </div>
        <div class="col-md-3">
            <div class="form-group">
                <label>Date of Birth</label>
                <input class="form-control" type="text" value="{{ $dob }}" disabled />
            </div>
        </div>
    </div>
    @if ($intl=='INTL')
        <div class="row">
            <div class="col-md-3">
                <div class="form-group">
                    <label>Passport Number</label>
                    <input class="form-control" type="text" value="{{ $passport_number }}" disabled />
                </div>
            </div>
            <div class="col-md-3">
                <div class="form-group">
                    <label>Passport Expiry Date</label>
                    <input class="form-control" type="text" value="{{ $passport_expiry }}" disabled />
                </div>
            </div>
            <div class="col-md-3">
                <div class="form-group">
                    <label>Issue Country</label>
                    <input class="form-control" type="text" value="{{ App\Countrycode::where('code', $issuecountry)->limit(1)->get()->first()->country }}" disabled />
                </div>
            </div>
            <div class="col-md-3">
                <div class="form-group">
                    <label>Nationality</label>
                    <input class="form-control" type="text" value="{{ App\Countrycode::where('code', $nationality)->limit(1)->get()->first()->nationality }}" disabled />
                </div>
            </div>
        </div>
    @endif
</li>