@extends('Admin.layouts.app')
@section('title', 'CMS Pages')

@section('content')

    <div class="container-fluid">
        <div class="page-title">
            <div class="row">
                <div class="col-6">
                    <!-- <h4>{{ translate('CMS Pages') }}</h4> -->
                    <h4>{{ 'CMS Pages' }}</h4>
                </div>
                <!-- <div class="col-6">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item">
                            <button class="btn btn-sm btn-primary" type="button" data-bs-toggle="modal"
                                data-bs-target="#createcmsPageModal">
                                <i class="fa fa-plus" aria-hidden="true"></i>
                                {{ translate('add_new') }}
                            </button>
                        </li>
                    </ol>
                </div> -->
            </div>
        </div>
    </div>

    <div class="container-fluid">
        <div class="row">
            <!-- Zero Configuration Starts -->
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="display cms-data">
                                <thead>
                                    <tr>
                                        <th>{{ translate('no') }}</th>
                                        <th>{{ translate('name') }}</th>
                                        <th>{{ translate('created_at') }}</th>
                                        <th>{{ translate('actions') }}</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <!-- Data will be populated here by DataTable -->
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Zero Configuration Ends -->
        </div>
    </div>

@endsection

@section('script')
    <script type="text/javascript">
        var table = $('.cms-data').DataTable({
            processing: true,
            serverSide: true,
            language: {
                "sProcessing": "{{ translate('processing') }}...",
                "sLengthMenu": "{{ translate('show') }} _MENU_ {{ translate('entries') }}",
                "sZeroRecords": "{{ translate('no_matching_records_found') }}",
                "sEmptyTable": "{{ translate('no_data_available') }}",
                "sInfo": "{{ translate('showing') }} _START_ {{ translate('to') }} _END_ {{ translate('of') }} _TOTAL_ {{ translate('entries') }}",
                "sInfoEmpty": "{{ translate('showing') }} 0 {{ translate('to') }} 0 {{ translate('of') }} 0 {{ translate('entries') }}",
                "sInfoFiltered": "({{ translate('filtered') }} {{ translate('of') }} _MAX_ {{ translate('entries') }})",
                "sSearch": "{{ translate('search') }}",
                "sLoadingRecords": "{{ translate('processing') }}...",
                "oPaginate": {
                    "sFirst": "{{ translate('first') }}",
                    "sLast": "{{ translate('last') }}",
                    "sNext": "{{ translate('next') }}",
                    "sPrevious": "{{ translate('previous') }}"
                },
                "oAria": {
                    "sSortAscending": ": {{ translate('sort_ascending') }}",
                    "sSortDescending": ": {{ translate('sort_descending') }}"
                }
            },
            ajax: '{{ route('cms.index') }}',
            order: [[2, 'desc']], // Change this to order by the 'created_at' column in descending order
            columns: [
                { data: 'DT_RowIndex', name: 'id', orderable: false, searchable: false },
                { data: 'meta_title', name: 'meta_title' },
                { data: 'created_at', name: 'created_at' , orderable: false, searchable: false },
                { data: 'actions', name: 'actions', orderable: false, searchable: false }
            ]
        });


        function delete_record(url, table) {
            Swal.fire({
                title: 'Are you sure?',
                text: "You won't be able to revert this!",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Yes, delete it!'
            }).then((result) => {
                if (result.isConfirmed) {
                    $.ajax({
                        url: url,
                        type: 'DELETE',
                        data: {
                            _token: '{{ csrf_token() }}'
                        },
                        success: function (response) {
                            Swal.fire('Deleted!', response.success, 'success');
                            table.ajax.reload(); // Reload DataTable
                        },
                        error: function () {
                            Swal.fire('Error!', 'Something went wrong!', 'error');
                        }
                    });
                }
            });
        }

        function change_status(url, table) {
            $.ajax({
                url: url,
                type: 'POST',
                data: {
                    _token: '{{ csrf_token() }}',
                    status: 'changed'
                },
                success: function (response) {
                    Swal.fire('Status Updated!', response.message, 'success');
                    table.ajax.reload(); // Reload DataTable
                },
                error: function () {
                    Swal.fire('Error!', 'Something went wrong!', 'error');
                }
            });
        }

        function handleError(response) {
            Swal.fire('Error!', response.responseText, 'error');
        }

        function edit_record(frm, url, formData, model_name, table) {
            $.ajax({
                url: url,
                type: 'POST',
                data: formData,
                processData: false,
                contentType: false,
                success: function (response) {
                    $(model_name).modal('hide');
                    table.ajax.reload(); // Reload DataTable
                    Swal.fire('Updated!', 'Data has been updated.', 'success');
                },
                error: function (response) {
                    Swal.fire('Error!', 'Something went wrong!', 'error');
                }
            });
        }
    </script>
@endsection