<x-admin.admin-layout :page="$page">
    <x-slot name="customCss">
        <Style></Style>
    </x-slot>
    <x-slot name="title">
        Admin Dashboard
    </x-slot>
    <x-slot name="pageTitle">
        Dashboard
    </x-slot>
    <x-slot name="subPageTitle">
        <li class="breadcrumb-item f-w-400">Dashboard</li>
    </x-slot>

    <!-- Page Sidebar Ends-->
    <div class="page-body">
        <!-- Container-fluid starts-->
        <div class="container-fluid default-dashboard">
            <div class="row">

                <!-- Multiple table control elements  Starts-->
                <div class="col-sm-12">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="mb-3">Recent Resume</h4>
                        </div>
                        <div class="card-body">


                            <div class="table-responsive theme-scrollbar user-datatable">
                                <table class="display" id="data_table">
                                    <thead>
                                        <tr>
                                            <th style="width: 30px">Id</th>
                                            <th>Name</th>
                                            <th>Skills</th>
                                            <th>Projects</th>



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
    <x-slot name="customJs">
        <script>
            $(function() {


                var data_table = $('#data_table').DataTable({
                    processing: true,
                    serverSide: true,
                    scrollX: true,
                    ajax: '{{ url()->current() }}',

                    columns: [{
                            data: 'id',
                            name: 'id'
                        },
                        {
                            data: 'name',
                            name: 'name'
                        },
                        {
                            data: 'skills',
                            name: 'skills'
                        },

                        {
                            data: 'projects',
                            name: 'projects'
                        },



                        {
                            data: 'action',
                            name: 'action',
                            orderable: false,
                            searchable: false
                        },
                    ],


                });

            })
        </script>
    </x-slot>
</x-admin.admin-layout>
