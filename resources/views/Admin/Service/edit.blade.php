<div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel1">{{ translate('edit_service') }}</h5>
            <button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close"
                onclick="return close_or_clear();"></button>
        </div>
        <div class="modal-body" id="myModal">
            <form class="form-bookmark" method="post" action="{{ route('service.update', $data->id) }}" id="edit"
                enctype="multipart/form-data">
                @csrf
                <div class="row g-2">
                    <!-- Service Image -->
                    <div class="mb-3 col-md-10">
                        <label class="form-label" for="service_image">{{ translate('service_image') }}<span
                                class="text-danger">*</span></label>
                        <input class="form-control" id="service_image" name="service_image" type="file">
                    </div>
                    <div class="mb-3 col-sm-2" style="margin-top:35px;">
                        <img src='{{ $data->service_image }}' class="img-thumbnail brand-image img-circle elevation-3"
                            height="80" width="80" />
                    </div>

                    <!-- Image 1 -->
                    <div class="mb-3 col-md-10">
                        <label class="form-label" for="image_1">{{ translate('image_1') }}<span
                                class="text-danger">*</span></label>
                        <input class="form-control" id="image_1" name="image_1" type="file">
                    </div>
                    <div class="mb-3 col-sm-2" style="margin-top:35px;">
                        @if ($data->image_1)
                        <img src="{{ $data->image_1 }}" class="img-thumbnail brand-image img-circle elevation-3"
                            height="80" width="80" />
                        @endif
                    </div>

                    @php
                    $language = getlanguages();
                    @endphp

                    <div class="row">
                        @foreach ($language as $lang)
                        <div class="col-md-3"> <!-- Each language gets its own column -->
                            @php
                            $translation = $data->translate($lang['lang_code']) ?? null;
                            @endphp

                            <!-- Service Name -->
                            <div class="mb-3">
                                <label class="form-label" for="service">{{ translate('service') }} ({{
                                    $lang['lang_name'] }})
                                    <span class="text-danger">*</span>
                                </label>
                                <input type="text" class="form-control" placeholder="{{ translate('enter_service') }}"
                                    name="{{ $lang['lang_code'] }}[name]"
                                    value="{{ $translation ? $translation->name : '' }}">
                            </div>

                            <!-- Description Field -->
                            <div class="mb-3">
                                <label class="form-label" for="description">
                                    {{ translate('description') }} ({{ $lang['lang_name'] }}) <span
                                        class="text-danger">*</span>
                                </label>
                                <textarea class="form-control" placeholder="{{ translate('enter_description') }}"
                                    name="{{ $lang['lang_code'] }}[description]">{{ $translation ? $translation->description : '' }}</textarea>
                            </div>

                            <hr>
                            <!-- Title 1 -->
                            <div class="mb-3">
                                <label class="form-label" for="title_1">{{ translate('title_1') }} ({{
                                    $lang['lang_name'] }}) <span class="text-danger">*</span></label>
                                <input type="text" class="form-control" placeholder="{{ translate('enter_title_1') }}"
                                    name="{{ $lang['lang_code'] }}[title_1]"
                                    value="{{ $translation ? $translation->title_1 : '' }}">
                            </div>

                            <!-- Title 2 -->
                            <div class="mb-3">
                                <label class="form-label" for="title_2"> {{ translate('title_2')
                                    }}
                                    ({{ $lang['lang_name'] }})<span class="text-danger">*</span></label>
                                <input type="text" class="form-control" placeholder="{{ translate('enter_title_2') }}"
                                    name="{{ $lang['lang_code'] }}[title_2]" value="{{ $translation ? $translation->title_2 : '' }}">
                            </div>

                            <!-- Title 3 -->
                            <div class="mb-3">
                                <label class="form-label" for="title_3"> {{ translate('title_3')
                                    }}
                                    ({{ $lang['lang_name'] }})<span class="text-danger">*</span></label>
                                <input type="text" class="form-control" placeholder="{{ translate('enter_title_3') }}"
                                    name="{{ $lang['lang_code'] }}[title_3]" value="{{ $translation ? $translation->title_3 : '' }}">
                            </div>

                            <!-- Description 1 -->
                            <div class="mb-3">
                                <label class="form-label" for="description_1">
                                    {{ translate('description_1') }} ({{ $lang['lang_name'] }})<span
                                        class="text-danger">*</span></label>
                                <textarea class="form-control" placeholder="{{ translate('enter_description_1') }}"
                                    name="{{ $lang['lang_code'] }}[description_1]">{{ $translation ? $translation->description_1 : '' }}</textarea>
                            </div>

                            <!-- Description 2 -->
                            <div class="mb-3">
                                <label class="form-label" for="description_2">
                                    {{ translate('description_2') }} ({{ $lang['lang_name'] }})<span
                                        class="text-danger">*</span></label>
                                <textarea class="form-control" placeholder="{{ translate('enter_description_2') }}"
                                    name="{{ $lang['lang_code'] }}[description_2]">{{ $translation ? $translation->description_2 : '' }}</textarea>
                            </div>

                            <!-- Description 3 -->
                            <div class="mb-3">
                                <label class="form-label" for="description_3">
                                    {{ translate('description_3') }} ({{ $lang['lang_name'] }})<span
                                        class="text-danger">*</span></label>
                                <textarea class="form-control" placeholder="{{ translate('enter_description_3') }}"
                                    name="{{ $lang['lang_code'] }}[description_3]">{{ $translation ? $translation->description_3 : '' }}</textarea>
                            </div>

                            <hr>

                            <!-- Heading 1 -->
                            <div class="mb-3">
                                <label class="form-label" for="heading_1"> {{
                                    translate('heading_1') }}
                                    ({{ $lang['lang_name'] }})<span class="text-danger">*</span></label>
                                <input type="text" class="form-control" placeholder="{{ translate('enter_heading_1') }}"
                                    name="{{ $lang['lang_code'] }}[heading_1]" value="{{ $translation ? $translation->heading_1 : '' }}">
                            </div>

                            <!-- Title 4 -->
                            <div class="mb-3">
                                <label class="form-label" for="title_4"> {{ translate('title_4')
                                    }}
                                    ({{ $lang['lang_name'] }})<span class="text-danger">*</span></label>
                                <input type="text" class="form-control" placeholder="{{ translate('enter_title_4') }}"
                                    name="{{ $lang['lang_code'] }}[title_4]" value="{{ $translation ? $translation->title_4 : '' }}">
                            </div>

                            <!-- Title 5 -->
                            <div class="mb-3">
                                <label class="form-label" for="title_5"> {{ translate('title_5')
                                    }}
                                    ({{ $lang['lang_name'] }})<span class="text-danger">*</span></label>
                                <input type="text" class="form-control" placeholder="{{ translate('enter_title_5') }}"
                                    name="{{ $lang['lang_code'] }}[title_5]" value="{{ $translation ? $translation->title_5 : '' }}">
                            </div>

                            <!-- Title 6 -->
                            <div class="mb-3">
                                <label class="form-label" for="title_6"> {{ translate('title_6')
                                    }}
                                    ({{ $lang['lang_name'] }})<span class="text-danger">*</span></label>
                                <input type="text" class="form-control" placeholder="{{ translate('enter_title_6') }}"
                                    name="{{ $lang['lang_code'] }}[title_6]" value="{{ $translation ? $translation->title_6 : '' }}">
                            </div>

                            <!-- Title 7 -->
                            <div class="mb-3">
                                <label class="form-label" for="title_7"> {{ translate('title_7')
                                    }}
                                    ({{ $lang['lang_name'] }})<span class="text-danger">*</span></label>
                                <input type="text" class="form-control" placeholder="{{ translate('enter_title_7') }}"
                                    name="{{ $lang['lang_code'] }}[title_7]" value="{{ $translation ? $translation->title_7 : '' }}">
                            </div>

                            <!-- Description 4 -->
                            <div class="mb-3">
                                <label class="form-label" for="description_4">
                                    {{ translate('description_4') }} ({{ $lang['lang_name'] }})<span
                                        class="text-danger">*</span></label>
                                <textarea class="form-control" placeholder="{{ translate('enter_description_4') }}"
                                    name="{{ $lang['lang_code'] }}[description_4]">{{ $translation ? $translation->description_4 : '' }}</textarea>
                            </div>

                            <!-- Description 5 -->
                            <div class="mb-3">
                                <label class="form-label" for="description_5">
                                    {{ translate('description_5') }} ({{ $lang['lang_name'] }})<span
                                        class="text-danger">*</span></label>
                                <textarea class="form-control" placeholder="{{ translate('enter_description_5') }}"
                                    name="{{ $lang['lang_code'] }}[description_5]">{{ $translation ? $translation->description_5 : '' }}</textarea>
                            </div>

                            <!-- Description 6 -->
                            <div class="mb-3">
                                <label class="form-label" for="description_6">
                                    {{ translate('description_6') }} ({{ $lang['lang_name'] }})<span
                                        class="text-danger">*</span></label>
                                <textarea class="form-control" placeholder="{{ translate('enter_description_6') }}"
                                    name="{{ $lang['lang_code'] }}[description_6]">{{ $translation ? $translation->description_6 : '' }}</textarea>
                            </div>

                            <!-- Description 7 -->
                            <div class="mb-3">
                                <label class="form-label" for="description_7">
                                    {{ translate('description_7') }} ({{ $lang['lang_name'] }})<span
                                        class="text-danger">*</span></label>
                                <textarea class="form-control" placeholder="{{ translate('enter_description_7') }}"
                                    name="{{ $lang['lang_code'] }}[description_7]">{{ $translation ? $translation->description_7 : '' }}</textarea>
                            </div>

                            <!-- Horizontal line to separate languages -->
                            <hr>

                            <!-- Heading 2 -->
                            <div class="mb-3">
                                <label class="form-label" for="heading_2"> {{
                                    translate('heading_2') }}
                                    ({{ $lang['lang_name'] }})<span class="text-danger">*</span></label>
                                <input type="text" class="form-control" placeholder="{{ translate('enter_heading_2') }}"
                                    name="{{ $lang['lang_code'] }}[heading_2]" value="{{ $translation ? $translation->heading_2 : '' }}">
                            </div>


                            <!-- Title 8 -->
                            <div class="mb-3">
                                <label class="form-label" for="title_8"> {{ translate('title_8')
                                    }}
                                    ({{ $lang['lang_name'] }})<span class="text-danger">*</span></label>
                                <input type="text" class="form-control" placeholder="{{ translate('enter_title_8') }}"
                                    name="{{ $lang['lang_code'] }}[title_8]" value="{{ $translation ? $translation->title_8 : '' }}">
                            </div>

                            <!-- Description 8 -->
                            <div class="mb-3">
                                <label class="form-label" for="description_8">
                                    {{ translate('description_8') }} ({{ $lang['lang_name'] }})<span
                                        class="text-danger">*</span></label>
                                <textarea class="form-control" placeholder="{{ translate('enter_description_8') }}"
                                    name="{{ $lang['lang_code'] }}[description_8]">{{ $translation ? $translation->description_8 : '' }}</textarea>
                            </div>

                            <!-- Title 9 -->
                            <div class="mb-3">
                                <label class="form-label" for="title_9"> {{ translate('title_9')
                                    }}
                                    ({{ $lang['lang_name'] }})<span class="text-danger">*</span></label>
                                <input type="text" class="form-control" placeholder="{{ translate('enter_title_9') }}"
                                    name="{{ $lang['lang_code'] }}[title_9]" value="{{ $translation ? $translation->title_9 : '' }}">
                            </div>

                            <!-- Description 9 -->
                            <div class="mb-3">
                                <label class="form-label" for="description_9">
                                    {{ translate('description_9') }} ({{ $lang['lang_name'] }})<span
                                        class="text-danger">*</span></label>
                                <textarea class="form-control" placeholder="{{ translate('enter_description_9') }}"
                                    name="{{ $lang['lang_code'] }}[description_9]">{{ $translation ? $translation->description_9 : '' }}</textarea>
                            </div>

                            <!-- Title 10 -->
                            <div class="mb-3">
                                <label class="form-label" for="title_10"> {{ translate('title_10')
                                    }}
                                    ({{ $lang['lang_name'] }})<span class="text-danger">*</span></label>
                                <input type="text" class="form-control" placeholder="{{ translate('enter_title_10') }}"
                                    name="{{ $lang['lang_code'] }}[title_10]" value="{{ $translation ? $translation->title_10 : '' }}">
                            </div>

                            <!-- Description 10 -->
                            <div class="mb-3">
                                <label class="form-label" for="description_10">
                                    {{ translate('description_10') }} ({{ $lang['lang_name'] }})<span
                                        class="text-danger">*</span></label>
                                <textarea class="form-control" placeholder="{{ translate('enter_description_10') }}"
                                    name="{{ $lang['lang_code'] }}[description_10]">{{ $translation ? $translation->description_10 : '' }}</textarea>
                            </div>

                            <!-- Title 11 -->
                            <div class="mb-3">
                                <label class="form-label" for="title_11"> {{ translate('title_11')
                                    }}
                                    ({{ $lang['lang_name'] }})<span class="text-danger">*</span></label>
                                <input type="text" class="form-control" placeholder="{{ translate('enter_title_11') }}"
                                    name="{{ $lang['lang_code'] }}[title_11]" value="{{ $translation ? $translation->title_11 : '' }}">
                            </div>

                            <!-- Description 11 -->
                            <div class="mb-3">
                                <label class="form-label" for="description_11">
                                    {{ translate('description_11') }} ({{ $lang['lang_name'] }})<span
                                        class="text-danger">*</span></label>
                                <textarea class="form-control" placeholder="{{ translate('enter_description_11') }}"
                                    name="{{ $lang['lang_code'] }}[description_11]">{{ $translation ? $translation->description_11 : '' }}</textarea>
                            </div>

                            <!-- Title 12 -->
                            <div class="mb-3">
                                <label class="form-label" for="title_12"> {{ translate('title_12')
                                    }}
                                    ({{ $lang['lang_name'] }})<span class="text-danger">*</span></label>
                                <input type="text" class="form-control" placeholder="{{ translate('enter_title_12') }}"
                                    name="{{ $lang['lang_code'] }}[title_12]" value="{{ $translation ? $translation->title_12 : '' }}">
                            </div>

                            <!-- Description 12 -->
                            <div class="mb-3">
                                <label class="form-label" for="description_12">
                                    {{ translate('description_12') }} ({{ $lang['lang_name'] }})<span
                                        class="text-danger">*</span></label>
                                <textarea class="form-control" placeholder="{{ translate('enter_description_12') }}"
                                    name="{{ $lang['lang_code'] }}[description_12]">{{ $translation ? $translation->description_12 : '' }}</textarea>
                            </div>

                            <!-- Title 13 -->
                            <div class="mb-3">
                                <label class="form-label" for="title_13"> {{ translate('title_13')
                                    }}
                                    ({{ $lang['lang_name'] }})<span class="text-danger">*</span></label>
                                <input type="text" class="form-control" placeholder="{{ translate('enter_title_13') }}"
                                    name="{{ $lang['lang_code'] }}[title_13]" value="{{ $translation ? $translation->title_13 : '' }}">
                            </div>

                            <!-- Description 13 -->
                            <div class="mb-3">
                                <label class="form-label" for="description_13">
                                    {{ translate('description_13') }} ({{ $lang['lang_name'] }})<span
                                        class="text-danger">*</span></label>
                                <textarea class="form-control" placeholder="{{ translate('enter_description_13') }}"
                                    name="{{ $lang['lang_code'] }}[description_13]">{{ $translation ? $translation->description_13 : '' }}</textarea>
                            </div>

                            <!-- Title 14 -->
                            <div class="mb-3">
                                <label class="form-label" for="title_14"> {{ translate('title_14')
                                    }}
                                    ({{ $lang['lang_name'] }})<span class="text-danger">*</span></label>
                                <input type="text" class="form-control" placeholder="{{ translate('enter_title_14') }}"
                                    name="{{ $lang['lang_code'] }}[title_14]" value="{{ $translation ? $translation->title_14 : '' }}">
                            </div>

                            <!-- Description 14 -->
                            <div class="mb-3">
                                <label class="form-label" for="description_14">
                                    {{ translate('description_14') }} ({{ $lang['lang_name'] }})<span
                                        class="text-danger">*</span></label>
                                <textarea class="form-control" placeholder="{{ translate('enter_description_14') }}"
                                    name="{{ $lang['lang_code'] }}[description_14]">{{ $translation ? $translation->description_14 : '' }}</textarea>
                            </div>

                            <!-- Title 15 -->
                            <div class="mb-3">
                                <label class="form-label" for="title_15"> {{ translate('title_15')
                                    }}
                                    ({{ $lang['lang_name'] }})<span class="text-danger">*</span></label>
                                <input type="text" class="form-control" placeholder="{{ translate('enter_title_15') }}"
                                    name="{{ $lang['lang_code'] }}[title_15]" value="{{ $translation ? $translation->title_15 : '' }}">
                            </div>

                            <!-- Description 15 -->
                            <div class="mb-3">
                                <label class="form-label" for="description_15">
                                    {{ translate('description_15') }} ({{ $lang['lang_name'] }})<span
                                        class="text-danger">*</span></label>
                                <textarea class="form-control" placeholder="{{ translate('enter_description_15') }}"
                                    name="{{ $lang['lang_code'] }}[description_15]">{{ $translation ? $translation->description_15 : '' }}</textarea>
                            </div>

                            <!-- Title 16 -->
                            <div class="mb-3">
                                <label class="form-label" for="title_16"> {{ translate('title_16')
                                    }}
                                    ({{ $lang['lang_name'] }})<span class="text-danger">*</span></label>
                                <input type="text" class="form-control" placeholder="{{ translate('enter_title_16') }}"
                                    name="{{ $lang['lang_code'] }}[title_16]" value="{{ $translation ? $translation->title_16 : '' }}">
                            </div>

                            <!-- Description 16 -->
                            <div class="mb-3">
                                <label class="form-label" for="description_16">
                                    {{ translate('description_16') }} ({{ $lang['lang_name'] }})<span
                                        class="text-danger">*</span></label>
                                <textarea class="form-control" placeholder="{{ translate('enter_description_16') }}"
                                    name="{{ $lang['lang_code'] }}[description_16]">{{ $translation ? $translation->description_16 : '' }}</textarea>
                            </div>



                        </div>
                        @endforeach
                    </div>

                    <?php $countries = getCountries(); ?>

                    <div class="col-md-6">
                        <label class="form-label">{{ translate('select_countries') }} <span
                                class="text-danger">*</span></label>
                        <select name="country_ids[]" aria-label="Select Countries" id="country_ids"
                            class="form-select custom_select2 js-example-basic-multiple country_ids" multiple>

                            @foreach ($countries as $country)
                            <option value="{{ $country['id'] }}" @if ( !empty($data->
                                service_assigns_country_array) &&
                                in_array($country['id'],
                                array_column($data->service_assigns_country_array->toArray(),
                                'country_id'))
                                ) selected @endif>
                                {{ $country['name'] }}
                            </option>
                            @endforeach

                        </select>
                    </div>

                </div>

                <!-- Submit and Close buttons -->
                <button class="btn btn-primary btn-sm btn-custom" type="submit" id="serviceSubmit"><i
                        class="fa fa-spinner fa-spin d-none icon"></i>{{ translate('submit') }}</button>
                <button class="btn btn-secondary btn-sm" type="button" data-bs-dismiss="modal" id="is_close"
                    onclick="return close_or_clear();">{{ translate('close') }}</button>
            </form>
        </div>
    </div>
</div>

<script src="{{ static_asset('admin/assets/js/select2/select2.full.min.js') }}"></script>
<script src="{{ static_asset('admin/assets/js/select2/select2-custom.js') }}"></script>