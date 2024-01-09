<x-admin.admin-layout :page="$page">
    <x-slot name="title">
        Permissions
    </x-slot>
    <x-slot name="pageTitle">
        Permissions
    </x-slot>
    <x-slot name="customCss">
        <style>
            .card {
                margin-bottom: 0px;
            }
        </style>
    </x-slot>
    <x-slot name="subPageTitle">
        <li class="breadcrumb-item f-w-400">Permission</li>
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
                            <button class="btn btn-primary mb-3 btn-modal"
                                data-href="{{ action('App\Http\Controllers\Admin\PermissionController@create') }}"
                                data-container="#ajax_modal">Add {{ $page }}</button>

                            <div class="table-responsive theme-scrollbar user-datatable">
                                <table class="display" id="data_table">
                                    <thead>
                                        <tr>
                                            <th style="width: 30px">Id</th>
                                            <th>Name</th>



                                            <th>Action</th>
                                        </tr>
                                    </thead>

                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Multiple table control elements Ends-->
            </div>
        </div>
        <!-- Container-fluid Ends-->
    </div>

    <div class="modal fade" id="ajax_modal" tabindex="-1" role="dialog"></div>
    <div class="modal fade" id="ajax_modal1" tabindex="-1" role="dialog"></div>

    <x-slot name="customJs">
        <script src="{{ asset('assets/js/form-validation-custom.js') }}"></script>
        <script src="{{ asset('assets/js/height-equal.js') }}"></script>

        <script>
            //All Packages table
            $(function() {
                var data_table = $('#data_table').DataTable({
                    processing: true,
                    serverSide: true,
                    scrollX: true,
                    ajax: '{{ url()->current() }}',

                    columns: [{
                            data: 'id',
                            name: 'id'
                        }, {
                            data: 'name',
                            name: 'name'
                        },




                        {
                            data: 'action',
                            name: 'action',
                            orderable: false,
                            searchable: false
                        },
                    ],


                });

                $(document).on('click', '.delete_button', function(e) {
                    e.preventDefault();
                    var thePath = $(this).data('href');
                    const data = thePath.substring(thePath.lastIndexOf('/') + 1)
                    Swal.fire({
                        title: 'Delete Center!',
                        text: "Are you sure you want to delete?",
                        icon: "warning",
                        // buttons: true,
                        // dangerMode: true,
                        confirmButtonText: 'Delete',
                        showCancelButton: true,
                        reverseButtons: true
                    }).then((willDelete) => {
                        if (willDelete.isConfirmed) {
                            $.ajax({
                                method: 'DELETE',
                                url: $(this).data('href'),
                                dataType: 'json',
                                data: {
                                    'id': data,
                                    '_token': '{{ csrf_token() }}'
                                },
                                success: function(result) {
                                    if (result.success === true) {
                                        $.notify({
                                            message: result.msg,
                                            type: 'success'
                                        });
                                        data_table.ajax.reload();
                                    } else {
                                        $.notify({
                                            message: result.msg,
                                            type: 'danger'
                                        });
                                    }
                                },
                            });
                        }
                    });
                });

                $(document).on('click', '.btn-modal', function(e) {
                    e.preventDefault();
                    var container = '#ajax_modal';

                    $.ajax({
                        url: $(this).data('href'),
                        dataType: 'html',
                        success: function(result) {
                            $(container)
                                .html(result)
                                .modal('show');
                        },
                    });
                });
                $(document).on('click', '.btn-modal1', function(e) {
                    e.preventDefault();
                    var container = '#ajax_modal1';

                    $.ajax({
                        url: $(this).data('href'),
                        dataType: 'html',
                        success: function(result) {
                            $(container)
                                .html(result)
                                .modal('show');
                        },
                    });
                });
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

                                data_table.ajax.reload();
                                $('#ajax_modal').modal('hide');

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
