<div class="col-12">
    <label class="form-label" for="validationCustom01">Course</label>
    <input class="form-control" name="education_name" id="validationCustom01" value="{{ $education->education_name ?? '' }}"
        type="text" required="">

    <div class="invalid-feedback" id="education_name_error">Please enter valid Course </div>



</div>

<div class="col-12">
    <label class="form-label" for="validationCustom01">Institute</label>
    <input class="form-control" name="institute_name" id="validationCustom01"
        value="{{ $education->institute_name ?? '' }}" type="text" required="">

    <div class="invalid-feedback" id="institute_name_error">Please enter valid Institute </div>



</div>



<div class="col-6">
    <label class="form-label" for="validationTextarea">Start Date</label>
    {!! Form::date('start_date', $education->start_date ?? '', [
        'class' => 'form-control',
    
        'required',
    ]) !!}



    <div class="invalid-feedback" id="start_date_error">Please select valid Role Permission </div>

</div>
<div class="col-6">
    <label class="form-label" for="validationTextarea">End Date</label>
    {!! Form::date('end_date', $education->end_date ?? '', [
        'class' => 'form-control',
    
        'required',
    ]) !!}



    <div class="invalid-feedback" id="end_date_error">Please select valid Role Permission </div>

</div>


<div class="col-12">

    <label class="form-label" for="validationTextarea">Description</label>
    {!! Form::textarea('description', $education->description ?? '', [
        'class' => 'form-control',
    
        'required',
    ]) !!}



    <div class="invalid-feedback" id="description_error">Please select valid Role Permission </div>

</div>

<div class="col-12">

    <label class="form-label" for="validationTextarea">Is Present</label>
    {!! Form::select('is_present', [1 => 'Yes', 0 => 'No'], $education->is_present ?? null, [
        'class' => 'form-control',
    
        'required',
    ]) !!}



    <div class="invalid-feedback" id="is_present_error">Please select valid Role Permission </div>

</div>


<div class="col-12">
    <button class="btn btn-primary" type="submit">Submit form</button>
</div>

{{-- <div class="modal-footer">
    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
    <button type="button" class="btn btn-primary">Save changes</button>
</div> --}}
