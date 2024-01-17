<x-admin.admin-layout :page="$page">
    <x-slot name="title">
        {{ $title }}
    </x-slot>
    <x-slot name="pageTitle">
        {{ $pageTitle }}
    </x-slot>
    <x-slot name="customCss">
        <style>
            .card {
                margin-bottom: 0px;
            }
        </style>
    </x-slot>
    <x-slot name="subPageTitle">
        <li class="breadcrumb-item f-w-400">{{ $title }}</li>
    </x-slot>
    <div class="page-body">
        <!-- Container-fluid starts-->
        <div class="container-fluid">
            <div class="row">

                <!-- Multiple table control elements  Starts-->
                <div class="col-sm-12">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="mb-3">{{ $page }}</h4>
                        </div>
                        <div class="card-body">
                            {!! Form::open([
                                'url' => action('App\Http\Controllers\ProfileController@update'),
                                'id' => 'ajax_form',
                                'method' => 'post',
                                'enctype' => 'multipart/form-data',
                                'class' => 'row g-3 needs-validation custom-input',
                                'novalidate',
                            ]) !!}
                            <div class="col-6">
                                <label class="form-label" for="validationCustom01">Name</label>
                                <input class="form-control" value="{{ $user->name ?? '' }}" type="text" disabled>





                            </div>
                            <div class="col-6">
                                <label class="form-label" for="validationCustom01"> Email</label>
                                <input class="form-control" value="{{ $user->email ?? '' }}" type="text" disabled>





                            </div>
                            <div class="col-6">
                                <label class="form-label" for="validationCustom01">Linkedin Url</label>
                                <input class="form-control" name="linkdin" id="validationCustom01"
                                    value="{{ $user->linkdin ?? '' }}" type="url" required="">

                                <div class="invalid-feedback" id="linkdin_error">Please enter valid url </div>



                            </div>
                            <div class="col-6">
                                <label class="form-label" for="validationCustom01">Github Url</label>
                                <input class="form-control" name="github" id="validationCustom01"
                                    value="{{ $user->github ?? '' }}" type="url" required="">

                                <div class="invalid-feedback" id="github_error">Please enter valid url </div>



                            </div>
                            <div class="col-6">
                                <label class="form-label" for="validationCustom01">Number</label>
                                <input class="form-control" name="number" id="validationCustom01"
                                    value="{{ $user->number ?? '' }}" type="number" required="">

                                <div class="invalid-feedback" id="number_error">Please enter valid number </div>



                            </div>

                            <div class="col-12">

                                <label class="form-label" for="validationTextarea">Awards and Certificates (In Order
                                    Format)</label>
                                {!! Form::textarea('certification', $user->certification ?? '', [
                                    'class' => 'form-control',
                                ]) !!}



                                <div class="invalid-feedback" id="certification_error">Please select valid Cerificates
                                </div>

                            </div>
                            <div class="col-12">
                                <button class="btn btn-primary" type="submit">Submit form</button>
                            </div>

                            {{-- <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="button" class="btn btn-primary">Save changes</button>
                    </div> --}}

                            {!! Form::close() !!}
                        </div>
                    </div>
                </div>
                <!-- Multiple table control elements Ends-->
            </div>
        </div>
        <!-- Container-fluid Ends-->
    </div>


    <x-slot name="customJs">
        <script src="//cdn.ckeditor.com/4.22.1/basic/ckeditor.js"></script>
        <script src="{{ asset('assets/js/form-validation-custom.js') }}"></script>
        <script src="{{ asset('assets/js/height-equal.js') }}"></script>
        <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
        <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
        <script>
            //All Packages table
            $(function() {



                CKEDITOR.replace('certification');


                $(document).on('submit', 'form#ajax_form', function(e) {
                    e.preventDefault();
                    $(this).find('button[type="submit"]').attr('disabled', true);

                    $.ajax({
                        method: 'POST',
                        url: $(this).attr('action'),
                        data: new FormData(this),
                        processData: false,
                        contentType: false,
                        success: function(result) {
                            if (result.success === true) {

                                var notify = $.notify({

                                    title: result.msg,
                                    message: ""

                                }, {
                                    allow_dismiss: true,
                                    z_index: 99999,
                                    type: 'success',
                                });

                                $('form#ajax_form').find('button[type="submit"]').attr('disabled',
                                    false);


                            } else {

                                $.notify({

                                    title: result.msg,
                                    message: ""


                                }, {

                                    z_index: 99999,
                                    type: 'danger',
                                });



                                $('form#ajax_form').find('button[type="submit"]').attr('disabled',
                                    false);
                            }
                        },
                        error: function(data) {

                            var response = JSON.parse(data.responseText);
                            $.each(response.errors, function(key, value) {
                                $('#' + key + '_error').html(value);
                                $('#' + key + '_error').show();


                            });
                            $('form#ajax_form').find('button[type="submit"]').attr('disabled',
                                false);
                        },
                    });
                });

            });
        </script>

    </x-slot>
</x-admin.admin-layout>
