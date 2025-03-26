<div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel1">{{ translate('add_sub_admin') }}</h5>
            <button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close"
                onclick="return close_or_clear();"></button>
        </div>
        <div class="modal-body" id="myModal">
            <form class="form-bookmark" method="post" action="{{ route('sub-admin.store') }}" id="subadmin-frm">
                @csrf
                <div class="row g-2">


                    <div class="mb-3 col-md-6">
                        <label class="form-label" for="first_name">{{ translate('first_name') }} <span
                                class="text-danger">*</span> </label>
                        <input class="form-control" id="first_name" name="first_name" type="text"
                            placeholder="{{ translate('first_name') }}" aria-label="{{ translate('first_name') }}">
                        <div id="first_name_error" style="display: none;" class="text-danger"></div>
                    </div>

                    <div class="mb-3 col-md-6">
                        <label class="form-label" for="last_name">{{ translate('last_name') }} <span
                                class="text-danger">*</span> </label>
                        <input class="form-control" id="last_name" name="last_name" type="text"
                            placeholder="{{ translate('last_name') }}" aria-label="{{ translate('last_name') }}">
                        <div id="last_name_error" style="display: none;" class="text-danger"></div>
                    </div>


                    <div class="mb-3 col-md-6">
                        <label class="form-label" for="phone">{{ translate('phone') }} <span
                                class="text-danger">*</span> </label>
                        <input class="form-control" id="phone" name="phone" type="text" pattern="[0-9]*"
                            inputmode="numeric" oninput="this.value = this.value.replace(/[^0-9]/g, '');"
                            placeholder="{{ translate('phone') }}" aria-label="{{ translate('phone') }}">
                        <div id="phone_error" style="display: none;" class="text-danger"></div>
                    </div>


                    <div class="mb-3 col-md-6">
                        <label class="form-label" for="email">{{ translate('email') }} <span
                                class="text-danger">*</span> </label>
                        <input class="form-control" id="email" name="email" type="text"
                            placeholder="{{ translate('email') }}" aria-label="{{ translate('email') }}">
                        <div id="email_error" style="display: none;" class="text-danger"></div>
                    </div>

                    <div class="col-sm-6">
                        <label class="form-label"> {{ translate('gender') }} <span class="text-danger">*</span></label>
                        <select name="gender" aria-label="{{ translate('select_a_gender') }}"
                            data-placeholder="{{ translate('select_a_gender') }}" class="form-select">
                            <option value=""> {{ translate('select_a_gender') }}</option>
                            <option value="Male">{{ translate('male') }}</option>
                            <option value="Female">{{ translate('female') }}</option>
                        </select>
                    </div>

                    <div class="mb-3 col-md-6">
                        <label class="form-label" for="profile_image">{{ translate('profile_image') }}
                            ({{ translate('acceptpngjpgjpeg') }})<span class="text-danger">*</span> </label>
                        <input class="form-control" id="profile_image" name="profile_image" type="file"
                            placeholder="{{ translate('profile_image') }}"
                            aria-label="{{ translate('profile_image') }}" accept=".png, .jpg, .jpeg">
                        <div id="profile_image_error" style="display: none;" class="text-danger"></div>
                    </div>

                    <?php
                    $roles = getRoles();
                    ?>

                    <div class="col-sm-6">
                        <label class="form-label" for="password">{{ translate('password') }} <span
                                class="text-danger">*</span></label>
                        <input class="form-control @error('password') is-invalid @enderror" id="password"
                            name="password" type="password" placeholder="{{ translate('password') }}"
                            autocomplete="off">
                    </div>

                    <div class="col-sm-6">
                        <label class="form-label" for="confirm_password"> {{ translate('confirm_password') }} <span
                                class="text-danger">*</span></label>
                        <input class="form-control @error('confirm_password') is-invalid @enderror"
                            id="confirm_password" name="confirm_password" type="password"
                            placeholder="{{ translate('confirm_password') }} " autocomplete="off">
                    </div>

                    <div class="col-sm-6">
                        <label class="form-label"> {{ translate('select_role') }} <span
                                class="text-danger">*</span></label>
                        <select name="select_role" aria-label="{{ translate('select_role') }}"
                            class="form-select">
                            <option value="">{{ translate('select_role') }}</option>
                            @foreach ($roles as $role)
                                <option value="{{ $role->id }}">{{ $role->name }}</option>
                            @endforeach

                        </select>
                    </div>
                   @php $getCountries = getCountries(); @endphp

                    <div class="col-sm-6">
                        <label class="form-label"> {{ translate('country_id') }} <span
                                class="text-danger">*</span></label>
                        <select name="country_id" aria-label="{{ translate('country_id') }}"
                            class="form-select">
                            <option value="">{{ translate('country_id') }}</option>
                            @foreach ($getCountries as $country)
                                <option value="{{ $country->id }}">{{ $country->name }}</option>
                            @endforeach

                        </select>
                    </div>

                </div>
                <button class="btn btn-primary btn-sm btn-custom" type="submit" id="adminSubmit"><i
                        class="fa fa-spinner fa-spin d-none icon"></i> {{ translate('submit') }}</button>
                <button class="btn btn-secondary btn-sm" type="button" data-bs-dismiss="modal"
                    id="is_close">{{ translate('close') }}</button>
            </form>
        </div>
    </div>
</div>
