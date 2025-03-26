@extends('Admin.layouts.app')

@section('content')
    <div class="container-fluid">

        <div class="page-title">

            <div class="row">

                <div class="col-6">

                    <h4>{{ translate('blog_and_news') }}</h4>

                </div>

                <div class="col-6">

                    <ol class="breadcrumb">

                        
                        <li class="breadcrumb-item"><a class="btn btn-sm btn-primary" href="{{ route('blog.create') }}">
                                {{ translate('add_new') }} </a></li>

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

                            <table class="display  blog-data">

                                <thead>

                                    <tr>

                                        <th>{{ translate('id') }}</th>

                                        <th>{{ translate('blog_image') }}</th>

                                        <th>{{ translate('title') }}</th>

                                        <th>{{ translate('slug') }}</th>

                                        <th>{{ translate('author_name') }}</th>

                                        <th>{{ translate('status') }}</th>

                                        <th>{{ translate('created_at') }}</th>

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



    <!-- edit  model --->

    <div class="modal fade" id="editmodel" tabindex="-1" role="dialog" aria-labelledby="editmodel" aria-hidden="true">

    </div>

    <!-- edit  model end --->
@endsection



@section('script')
    <script type="text/javascript">
        $(document).ready(function() {

            var table = $('.blog-data').DataTable({

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

                ajax: "{{ route('blog.index') }}",

                order: [1],
                columns: [{
                        data: 'DT_RowIndex',
                        name: 'DT_RowIndex',
                        orderable: false,
                        searchable: false
                    },
                    {

                        data: 'blog_image_url',

                        name: 'blog_image_url'

                    },
                    {

                        data: 'title',

                        name: 'title'

                    },
                    {

                        data: 'slug',

                        name: 'slug'

                    },
                    {

                        data: 'author_name',

                        name: 'author_name'

                    },
                    {

                        data: 'status',

                        name: 'status'

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

            $(".blog-data").on('click', '.destroy-data', function(e) {

                e.preventDefault();

                var url = $(this).data('url');

                delete_record(url, table);



            });



            //status-change

            $(".blog-data").on('click', '.status-change', function(e) {

                e.preventDefault();

                var url = $(this).data('url');

                change_status(url, table);

            });







            //add blog submit

            $("#blog-frm").submit(function(event) {

                event.preventDefault();

                var frm = this;

                create_record(frm, table);

            });

            //add blog submit end





            //get blog data for edit page

            $(".blog-data").on('click', '.edit-data', function(e) {

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

            //get blog-data data for edit page end





            //edit blog-data

            $(document).on('submit', '#blog-edit-form', function(e) {

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
