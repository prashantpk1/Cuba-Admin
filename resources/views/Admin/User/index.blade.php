@extends('Admin.layouts.app')
@section('content')
    <div class="container-fluid">
        <div class="page-title">
            <div class="row">
                <div class="col-6">
                    <h4>{{ translate('users') }}</h4>
                </div>
                <div class="col-6">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><button class="btn btn-sm btn-primary" type="button" data-bs-toggle="modal"
                                data-bs-target="#createusermodel"><i class="fa fa-plus" aria-hidden="true"></i>
                                {{ translate('add_new') }}</button></li>
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
                            <table class="display user-data">
                                <thead>
                                    <tr>
                                        <th>{{ translate('id') }}</th>
                                        <th>{{ translate('name') }}</th>
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



    <!-- create coupon model --->
    {{-- <div class="modal fade" id="createcouponmodel" tabindex="-1" role="dialog" aria-labelledby="createcouponmodel"
        aria-hidden="true">
        @include('Admin.Coupon.create')
    </div> --}}
    <!-- create coupon model end --->


    <!-- edit coupon model --->
    {{-- <div class="modal fade" id="editcouponmodel" tabindex="-1" role="dialog" aria-labelledby="editcouponmodel"
        aria-hidden="true">
    </div> --}}
    <!-- edit coupon model end --->
@endsection

@section('script')
    <script type="text/javascript">
        $(document).ready(function() {
            var table = $('.user-data').DataTable({
                processing: true,
                serverSide: true,
                language: {
                    "sProcessing":    "{{ translate('processing') }}...",
                    "sLengthMenu":    "{{ translate('show') }} _MENU_ {{ translate('entries') }}",
                    "sZeroRecords":   "{{ translate('no_matching_records_found') }}",
                    "sEmptyTable":    "Ningún dato disponible en esta tabla",
                    "sInfo":          "{{ translate('showing') }} _START_ {{ translate('to') }} _END_ {{ translate('Of')}} _TOTAL_ {{ translate('entries') }}",
                    "sInfoEmpty":     "{{ translate('showing') }} 0 {{ translate('to') }} 0 {{ translate('Of')}} 0 {{ translate('entries') }}",
                    "sInfoFiltered":  "({{ translate('Filtered')}} {{ translate('Of')}} _MAX_ {{ translate('entries') }})",
                    "sInfoPostFix":   "",
                    "sSearch":        "{{ translate('search') }}",
                    "sUrl":           "",
                    "sInfoThousands":  ",",
                    "sLoadingRecords": "{{ translate('processing') }}...",
                    "oPaginate": {
                        "sFirst":    "{{ translate('first') }}",
                        "sLast":    "{{ translate('last') }}",
                        "sNext":    "{{ translate('next') }}",
                        "sPrevious": "{{ translate('previous') }}"
                    },
                    "oAria": {
                        "sSortAscending":  ": Activar para ordenar la columna de manera ascendente",
                        "sSortDescending": ": Activar para ordenar la columna de manera descendente"
                    }
                },
                // dom: 'lfrtip',
                coupon: {
                    processing: '<i></i><span class="text-primary spinner-border"></span> '
                },
                ajax: "{{ route('user.index') }}",
                columns: [
                    {
                        data: 'id',
                        name: 'id'
                    },
                    {
                        data: 'name',
                        name: 'name'
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
            $(".user-data").on('click', '.destroy-data', function(e) {
                e.preventDefault();
                var url = $(this).data('url');
                alert(url);
                delete_record(url, table);

            });

            //status-change
            $(".user-data").on('click', '.status-change', function(e) {
                e.preventDefault();
                var url = $(this).data('url');
                change_status(url, table);
            });



            //add coupon submit
            // $("#coupon-frm").submit(function(event) {
            //     event.preventDefault();
            //     var frm = this;
            //     create_record(frm, table);
            // });
            //add coupon submit end


            //get coupon data for edit page
            // $(".coupon-data").on('click', '.edit-data', function(e) {
            //     $.ajax({
            //         method: "GET",
            //         url: $(this).data('url'),
            //         success: function(response) {
            //             $('#editcouponmodel').html(response);
            //             $('#editcouponmodel').modal('show');
            //         },
            //         error: function(response) {
            //             handleError(response);
            //         },
            //     });
            // });
            //get coupon data for edit page end


            //edit coupon
        //     $(document).on('submit', '#coupon-edit-form', function(e) {
        //         e.preventDefault();
        //         var frm = this;
        //         var url = $(this).attr('action');
        //         var formData = new FormData(frm);
        //         formData.append("_method", 'PUT');
        //         var model_name = "#editcouponmodel";
        //         edit_record(frm, url, formData, model_name, table);
        //    });

        });



    </script>
@endsection
