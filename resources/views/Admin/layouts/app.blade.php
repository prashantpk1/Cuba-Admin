<!DOCTYPE html>
<html {{-- @if (config('app.locale') == 'ar') lang="ar" dir="rtl" @elseif (config('app.locale') == 'ur') lang="ur"  @else lang="en" @endif> --}}
    @if (in_array(config('app.locale'), ['ar', 'ur'])) lang="ar" dir="rtl" @elseif (config('app.locale') == 'ur') lang="ur"  @else lang="en" @endif>
<!--begin::Head-->

<head>
    @include('Admin.layouts.partials.head')
</head>
<!--end::Head-->
<?php $url = Request::route()->getName(); ?>
{{-- <style>
    /* Apply RTL direction to DataTable container */
    .dataTables_wrapper {
        direction: rtl;
    }
</style> --}}

<body>
    <!-- loader ends-->
    <!-- tap on top starts-->
    <div class="tap-top"><i data-feather="chevrons-up"></i></div>
    <!-- tap on tap ends-->
    <!-- page-wrapper Start-->
    <div class="page-wrapper compact-wrapper" id="pageWrapper">
        <!-- Page Header Start-->
        <!--begin::Header wrapper-->
        <div class="page-header">
            @include('Admin.layouts.partials.navbar')
        </div>
        <!--end::Header wrapper-->
        <!-- Page Header Ends                              -->
        <!-- Page Body Start-->
        <div class="page-body-wrapper">
            <!-- Page Sidebar Start-->
            <div class="sidebar-wrapper" sidebar-layout="stroke-svg">
                @include('Admin.layouts.partials.sidebar')
            </div>
            <!-- Page Sidebar Ends-->
            <div class="page-body">
                <!-- Main content -->
                @yield('content')
                <!-- /.content -->
            </div>
            <!-- footer start-->
            <footer class="footer">
                <!--begin::Header wrapper-->
                @include('Admin.layouts.partials.footer')
                <!--end::Header wrapper-->
            </footer>
        </div>
    </div>
    <!-- latest jquery-->
    <script src="{{ static_asset('admin/assets/js/jquery.min.js') }}"></script>
    <!-- Bootstrap js-->
    <script src="{{ static_asset('admin/assets/js/bootstrap/bootstrap.bundle.min.js') }}"></script>
    <!-- feather icon js-->
    <script src="{{ static_asset('admin/assets/js/icons/feather-icon/feather.min.js') }}"></script>
    <script src="{{ static_asset('admin/assets/js/icons/feather-icon/feather-icon.js') }}"></script>
    <!-- scrollbar js-->
    <script src="{{ static_asset('admin/assets/js/scrollbar/simplebar.js') }}"></script>
    <script src="{{ static_asset('admin/assets/js/scrollbar/custom.js') }}"></script>
    <!-- Sidebar jquery-->
    <script src="{{ static_asset('admin/assets/js/config.js') }}"></script>
    <!-- Plugins JS start-->
    <script src="{{ static_asset('admin/assets/js/slick/slick.min.js') }}"></script>
    <script src="{{ static_asset('admin/assets/js/slick/slick.js') }}"></script>
    <script src="{{ static_asset('admin/assets/js/header-slick.js') }}"></script>
    <script src="{{ static_asset('admin/assets/js/notify/bootstrap-notify.min.js') }}"></script>
    <script src="{{ static_asset('admin/assets/js/height-equal.js') }}"></script>
    <script src="{{ static_asset('admin/assets/js/animation/wow/wow.min.js') }}"></script>
    <!-- Plugins JS Ends-->
    <!---  datatable --->
    <script src="{{ static_asset('admin/assets/js/datatable/datatables/jquery.dataTables.min.js') }}"></script>
    <script src="{{ static_asset('admin/assets/js/datatable/datatables/datatable.custom.js') }}"></script>
    <!---  datatable end  ---->
    <!--- select --->
    <script src="{{ static_asset('admin/assets/js/select2.min.js') }}"></script>
    <!-- select --->
    <!-- Theme js-->
    <script src="{{ static_asset('admin/assets/js/script.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js"
        integrity="sha512-AA1Bzp5Q0K1KanKKmvN/4d3IRKVlv9PYgwFPvm32nPO6QS8yH1HO7LbgB1pgiOxPtfeg5zEn2ba64MUcqJx6CA=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <!---  ck editor -->
    {{-- <script src="https://cdnjs.cloudflare.com/ajax/libs/ckeditor/4.5.0/ckeditor.js"></script> --}}
    <script src="https://cdn.ckeditor.com/ckeditor5/35.3.2/super-build/ckeditor.js"></script>
    <!---- ck editor -->
    <script src="{{ static_asset('admin/assets/js/calendar/fullcalendar.min.js') }}"></script>
    <script src="{{ static_asset('admin/assets/js/flat-pickr/flatpickr.js') }}"></script>
    <script src="{{ static_asset('admin/assets/js/flat-pickr/custom-flatpickr.js') }}"></script>
    <!-- <script src="{{ static_asset('admin/assets/js/select2/tagify.js') }}"></script>
    <script src="{{ static_asset('admin/assets/js/select2/tagify.polyfills.min.js') }}"></script>
    <script src="{{ static_asset('admin/assets/js/select2/intltelinput.min.js') }}"></script>
    <script src="{{ static_asset('admin/assets/js/select2/telephone-input.js') }}"></script>
    <script src="{{ static_asset('admin/assets/js/select2/custom-inputsearch.js') }}"></script>
    <script src="{{ static_asset('admin/assets/js/select2/select3-custom.js') }}"></script>
    <script src="{{ static_asset('admin/assets/js/select2/select3-custom.js') }}"></script> -->
    @if ($url == 'dashboard')
        <!-- <script src="{{ static_asset('admin/assets/js/chart/chartjs/chart.min.js') }}"></script>
        <script src="{{ static_asset('admin/assets/js/chart/chartjs/chart.custom.js') }}"></script> -->
    @endif
    <script>
        new WOW().init();
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
    <!-- script -->
    @yield('script')
    <!-- /.script -->
    <script>
        $(document).ready(function() {
            $('.sidebar-link').on('click', function() {
                $(this).toggleClass('active');
                $(this).siblings('.sidebar-submenu').toggle();
            });
        });

        function change_lang(lang) {
            var data = lang;

            $.ajax({
                type: 'GET',
                url: '{{ route('set.language', ':lang_code') }}'.replace(':lang_code', data),
                success: function(response) {
                    console.log(response);
                    location.reload();
                },
                error: function(xhr, status, error) {
                    console.log(xhr.responseText);
                }
            });
            /* $.ajax({
                         type: 'POST',
                           headers: {
                               'XSRF-TOKEN': $('meta[name="_token"]').attr('content')
                           },
                           url: '{{ route('language.change') }}',
                           data: {
                               data: lang,
                               _token: '{{ csrf_token() }}'
                           },
                           success: function(response) {
                               window.location.reload();
                           },
                       }); */
        }
        toastr.options = {
            "closeButton": true,
            "progressBar": true
        }



        @if (Session::has('success'))
        show_toster("{{ session('success') }}");
        @endif

        @if (Session::has('error'))
        show_toster("{{ session('error') }}"); 
        @endif
       
        function show_toster(message) {
            (function($) {
                "use strict";
                var notify = $.notify(
                    '<i class="fa fa-bell-o"></i>' + message, {
                        type: "theme",
                        allow_dismiss: true,
                        delay: 2000,
                        showProgressbar: true,
                        timer: 300,
                        animate: {
                            enter: "animated fadeInDown",
                            exit: "animated fadeOutUp",
                        },
                    }
                );
                setTimeout(function() {
                    notify.update(
                        "message",
                        '<i class="fa fa-bell-o"></i>' + message
                    );
                }, 1000);
            })(jQuery);
        }

        function change_status(url, table) {
            var confirm = Swal.fire({
                title: "{{ translate('Are you sure?') }}",
                text: "{{ translate('You are change status..!') }}",
                icon: "warning",
                showCancelButton: true,
                // confirmButtonColor: "#3085d6",
                // cancelButtonColor: "#d33", 
                confirmButtonColor: "#7ec822",
                cancelButtonColor: "#000",
                cancelButtonText: "{{ translate('Cancel') }}",
                confirmButtonText: "{{ translate('Confirmed..') }}"
            }).then((result) => {
                if (result.isConfirmed) {
                    $.ajax({
                        type: "GET",
                        url: url,
                        headers: {
                            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                        },
                        success: function(response) {
                            if (response.status == '1') {
                                // toastr.success(response.success)
                                show_toster(response.success)
                                table.draw();
                            }
                        }
                    });
                }
            });
        }

        function delete_record(url, table) {
            var confirm = Swal.fire({
                title: "{{ translate('Are you sure?') }}",
                text: "{{ translate('You will not be able to revert this!') }}",
                icon: "warning",
                showCancelButton: true,
                // confirmButtonColor: "#3085d6",
                // cancelButtonColor: "#d33",
                confirmButtonColor: "#7ec822",
                cancelButtonColor: "#000",
                cancelButtonText: "{{ translate('Cancel') }}",
                confirmButtonText: "{{ translate('Yes, delete it!') }}"
            }).then((result) => {
                if (result.isConfirmed) {
                    $.ajax({
                        type: "DELETE",
                        url: url,
                        headers: {
                            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                        },
                        success: function(response) {
                            if (response.status == '1') {
                                // toastr.success(response.success)
                                show_toster(response.success)
                                table.draw();
                            }
                            if (response.status == '0') {
                                // toastr.success(response.success)
                                show_toster(response.success)
                                table.draw();
                            }
                        }
                    });
                }
            });
        }

        function create_record(frm, table, button) {
            var formData = new FormData(frm);
            var url = $(this).attr('action');
            jQuery('.btn-custom').addClass('disabled');
            jQuery('.icon').removeClass('d-none');
            jQuery('.custom-error').html('');
            $.ajax({
                url: url,
                type: "POST",
                data: formData,
                processData: false,
                contentType: false,
                success: function(response) {
                    show_toster(response.success)
                    $("#is_close").click();
                    frm.reset();
                    jQuery('.btn-custom').removeClass('disabled');
                    jQuery('.icon').addClass('d-none');
                    table.draw();
                },
                error: function(xhr) {
                    var errors = xhr.responseJSON;
                    $.each(errors.errors, function(key, value) {
                        var ele = "#" + key;
                        toastr.error(value);
                    });
                    // var errors = xhr.responseJSON;
                    // $.each(errors.errors, function(key, value) {
                    //     var ele = "#" + key + "_error";
                    //     $(ele).text(value);
                    //     $(ele).show();
                    // });
                    jQuery('.btn-custom').removeClass('disabled');
                    jQuery('.icon').addClass('d-none');
                },
            });
        }

        function edit_record(frm, url, formData, model_name, table) {
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
                    if (table != "") {
                        table.draw();
                    }
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
        }
        // clear all  input and select and textarea
        function close_or_clear() {
            $('#myModal input[type="email"]').val(''); // Clear text inputs
            $('#myModal input[type="text"]').val(''); // Clear text inputs
            $('#myModal input[type="file"]').val(''); // Clear text inputs
            $('#myModal textarea').val(''); // Clear textareas
            $('#myModal select').val(''); // Clear textareas
        };
    </script>
    <script>
        document.querySelectorAll(".custom_ck_editor").forEach(editor => {
            CKEDITOR.ClassicEditor.create(editor, {
                    toolbar: {
                        items: [
                            'bold', 'italic', 'underline', '|',
                            'heading', '|',
                            'bulletedList', 'numberedList', '|',
                            'undo', 'redo', '|',
                            'link', 'blockQuote'
                        ],
                        shouldNotGroupWhenFull: true
                    },
                    heading: {
                        options: [{
                                model: 'paragraph',
                                title: 'Paragraph',
                                class: 'ck-heading_paragraph'
                            },
                            {
                                model: 'heading1',
                                view: 'h1',
                                title: 'Heading 1',
                                class: 'ck-heading_heading1'
                            },
                            {
                                model: 'heading2',
                                view: 'h2',
                                title: 'Heading 2',
                                class: 'ck-heading_heading2'
                            }
                        ]
                    },
                    placeholder: 'Start writing here...',
                    removePlugins: [
                        'ExportPdf', 'ExportWord', 'CKBox', 'CKFinder', 'EasyImage',
                        'RealTimeCollaborativeComments', 'RealTimeCollaborativeTrackChanges',
                        'RealTimeCollaborativeRevisionHistory', 'PresenceList', 'Comments',
                        'TrackChanges', 'TrackChangesData', 'RevisionHistory', 'Pagination',
                        'WProofreader', 'MathType'
                    ]
                })
                .catch(error => console.error(error));
        });
    </script>
</body>

</html>
