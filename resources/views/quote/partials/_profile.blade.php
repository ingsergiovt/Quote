

    <div class="form-group row">
        <label for="first_name" class="col-sm-4 col-form-label">FIRST NAME*</label>
        <div class="col-sm-8">
            <input type="text" class="form-control form-control-sm" id="first_name" name="first_name" value="@isset($quote) {{ $quote->first_name }} @endisset">
            <div class="invalid-feedback">
                Looks good!
            </div>
            <small id="passwordHelpBlock" class="form-text text-muted">
                Your first and last name should reflect your legal name as registered on the vehicles you own and for which you wish to purchase insurance.
            </small>
        </div>
    </div>
    <div class="form-group row">
        <label for="middlename" class="col-sm-4 col-form-label">MIDDLE NAME</label>
        <div class="col-sm-8">
            <input type="text" class="form-control form-control-sm" id="middlename" name="middlename" value="@isset($quote) {{ $quote->middlename }} @endisset">
            <div class="invalid-feedback">
                Looks good!
            </div>
        </div>
    </div>
    <div class="form-group row">
        <label for="lastname" class="col-sm-4 col-form-label">LAST NAME*</label>
        <div class="col-sm-8">
            <input type="text" class="form-control form-control-sm" id="lastname" name="lastname"
            value="@isset($quote) {{ $quote->lastname }} @endisset">
            <div class="invalid-feedback">
                Looks good!
            </div>
        </div>
    </div>
    <div class="form-group row">
        <label for="street" class="col-sm-4 col-form-label">STREET ADDRESS*</label>
        <div class="col-sm-8">
            <input type="text" class="form-control form-control-sm" id="street" name="street"
            value="@isset($quote) {{ $quote->street }} @endisset">
            <div class="invalid-feedback">
                Looks good!
            </div>
        </div>
    </div>
    <div class="form-group row">
        <label for="city" class="col-sm-4 col-form-label">CITY*</label>
        <div class="col-sm-8">
            <input type="text" class="form-control form-control-sm" id="city" name="city"
            value="@isset($quote) {{ $quote->city }} @endisset">
            <div class="invalid-feedback">
                Looks good!
            </div>
        </div>
    </div>
    <div class="form-group row">
        <label for="state" class="col-sm-4 col-form-label">STATE*</label>
        <div class="col-sm-8">
            <select class="custom-select custom-select-sm" id="state" name="state" value="">
                <option value="">Default select</option>
                <option value="1">Option 1</option>
                <option value="2">Option 2</option>
                <option value="3">Option 3</option>
                <option value="3">Option 4</option>
            </select>

            <div class="invalid-feedback">
            </div>
        </div>
    </div>

    <div class="form-group row">
        <label for="zipvehicle" class="col-sm-4 col-form-label">ZIP VEHICLE GARAGED*</label>
        <div class="col-sm-2">
            <input type="text" class="form-control form-control-sm" id="zipvehicle" name="zipvehicle" value="">
            <div class="invalid-feedback">
                Looks good!
            </div>
        </div>
    </div>

    <div class="form-group row">
        <label for="email" class="col-sm-4 col-form-label">E-MAIL*</label>
        <div class="col-sm-8">
            <input type="email" class="form-control form-control-sm" id="email" name="email" value="">
            <div class="invalid-feedback">
                Looks good!
            </div>
            <small id="passwordHelpBlock" class="form-text text-muted">
                Your e-mail address is necessary in order to retrieve your information online after you save it. your e-mail address will not be sold to third parties.
            </small>
        </div>
    </div>

    <div class="form-group row no-gutters">
        <label for="homephone_cod1" class="col-sm-4 col-form-label">HOME PHONE*</label>
        (
        <div class="col-10 col-sm-2 mb-3 mb-md-0">
            <input type="text" class="form-control form-control-sm" id="homephone_cod1" name="homephone_cod1" value="">
            <div class="invalid-feedback">
                Looks good!
            </div>
        </div>
        ) -
        <div class="col-10 col-sm-2 mb-3 mb-md-0">
            <input type="text" class="form-control form-control-sm" id="homephone_cod2" name="homephone_cod2" value="">
            <div class="invalid-feedback">
                Looks good!
            </div>
        </div>
        -
        <div class="col-10 col-sm-2">
            <input type="text" class="form-control form-control-sm" id="homephone_cod3" name="homephone_cod3" value="">
            <div class="invalid-feedback">
                Looks good!
            </div>
        </div>
    </div>

    <div class="form-group row no-gutters">
        <label for="workphone_cod1" class="col-sm-4 col-md-4 col-form-label">WORK PHONE*</label>
        (
        <div class="col-10 col-sm-1 mb-3 mb-md-0">
            <input type="text" class="form-control form-control-sm" id="workphone_cod1" name="workphone_cod1">
            <div class="invalid-feedback">
                Looks good!
            </div>
        </div>
        ) -
        <div class="col-10 col-sm-1 mb-3 mb-md-0">
            <input type="text" class="form-control form-control-sm" id="workphone_cod2" name="workphone_cod2">
            <div class="invalid-feedback">
                Looks good!
            </div>
        </div>
        -
        <div class="col-10 col-sm-1 mb-3 mb-md-0">
            <input type="text" class="form-control form-control-sm" id="workphone_cod3" name="workphone_cod3">
            <div class="invalid-feedback">
                Looks good!
            </div>
        </div>

        <div class="col-sm-2 col-md-4 pl-0 d-flex">
            <span class="">Ext: </span>
            <div class="form-row no-gutters">
                <div class="col-sm-12 col-md-4">
                    <input type="text" class="form-control form-control-sm" id="workphone_cod_ext" name="workphone_cod_ext">
                    <div class="invalid-feedback">
                        Looks good!
                    </div>
                </div>
            </div>
        </div>

    </div>

    <div class="form-group row">
        <label for="refered" class="col-sm-4 col-form-label">REFERRED BY</label>
        <div class="col-sm-8">
            <select class="form-control form-control-sm" id="refered" name="refered">
                <option value="">Default select</option>
                <option value="1">Option 1</option>
                <option value="2">Option 2</option>
                <option value="3">Option 3</option>
                <option value="3">Option 4</option>
            </select>
            <div class="invalid-feedback">
                Looks good!
            </div>
        </div>
    </div>

    <div class="form-group row">
        <label for="promo_code" class="col-sm-4 col-form-label">AGENT NAME OR PROMO CODE</label>
        <div class="col-sm-4">
            <input type="text" class="form-control form-control-sm" id="promo_code" name="promo_code">
            <div class="invalid-feedback">
                Looks good!
            </div>
        </div>
    </div>

    <div class="form-group row">
        <label for="insurance_carrier" class="col-sm-4 col-form-label">HAVE PRIOR INSURANCE FROM CARRIER*</label>
        <div class="col-sm-8">
            <select class="form-control form-control-sm" id="insurance_carrier" name="insurance_carrier">
                <option value="">Default select</option>
                <option value="1">Option 1</option>
                <option value="2">Option 2</option>
                <option value="3">Option 3</option>
                <option value="3">Option 4</option>
            </select>
            <div class="invalid-feedback">
                Looks good!
            </div>
        </div>
    </div>

    <div class="form-group row">
        <label for="other_carrier" class="col-sm-4 col-form-label">IF OTHER IS SELECTED PLEASE FILL THE CARRIER'S</label>
        <div class="col-sm-8">
            <input type="text" class="form-control form-control-sm" id="other_carrier" name="other_carrier">
            <div class="invalid-feedback">
                Looks good!
            </div>
        </div>
    </div>
    <h5>NAME</h5>

    <div class="form-group row">
        <label for="insurance_with_carrier" class="col-sm-4 col-form-label">HAVE INSURANCE WITH THAT CARRIER FOR*</label>
        <div class="col-sm-8">
            <select class="form-control form-control-sm" id="insurance_with_carrier" name="insurance_with_carrier">
                <option value="">Default select</option>
                <option value="1">Option 1</option>
                <option value="2">Option 2</option>
                <option value="3">Option 3</option>
                <option value="3">Option 4</option>
            </select>
            <div class="invalid-feedback">
                Looks good!
            </div>
        </div>
    </div>
    <div class="form-group row">
        <label for="other_insurance_carrier" class="col-sm-4 col-form-label">IF OTHER IS SELECTED PLEASE FILL THE CARRIER'S</label>
        <div class="col-sm-8">
            <input type="text" class="form-control form-control-sm" id="other_insurance_carrier" name="other_insurance_carrier">
            <div class="invalid-feedback">
                Looks good!
            </div>
        </div>
    </div>
    <div class="form-group row no-gutters">
        <label for="policy_month" class="col-sm-5 col-form-label">POLICY ENDS ON*</label>
        <div class="col-12 col-md-2  mb-3 mb-md-3">
            <select class="form-control form-control-sm" id="policy_month" name="policy_month">
                <option value="">Month</option>
                <option value="1">Option 1</option>
                <option value="2">Option 2</option>
                <option value="3">Option 3</option>
                <option value="3">Option 4</option>
            </select>
            <div class="invalid-feedback">
                Looks good!
            </div>
        </div>
        <div class="col-12 col-md-2 mb-3 mb-md-3">
            <select class="form-control form-control-sm" id="policy_day" name="policy_day">
                <option value="">Day</option>
                <option value="1">Option 1</option>
                <option value="2">Option 2</option>
                <option value="3">Option 3</option>
                <option value="3">Option 4</option>
            </select>
            <div class="invalid-feedback">
                Looks good!
            </div>
        </div>
        <div class="col-12 col-md-2">
            <input type="text" class="form-control form-control-sm" id="policy_year" name="policy_year" placeholder="YYYY">
            <div class="invalid-feedback">
                Looks good!
            </div>
        </div>
    </div>

    <div class="form-group row">
        <label for="number_licensed_drivers" class="col-sm-4 col-form-label">NUMBER OF LICENSED DRIVERS*</label>
        <div class="col-sm-8">
            <select class="form-control form-control-sm" id="number_licensed_drivers" name="number_licensed_drivers">
                <option value="">Default select</option>
                <option value="1">Option 1</option>
                <option value="2">Option 2</option>
                <option value="3">Option 3</option>
                <option value="3">Option 4</option>
            </select>
            <div class="invalid-feedback">
                Looks good!
            </div>
        </div>
    </div>
    <div class="form-group row">
        <label for="number_vehicles" class="col-sm-4 col-form-label">NUMBER OF VEHICLES*</label>
        <div class="col-sm-8">
            <select class="form-control form-control-sm" id="number_vehicles" name="number_vehicles">
                <option value="">Default select</option>
                <option value="1">Option 1</option>
                <option value="2">Option 2</option>
                <option value="3">Option 3</option>
                <option value="3">Option 4</option>
            </select>
            <div class="invalid-feedback">Example invalid custom select feedback</div>
            <div class="invalid-feedback">
                Looks good!
            </div>
        </div>
    </div>
    <div class="form-group row">
        <label for="recidence_type" class="col-sm-4 col-form-label">RESIDENCE TYPE</label>
        <div class="col-sm-8">
            <select class="form-control form-control-sm" id="recidence_type" name="recidence_type">
                <option value="">Default select</option>
                <option value="1">Option 1</option>
                <option value="2">Option 2</option>
                <option value="3">Option 3</option>
                <option value="3">Option 4</option>
            </select>
            <div class="invalid-feedback">
                Looks good!
            </div>
        </div>
    </div>

    @if(isset($quote))
        <input type="hidden" name="form_code" id="form_code" value="{{$quote->code}}">
    @endif


