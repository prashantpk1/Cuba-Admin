@extends('Admin.layouts.app')

@section('content')
    <div class="container-fluid">

        <div class="page-title">

            <div class="row">

                <div class="col-6">

                    <h4> {{ translate('account_setting') }}</h4>

                </div>

                <div class="col-6">

                    <ol class="breadcrumb">

                        <li class="breadcrumb-item"><a href="{{ route('setting') }}">

                                <svg class="stroke-icon">

                                    <use href="../assets/svg/icon-sprite.svg#stroke-home"></use>

                                </svg></a></li>

                        <li class="breadcrumb-item">{{ translate('account_setting') }}</li>

                        <li class="breadcrumb-item active">{{ translate('account_setting') }}</li>

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

                        <h4>{{ translate('edit_profile') }}</h4>

                    </div>

                    <div class="card-body custom-input">

                       
                        <form class="row g-3" method="post" action="{{ route('profile.update') }}"
                            enctype="multipart/form-data" id="profile-submit">

                            @csrf

                            @method('patch')


                            <div class="col-3">

                                <label class="form-label" for="first_name">{{ translate('first_name') }} <span
                                        class="text-danger">*</span></label>

                                <input class="form-control @error('first_name') is-invalid @enderror" id="first_name"
                                    type="text" placeholder="{{ translate('first_name') }}" aria-label="first_name"
                                    name="first_name" value="{{ Auth::user()->first_name }}">

                                @error('first_name')
                                    <span class="invalid-feedback" role="alert">

                                        <strong>{{ $message }}</strong>

                                    </span>
                                @enderror

                            </div>



                            <div class="col-3">

                                <label class="form-label" for="last_name">{{ translate('last_name') }} <span
                                        class="text-danger">*</span></label>

                                <input class="form-control @error('last_name') is-invalid @enderror" id="last_name"
                                    type="text" placeholder="{{ translate('last_name') }}" aria-label="last_name"
                                    name="last_name" value="{{ Auth::user()->last_name }}">

                                @error('last_name')
                                    <span class="invalid-feedback" role="alert">

                                        <strong>{{ $message }}</strong>

                                    </span>
                                @enderror

                            </div>







                            <div class="col-5">

                                <label class="form-label" for="profile_image">{{ translate('profile_image') }} - <span
                                        class="text-danger"> ({{ translate('acceptpngjpgjpeg') }}) </span> <span
                                        class="text-danger">*</span></label>

                                <input class="form-control" id="profile_image" type="file" name="profile_image"
                                    accept=".png, .jpg, .jpeg">

                            </div>

                            <div class="col-1">

                                <label class="form-label" for="profile_image"></label><br>

                                <img src="{{ static_asset('profile_image/' . Auth::user()->profile_image) }}"
                                    class="" style="height:30px">

                            </div>





                            <div class="col-6">

                                <label class="form-label" for="email">{{ translate('email') }} <span
                                        class="text-danger">*</span></label>

                                <input class="form-control  @error('email') is-invalid @enderror" id="email"
                                    name="email" type="email" placeholder="{{ translate('email') }}"
                                    value="{{ Auth::user()->email }}">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">

                                        <strong>{{ $message }}</strong>

                                    </span>
                                @enderror

                            </div>





                            <?php
                            
                            if (!empty(old('phone'))) {
                                $phone_value = old('phone');
                            } else {
                                $phone_value = Auth::user()->phone;
                            }
                            
                            ?>

                            <div class="col-6">

                                <label class="form-label" for="phone">{{ translate('phone') }} <span
                                        class="text-danger">*</span></label>







                                <input class="form-control  @error('phone') is-invalid @enderror" id="phone"
                                    name="phone" type="text" pattern="[0-9]*" inputmode="numeric"
                                    oninput="this.value = this.value.replace(/[^0-9]/g, '');"
                                    placeholder="{{ translate('phone') }}" aria-label="{{ translate('phone') }}"
                                    value="{{ $phone_value }}">







                                @error('phone')
                                    <span class="invalid-feedback" role="alert">

                                        <strong>{{ $message }}</strong>

                                    </span>
                                @enderror

                            </div>





                            <div class="col-12">

                                <input type="submit" class="btn btn-primary" value="{{ translate('submit') }}"
                                    id="profileSubmit">

                                <a href="{{ route('dashboard') }}" class="btn btn-light">{{ translate('cancel') }} </a>

                            </div>

                        </form>

                    </div>

                </div>

            </div>

            <div class="col-xl-12">

                <div class="card height-equal">

                    <div class="card-header">

                        <h4>{{ translate('change_password') }}</h4>

                    </div>

                    <div class="card-body custom-input">
                        <form class="row g-3" method="post" action="{{ route('store.change.password') }}"
                            id="change-password-submit">

                            @csrf



                            <div class="col-4">

                                <label class="form-label" for="current_password">{{ translate('change_password') }} <span
                                        class="text-danger">*</span></label>

                                <input class="form-control @error('current_password') is-invalid @enderror"
                                    id="current_password" type="password"
                                    placeholder="{{ translate('change_password') }}" aria-label="current_password"
                                    name="current_password">

                                @error('current_password')
                                    <span class="invalid-feedback" role="alert">

                                        <strong>{{ $message }}</strong>

                                    </span>
                                @enderror

                            </div>





                            <div class="col-4">

                                <label class="form-label" for="password">{{ translate('new_password') }} <span
                                        class="text-danger">*</span></label>

                                <input class="form-control @error('password') is-invalid @enderror" id="password"
                                    type="password" placeholder="{{ translate('new_password') }}" aria-label="password"
                                    name="password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">

                                        <strong>{{ $message }}</strong>

                                    </span>
                                @enderror

                            </div>







                            <div class="col-4">

                                <label class="form-label"
                                    for="password_confirmation">{{ translate('password_confirmation') }} <span
                                        class="text-danger">*</span> </label>

                                <input class="form-control @error('password_confirmation') is-invalid @enderror"
                                    id="password_confirmation" type="password"
                                    placeholder="{{ translate('password_confirmation') }}"
                                    aria-label="password_confirmation" name="password_confirmation">

                                @error('password_confirmation')
                                    <span class="invalid-feedback" role="alert">

                                        <strong>{{ $message }}</strong>

                                    </span>
                                @enderror

                            </div>









                            <div class="col-12">

                                <input type="submit" class="btn btn-primary" value="{{ translate('submit') }}"
                                    id="change-passwordSubmit">

                                <a href="{{ route('dashboard') }}" class="btn btn-light">{{ translate('cancel') }}</a>

                            </div>

                        </form>

                    </div>

                </div>

            </div>



        </div>

    </div>
@endsection
