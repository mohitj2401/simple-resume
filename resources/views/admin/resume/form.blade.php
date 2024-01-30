<div class="col-12">
    <label class="form-label" for="validationCustom01">Name</label>
    <input class="form-control" name="title" id="validationCustom01" value="{{ $resume->title ?? '' }}" type="text"
        required="">

    <div class="invalid-feedback" id="title_error">Please enter valid name </div>



</div>

<div class="col-12">

    <label class="form-label" for="validationTextarea">Skill</label>
    {!! Form::select('skills[]', $skills, $skill_selected, [
        'class' => 'form-control js-example-basic-multiple',
        'multiple',
        'required',
    ]) !!}



    <div class="invalid-feedback" id="skills_error">Please select valid Skill </div>

</div>


<div class="col-12">

    <label class="form-label" for="validationTextarea">Project</label>
    {!! Form::select('projects[]', $projects, $project_selected, [
        'class' => 'form-control js-example-basic-multiple',
        'multiple',
        'required',
    ]) !!}



    <div class="invalid-feedback" id="project_error">Please select valid Project </div>

</div>

<div class="col-12">

    <label class="form-label" for="validationTextarea">Education</label>
    {!! Form::select('educations[]', $educations, $education_selected, [
        'class' => 'form-control js-example-basic-multiple',
        'multiple',
        'required',
    ]) !!}



    <div class="invalid-feedback" id="education_error">Please select valid education </div>

</div>

<div class="col-12">

    <label class="form-label" for="validationTextarea">Experience</label>
    {!! Form::select('experiences[]', $experiences, $experience_selected, [
        'class' => 'form-control js-example-basic-multiple',
        'multiple',
        'required',
    ]) !!}



    <div class="invalid-feedback" id="experience_error">Please select valid experience </div>

</div>


<div class="col-12">

    <label class="form-label" for="validationTextarea">Show Project Durations</label>
    {!! Form::select('show_duration', [1 => 'Yes', 0 => 'No'], $resume->show_duration ?? 1, [
        'class' => 'form-control',
    
        'required',
    ]) !!}



    <div class="invalid-feedback" id="show_duration_error">Please select valid Role Permission </div>

</div>

<div class="col-12">
    <button class="btn btn-primary" type="submit">Submit form</button>
</div>

{{-- <div class="modal-footer">
    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
    <button type="button" class="btn btn-primary">Save changes</button>
</div> --}}
