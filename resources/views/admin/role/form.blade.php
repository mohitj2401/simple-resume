<div class="col-12">
    <label class="form-label" for="validationCustom01">Name</label>
    <input class="form-control" name="name" id="validationCustom01" value="{{ $role->name ?? '' }}" type="text"
        required="">

    <div class="invalid-feedback" id="name_error">Please enter valid name </div>



</div>




<div class="col-12">

    <label class="form-label" for="validationTextarea">Role Permission</label>
    {!! Form::select('permissions[]', $permissions, $selected, [
        'class' => 'form-control js-example-basic-multiple',
        'multiple' => 'multiple',
        'required',
    ]) !!}



    <div class="invalid-feedback" id="permissions_error">Please select valid Role Permission </div>

</div>

<div class="col-12">
    <button class="btn btn-primary" type="submit">Submit form</button>
</div>
