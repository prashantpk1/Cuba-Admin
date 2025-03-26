@extends('Admin.layouts.app')
@section('content')
    <div class="container-fluid">
        <div class="page-title">
            <div class="row">
                <div class="col-6">
                    <h4> {{ translate('Sub Admin') }} </h4>
                </div>
                <div class="col-6">
                    <ol class="breadcrumb">
                        {{-- @if (auth()->user()->can('subadmin-create')) --}}
                            <li class="breadcrumb-item"><button class="btn btn-sm btn-primary" type="button"
                                    data-bs-toggle="modal" data-bs-target="#createsubadminmodel"><i class="fa fa-plus"
                                        aria-hidden="true"></i>
                                    {{ translate('Add New') }} </button></li>
                        {{-- @endif --}}
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
                            <table class="display subadmin-data">
                                <thead>
                                    <tr>
                                        <th>{{ translate('id') }}</th>
                                        <th>{{ translate('sub_admin_detail') }}</th>
                                        <th>{{ translate('phone') }}</th>
                                        <th>{{ translate('gender') }}</th>
                                        <th>{{ translate('status') }}</th>
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



    <!-- create subadmin model --->
    <div class="modal fade" id="createsubadminmodel" tabindex="-1" role="dialog" aria-labelledby="createsubadminmodel"
        aria-hidden="true">
        @include('Admin.Sub-Admin.create')
    </div>
    <!-- create subadmin model end --->


    <!-- edit subadmin model --->
    <div class="modal fade" id="editsubadminmodel" tabindex="-1" role="dialog" aria-labelledby="editsubadminmodel"
        aria-hidden="true">
    </div>
    <!-- edit subadmin model end --->
@endsection

@section('script')
    <script type="text/javascript">
        $(document).ready(function() {
            var table = $('.subadmin-data').DataTable({
                processing: true,
                serverSide: true,
                language: {
                    "sProcessing": "{{ translate('processing') }}...",
                    "sLengthMenu": "{{ translate('show') }} _MENU_ {{ translate('entries') }}",
                    "sZeroRecords": "{{ translate('no_matching_records_found') }}",
                    "sEmptyTable": "{{ translate('No records found') }}",
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
                subadmin: {
                    processing: '<i></i><span class="text-primary spinner-border"></span> '
                },
                ajax: "{{ route('sub-admin.index') }}",
                order: [1],
                columns: [{
                        data: 'DT_RowIndex',
                        name: 'DT_RowIndex',
                        orderable: false,
                        searchable: false
                    },
                    {
                        data: 'user_details',
                        name: 'user_details'
                    },
                    {
                        data: 'phone',
                        name: 'phone'
                    },
                    {
                        data: 'gender',
                        name: 'gender'
                    },
                    {
                        data: 'status',
                        name: 'status'
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
            $(".subadmin-data").on('click', '.destroy-data', function(e) {
                e.preventDefault();
                var url = $(this).data('url');
                delete_record(url, table);

            });

            //status-change
            $(".subadmin-data").on('click', '.status-change', function(e) {
                e.preventDefault();
                var url = $(this).data('url');
                change_status(url, table);
            });



            //add subadmin submit
            $("#subadmin-frm").submit(function(event) {
                event.preventDefault();
                var frm = this;
                create_record(frm, table);
            });
            //add subadmin submit end


            //get subadmin data for edit page
            $(".subadmin-data").on('click', '.edit-data', function(e) {
                $.ajax({
                    method: "GET",
                    url: $(this).data('url'),
                    success: function(response) {
                        $('#editsubadminmodel').html(response);
                        $('#editsubadminmodel').modal('show');
                    },
                    error: function(response) {
                        handleError(response);
                    },
                });
            });
            //get subadmin data for edit page end


            //edit subadmin
            $(document).on('submit', '#subadmin-edit-form', function(e) {
                e.preventDefault();
                var frm = this;
                var url = $(this).attr('action');
                var formData = new FormData(frm);
                formData.append("_method", 'PUT');
                var model_name = "#editsubadminmodel";
                edit_record(frm, url, formData, model_name, table);
            });

        });
    </script>
@endsection
