<div class="col-12">
    <label class="form-label" for="validationCustom01">Name</label>
    <input class="form-control" name="title" id="validationCustom01" value="{{ $project->title ?? '' }}" type="text"
        required="">

    <div class="invalid-feedback" id="title_error">Please enter valid name </div>



</div>

<div class="col-12">

    <label class="form-label" for="validationTextarea">Skill</label>
    {!! Form::select('skills[]', $skills, $selected, [
        'class' => 'form-control js-example-basic-multiple',
        'multiple',
        'required',
    ]) !!}



    <div class="invalid-feedback" id="skills_error">Please select valid Role Permission </div>

</div>

<div class="col-12">

    <label class="form-label" for="validationTextarea">Type</label>
    {!! Form::select('type', [0 => 'Personal', 1 => 'Proffesional'], $project->type ?? null, [
        'class' => 'form-control js-example-basic-multiple',
    
        'required',
    ]) !!}



    <div class="invalid-feedback" id="type_error">Please select valid Role Permission </div>

</div>


<div class="col-6">
    <label class="form-label" for="validationTextarea">Start Date</label>
    {!! Form::date('start_date', $project->start_date ?? '', [
        'class' => 'form-control',
    
        'required',
    ]) !!}



    <div class="invalid-feedback" id="start_date_error">Please select valid Role Permission </div>

</div>
<div class="col-6">
    <label class="form-label" for="validationTextarea">End Date</label>
    {!! Form::date('end_date', $project->end_date ?? '', [
        'class' => 'form-control',
    
        'required',
    ]) !!}



    <div class="invalid-feedback" id="end_date_error">Please select valid Role Permission </div>

</div>


<div class="col-12">

    <label class="form-label" for="validationTextarea">Description</label>
    {!! Form::textarea('description', $project->description ?? '', [
        'class' => 'form-control',
    
        'required',
    ]) !!}



    <div class="invalid-feedback" id="description_error">Please select valid Role Permission </div>

</div>



<div class="col-12">
    <button class="btn btn-primary" type="submit">Submit form</button>
</div>

{{-- <div class="modal-footer">
    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
    <button type="button" class="btn btn-primary">Save changes</button>
</div> --}}
