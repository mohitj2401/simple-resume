<div class="col-12">
    <label class="form-label" for="validationCustom01">Name</label>
    <input class="form-control" name="name" id="validationCustom01" value="{{ $category->name ?? '' }}" type="text"
        placeholder="Enter category Name" required="">

    <div class="invalid-feedback" id="name_error">Please enter valid name </div>



</div>




<div class="col-12">
    <label class="form-label" for="validationTextarea">Description</label>
    <textarea class="form-control" id="validationTextarea" placeholder="Enter category description" required=""
        name="description">{{ $category->description ?? '' }}</textarea>


    <div class="invalid-feedback" id="description_error">Please enter valid description </div>

</div>

<div class="col-12">
    <button class="btn btn-primary" type="submit">Submit form</button>
</div>

{{-- <div class="modal-footer">
    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
    <button type="button" class="btn btn-primary">Save changes</button>
</div> --}}
