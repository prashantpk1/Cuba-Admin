<div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel1">{{ translate('edit_career') }}</h5>
            <button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close"
                onclick="return close_or_clear();"></button>
        </div>
        <div class="modal-body" id="myModal">
            <form class="form-bookmark" method="post" action="{{ route('careers.update', $careerData->id) }}" id="edit"
                enctype="multipart/form-data">
                @csrf
                <div class="row g-2">
                    <div class="row">
                        @foreach (getlanguages() as $lang)
                        @php
                        $translation = $careerData->career_translation
                        ->where('locale', $lang['lang_code'])
                        ->first();
                        //dd($translation->type,translate($translation->type),translate('hybrid'),translate('full_time'),translate('remote'));
                        @endphp
                        <div class="col-md-12">
                            <h5>{{ $lang['lang_name'] }}:</h5>
                            <div class="row g-3">

                                <!-- Career Name -->
                                <div class="mb-3 col-md-6">
                                    <label class="form-label" for="name"> {{ translate('career_name') }}
                                        ({{ $lang['lang_name'] }})
                                        <span class="text-danger">*</span></label>
                                    <input type="text" class="form-control"
                                        placeholder="{{ translate('enter_career') }}"
                                        name="{{ $lang['lang_code'] }}[name]" value="{{ $translation->name }}">
                                </div>

                                <!-- Location Field -->
                                <div class="mb-3 col-md-6">
                                    <label class="form-label" for="location">{{ translate('career_location') }} <span
                                            class="text-danger">*</span></label>
                                    <input type="text" class="form-control"
                                        placeholder="{{ translate('enter_location') }}"
                                        name="{{ $lang['lang_code'] }}[location]" id="location"
                                        value="{{ $translation->location }}">
                                </div>

                                <!-- Description Field -->
                                <div class="mb-3 col-md-12">
                                    <label class="form-label" for="description">
                                        {{ translate('description') }} ({{ $lang['lang_name'] }}) <span
                                            class="text-danger">*</span></label>
                                    <textarea class="form-control" placeholder="{{ translate('enter_description') }}"
                                        id="description"
                                        name="{{ $lang['lang_code'] }}[description]">{{ $translation->description }}</textarea>
                                </div>
                            </div>

                            <div class="row g-3">
                                <!-- Career Title Fields -->
                                <div class="mb-3 col-md-6">
                                    <label class="form-label" for="relevant_experience">{{
                                        translate('relevant_experience') }}
                                        <span class="text-danger">*</span></label>
                                    <input type="text" class="form-control"
                                        placeholder="{{ translate('enter_relevant_experience') }}"
                                        name="{{ $lang['lang_code'] }}[relevant_experience]"
                                        value="{{ $translation->relevant_experience ?? '' }}">
                                </div>

                                <!-- Description 4 -->
                                <div class="mb-3 col-md-6">
                                    <label class="form-label" for="text_1">{{ translate('text_1') }}
                                        <span class="text-danger">*</span></label>
                                    <textarea class="form-control" placeholder="{{ translate('enter_text_1') }}"
                                        name="{{ $lang['lang_code'] }}[text_1]">{{ $translation->text_1 ?? '' }}</textarea>
                                </div>
                            </div>
                            <br>
                            <div class="row g-3">
                                <!-- Career Title Fields -->
                                <div class="mb-3 col-md-6">
                                    <label class="form-label" for="total_experience">{{
                                        translate('total_experience') }}
                                        <span class="text-danger">*</span></label>
                                    <input type="text" class="form-control"
                                        placeholder="{{ translate('enter_total_experience') }}"
                                        name="{{ $lang['lang_code'] }}[total_experience]"
                                        value="{{ $translation->total_experience ?? '' }}">
                                </div>

                                <!-- Description 4 -->
                                <div class="mb-3 col-md-6">
                                    <label class="form-label" for="text_2">{{ translate('text_2') }}
                                        <span class="text-danger">*</span></label>
                                    <textarea class="form-control" placeholder="{{ translate('enter_text_2') }}"
                                        name="{{ $lang['lang_code'] }}[text_2]">{{ $translation->text_2 ?? '' }}</textarea>
                                </div>
                            </div>
                            <br>
                            <div class="row g-3">
                                <!-- Career Title Fields -->
                                <div class="mb-3 col-md-6">
                                    <label class="form-label" for="job_type">{{
                                        translate('job_type') }}
                                        <span class="text-danger">*</span></label>
                                    <input type="text" class="form-control"
                                        placeholder="{{ translate('enter_job_type') }}"
                                        name="{{ $lang['lang_code'] }}[job_type]"
                                        value="{{ $translation->job_type ?? '' }}">
                                </div>

                                <!-- Description 4 -->
                                <div class="mb-3 col-md-6">
                                    <label class="form-label" for="text_3">{{ translate('text_3') }}
                                        <span class="text-danger">*</span></label>
                                    <textarea class="form-control" placeholder="{{ translate('enter_text_3') }}"
                                        name="{{ $lang['lang_code'] }}[text_3]">{{ $translation->text_3 ?? '' }}</textarea>
                                </div>
                            </div>
                            <br>
                            <div class="row g-3">
                                <!-- Career Title Fields -->
                                <div class="mb-3 col-md-6">
                                    <label class="form-label" for="no_of_openings">{{
                                        translate('no_of_openings') }}
                                        <span class="text-danger">*</span></label>
                                    <input type="text" class="form-control"
                                        placeholder="{{ translate('no_of_openings') }}"
                                        name="{{ $lang['lang_code'] }}[no_of_openings]"
                                        value="{{ $translation->no_of_openings ?? '' }}">
                                </div>

                                <!-- Description 4 -->
                                <div class="mb-3 col-md-6">
                                    <label class="form-label" for="text_4">{{ translate('text_4') }}
                                        <span class="text-danger">*</span></label>
                                    <textarea class="form-control" placeholder="{{ translate('enter_text_4') }}"
                                        name="{{ $lang['lang_code'] }}[text_4]">{{ $translation->text_4 ?? '' }}</textarea>
                                </div>
                            </div>

                            <div class="row g-3">
                                <!-- Job Description Field -->
                                <div class="mb-3 col-md-12">
                                    <label class="form-label" for="job_description_{{ $lang['lang_code'] }}">
                                        {{ translate('job_description') }} ({{ $lang['lang_name'] }}) <span
                                            class="text-danger">*</span>
                                    </label>
                                    <textarea class="form-control"
                                        placeholder="{{ translate('enter_job_description') }}"
                                        name="{{ $lang['lang_code'] }}[job_description]"
                                        id="job_description_{{ $lang['lang_code'] }}">
                                        {{ old($lang['lang_code'].'[job_description]', $translation->job_description ?? '') }}
                                        </textarea>
                                </div>

                                <!-- Responsibility Field -->
                                <div class="mb-3 col-md-12">
                                    <label class="form-label" for="responsibility_{{ $lang['lang_code'] }}">
                                        {{ translate('responsibility') }} ({{ $lang['lang_name'] }}) <span
                                            class="text-danger">*</span>
                                    </label>
                                    <textarea class="form-control" placeholder="{{ translate('enter_responsibility') }}"
                                        name="{{ $lang['lang_code'] }}[responsibility]"
                                        id="responsibility_{{ $lang['lang_code'] }}">
                                        {{ old($lang['lang_code'].'[responsibility]', $translation->responsibility ?? '') }}
                                    </textarea>
                                </div>
                            </div>
                            <hr>
                        </div>
                        @endforeach
                        <div class="col-md-12">
                            @php
                            $career_type =
                            $careerData->career_translation->firstwhere('locale',config('app.locale'))->type;
                            @endphp
                            <label class="form-label" for="type">{{ translate('career_type') }} <span
                                    class="text-danger">*</span></label>
                            <select name="type" aria-label="Select Career Type" id="type"
                                class="form-select custom_select2 js-example-basic-multiple type">
                                <option value="" {{ $career_type=='' || is_null($career_type) ? 'selected' : '' }}>
                                    {{ translate('select_option') }}
                                </option>
                                <option value="hybrid" {{ translate($career_type)==translate('hybrid') ? 'selected' : ''
                                    }}>
                                    {{ translate('hybrid') }}</option>
                                <option value="full_time" {{ translate($career_type)==translate('full_time')? 'selected'
                                    : '' }}>
                                    {{ translate('full_time') }}</option>
                                <option value="remote" {{ translate($career_type)==translate('remote') ? 'selected' : ''
                                    }}>
                                    {{ translate('remote') }}</option>
                            </select>
                        </div>
                    </div>
                </div>

                <!-- Submit and Close buttons -->
                <button class="btn btn-primary btn-sm btn-custom" type="submit" id="careerSubmit"><i
                        class="fa fa-spinner fa-spin d-none icon"></i>{{ translate('submit') }}</button>
                <button class="btn btn-secondary btn-sm" type="button" data-bs-dismiss="modal" id="is_close"
                    onclick="return close_or_clear();">{{ translate('close') }}</button>
            </form>
        </div>
    </div>
</div>

<script src="{{ static_asset('admin/assets/js/select2/select2.full.min.js') }}"></script>
<script src="{{ static_asset('admin/assets/js/select2/select2-custom.js') }}"></script>