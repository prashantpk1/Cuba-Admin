<?php $permission_group = getPermission(); ?>

@extends('Admin.layouts.app')
@section('content')
    <div class="container-fluid">
        <div class="page-title">
            <div class="row">
                <div class="col-6">
                    <h4> {{ translate('roles') }}</h4>
                </div>
                <div class="col-6">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{ route('role.index') }}">
                                <svg class="stroke-icon">
                                    <use href="../assets/svg/icon-sprite.svg#stroke-home"></use>
                                </svg></a></li>
                        <li class="breadcrumb-item">{{ translate('roles') }}</li>
                        <li class="breadcrumb-item active">{{ translate('roles') }}</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
    <!-- Container-fluid starts-->
    <div class="container-fluid">
        <div class="row">
            <div class="col-xl-12">
                <div class="card height-equal">
                    <div class="card-header">
                        <h4>{{ translate('add_role') }}</h4>
                    </div>
                    <div class="card-body custom-input">
                        <form class="form-bookmark" method="POST" action="{{ route('role.store') }}" id="role-frm">
                            @csrf
                            <div class="row g-2">
                                <div class="mb-3 col-md-12">
                                    <label class="form-label" for="name">{{ translate('name') }}<span
                                            class="text-danger">*</span> </label>
                                    <input class="form-control @error('name') is-invalid @enderror" id="name"
                                        name="name" type="text" placeholder="{{ translate('name') }}"
                                        aria-label="{{ translate('name') }}" value="{{ old('name') }}">

                                </div>

                                <!-- Show error message when no permission is selected -->
                               <div class="mb-3 col-md-12">
                                    <div class="col-12">
                                        <label for="nameInput" class="form-label">{{ translate('module') }} </label>
                                        <br>
                                        <input type="checkbox" class="@error('permission') is-invalid @enderror"
                                            name="selectall" id="selectall">
                                        {{ translate('select_all') }}
                                    </div>
                                    @error('permission')
                                    <p class="text-danger">{{ $message }}</p>
                                @enderror
                                    @foreach ($permission_group as $permission)
                                        <hr>
                                        <div class="col-12 mb-3">
                                            <div class="card-header">
                                                <h4 class="card-title mb-3">{{ $permission[0]['module_name'] }}</h4>
                                                <div class="row icon-demo-content mb-3">
                                                    @foreach ($permission as $p)
                                                        <div class="col-sm-3">
                                                            <input type="checkbox" class="checkBoxClass" name="permission[]"
                                                                value="{{ $p->name }}">
                                                            {{ $p->name }}
                                                        </div>
                                                    @endforeach
                                                </div>
                                            </div>
                                        </div>
                                        <hr>
                                    @endforeach
                                </div>
                            </div>
                            <input type="submit" class="btn btn-primary" value="{{ translate('submit') }}"
                                id="roleSubmit">
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('script')
    <script>
        $("#selectall").click(function(e) {
            $(".checkBoxClass").prop('checked', this.checked);
        });
    </script>
@endsection
