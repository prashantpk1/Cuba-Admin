@extends('Admin.layouts.app')

@section('content')
    <div class="container-fluid">

        <div class="page-title">

            <div class="row">

                <div class="col-6">

                    <h4>{{ translate('Faq') }}</h4>

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

            <div class="col-lg-12" id="faq-data">

            </div>

            <!-- Zero Configuration  Ends-->

        </div>

    </div>

    <!-- Container-fluid Ends-->

    </div>







    <!-- create  model --->

    <div class="modal fade" id="createmodel" tabindex="-1" role="dialog" aria-labelledby="createmodel" aria-hidden="true">

        @include('Admin.Faq.create')

    </div>

    <!-- create model end --->





    <!-- edit  model --->

    <div class="modal fade" id="editmodel" tabindex="-1" role="dialog" aria-labelledby="editmodel" aria-hidden="true">

    </div>

    <!-- edit  model end --->
@endsection



@section('script')
    <script type="text/javascript">
        $(document).ready(function() {
            var table = "";
            // Call faq_data on page load
            faq_data();

            // Delete record
            $("#faq-data").on('click', '.destroy-data', function(e) {
                // alert("faq-data");
                var table = "";
                e.preventDefault();
                var url = $(this).data('url');
                $.ajax({
                    type: "DELETE",
                    url: url,
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    },
                    success: function(response) {
                        if (response.status == '1') {
                            // toastr.success(response.success)
                            show_toster(response.success);
                            faq_data();

                        }

                        if (response.status == '0') {
                            // toastr.success(response.success)
                            show_toster(response.success);
                            faq_data();

                        }


                    }
                });


            });

            // Status change
            $("#faq-data").on('click', '.status-change', function(e) {
                e.preventDefault();
                var url = $(this).data('url');
                change_status(url, table);
            });


            $("#faq-frm").submit(function(event) {
                event.preventDefault();
                var frm = this;

                // Create the record
                create_record(frm, table);

                // Reload FAQ data after creating
                window.location.reload();
            });



            // Get FAQ data for edit
            $("#faq-data").on('click', '.edit-data', function(e) {
                e.preventDefault();
                $.ajax({
                    method: "GET",
                    url: $(this).data('url'),
                    success: function(response) {
                        $('#editmodel').html(response);
                        $('#editmodel').modal('show');
                        // Initialize CKEditor after the modal is shown
                        initializeCKEditor();
                    },
                    error: function(response) {
                        handleError(response);
                    }
                });
            });

            // Edit FAQ data
            $(document).on('submit', '#faq-edit-form', function(e) {
                e.preventDefault();
                var frm = this;
                var table = "";
                var url = $(this).attr('action');
                var formData = new FormData(frm);
                formData.append("_method", 'PUT');
                var model_name = "#editmodel";
                // edit_record(frm, url, formData, model_name, table);
                jQuery('.btn-custom').addClass('disabled');
                jQuery('.icon').removeClass('d-none');
                $.ajax({
                    url: url,
                    type: "POST",
                    data: formData,
                    contentType: false,
                    cache: false,
                    processData: false,
                    success: function(response) {
                        $(model_name).modal('hide');
                        show_toster(response.success)
                        frm.reset();
                        jQuery('.btn-custom').removeClass('disabled');
                        jQuery('.icon').addClass('d-none');
                        // Reload FAQ data after creating
                        window.location.reload();
                    },
                    error: function(xhr) {
                        // $('#send').button('reset');
                        var errors = xhr.responseJSON;
                        $.each(errors.errors, function(key, value) {
                            var ele = "#" + key;
                            toastr.error(value);
                            jQuery('.btn-custom').removeClass('disabled');
                            jQuery('.icon').addClass('d-none');
                        });
                    },
                });
                // faq_data();
            });
        });

        // Fetch FAQ Data
        function faq_data() {
            // alert("hel;lo");
            $.ajax({
                type: "GET",
                url: "{{ route('faq.index') }}",
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                success: function(response) {
                    if (response.status == '1') {
                        $("#faq-data").html(response.view); // Append fetched data
                    } else {
                        alert("No data found");
                    }
                },
                error: function(xhr) {
                    console.log(xhr.responseText);
                }
            });
        }


        // Function to initialize CKEditor
        function initializeCKEditor() {
            // Target all textareas with the 'custom_ck_editor' class and initialize CKEditor
            $('.custom_ck_editor').each(function() {
                CKEDITOR.replace(this);
            });
        }
    </script>
@endsection
