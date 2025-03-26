@extends('Admin.layouts.app')

<link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
@section('content')
    <div class="container-fluid">

        <div class="page-title">

            <div class="row">

                <div class="col-6">

                    <h4>{{ translate('sub_service') }}</h4>

                </div>

                <div class="col-6">

                    <ol class="breadcrumb">

                        <li class="breadcrumb-item"><button class="btn btn-sm btn-primary" type="button" data-bs-toggle="modal"
                                data-bs-target="#createmodel"><i class="fa fa-plus" aria-hidden="true"></i>

                                {{ translate('add_new') }} </button></li>

                    </ol>

                </div>

            </div>

        </div>

    </div>

    <div class="container-fluid">

        <div class="row">

            <!-- Zero Configuration  Starts-->

            <div class="col-sm-12">

                <div class="card">

                    <div class="card-body">

                        <div class="table-responsive">

                            <table class="display sub-service-data">

                                <thead>

                                    <tr>

                                        <th>{{ translate('id') }}</th>

                                        <th>{{ translate('sub_service_image') }}</th>

                                        <th>{{ translate('sub_service_name') }}</th>

                                        <th>{{ translate('sub_service_created_at') }}</th>

                                        <th>{{ translate('sub_service_updated_at') }}</th>

                                        <th>{{ translate('action') }}</th>

                                    </tr>

                                </thead>

                                <tbody>



                                </tbody>

                            </table>

                        </div>

                    </div>

                </div>

            </div>

            <!-- Zero Configuration  Ends-->

        </div>

    </div>

    <!-- Container-fluid Ends-->

    </div>







    <!-- create service model --->

    <div class="modal fade" id="createmodel" tabindex="-1" role="dialog" aria-labelledby="createmodel" aria-hidden="true">

        @include('Admin.Sub-Service.create')

    </div>

    <!-- create service model end --->





    <!-- edit service model --->

    <div class="modal fade" id="editmodel" tabindex="-1" role="dialog" aria-labelledby="editmodel" aria-hidden="true">

    </div>

    <!-- edit service model end --->
@endsection


@section('script')
    <script src="{{ static_asset('admin/assets/js/select2/select2.full.min.js') }}"></script>
    <script src="{{ static_asset('admin/assets/js/select2/select2-custom.js') }}"></script>
    {{-- <script src="{{ static_asset('admin/assets/js/theme-customizer/customizer.js') }}"></script> --}}
    <script type="text/javascript">
        $(document).ready(function() {

            var table = $('.sub-service-data').DataTable({

                processing: true,

                serverSide: true,

                language: {

                    "sProcessing": "{{ translate('processing') }}...",

                    "sLengthMenu": "{{ translate('show') }} _MENU_ {{ translate('entries') }}",

                    "sZeroRecords": "{{ translate('no_matching_records_found') }}",

                    "sEmptyTable": "Ningún dato disponible en esta tabla",

                    "sInfo": "{{ translate('showing') }} _START_ {{ translate('to') }} _END_ {{ translate('of') }} _TOTAL_ {{ translate('entries') }}",

                    "sInfoEmpty": "{{ translate('showing') }} 0 {{ translate('to') }} 0 {{ translate('of') }} 0 {{ translate('entries') }}",

                    "sInfoFiltered": "({{ translate('filtered') }} {{ translate('of') }} _MAX_ {{ translate('entries') }})",

                    "sInfoPostFix": "",

                    "sSearch": "{{ translate('search') }}",

                    "sUrl": "",

                    "sInfoThousands": ",",

                    "sLoadingRecords": "{{ translate('processing') }}...",

                    "oPaginate": {

                        "sFirst": "{{ translate('first') }}",

                        "sLast": "{{ translate('last') }}",

                        "sNext": "{{ translate('next') }}",

                        "sPrevious": "{{ translate('previous') }}"

                    },

                    "oAria": {

                        "sSortAscending": ": Activar para ordenar la columna de manera ascendente",

                        "sSortDescending": ": Activar para ordenar la columna de manera descendente"

                    }

                },

                // dom: 'lfrtip',

                language: {

                    processing: '<i></i><span class="text-primary spinner-border"></span> '

                },

                ajax: "{{ route('sub-service.index') }}",

                order: [1],
                columns: [{
                        data: 'DT_RowIndex',
                        name: 'DT_RowIndex',
                        orderable: false,
                        searchable: false
                    },
                    {
                        data: 'service_image_url',
                        name: 'service_image_url'
                    },
                    {
                        data: 'name',
                        name: 'name'
                    },
                    {
                        data: 'created_at',
                        name: 'created_at'
                    },
                    {
                        data: 'updated_at',
                        name: 'updated_at'
                    },
                    {
                        data: 'action',
                        name: 'action',
                        orderable: false,
                        searchable: false
                    },

                ]

            });





            //delete record

            $(".sub-service-data").on('click', '.destroy-data', function(e) {

                e.preventDefault();

                var url = $(this).data('url');

                delete_record(url, table);



            });



            //status-change

            $(".sub-service-data").on('click', '.status-change', function(e) {

                e.preventDefault();

                var url = $(this).data('url');

                change_status(url, table);

            });







            //add service submit

            $("#create").submit(function(event) {

                event.preventDefault();

                var frm = this;

                create_record(frm, table);

            });

            //add service submit end





            //get service data for edit page

            $(".sub-service-data").on('click', '.edit-data', function(e) {

                $.ajax({

                    method: "GET",

                    url: $(this).data('url'),

                    success: function(response) {

                        $('#editmodel').html(response);

                        $('#editmodel').modal('show');

                    },

                    error: function(response) {

                        handleError(response);

                    },

                });

            });

            //get service data for edit page end





            //edit service

            $(document).on('submit', '#edit', function(e) {

                e.preventDefault();

                var frm = this;

                var url = $(this).attr('action');

                var formData = new FormData(frm);

                formData.append("_method", 'PUT');

                var model_name = "#editmodel";

                edit_record(frm, url, formData, model_name, table);

            });



        });
    </script>
@endsection
