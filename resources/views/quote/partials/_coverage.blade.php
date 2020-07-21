
    <div class="form-group row">
        <label for="bi" class="col-sm-4 col-form-label">BI*</label>
        <div class="col-sm-8">
            <select class="form-control form-control-sm" id="bi" name="bi">
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
        <label for="pd" class="col-sm-4 col-form-label">PD*</label>
        <div class="col-sm-8">
            <select class="form-control form-control-sm" id="pd" name="pd">
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
        <label for="medpm" class="col-sm-4 col-form-label">MEDPM</label>
        <div class="col-sm-8">
            <select class="form-control form-control-sm" id="medpm" name="medpm">
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
        <label for="umbi" class="col-sm-4 col-form-label">UMBI</label>
        <div class="col-sm-8">
            <select class="form-control form-control-sm" id="umbi" name="umbi">
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
        <label for="umpd" class="col-sm-4 col-form-label">UMPD</label>
        <div class="col-sm-8">
            <select class="form-control form-control-sm" id="umpd" name="umpd">
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
        <label for="comp" class="col-sm-4 col-form-label">COMP</label>
        <div class="col-sm-8">
            <select class="form-control form-control-sm" id="comp" name="comp">
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
        <label for="coll" class="col-sm-4 col-form-label">COLL</label>
        <div class="col-sm-8">
            <select class="form-control form-control-sm" id="coll" name="coll">
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

