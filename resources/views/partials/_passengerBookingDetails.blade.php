<li>
    <div class="row mb10">
        <div class="col-md-12 passenger-type-col">
            <span><?= $passengerType ?> <?= $i+1 ?>:</span>
            <input type="hidden" name="passenger_type[]" value="<?= $passengerType ?>">
        </div>
    </div>
    <div class="row">
        <div class="col-md-3">
            <div class="form-group">
                <label>Title</label>
                <select class="form-control" type="text" name="title[]">
                    <option value="Mr">Mr</option>
                    <option value="Ms">Ms</option>
                    <option value="Mrs">Mrs</option>
                    <option value="Mstr">Mstr</option>
                </select>
            </div>
        </div>
        <div class="col-md-3">
            <div class="form-group">
                <label>Given Name</label>
                <input class="form-control" type="text" name="firstname[]" />
            </div>
        </div>
        <div class="col-md-3">
            <div class="form-group">
                <label>Surname</label>
                <input class="form-control" type="text" name="lastname[]" />
            </div>
        </div>
        <div class="col-md-3">
            <div class="form-group">
                <label>Date of Birth</label>
                <input class="dob-years-{{ strtolower($passengerType) }} form-control" type="text" name="dob[]"/>
            </div>
        </div>
    </div>
    @if ($intl=='INTL')
        <?php
            $countries = App\Countrycode::get();
        ?>
        <div class="row">
            <div class="col-md-3">
                <div class="form-group">
                    <label>Passport Number</label>
                    <input class="form-control" type="text" name="passport_number[]" />
                </div>
            </div>
            <div class="col-md-3">
                <div class="form-group">
                    <label>Passport Expiry Date</label>
                    <input class="passport-expiry-years form-control" type="text" name="passport_expiry[]" />
                </div>
            </div>
            <div class="col-md-3">
                <div class="form-group">
                    <label>Issuing Country</label>
                    <select class="form-control" type="text" name="issuecountry[]">
                        @foreach($countries as $country)
                            <option value="{{ $country->code }}" @if($country->code=="IN") {{ 'selected="selected"' }} @endif>{{ $country->country }}</option>
                        @endforeach
                    </select>
                </div>
            </div>
            <div class="col-md-3">
                <div class="form-group">
                    <label>Nationality</label>
                    <select class="form-control" type="text" name="nationality[]">
                        @foreach($countries as $country)
                            <option value="{{ $country->code }}" @if($country->code=="IN") {{ 'selected="selected"' }} @endif>{{ $country->nationality }}</option>
                        @endforeach
                    </select>
                </div>
            </div>
        </div>
    @endif
</li>