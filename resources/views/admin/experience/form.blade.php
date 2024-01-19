<div class="col-12">
    <label class="form-label" for="validationCustom01">Company Name</label>
    <input class="form-control" name="company_name" id="validationCustom01" value="{{ $experience->company_name ?? '' }}"
        type="text" required="">

    <div class="invalid-feedback" id="company_name_error">Please enter valid name </div>



</div>

<div class="col-12">
    <label class="form-label" for="validationCustom01">Job Title</label>
    <input class="form-control" name="job_title" id="validationCustom01" value="{{ $experience->job_title ?? '' }}"
        type="text" required="">

    <div class="invalid-feedback" id="job_title_error">Please enter valid name </div>



</div>



<div class="col-6">
    <label class="form-label" for="validationTextarea">Start Date</label>
    {!! Form::date('start_date', $experience->start_date ?? '', [
        'class' => 'form-control',
    
        'required',
    ]) !!}



    <div class="invalid-feedback" id="start_date_error">Please select valid Role Permission </div>

</div>
<div class="col-6">
    <label class="form-label" for="validationTextarea">End Date</label>
    {!! Form::date('end_date', $experience->end_date ?? '', [
        'class' => 'form-control',
    
        'required',
    ]) !!}



    <div class="invalid-feedback" id="end_date_error">Please select valid Role Permission </div>

</div>


<div class="col-12">

    <label class="form-label" for="validationTextarea">Experience Detail</label>
    {!! Form::textarea('experience_detail', $experience->description ?? '', [
        'class' => 'form-control',
    
        'required',
    ]) !!}



    <div class="invalid-feedback" id="description_error">Please select valid Role Permission </div>

</div>

<div class="col-12">

    <label class="form-label" for="validationTextarea">Is Present</label>
    {!! Form::select('is_present', [1 => 'Yes', 0 => 'No'], $experience->is_present ?? 0, [
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
