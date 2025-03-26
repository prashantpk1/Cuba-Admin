@extends('Admin.layouts.app')
@section('title', 'Contact Us Pages')
@section('content')

    <style>
        .dropdown .dropdown-toggle {
            background-color: rgba(115, 102, 255, 0.08);
            color: #7366FF;
            border-radius: 10px;
            padding: 5px 10px;
            width: auto;
            text-align: left;
        }

        .dropdown-toggle::after {
            display: none;
        }

        .dropdown-menu {
            border-radius: 10px;
        }

        .toast {
            background-color: green !important;
            color: white !important;
            border: 1px solid #ddd;
        }
    </style>

    <div class="container-fluid">
        <div class="page-title">
            <div class="row">
                <div class="col-6">
                    <h4>Contact Inquiries</h4>
                </div>
            </div>
        </div>

        @if (session('success'))
            <script>
                document.addEventListener('DOMContentLoaded', function () {
                    toastr.success('{{ session('success') }}');
                });
            </script>
        @endif

        <div class="card mt-4">
            <div class="card-body">
                <table id="contactTable" class="table table-bordered">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>First Name</th>
                            <th>Last Name</th>
                            <th>Email</th>
                            <th>Subject</th>
                            <th>Message</th>
                            <th>Created At</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        <!-- DataTables will populate this table -->
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <!-- Add jQuery CDN -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

<!-- DataTables and Bootstrap 5 JS -->
<script src="https://cdn.datatables.net/1.13.3/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.13.3/js/dataTables.bootstrap5.min.js"></script>

<!-- SweetAlert2 JS -->
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <script>
        $(document).ready(function () {
            var table = $('#contactTable').DataTable({
                processing: true,
                serverSide: true,
                ajax: '{{ route('contacts.index') }}',  
                columns: [
                    { data: 'DT_RowIndex', name: 'DT_RowIndex', orderable: false, searchable: false },
                    { data: 'first_name', name: 'first_name' },
                    { data: 'last_name', name: 'last_name' },
                    { data: 'email', name: 'email' },
                    { data: 'subject', name: 'subject' },
                    { data: 'message', name: 'message' },
                    { data: 'created_at', name: 'created_at' },
                    { data: 'actions', name: 'actions', orderable: false, searchable: false }
                ],
                responsive: true
            });


            $(document).on('click', '.destroy-data', function (e) {
                e.preventDefault();

                var url = $(this).attr('href');
                var token = $(this).data('token');

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
                            type: 'POST',
                            data: {
                                _method: 'DELETE',
                                _token: token
                            },
                            success: function (response) {
                                Swal.fire('Deleted!', response.success, 'success');
                                table.ajax.reload();
                            },
                            error: function () {
                                Swal.fire('Error!', 'Something went wrong!', 'error');
                            }
                        });
                    }
                });
            });
            
        });
    </script>

@endsection