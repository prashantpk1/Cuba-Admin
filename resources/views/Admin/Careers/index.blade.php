@extends('Admin.layouts.app')
@section('content')
<div class="container-fluid">
    <div class="page-title">
        <div class="row">
            <div class="col-6">
                <h4>{{ translate('careers') }}</h4>
            </div>
            <div class="col-6">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><button class="btn btn-sm btn-primary" type="button"
                            data-bs-toggle="modal" data-bs-target="#createmodel"><i class="fa fa-plus"
                                aria-hidden="true"></i>
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
                        <table class="display careers-data">
                            <thead>
                                <tr>
                                    <th>{{ translate('id') }}</th>
                                    <th>{{ translate('career_name') }}</th>
                                    <th>{{ translate('career_type') }}</th>
                                    <th>{{ translate('career_location') }}</th>
                                    <th>{{ translate('career_created') }}</th>
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
<!-- create career model --->
<div class="modal fade" id="createmodel" tabindex="-1" role="dialog" aria-labelledby="createmodel" aria-hidden="true">
    @include('Admin.Careers.create')
</div>
<!-- create career model end --->
<!-- edit career model --->
<div class="modal fade" id="editmodel" tabindex="-1" role="dialog" aria-labelledby="editmodel" aria-hidden="true">
</div>
<!-- edit career model end --->
@endsection
@section('script')
<script src="{{ static_asset('admin/assets/js/select2/select2.full.min.js') }}"></script>
<script src="{{ static_asset('admin/assets/js/select2/select2-custom.js') }}"></script>
<script type="text/javascript">
    $(document).ready(function () {
        var table = $('.careers-data').DataTable({
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
            ajax: "{{ route('careers.index') }}",
            order: [3, 'desc'],
            columns: [{
                data: 'DT_RowIndex',
                name: 'DT_RowIndex',
                orderable: false,
                searchable: false
            },
            {
                data: 'name',
                name: 'name'
            },
            {
                data: 'type',
                name: 'type'
            },
            {
                data: 'location',
                name: 'location'
            },
            {
                data: 'created_at',
                name: 'created_at'
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
        $(".careers-data").on('click', '.destroy-data', function (e) {
            e.preventDefault();
            var url = $(this).data('url');
            delete_record(url, table);
        });
        //status-change
        $(".careers-data").on('click', '.status-change', function (e) {
            e.preventDefault();
            var url = $(this).data('url');
            change_status(url, table);
        });
        //add career submit
        $("#career-frm").submit(function (event) {
            event.preventDefault();
            var frm = this;
            create_record(frm, table);
        });
        //add career submit end
        //get career data for edit page
        $(".careers-data").on('click', '.edit-data', function (e) {
            $.ajax({
                method: "GET",
                url: $(this).data('url'),
                success: function (response) {
                    $('#editmodel').html(response);
                    $('#editmodel').modal('show');
                },
                error: function (response) {
                    handleError(response);
                },
            });
        });
        //get career data for edit page end
        //edit career
        $(document).on('submit', '#edit', function (e) {
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