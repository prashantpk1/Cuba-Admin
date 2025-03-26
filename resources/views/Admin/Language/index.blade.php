@extends('Admin.layouts.app')

@section('content')
    <div class="container-fluid">

        <div class="page-title">

            <div class="row">

                <div class="col-6">

                    <h4>{{ translate('languages') }}</h4>

                </div>

                <div class="col-6">

                    <ol class="breadcrumb">

                        <li class="breadcrumb-item"><button class="btn btn-sm btn-primary" type="button" data-bs-toggle="modal"
                                data-bs-target="#createlanguagemodel"><i class="fa fa-plus" aria-hidden="true"></i>

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

                            <table class="display language-data">

                                <thead>

                                    <tr>

                                        <th>{{ translate('id') }}</th>

                                        <th>{{ translate('language_flag') }}</th>
                                        
                                        <th>{{ translate('language_name') }}</th>

                                        <th>{{ translate('language_code') }}</th>

                                        <th>{{ translate('language_flag') }}</th>

                                        <th>{{ translate('language_is_RTL') }}</th>

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

    <!-- create language model --->

    <div class="modal fade" id="createlanguagemodel" tabindex="-1" role="dialog" aria-labelledby="createlanguagemodel"
        aria-hidden="true">

        @include('Admin.Language.create')

    </div>

    <!-- create language model end --->
    <!-- edit language model --->

    <div class="modal fade" id="editlanguagemodel" tabindex="-1" role="dialog" aria-labelledby="editlanguagemodel"
        aria-hidden="true">

    </div>
    <!-- edit language model end --->
@endsection



@section('script')
    <script type="text/javascript">
        $(document).ready(function() {

            var table = $('.language-data').DataTable({

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

                ajax: "{{ route('language.index') }}",

                order: [1],
                columns: [{
                        data: 'DT_RowIndex',
                        name: 'DT_RowIndex',
                        orderable: false,
                        searchable: false
                    },
                    {

                        data: 'lang_flag_image',

                        name: 'lang_flag_image'

                    },

                    {

                        data: 'lang_name',

                        name: 'lang_name'

                    },
                    {

                        data: 'lang_code',

                        name: 'lang_code'

                    },

                    {

                        data: 'is_default_custom',

                        name: 'is_default_custom'

                    },
                    {

                        data: 'lang_is_rtl_custom',

                        name: 'lang_is_rtl_custom'

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

            $(".language-data").on('click', '.destroy-data', function(e) {

                e.preventDefault();

                var url = $(this).data('url');

                delete_record(url, table);



            });



            //status-change

            $(".language-data").on('click', '.status-change', function(e) {

                e.preventDefault();

                var url = $(this).data('url');

                change_status(url, table);

            });







            //add language submit

            $("#language-frm").submit(function(event) {

                event.preventDefault();

                var frm = this;

                create_record(frm, table);

            });

            //add language submit end





            //get language data for edit page

            $(".language-data").on('click', '.edit-data', function(e) {

                $.ajax({

                    method: "GET",

                    url: $(this).data('url'),

                    success: function(response) {

                        $('#editlanguagemodel').html(response);

                        $('#editlanguagemodel').modal('show');

                    },

                    error: function(response) {

                        handleError(response);

                    },

                });

            });

            //get language data for edit page end





            //edit language

            $(document).on('submit', '#language-edit-form', function(e) {

                e.preventDefault();

                var frm = this;

                var url = $(this).attr('action');

                var formData = new FormData(frm);

                formData.append("_method", 'PUT');

                var model_name = "#editlanguagemodel";

                edit_record(frm, url, formData, model_name, table);

            });



        });
    </script>
@endsection
