<div class="col-12">
    <label class="form-label" for="validationCustom01">Name</label>
    <input class="form-control" name="name" id="validationCustom01" value="{{ $skill->name ?? '' }}" type="text"
        required="">

    <div class="invalid-feedback" id="name_error">Please enter valid name </div>



</div>

<div class="col-12">

    <label class="form-label" for="validationTextarea">Type</label>
    {!! Form::select('type', getSkillsType(), $skill->type ?? null, [
        'class' => 'form-control js-example-basic-multiple',
    
        'required',
    ]) !!}



    <div class="invalid-feedback" id="type_error">Please select valid Role Permission </div>

</div>

<div class="col-12">

    <label class="form-label" for="validationTextarea">Status</label>
    {!! Form::select('active', [0 => 'Inactive', 1 => 'Active'], $skill->status ?? null, [
        'class' => 'form-control js-example-basic-multiple',
    
        'required',
    ]) !!}



    <div class="invalid-feedback" id="active_error">Please select valid Role Permission </div>

</div>





<div class="col-12">
    <button class="btn btn-primary" type="submit">Submit form</button>
</div>

{{-- <div class="modal-footer">
    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
    <button type="button" class="btn btn-primary">Save changes</button>
</div> --}}
