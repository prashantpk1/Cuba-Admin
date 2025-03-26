@extends('Admin.layouts.app')

@section('title', 'Categories')

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

        .btn {
            background-color: rgb(86, 189, 82);
            color: #fff;
            border: none;
            border-radius: 4px;
            font-size: 16px;
            font-weight: bold;
            text-align: center;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        .btn:hover {
            background-color: rgb(86, 189, 82);
            ;
        }
    </style>

    <div class="container-fluid">
        <div class="page-title">
            <div class="row">
                <div class="col-6">
                    <h4>Blog Categories</h4>
                </div>
                <div class="col-6 text-end">
                    <a href="{{ route('categories.create') }}" class="btn">Add</a>
                </div>
            </div>
        </div>

        <!-- Success message container -->
        @if (session('success'))
            <script>
                document.addEventListener('DOMContentLoaded', function () {
                    toastr.success('{{ session('success') }}');
                });
            </script>
        @endif

        <!-- Card for DataTable -->
        <div class="card mt-4">
            <div class="card-body">
                <table id="categoriesTable" class="table table-striped table-bordered mt-3">
                    <thead>
                        <tr>
                            <th>No.</th>
                            <th>Name</th>
                            <th>Created At</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <!-- Scripts -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.datatables.net/1.13.6/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.13.6/js/dataTables.bootstrap5.min.js"></script>
    <script src="https://cdn.datatables.net/plug-ins/1.13.6/i18n/en-gb.json"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <script>
        $(document).ready(function () {
            $('#categoriesTable').DataTable({
                processing: true,
                serverSide: true,
                ajax: "{{ route('categories.index') }}",
                columns: [
                    { data: 'DT_RowIndex', name: 'id' },
                    { data: 'name', name: 'name' },
                    { data: 'created_at', name: 'created_at' },
                    { data: 'action', name: 'action', orderable: false, searchable: false }
                ],
                order: [[2, 'desc']]
            });


            $(document).on('click', '.delete-btn', function (e) {
                e.preventDefault();
                var url = $(this).data('url');  // The delete URL is stored in the data-url attribute

                // Ask for confirmation before deleting
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
                            url: url,  // Send the DELETE request to this URL
                            type: 'DELETE',
                            data: {
                                _token: '{{ csrf_token() }}'  // Include CSRF token in the request
                            },
                            success: function (response) {
                                Swal.fire(
                                    'Deleted!',
                                    response.success,
                                    'success'
                                ).then(() => {
                                    $('#categoriesTable').DataTable().ajax.reload();  // Reload the DataTable
                                });
                            },
                            error: function () {
                                Swal.fire(
                                    'Error!',
                                    'Something went wrong!',
                                    'error'
                                );
                            }
                        });
                    }
                });
            });
        });
    </script>

@endsection