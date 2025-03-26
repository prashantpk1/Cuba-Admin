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

                        <form class="form-bookmark" method="post" action="{{ route('role.update', $role->id) }}"
                            id="role-edit-form">

                            @csrf

                            @method('PATCH')

                            <div class="row g-2">



                                <div class="mb-3 col-md-12">

                                    <label class="form-label" for="name">{{ translate('name') }}<span
                                            class="text-danger">*</span> </label>

                                    <input class="form-control @error('name') is-invalid @enderror" id="name"
                                        name="name" type="text" placeholder="{{ translate('name') }}"
                                        aria-label="{{ translate('name') }}" value="{{ $role->name }}">

                                </div>



                                <div class="mb-3 col-md-12">

                                    <div class="col-12">

                                        <label for="nameInput" class="form-label">{{ translate('module') }}</label>

                                        <input type="checkbox" name="selectall" id="selectall">
                                        {{ translate('select_all') }}


                                        @error('permission')
                                            <p class="text-danger">{{ $message }}</p>
                                        @enderror


                                    </div>

                                    @foreach ($permission_group as $permission)
                                        <hr>



                                        <div class="col-12">

                                            <div class="card">



                                                <div class="card-header">

                                                    <h4 class="card-title">{{ $permission[0]['module_name'] }}</h4>



                                                    <div class="row icon-demo-content">

                                                        @foreach ($permission as $p)
                                                            <div class="col-sm-3">

                                                                <input type="checkbox" name="permission[]"
                                                                    class="checkBoxClass" value="{{ $p->name }}"
                                                                    @if ($role->hasPermissionTo($p->name)) checked @endif>

                                                                {{ $p->name }}

                                                            </div>
                                                        @endforeach

                                                    </div>



                                                </div>

                                            </div>

                                        </div>

                                        <hr>
                                    @endforeach

                                </div>

                            </div>

                            <button class="btn btn-primary btn-sm btn-custom" type="submit" id="roleSubmit"><i
                                    class="fa fa-spinner fa-spin d-none icon"></i> {{ translate('submit') }}</button>

                            <button class="btn btn-secondary btn-sm" type="button" data-bs-dismiss="modal"
                                id="is_close">{{ translate('close') }}</button>

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
