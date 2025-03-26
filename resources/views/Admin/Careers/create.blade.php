<div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel1">{{ translate('add_career') }}</h5>
            <button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close"
                onclick="return close_or_clear();"></button>
        </div>
        <div class="modal-body" id="myModal">
            <form class="form-bookmark" method="post" action="{{ route('careers.store') }}" id="career-frm"
                enctype="multipart/form-data">
                @csrf
                <div class="row g-2">

                    @php
                    $language = getlanguages();
                    @endphp

                    <div class="row">
                        @foreach ($language as $lang)
                        <div class="col-md-12">
                            <!-- Each language gets its own column -->
                            <h5>{{ $lang['lang_name'] }}:</h5>

                            <div class="row g-3">
                                <!-- Career Name -->
                                <div class="mb-3 col-md-6">
                                    <label class="form-label" for="name">{{ translate('career_name') }}
                                        ({{ $lang['lang_name'] }}) <span class="text-danger">*</span>
                                    </label>
                                    <input type="text" class="form-control" id="name"
                                        placeholder="{{ translate('enter_career') }}"
                                        name="{{ $lang['lang_code'] }}[name]">
                                </div>

                                <!-- Career Location -->
                                <div class="mb-3 col-md-6">
                                    <label class="form-label" for="location">{{ translate('career_location') }} <span
                                            class="text-danger">*</span></label>
                                    <input type="text" class="form-control"
                                        placeholder="{{ translate('enter_location') }}"
                                        name="{{ $lang['lang_code'] }}[location]">
                                </div>

                                <!-- Career Description -->
                                <div class="mb-3 col-md-12">
                                    <label class="form-label" for="description">{{ translate('career_description') }}
                                        <span class="text-danger">*</span></label>
                                    <textarea class="form-control" placeholder="{{ translate('enter_description') }}"
                                        name="{{ $lang['lang_code'] }}[description]"></textarea>
                                </div>
                            </div>

                            <div class="row g-3">
                                <!-- Career Title Fields -->
                                <div class="mb-3 col-md-6">
                                    <label class="form-label" for="relevant_experience">{{
                                        translate('relevant_experience')
                                        }}
                                        <span class="text-danger">*</span></label>
                                    <input type="text" class="form-control"
                                        placeholder="{{ translate('enter_relevant_experience') }}"
                                        name="{{ $lang['lang_code'] }}[relevant_experience]">
                                </div>

                                <!-- Description 4 -->
                                <div class="mb-3 col-md-6">
                                    <label class="form-label" for="text_1">{{ translate('text_1') }} <span
                                            class="text-danger">*</span></label>
                                    <textarea class="form-control" placeholder="{{ translate('enter_text_1') }}"
                                        name="{{ $lang['lang_code'] }}[text_1]"></textarea>
                                </div>
                            </div>

                            <br>

                            <div class="row g-3">

                                <!-- Title 5 -->
                                <div class="mb-3 col-md-6">
                                    <label class="form-label" for="total_experience">{{ translate('total_experience') }}
                                        <span class="text-danger">*</span></label>
                                    <input type="text" class="form-control"
                                        placeholder="{{ translate('enter_total_experience') }}"
                                        name="{{ $lang['lang_code'] }}[total_experience]">
                                </div>

                                <!-- Description 4 -->
                                <div class="mb-3 col-md-6">
                                    <label class="form-label" for="text_2">{{ translate('text_2') }} <span
                                            class="text-danger">*</span></label>
                                    <textarea class="form-control" placeholder="{{ translate('enter_text_2') }}"
                                        name="{{ $lang['lang_code'] }}[text_2]"></textarea>
                                </div>
                            </div>

                            <br>

                            <div class="row g-3">
                                <!-- Title 6 -->
                                <div class="mb-3 col-md-6">
                                    <label class="form-label" for="job_type">{{ translate('job_type') }} <span
                                            class="text-danger">*</span></label>
                                    <input type="text" class="form-control"
                                        placeholder="{{ translate('enter_job_type') }}"
                                        name="{{ $lang['lang_code'] }}[job_type]">
                                </div>

                                <!-- Description 4 -->
                                <div class="mb-3 col-md-6">
                                    <label class="form-label" for="text_3">{{ translate('text_3') }} <span
                                            class="text-danger">*</span></label>
                                    <textarea class="form-control" placeholder="{{ translate('enter_text_3') }}"
                                        name="{{ $lang['lang_code'] }}[text_3]"></textarea>
                                </div>
                            </div>

                            <br>

                            <div class="row g-3">
                                <!-- Title 7 -->
                                <div class="mb-3 col-md-6">
                                    <label class="form-label" for="no_of_openings">{{ translate('no_of_openings') }}
                                        <span class="text-danger">*</span></label>
                                    <input type="text" class="form-control"
                                        placeholder="{{ translate('enter_no_of_openings') }}"
                                        name="{{ $lang['lang_code'] }}[no_of_openings]">
                                </div>

                                <!-- Description 5 -->
                                <div class="mb-3 col-md-6">
                                    <label class="form-label" for="text_4">{{ translate('text_4') }} <span
                                            class="text-danger">*</span></label>
                                    <textarea class="form-control" placeholder="{{ translate('enter_text_4') }}"
                                        name="{{ $lang['lang_code'] }}[text_4]"></textarea>
                                </div>
                            </div>

                            <br>

                            <div class="row g-3">

                                <div class="mb-3 col-md-12">
                                    <label class="form-label" for="job_description">{{ translate('job_description') }}
                                        ({{
                                        $lang['lang_name'] }}) <span class="text-danger">*</span></label>
                                    <textarea class="form-control"
                                        placeholder="{{ translate('enter_job_description') }}"
                                        name="{{ $lang['lang_code'] }}[job_description({{ $lang['lang_name'] }})]"
                                        id="job_description_{{ $lang['lang_code'] }}"></textarea>
                                </div>
                                <div class="mb-3 col-md-12">
                                    <label class="form-label" for="responsibility">{{ translate('responsibility') }} ({{
                                        $lang['lang_name'] }})
                                        <span class="text-danger">*</span></label>
                                    <textarea class="form-control" placeholder="{{ translate('enter_responsibility') }}"
                                        name="{{ $lang['lang_code'] }}[responsibility]"
                                        id="responsibility_{{ $lang['lang_code'] }}"></textarea>
                                </div>

                                <hr>
                            </div>
                            
                        </div>
                        @endforeach

                        <div class="col-md-12">
                            <label class="form-label" for="type">{{ translate('career_type') }} <span
                                    class="text-danger">*</span></label>
                            <select name="type" aria-label="Select Career Type" id="type"
                                class="form-select custom_select2 js-example-basic-multiple type">
                                <option value="" selected>{{ translate('select_option') }}</option>
                                <option value="hybrid">{{ translate('hybrid') }}</option>
                                <option value="full_time">{{ translate('full_time') }}</option>
                                <option value="remote">{{ translate('remote') }}</option>
                            </select>
                        </div>
                    </div>
                </div>

                <button class="btn btn-primary btn-sm btn-custom" type="submit" id="careerSubmit"><i
                        class="fa fa-spinner fa-spin d-none icon"></i> {{ translate('submit') }}</button>
                <button class="btn btn-secondary btn-sm" type="button" data-bs-dismiss="modal" id="is_close"
                    onclick="return close_or_clear();">{{ translate('close') }}</button>
            </form>
        </div>
    </div>
</div>

<script src="{{ static_asset('admin/assets/js/select2/select2.full.min.js') }}"></script>
<script src="{{ static_asset('admin/assets/js/select2/select2-custom.js') }}"></script>