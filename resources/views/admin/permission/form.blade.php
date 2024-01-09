<div class="col-12">
    <label class="form-label" for="validationCustom01">Name</label>
    <input class="form-control" name="name" id="validationCustom01" value="{{ $permission->name ?? '' }}" type="text"
        required="">

    <div class="invalid-feedback" id="name_error">Please enter valid name </div>



</div>




<div class="col-12">
    <button class="btn btn-primary" type="submit">Submit form</button>
</div>

{{-- <div class="modal-footer">
    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
    <button type="button" class="btn btn-primary">Save changes</button>
</div> --}}
