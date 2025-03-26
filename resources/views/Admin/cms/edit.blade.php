@extends('Admin.layouts.app')
@section('title', 'Edit CMS Page')

@section('content')

<div class="container-fluid">
    <div class="page-title">
        <div class="row">
            <div class="col-6">
                <h4>Edit CMS Page</h4>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-md-12">

            <form class="form-bookmark" method="post" action="{{ route('cms.update', $cms->id) }}"
                id="cms-page-edit-form" enctype="multipart/form-data">
                @csrf
                @method('PUT')


                <!-- HOME PAGE -->
                @if (in_array($cms->id, [1]))
                <div>
                    <h5><strong>{{ __('Home Details') }}</strong></h5>
                </div>
                <br>

                <!-- Banner Image Field -->
                <div class="card mb-3">
                    <div class="card-header">
                        <strong>{{ __('Banner Section') }}</strong>
                    </div>
                    <div class="card-body">
                        <div class="row g-2">
                            <div class="mb-3 col-md-12">
                                <label class="form-label" for="banner_image">{{ __('Banner Image') }}
                                    <span class="text-danger">*</span>
                                </label>
                                (<span class="text-danger">200px * 200px</span>)
                                <input class="form-control" id="banner_image" type="file" name="banner_image"
                                    accept=".png, .jpg, .jpeg">
                                @if (!empty($cms->banner_image))
                                <div class="mt-2">
                                    <img src="{{ $cms->banner_image }}" style="height:75px">
                                </div>
                                @endif

                            </div>
                        </div>
                    </div>
                </div>

                <!-- Banner title, heading & description -->
                <div class="card">
                    <div class="card-body">
                        <div class="row">
                            @php
                            $language = getlanguages();
                            @endphp

                            @foreach ($language as $lang)
                            @php
                            // Attempt to retrieve the translation for this language
                            $translation = $cms->translate($lang['lang_code']) ?? null;
                            @endphp
                            <!-- Banner Heading -->
                            <div class="mb-3 col-md-4">
                                <label class="form-label" for="banner_heading">{{ $lang['lang_name'] }}
                                    {{ translate('Banner Heading') }}</label>
                                <input class="form-control" id="banner_heading"
                                    name="{{ $lang['lang_code'] }}[banner_heading]" type="text"
                                    placeholder="{{ translate('Banner heading') }}"
                                    value="{{ $translation ? $translation->banner_heading : '' }}">
                            </div>

                            <!-- Banner Title -->
                            <div class="mb-3 col-md-4">
                                <label class="form-label" for="banner_title">{{ $lang['lang_name'] }}
                                    {{ translate('Banner Title') }}</label>
                                <input class="form-control" id="banner_title"
                                    name="{{ $lang['lang_code'] }}[banner_title]" type="text"
                                    placeholder="{{ translate('Banner title') }}"
                                    value="{{ $translation ? $translation->banner_title : '' }}">
                            </div>

                            <!-- Button Text -->
                            <div class="mb-3 col-md-4">
                                <label class="form-label" for="button_text">{{ $lang['lang_name'] }}
                                    {{ translate('Button Text') }}</label>
                                <input class="form-control" id="button_text"
                                    name="{{ $lang['lang_code'] }}[button_text]" type="text"
                                    placeholder="{{ translate('Button Text') }}"
                                    value="{{ $translation ? $translation->button_text : '' }}">
                            </div>
                            @endforeach
                        </div>
                    </div>
                </div>

                <!-- Service Section -->
                <div class="card mb-3">
                    <div class="card-header">
                        <strong>{{ __('Service Section') }}</strong>
                    </div>
                    <div class="card-body">
                        <div class="row g-2">
                            <!-- Service Images Upload -->
                            @foreach (['1', '2', '3', '4'] as $index)
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label class="form-label" for="service_images_{{ $index }}">{{ __('Service Image')
                                        }}
                                        {{ $index }}
                                        <span class="text-danger">*</span>
                                    </label>
                                    (<span class="text-danger">200px * 200px</span>)
                                    <input class="form-control" id="service_images_{{ $index }}" type="file"
                                        name="service_images_{{ $index }}" accept=".png, .jpg, .jpeg">
                                    @if (!empty($cms->{'service_images_' . $index}))
                                    <div class="mt-2">
                                        <a href="{{ $cms->{'service_images_' . $index} }}" target="_blank">
                                            <img src="{{ $cms->{'service_images_' . $index} }}" style="height:75px">
                                        </a>
                                    </div>
                                    @endif

                                </div>
                            </div>
                            @endforeach
                        </div>

                        <!-- Service title & description -->
                        <div class="row">
                            @foreach (['1', '2', '3', '4'] as $index)
                            @foreach ($language as $lang)
                            @php
                            // Attempt to retrieve the translation for this language
                            $translation = $cms->translate($lang['lang_code']) ?? null;
                            @endphp
                            <!-- Service Title -->
                            <div class="mb-3 col-md-6">
                                <label class="form-label" for="service_title_{{ $index }}">{{ $lang['lang_name'] }}
                                    {{ __('Service title') }} {{ $index }}</label>
                                <input class="form-control" id="service_title_{{ $index }}"
                                    name="{{ $lang['lang_code'] }}[service_title_{{ $index }}]" type="text"
                                    placeholder="{{ __('Service title') }}"
                                    value="{{ $translation ? $translation->{'service_title_' . $index} : '' }}">
                            </div>

                            <!-- Service Description -->
                            <div class="mb-3 col-md-6">
                                <label class="form-label" for="service_description_{{ $index }}">{{ $lang['lang_name']
                                    }}
                                    {{ __('Service Description') }} {{ $index }}</label>
                                <textarea class="form-control" id="service_description_{{ $index }}"
                                    name="{{ $lang['lang_code'] }}[service_description_{{ $index }}]"
                                    placeholder="{{ __('Service description') }}">{{ old('service_description_' . $index, $translation ? $translation->{'service_description_' . $index} : '') }}</textarea>
                            </div>
                            @endforeach
                            @endforeach
                        </div>
                    </div>
                </div>

                <!-- Cab section -->
                <div class="card mb-3">
                    <div class="card-header">
                        <strong>{{ __('Cab Section') }}</strong>
                    </div>
                    <div class="card-body">
                        <div class="row g-2">
                            <div class="col-md-12">
                                <div class="mb-3">
                                    <label class="form-label" for="cab_images">{{ __('Cab Image') }} <span
                                            class="text-danger">*</span></label>
                                    (<span class="text-danger">200px * 200px</span>)
                                    <input class="form-control" id="cab_images" type="file" name="cab_images"
                                        accept=".png, .jpg, .jpeg">
                                    @if (!empty($cms->cab_images))
                                    <div class="mt-2">
                                        <a href="{{ $cms->cab_images }}" target="_blank">
                                            <img src="{{ $cms->cab_images }}" style="height:75px">
                                        </a>
                                    </div>
                                    @endif

                                </div>
                            </div>
                            <div class="row">
                                @foreach ($languages as $lang)
                                @php
                                $translation = $cms->translate($lang->lang_code) ?? null;
                                @endphp
                                <div class="col-md-4">
                                    <div class="mb-3">
                                        <label class="form-label" for="cab_title">{{ __('Cab Title') }}
                                            ({{ $lang->lang_name }})
                                        </label>
                                        <input class="form-control" id="cab_title"
                                            name="{{ $lang->lang_code }}[cab_title]" type="text"
                                            placeholder="{{ __('Cab Title') }}"
                                            value="{{ $translation ? $translation->cab_title : '' }}">
                                    </div>
                                </div>
                                @endforeach
                            </div>

                            @foreach ($languages as $lang)
                            @php
                            $translation = $cms->translate($lang->lang_code) ?? null;
                            @endphp
                            <div class="col-md-4">
                                <div class="mb-3">
                                    <label class="form-label" for="cab_heading">{{ __('Cab Heading') }}
                                        ({{ $lang->lang_name }})
                                    </label>
                                    <input class="form-control" id="cab_heading"
                                        name="{{ $lang->lang_code }}[cab_heading]" type="text"
                                        placeholder="{{ __('Cab Heading') }}"
                                        value="{{ $translation ? $translation->cab_heading : '' }}">
                                </div>
                            </div>
                            @endforeach

                            @foreach ($languages as $lang)
                            @php
                            $translation = $cms->translate($lang->lang_code) ?? null;
                            @endphp
                            <div class="col-md-4">
                                <div class="mb-3">
                                    <label class="form-label" for="button_text_2">{{ __('Button Text 2') }}
                                        ({{ $lang->lang_name }})
                                    </label>
                                    <input class="form-control" id="button_text_2"
                                        name="{{ $lang->lang_code }}[button_text_2]" type="text"
                                        placeholder="{{ __('Button Text 2') }}"
                                        value="{{ $translation ? $translation->button_text_2 : '' }}">
                                </div>
                            </div>
                            @endforeach
                        </div>
                    </div>
                </div>

                <!-- Cab Description Fields -->
                <div class="card mb-3">
                    <div class="card-body">
                        <div class="row g-2">
                            @foreach (['1', '2', '3', '4'] as $index)
                            @foreach ($languages as $lang)
                            @php
                            $translation = $cms->translate($lang->lang_code) ?? null;
                            @endphp
                            <div class="col-md-4">
                                <div class="mb-3">
                                    <label class="form-label" for="cab_point_text_{{ $index }}">{{ __('Cab Point Text')
                                        }}
                                        {{ $index }}
                                        ({{ $lang->lang_name }})
                                    </label>
                                    <input class="form-control" id="cab_point_text_{{ $index }}"
                                        name="{{ $lang->lang_code }}[cab_point_text_{{ $index }}]" type="text"
                                        placeholder="{{ __('Cab Point Text') }} {{ $index }}"
                                        value="{{ $translation ? $translation->{'cab_point_text_' . $index} : '' }}">
                                </div>
                            </div>
                            @endforeach
                            @endforeach
                        </div>
                    </div>
                </div>

                <!-- Service Section -->
                <div class="card mb-3">
                    <div class="card-header">
                        <strong>{{ __('Offer Service Section') }}</strong>
                    </div>
                    <div class="card-body">
                        <div class="row g-2">
                            <div class="row">
                                @foreach ($languages as $lang)
                                @php
                                $translation = $cms->translate($lang->lang_code) ?? null;
                                @endphp
                                <div class="col-md-4">
                                    <div class="mb-3">
                                        <label class="form-label" for="offer_service_heading">{{ __('Offer Service
                                            Heading') }}
                                            ({{ $lang->lang_name }})
                                        </label>
                                        <input class="form-control" id="offer_service_heading"
                                            name="{{ $lang->lang_code }}[offer_service_heading]" type="text"
                                            placeholder="{{ __('Offer Service Heading') }}"
                                            value="{{ $translation ? $translation->offer_service_heading : '' }}">
                                    </div>
                                </div>
                                @endforeach
                            </div>

                            @foreach ($languages as $lang)
                            @php
                            $translation = $cms->translate($lang->lang_code) ?? null;
                            @endphp
                            <div class="col-md-4">
                                <div class="mb-3">
                                    <label class="form-label" for="offer_service_heading_2">{{ __('Offer Service Heading
                                        2') }}
                                        ({{ $lang->lang_name }})
                                    </label>
                                    <input class="form-control" id="offer_service_heading_2"
                                        name="{{ $lang->lang_code }}[offer_service_heading_2]" type="text"
                                        placeholder="{{ __('Offer Service Heading 2') }}"
                                        value="{{ $translation ? $translation->offer_service_heading_2 : '' }}">
                                </div>
                            </div>
                            @endforeach
                        </div>
                    </div>
                </div>


                <!-- Fairer field-->
                <div class="card mb-3">
                    <div class="card-header">
                        <strong>{{ __('Fairer Section') }}</strong>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <!-- Fairer Title -->
                            @foreach ($languages as $lang)
                            @php
                            $translation = $cms->translate($lang->lang_code) ?? null;
                            @endphp
                            <div class="col-md-4">
                                <div class="mb-3">
                                    <label class="form-label" for="fairer_title_{{ $lang->lang_code }}">
                                        {{ __('Fairer Title') }} ({{ $lang->lang_name }})
                                    </label>
                                    <input class="form-control" id="fairer_title_{{ $lang->lang_code }}"
                                        name="{{ $lang->lang_code }}[fairer_title]" type="text"
                                        placeholder="{{ __('Fairer Title') }}"
                                        value="{{ $translation ? $translation->fairer_title : '' }}">
                                </div>
                            </div>
                            @endforeach
                        </div>

                        <div class="row">
                            <!-- Fairer Title 2 -->
                            @foreach ($languages as $lang)
                            @php
                            $translation = $cms->translate($lang->lang_code) ?? null;
                            @endphp
                            <div class="col-md-4">
                                <div class="mb-3">
                                    <label class="form-label" for="fairer_title_2_{{ $lang->lang_code }}">
                                        {{ __('Fairer Title 2') }} ({{ $lang->lang_name }})
                                    </label>
                                    <input class="form-control" id="fairer_title_2_{{ $lang->lang_code }}"
                                        name="{{ $lang->lang_code }}[fairer_title_2]" type="text"
                                        placeholder="{{ __('Fairer Title 2') }}"
                                        value="{{ $translation ? $translation->fairer_title_2 : '' }}">
                                </div>
                            </div>
                            @endforeach
                        </div>

                        <div class="row">
                            <!-- Fairer Count -->
                            <div class="row">
                                @for ($i = 1; $i <= 4; $i++) <div class="mb-3 col-md-3">
                                    <label class="form-label" for="fairer_count_{{ $i }}">{{ __('Fairer Count ' . $i)
                                        }}</label>
                                    <input class="form-control" id="fairer_count_{{ $i }}" name="fairer_count_{{ $i }}"
                                        type="text" placeholder="{{ __('Fairer Count ' . $i) }}"
                                        value="{{ $cms->{'fairer_count_' . $i} }}">
                            </div>
                            @endfor
                        </div>
                    </div>

                    <div class="row">
                        <!-- Fairer Text -->
                        @foreach ($languages as $lang)
                        @php
                        // Attempt to retrieve the translation for this language
                        $translation = $cms->translate($lang->lang_code) ?? null;
                        @endphp
                        @for ($i = 1; $i <= 4; $i++) <div class="mb-3 col-md-3">
                            <label class="form-label" for="fairer_text_{{ $i }}_{{ $lang->lang_code }}">
                                {{ __('Fairer Text') }} {{ $i }} ({{ $lang->lang_name }})
                            </label>
                            <input class="form-control" id="fairer_text_{{ $i }}_{{ $lang->lang_code }}"
                                name="{{ $lang->lang_code }}[fairer_text_{{ $i }}]" type="text"
                                placeholder="{{ __('Fairer Text') }} {{ $i }}"
                                value="{{ $translation ? $translation->{'fairer_text_' . $i} : '' }}">
                    </div>
                    @endfor
                    @endforeach
                </div>
        </div>

    </div>


    <!-- Priority Section -->
    <div class="card">
        <div class="card-header">
            <strong>{{ __('Priority Section') }}</strong>
        </div>
        <div class="card-body">
            <div class="row">
                <!-- Priority Image -->
                <div class="mb-3 col-md-12">
                    <label class="form-label" for="priority_image">{{ __('Priority Image') }}
                        <span class="text-danger">*</span>
                    </label>
                    (<span class="text-danger">200px * 200px</span>)
                    <input class="form-control" id="priority_image" type="file" name="priority_image"
                        accept=".png, .jpg, .jpeg">
                    @if (!empty($cms->priority_image))
                    <div class="mt-2">
                        <a href="{{ $cms->priority_image }}" target="_blank">
                            <img src="{{ $cms->priority_image }}" style="height:75px">
                        </a>
                    </div>
                    @endif

                </div>

                <!-- Title and Heading for Multiple Languages -->
                @foreach ($languages as $lang)
                @php
                // Attempt to retrieve the translation for this language
                $translation = $cms->translate($lang->lang_code) ?? null;
                @endphp
                <!-- Priority Title -->
                <div class="mb-3 col-md-6">
                    <label class="form-label" for="priority_title_{{ $lang->lang_code }}">{{ __('Priority Title') }}
                        ({{ $lang->lang_name }})
                    </label>
                    <input class="form-control" id="priority_title_{{ $lang->lang_code }}"
                        name="{{ $lang->lang_code }}[priority_title]" type="text"
                        placeholder="{{ __('Priority Title') }}"
                        value="{{ $translation ? $translation->priority_title : '' }}">
                </div>

                <!-- Priority Heading -->
                <div class="mb-3 col-md-6">
                    <label class="form-label" for="priority_heading_{{ $lang->lang_code }}">{{ __('Priority Heading') }}
                        ({{ $lang->lang_name }})</label>
                    <input class="form-control" id="priority_heading_{{ $lang->lang_code }}"
                        name="{{ $lang->lang_code }}[priority_heading]" type="text"
                        placeholder="{{ __('Priority Heading') }}"
                        value="{{ $translation ? $translation->priority_heading : '' }}">
                </div>
                @endforeach
            </div>

            <div class="row">
                @foreach ($languages as $lang)
                @php
                $translation = $cms->translate($lang->lang_code) ?? null;
                @endphp
                <!-- Priority Description -->
                <div class="mb-3 col-md-4">
                    <label class="form-label" for="priority_description_{{ $lang->lang_code }}">{{ __('Priority
                        Description') }}
                        ({{ $lang->lang_name }})
                    </label>
                    <input class="form-control" id="priority_description_{{ $lang->lang_code }}"
                        name="{{ $lang->lang_code }}[priority_description]" type="text"
                        placeholder="{{ __('Priority Description') }}"
                        value="{{ $translation ? $translation->priority_description : '' }}">
                </div>
                @endforeach
            </div>

            <div class="row">
                @foreach ($languages as $lang)
                @php
                $translation = $cms->translate($lang->lang_code) ?? null;
                @endphp
                <!-- Priority Description -->
                <div class="mb-3 col-md-4">
                    <label class="form-label" for="button_text_3_{{ $lang->lang_code }}">{{ __('Button Text 3') }}
                        ({{ $lang->lang_name }})
                    </label>
                    <input class="form-control" id="button_text_3_{{ $lang->lang_code }}"
                        name="{{ $lang->lang_code }}[button_text_3]" type="text" placeholder="{{ __('Button Text 3') }}"
                        value="{{ $translation ? $translation->button_text_3 : '' }}">
                </div>
                @endforeach
            </div>
        </div>
    </div>


    <!-- Blog Section -->
    <div class="card">
        <div class="card-header">
            <strong>{{ __('Blog Section') }}</strong>
        </div>
        <div class="card-body">
            <div class="row">
                <!-- Blog Heading for Multiple Languages -->
                @foreach ($languages as $lang)
                @php
                // Attempt to retrieve the translation for this language
                $translation = $cms->translate($lang->lang_code) ?? null;
                @endphp
                <!-- Blog Heading -->
                <div class="mb-3 col-md-4">
                    <label class="form-label" for="blog_heading_{{ $lang->lang_code }}">{{ __('Blog Heading') }}
                        ({{ $lang->lang_name }})
                    </label>
                    <input class="form-control" id="blog_heading_{{ $lang->lang_code }}"
                        name="{{ $lang->lang_code }}[blog_heading]" type="text" placeholder="{{ __('Blog Heading') }}"
                        value="{{ $translation ? $translation->blog_heading : '' }}">
                </div>
                @endforeach
            </div>
        </div>
    </div>


    <!-- Our App section -->
    <div class="card">
        <div class="card-header">
            <strong>{{ __('Our App Section') }}</strong>
        </div>
        <div class="card-body">

            <div class="row">
                <div class="mb-3 col-md-4">
                    <label class="form-label" for="our_app_image_1">{{ __('Our App Image 1') }}
                        <span class="text-danger">*</span>
                    </label>
                    (<span class="text-danger">200px * 200px</span>)
                    <input class="form-control" id="our_app_image_1" type="file" name="our_app_image_1"
                        accept=".png, .jpg, .jpeg">
                    @if (!empty($cms->our_app_image_1))
                    <div class="mt-2">
                        <a href="{{ $cms->our_app_image_1 }}" target="_blank">
                            <img src="{{ $cms->our_app_image_1 }}" style="height:75px">
                        </a>
                    </div>
                    @endif
                </div>
                <div class="mb-3 col-md-4">
                    <label class="form-label" for="our_app_image_2">{{ __('Our App Image 2') }}
                        <span class="text-danger">*</span>
                    </label>
                    (<span class="text-danger">200px * 200px</span>)
                    <input class="form-control" id="our_app_image_2" type="file" name="our_app_image_2"
                        accept=".png, .jpg, .jpeg">
                    @if (!empty($cms->our_app_image_2))
                    <div class="mt-2">
                        <a href="{{ $cms->our_app_image_2 }}" target="_blank">
                            <img src="{{ $cms->our_app_image_2 }}" style="height:75px">
                        </a>
                    </div>
                    @endif
                </div>
                <div class="mb-3 col-md-4">
                    <label class="form-label" for="our_app_image_3">{{ __('Our App Image 3') }}
                        <span class="text-danger">*</span>
                    </label>
                    (<span class="text-danger">200px * 200px</span>)
                    <input class="form-control" id="our_app_image_3" type="file" name="our_app_image_3"
                        accept=".png, .jpg, .jpeg">
                    @if (!empty($cms->our_app_image_3))
                    <div class="mt-2">
                        <a href="{{ $cms->our_app_image_3 }}" target="_blank">
                            <img src="{{ $cms->our_app_image_3 }}" style="height:75px">
                        </a>
                    </div>
                    @endif
                </div>
            </div>

            <div class="row">
                @foreach ($languages as $lang)
                @php
                $translation = $cms->translate($lang->lang_code) ?? null;
                @endphp
                <div class="mb-3 col-md-4">
                    <label class="form-label" for="our_app_heading_{{ $lang->lang_code }}">{{ __('Our App Heading') }}
                        ({{ $lang->lang_name }})
                    </label>
                    <input class="form-control" id="our_app_heading_{{ $lang->lang_code }}"
                        name="{{ $lang->lang_code }}[our_app_heading]" type="text"
                        placeholder="{{ __('Our App Heading') }}"
                        value="{{ $translation ? $translation->our_app_heading : '' }}">
                </div>
                @endforeach
            </div>
            <div class="row">
                @foreach ($languages as $lang)
                @php
                $translation = $cms->translate($lang->lang_code) ?? null;
                @endphp
                <div class="mb-3 col-md-4">
                    <label class="form-label" for="our_app_title_{{ $lang->lang_code }}">{{ __('Our App Title') }}
                        ({{ $lang->lang_name }})
                    </label>
                    <input class="form-control" id="our_app_title_{{ $lang->lang_code }}"
                        name="{{ $lang->lang_code }}[our_app_title]" type="text" placeholder="{{ __('Our App Title') }}"
                        value="{{ $translation ? $translation->our_app_title : '' }}">
                </div>
                @endforeach
            </div>

            <div class="row">
                @foreach ($languages as $lang)
                @php
                $translation = $cms->translate($lang->lang_code) ?? null;
                @endphp
                <div class="mb-3 col-md-4">
                    <label class="form-label" for="our_app_description_{{ $lang->lang_code }}">{{ __('Our App
                        Description') }}
                        ({{ $lang->lang_name }})
                    </label>
                    <input class="form-control" id="our_app_description_{{ $lang->lang_code }}"
                        name="{{ $lang->lang_code }}[our_app_description]" type="text"
                        placeholder="{{ __('Our App Description') }}"
                        value="{{ $translation ? $translation->our_app_description : '' }}">
                </div>
                @endforeach
            </div>
        </div>
    </div>


    <!-- SEO details -->
    <div class="card mb-3">
        <div class="card-header">
            <strong>{{ __('SEO Deatils') }}</strong>
        </div>
        <div class="card-body">
            <div class="row g-2">
                <div class="mb-3 col-md-12">
                    <label class="form-label" for="meta_title">{{ __('Meta title') }}</label>
                    <input class="form-control" id="meta_title" name="meta_title" type="text"
                        placeholder="{{ __('Meta title') }}" aria-label="{{ __('Meta title') }}"
                        value="{{ $cms->meta_title }}" disabled>
                </div>
                <div class="mb-3 col-md-12">
                    <label class="form-label" for="meta_description">{{ __('Meta description') }}</label>
                    <textarea class="form-control" id="meta_description" name="meta_description" type="text"
                        placeholder="{{ __('Meta description') }}">{{ $cms->meta_description }}</textarea>
                </div>
            </div>
        </div>
    </div>

    @endif

    <!-- ------------------------------------------------------- -->

    <!-- About Us PAGE -->
    @if (in_array($cms->id, [2]))
    <div>
        <h5><strong>{{ __('About Us Details') }}</strong></h5>
    </div>
    <br>

    <!-- Banner Image Field -->
    <div class="card mb-3">
        <div class="card-header">
            <strong>{{ __('Banner Section') }}</strong>
        </div>
        <div class="card-body">
            <div class="row g-2">
                <div class="mb-3 col-md-12">
                    <label class="form-label" for="banner_image">{{ __('Banner Image') }}
                        <span class="text-danger">*</span>
                    </label>
                    (<span class="text-danger">200px * 200px</span>)
                    <input class="form-control" id="banner_image" type="file" name="banner_image"
                        accept=".png, .jpg, .jpeg">
                    @if (!empty($cms->banner_image))
                    <div class="mt-2">
                        <img src="{{ $cms->banner_image }}" style="height:75px">
                    </div>
                    @endif

                </div>
            </div>
        </div>
    </div>

    <!-- Banner title, heading & description -->
    <div class="card">
        <div class="card-body">
            <div class="row">
                @php
                $language = getlanguages();
                @endphp

                @foreach ($language as $lang)
                @php
                // Attempt to retrieve the translation for this language
                $translation = $cms->translate($lang['lang_code']) ?? null;
                @endphp
                <!-- Banner Heading -->
                <div class="mb-3 col-md-4">
                    <label class="form-label" for="banner_heading">{{ $lang['lang_name'] }}
                        {{ translate('Banner Heading') }}</label>
                    <input class="form-control" id="banner_heading" name="{{ $lang['lang_code'] }}[banner_heading]"
                        type="text" placeholder="{{ translate('Banner heading') }}"
                        value="{{ $translation ? $translation->banner_heading : '' }}">
                </div>

                <!-- Banner Title -->
                <div class="mb-3 col-md-4">
                    <label class="form-label" for="banner_title">{{ $lang['lang_name'] }}
                        {{ translate('Banner Title') }}</label>
                    <input class="form-control" id="banner_title" name="{{ $lang['lang_code'] }}[banner_title]"
                        type="text" placeholder="{{ translate('Banner title') }}"
                        value="{{ $translation ? $translation->banner_title : '' }}">
                </div>

                <!-- Button Text -->
                <div class="mb-3 col-md-4">
                    <label class="form-label" for="button_text">{{ $lang['lang_name'] }}
                        {{ translate('Button Text') }}</label>
                    <input class="form-control" id="button_text" name="{{ $lang['lang_code'] }}[button_text]"
                        type="text" placeholder="{{ translate('Button Text') }}"
                        value="{{ $translation ? $translation->button_text : '' }}">
                </div>
                @endforeach
            </div>
        </div>
    </div>


    <!-- About Us Section -->
    <div class="card mb-3">
        <div class="card-header">
            <strong>{{ __('About_Us Section') }}</strong>
        </div>
        <div class="card-body">
            <div class="row g-2">
                <!-- Image Upload Column 1 -->
                <div class="col-md-4">
                    <div class="mb-3">
                        <label class="form-label" for="about_image_1">{{ __('About Us Image 1') }}
                            <span class="text-danger">*</span>
                        </label>
                        (<span class="text-danger">200px * 200px</span>)
                        <input class="form-control" id="about_image_1" type="file" name="about_image_1"
                            accept=".png, .jpg, .jpeg">
                        @if (!empty($cms->about_image_1))
                        <div class="mt-2">
                            <a href="{{ $cms->about_image_1 }}" target="_blank">
                                <img src="{{ $cms->about_image_1 }}" style="height:75px">
                            </a>
                        </div>
                        @endif


                    </div>
                </div>

                <!-- Image Upload Column 2 -->
                <div class="col-md-4">
                    <div class="mb-3">
                        <label class="form-label" for="about_image_2">{{ __('About Us Image 2') }}
                            <span class="text-danger">*</span>
                        </label>
                        (<span class="text-danger">200px * 200px</span>)
                        <input class="form-control" id="about_image_2" type="file" name="about_image_2"
                            accept=".png, .jpg, .jpeg">
                        @if (!empty($cms->about_image_2))
                        <div class="mt-2">
                            <a href="{{ $cms->about_image_2 }}" target="_blank">
                                <img src="{{ $cms->about_image_2 }}" style="height:75px">
                            </a>
                        </div>
                        @endif


                    </div>
                </div>
                <!-- Image Upload Column 3 -->
                <div class="col-md-4">
                    <div class="mb-3">
                        <label class="form-label" for="about_image_3">{{ __('About Us Image 3') }}
                            <span class="text-danger">*</span>
                        </label>
                        (<span class="text-danger">200px * 200px</span>)
                        <input class="form-control" id="about_image_3" type="file" name="about_image_3"
                            accept=".png, .jpg, .jpeg">
                        @if (!empty($cms->about_image_3))
                        <div class="mt-2">
                            <a href="{{ $cms->about_image_3 }}" target="_blank">
                                <img src="{{ $cms->about_image_3 }}" style="height:75px">
                            </a>
                        </div>
                        @endif


                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="card">
        <div class="card-body">
            <div class="row">
                <!-- About Us Heading -->
                @foreach ($languages as $lang)
                @php
                // Attempt to retrieve the translation for this language
                $translation = $cms->translate($lang->lang_code) ?? null;
                @endphp
                <div class="mb-3 col-md-4">
                    <label class="form-label" for="about_heading_{{ $lang->lang_code }}">{{ __('About Us Heading') }}
                        ({{ $lang->lang_name }})
                    </label>
                    <input class="form-control" id="about_heading_{{ $lang->lang_code }}"
                        name="about_heading[{{ $lang->lang_code }}]" type="text"
                        placeholder="{{ __('About Us Heading') }}"
                        value="{{ $translation ? $translation->about_heading : '' }}">
                </div>
                @endforeach

                <!-- About Us Description -->
                @foreach ($languages as $lang)
                @php
                // Attempt to retrieve the translation for this language
                $translation = $cms->translate($lang->lang_code) ?? null;
                @endphp
                <div class="mb-3 col-md-4">
                    <label class="form-label" for="about_description_{{ $lang->lang_code }}">{{ __('About Us
                        Description') }}
                        ({{ $lang->lang_name }})
                    </label>
                    <textarea class="form-control" id="about_description_{{ $lang->lang_code }}"
                        name="about_description[{{ $lang->lang_code }}]"
                        placeholder="{{ __('About Us Description') }}">{{ $translation ? $translation->about_description : '' }}</textarea>
                </div>
                @endforeach

                <!-- About Us Button Text -->
                @foreach ($languages as $lang)
                @php
                // Attempt to retrieve the translation for this language
                $translation = $cms->translate($lang->lang_code) ?? null;
                @endphp
                <div class="mb-3 col-md-4">
                    <label class="form-label" for="about_button_text_{{ $lang->lang_code }}">{{ __('About Button Text')
                        }}
                        ({{ $lang->lang_name }})
                    </label>
                    <input class="form-control" id="about_button_text_{{ $lang->lang_code }}"
                        name="about_button_text[{{ $lang->lang_code }}]" type="text"
                        placeholder="{{ __('About Button Text') }}"
                        value="{{ $translation ? $translation->about_button_text : '' }}">
                </div>
                @endforeach
            </div>
        </div>
    </div>


    <!-- description Fields -->
    <div class="card mb-3">
        <div class="card-header">
            <strong>{{ __('Description Section') }}</strong>
        </div>
        <div class="card-body">
            <div class="row g-5">
                @foreach ($languages as $lang)
                @php
                // Attempt to retrieve the translation for this language
                $translation = $cms->translate($lang->lang_code) ?? null;
                @endphp
                <div class="col-md-12">
                    <div class="mb-4">
                        <label class="form-label" for="description_{{ $lang->lang_code }}">{{ __('Description') }}
                            ({{ $lang->lang_name }})
                        </label>
                        <textarea class="form-control" id="description_{{ $lang->lang_code }}"
                            name="description[{{ $lang->lang_code }}]" placeholder="{{ __('Description') }}">
                                                                                                                                                                                                                    {{ $translation ? $translation->description : '' }}
                                                                                                                                                                                                                </textarea>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>

    <!-- Provide section -->
    <div class="card mb-3">
        <div class="card-header">
            <strong>{{ __('Provide Section') }}</strong>
        </div>
        <div class="card-body">
            <div class="row g-5">
                @foreach ($languages as $lang)
                @php
                // Attempt to retrieve the translation for this language
                $translation = $cms->translate($lang->lang_code) ?? null;
                @endphp
                <!-- Title for the section -->
                <div class="mb-3 col-md-4">
                    <label class="form-label" for="provide_title_{{ $lang->lang_code }}">{{ __('Provide Title') }}
                        ({{ $lang->lang_name }})
                    </label>
                    <input class="form-control" id="provide_title_{{ $lang->lang_code }}"
                        name="provide_title[{{ $lang->lang_code }}]" type="text" placeholder="{{ __('Provide Title') }}"
                        value="{{ $translation ? $translation->provide_title : '' }}">
                </div>
                @endforeach
            </div>

            @foreach (range(1, 6) as $index)
            <div class="row g-2">
                @foreach ($languages as $lang)
                @php
                // Attempt to retrieve the translation for this language
                $translation = $cms->translate($lang->lang_code) ?? null;
                @endphp
                <!-- Heading Section -->
                <div class="mb-3 col-md-6">
                    <label class="form-label" for="provide_heading_{{ $index }}_{{ $lang->lang_code }}">{{ __(
                        'Provide
                        Heading ' .
                        $index,
                        ) }}
                        ({{ $lang->lang_name }})
                    </label>
                    <input class="form-control" id="provide_heading_{{ $index }}_{{ $lang->lang_code }}"
                        name="provide_heading_{{ $index }}[{{ $lang->lang_code }}]" type="text"
                        placeholder="{{ __('Provide Heading ' . $index) }}"
                        value="{{ $translation ? $translation->{'provide_heading_' . $index} : '' }}">
                </div>

                <!-- Description Section -->
                <div class="col-md-6">
                    <div class="mb-4">
                        <label class="form-label" for="provide_description_{{ $index }}_{{ $lang->lang_code }}">{{
                            __('Provide Description ' . $index) }}
                            ({{ $lang->lang_name }})</label>
                        <textarea class="form-control" id="provide_description_{{ $index }}_{{ $lang->lang_code }}"
                            placeholder="{{ __('Provide Description ' . $index) }}"
                            name="provide_description_{{ $index }}[{{ $lang->lang_code }}]">{{ $translation ? $translation->{'provide_description_' . $index} : '' }}</textarea>
                    </div>
                </div>
                @endforeach
            </div>
            @endforeach
        </div>
    </div>

    <!-- Our App section -->
    <div class="card">
        <div class="card-header">
            <strong>{{ __('Our App Section') }}</strong>
        </div>
        <div class="card-body">

            <div class="row">
                <div class="mb-3 col-md-4">
                    <label class="form-label" for="our_app_image_1">{{ __('Our App Image 1') }}
                        <span class="text-danger">*</span>
                    </label>
                    (<span class="text-danger">200px * 200px</span>)
                    <input class="form-control" id="our_app_image_1" type="file" name="our_app_image_1"
                        accept=".png, .jpg, .jpeg">
                    @if (!empty($cms->our_app_image_1))
                    <div class="mt-2">
                        <a href="{{ $cms->our_app_image_1 }}" target="_blank">
                            <img src="{{ $cms->our_app_image_1 }}" style="height:75px">
                        </a>
                    </div>
                    @endif
                </div>
                <div class="mb-3 col-md-4">
                    <label class="form-label" for="our_app_image_2">{{ __('Our App Image 2') }}
                        <span class="text-danger">*</span>
                    </label>
                    (<span class="text-danger">200px * 200px</span>)
                    <input class="form-control" id="our_app_image_2" type="file" name="our_app_image_2"
                        accept=".png, .jpg, .jpeg">
                    @if (!empty($cms->our_app_image_2))
                    <div class="mt-2">
                        <a href="{{ $cms->our_app_image_2 }}" target="_blank">
                            <img src="{{ $cms->our_app_image_2 }}" style="height:75px">
                        </a>
                    </div>
                    @endif
                </div>
                <div class="mb-3 col-md-4">
                    <label class="form-label" for="our_app_image_3">{{ __('Our App Image 3') }}
                        <span class="text-danger">*</span>
                    </label>
                    (<span class="text-danger">200px * 200px</span>)
                    <input class="form-control" id="our_app_image_3" type="file" name="our_app_image_3"
                        accept=".png, .jpg, .jpeg">
                    @if (!empty($cms->our_app_image_3))
                    <div class="mt-2">
                        <a href="{{ $cms->our_app_image_3 }}" target="_blank">
                            <img src="{{ $cms->our_app_image_3 }}" style="height:75px">
                        </a>
                    </div>
                    @endif
                </div>
            </div>

            <div class="row">
                @foreach ($languages as $lang)
                @php
                $translation = $cms->translate($lang->lang_code) ?? null;
                @endphp
                <div class="mb-3 col-md-4">
                    <label class="form-label" for="our_app_heading_{{ $lang->lang_code }}">{{ __('Our App Heading') }}
                        ({{ $lang->lang_name }})
                    </label>
                    <input class="form-control" id="our_app_heading_{{ $lang->lang_code }}"
                        name="{{ $lang->lang_code }}[our_app_heading]" type="text"
                        placeholder="{{ __('Our App Heading') }}"
                        value="{{ $translation ? $translation->our_app_heading : '' }}">
                </div>
                @endforeach
            </div>
            <div class="row">
                @foreach ($languages as $lang)
                @php
                $translation = $cms->translate($lang->lang_code) ?? null;
                @endphp
                <div class="mb-3 col-md-4">
                    <label class="form-label" for="our_app_title_{{ $lang->lang_code }}">{{ __('Our App Title') }}
                        ({{ $lang->lang_name }})
                    </label>
                    <input class="form-control" id="our_app_title_{{ $lang->lang_code }}"
                        name="{{ $lang->lang_code }}[our_app_title]" type="text" placeholder="{{ __('Our App Title') }}"
                        value="{{ $translation ? $translation->our_app_title : '' }}">
                </div>
                @endforeach
            </div>

            <div class="row">
                @foreach ($languages as $lang)
                @php
                $translation = $cms->translate($lang->lang_code) ?? null;
                @endphp
                <div class="mb-3 col-md-4">
                    <label class="form-label" for="our_app_description_{{ $lang->lang_code }}">{{ __('Our App
                        Description') }}
                        ({{ $lang->lang_name }})
                    </label>
                    <input class="form-control" id="our_app_description_{{ $lang->lang_code }}"
                        name="{{ $lang->lang_code }}[our_app_description]" type="text"
                        placeholder="{{ __('Our App Description') }}"
                        value="{{ $translation ? $translation->our_app_description : '' }}">
                </div>
                @endforeach
            </div>
        </div>
    </div>

    <!-- SEO details -->
    <div class="card mb-3">
        <div class="card-header">
            <strong>{{ __('SEO Deatils') }}</strong>
        </div>
        <div class="card-body">
            <div class="row g-2">
                <div class="mb-3 col-md-12">
                    <label class="form-label" for="meta_title">{{ __('Meta title') }}</label>
                    <input class="form-control" id="meta_title" name="meta_title" type="text"
                        placeholder="{{ __('Meta title') }}" aria-label="{{ __('Meta title') }}"
                        value="{{ $cms->meta_title }}" disabled>
                </div>
                <div class="mb-3 col-md-12">
                    <label class="form-label" for="meta_description">{{ __('Meta description') }}</label>
                    <textarea class="form-control" id="meta_description" name="meta_description" type="text"
                        placeholder="{{ __('Meta description') }}">{{ $cms->meta_description }}</textarea>
                </div>
            </div>
        </div>
    </div>

    @endif


    <!-- ------------------------------------------------------- -->

    <!-- CONTACT US PAGE -->
    @if (in_array($cms->id, [3]))
    <div>
        <h5><strong>{{ __('Contact Details') }}</strong></h5>
    </div>
    <br>

    <!-- Banner Image Field -->
    <div class="card mb-3">
        <div class="card-header">
            <strong>{{ __('Banner Section') }}</strong>
        </div>
        <div class="card-body">
            <div class="row g-2">
                <div class="mb-3 col-md-6">
                    <label class="form-label" for="banner_image">{{ __('Banner Image') }}
                        <span class="text-danger">*</span>
                    </label>
                    (<span class="text-danger">200px * 200px</span>)
                    <input class="form-control" id="banner_image" type="file" name="banner_image"
                        accept=".png, .jpg, .jpeg">
                    @if (!empty($cms->banner_image))
                    <div class="mt-2">
                        <img src="{{ $cms->banner_image }}" style="height:75px">
                    </div>
                    @endif

                </div>
            </div>
        </div>
    </div>

    <!-- Banner title, heading & description -->
    <div class="card">
        <div class="card-body">
            <div class="row">
                @php
                $languages = getlanguages();
                @endphp

                @foreach ($languages as $lang)
                @php
                // Attempt to retrieve the translation for this language
                $translation = $cms->translate($lang['lang_code']) ?? null;
                @endphp

                <!-- Banner Heading -->
                <div class="mb-3 col-md-4">
                    <label class="form-label" for="banner_heading_{{ $lang['lang_code'] }}">{{ $lang['lang_name'] }}
                        {{ translate('Banner Heading') }}</label>
                    <input class="form-control" id="banner_heading_{{ $lang['lang_code'] }}"
                        name="{{ $lang['lang_code'] }}[banner_heading]" type="text"
                        placeholder="{{ translate('Banner heading') }}"
                        value="{{ $translation ? $translation->banner_heading : '' }}">
                </div>

                <!-- Banner Title -->
                <div class="mb-3 col-md-4">
                    <label class="form-label" for="banner_title_{{ $lang['lang_code'] }}">{{ $lang['lang_name'] }}
                        {{ translate('Banner Title') }}</label>
                    <input class="form-control" id="banner_title_{{ $lang['lang_code'] }}"
                        name="{{ $lang['lang_code'] }}[banner_title]" type="text"
                        placeholder="{{ translate('Banner title') }}"
                        value="{{ $translation ? $translation->banner_title : '' }}">
                </div>

                <!-- Button Text -->
                <div class="mb-3 col-md-4">
                    <label class="form-label" for="button_text_{{ $lang['lang_code'] }}">{{ $lang['lang_name'] }}
                        {{ translate('Button Text') }}</label>
                    <input class="form-control" id="button_text_{{ $lang['lang_code'] }}"
                        name="{{ $lang['lang_code'] }}[button_text]" type="text"
                        placeholder="{{ translate('Button Text') }}"
                        value="{{ $translation ? $translation->button_text : '' }}">
                </div>
                @endforeach
            </div>
        </div>
    </div>


    <!-- contact form section -->
    <div class="card">
        <div class="card-header">
            <strong>{{ __('Contact Form Section') }}</strong>
        </div>
        <div class="card-body">
            <div class="row">
                @foreach ($languages as $lang)
                @php
                // Attempt to retrieve the translation for this language
                $translation = $cms->translate($lang->lang_code) ?? null;
                @endphp

                <!-- Contact Title 1 -->
                <div class="mb-3 col-md-4">
                    <label class="form-label" for="contact_title_1_{{ $lang->lang_code }}">{{ __('Contact Title 1') }}
                        ({{ $lang->lang_name }})
                    </label>
                    <input class="form-control" id="contact_title_1_{{ $lang->lang_code }}"
                        name="contact_title_1[{{ $lang->lang_code }}]" type="text"
                        placeholder="{{ __('Contact Title 1') }}"
                        value="{{ $translation ? $translation->contact_title_1 : '' }}">
                </div>

                <!-- Contact Title 2 -->
                <div class="mb-3 col-md-4">
                    <label class="form-label" for="contact_title_2_{{ $lang->lang_code }}">{{ __('Contact Title 2') }}
                        ({{ $lang->lang_name }})</label>
                    <input class="form-control" id="contact_title_2_{{ $lang->lang_code }}"
                        name="contact_title_2[{{ $lang->lang_code }}]" type="text"
                        placeholder="{{ __('Contact Title 2') }}"
                        value="{{ $translation ? $translation->contact_title_2 : '' }}">
                </div>
                @endforeach
            </div>
        </div>
    </div>

    <!-- Our App section -->
    <div class="card">
        <div class="card-header">
            <strong>{{ __('Our App Section') }}</strong>
        </div>
        <div class="card-body">

            <div class="row">
                <div class="mb-3 col-md-4">
                    <label class="form-label" for="our_app_image_1">{{ __('Our App Image 1') }}
                        <span class="text-danger">*</span>
                    </label>
                    (<span class="text-danger">200px * 200px</span>)
                    <input class="form-control" id="our_app_image_1" type="file" name="our_app_image_1"
                        accept=".png, .jpg, .jpeg">
                    @if (!empty($cms->our_app_image_1))
                    <div class="mt-2">
                        <a href="{{ $cms->our_app_image_1 }}" target="_blank">
                            <img src="{{ $cms->our_app_image_1 }}" style="height:75px">
                        </a>
                    </div>
                    @endif
                </div>
                <div class="mb-3 col-md-4">
                    <label class="form-label" for="our_app_image_2">{{ __('Our App Image 2') }}
                        <span class="text-danger">*</span>
                    </label>
                    (<span class="text-danger">200px * 200px</span>)
                    <input class="form-control" id="our_app_image_2" type="file" name="our_app_image_2"
                        accept=".png, .jpg, .jpeg">
                    @if (!empty($cms->our_app_image_2))
                    <div class="mt-2">
                        <a href="{{ $cms->our_app_image_2 }}" target="_blank">
                            <img src="{{ $cms->our_app_image_2 }}" style="height:75px">
                        </a>
                    </div>
                    @endif
                </div>
                <div class="mb-3 col-md-4">
                    <label class="form-label" for="our_app_image_3">{{ __('Our App Image 3') }}
                        <span class="text-danger">*</span>
                    </label>
                    (<span class="text-danger">200px * 200px</span>)
                    <input class="form-control" id="our_app_image_3" type="file" name="our_app_image_3"
                        accept=".png, .jpg, .jpeg">
                    @if (!empty($cms->our_app_image_3))
                    <div class="mt-2">
                        <a href="{{ $cms->our_app_image_3 }}" target="_blank">
                            <img src="{{ $cms->our_app_image_3 }}" style="height:75px">
                        </a>
                    </div>
                    @endif
                </div>
            </div>

            <div class="row">
                @foreach ($languages as $lang)
                @php
                $translation = $cms->translate($lang->lang_code) ?? null;
                @endphp
                <div class="mb-3 col-md-4">
                    <label class="form-label" for="our_app_heading_{{ $lang->lang_code }}">{{ __('Our App Heading') }}
                        ({{ $lang->lang_name }})
                    </label>
                    <input class="form-control" id="our_app_heading_{{ $lang->lang_code }}"
                        name="{{ $lang->lang_code }}[our_app_heading]" type="text"
                        placeholder="{{ __('Our App Heading') }}"
                        value="{{ $translation ? $translation->our_app_heading : '' }}">
                </div>
                @endforeach
            </div>
            <div class="row">
                @foreach ($languages as $lang)
                @php
                $translation = $cms->translate($lang->lang_code) ?? null;
                @endphp
                <div class="mb-3 col-md-4">
                    <label class="form-label" for="our_app_title_{{ $lang->lang_code }}">{{ __('Our App Title') }}
                        ({{ $lang->lang_name }})
                    </label>
                    <input class="form-control" id="our_app_title_{{ $lang->lang_code }}"
                        name="{{ $lang->lang_code }}[our_app_title]" type="text" placeholder="{{ __('Our App Title') }}"
                        value="{{ $translation ? $translation->our_app_title : '' }}">
                </div>
                @endforeach
            </div>

            <div class="row">
                @foreach ($languages as $lang)
                @php
                $translation = $cms->translate($lang->lang_code) ?? null;
                @endphp
                <div class="mb-3 col-md-4">
                    <label class="form-label" for="our_app_description_{{ $lang->lang_code }}">{{ __('Our App
                        Description') }}
                        ({{ $lang->lang_name }})
                    </label>
                    <input class="form-control" id="our_app_description_{{ $lang->lang_code }}"
                        name="{{ $lang->lang_code }}[our_app_description]" type="text"
                        placeholder="{{ __('Our App Description') }}"
                        value="{{ $translation ? $translation->our_app_description : '' }}">
                </div>
                @endforeach
            </div>
        </div>
    </div>


    <!-- SEO details -->
    <div class="card mb-3">
        <div class="card-header">
            <strong>{{ __('SEO Deatils') }}</strong>
        </div>
        <div class="card-body">
            <div class="row g-2">
                <div class="mb-3 col-md-12">
                    <label class="form-label" for="meta_title">{{ __('Meta title') }}</label>
                    <input class="form-control" id="meta_title" name="meta_title" type="text"
                        placeholder="{{ __('Meta title') }}" aria-label="{{ __('Meta title') }}"
                        value="{{ $cms->meta_title }}" disabled>
                </div>
                <div class="mb-3 col-md-12">
                    <label class="form-label" for="meta_description">{{ __('Meta description') }}</label>
                    <textarea class="form-control" id="meta_description" name="meta_description" type="text"
                        placeholder="{{ __('Meta description') }}">{{ $cms->meta_description }}</textarea>
                </div>
            </div>
        </div>
    </div>
    @endif


    <!-- ------------------------------------------------------- -->

    <!-- BLOG PAGE -->
    @if (in_array($cms->id, [4]))
    <div>
        <h5><strong>{{ __('Blog Details') }}</strong></h5>
    </div>
    <br>

    <!-- Banner Image Field -->
    <div class="card mb-3">
        <div class="card-header">
            <strong>{{ __('Banner Section') }}</strong>
        </div>
        <div class="card-body">
            <div class="row g-2">
                <div class="mb-3 col-md-6">
                    <label class="form-label" for="banner_image">{{ __('Banner Image') }}
                        <span class="text-danger">*</span>
                    </label>
                    (<span class="text-danger">200px * 200px</span>)
                    <input class="form-control" id="banner_image" type="file" name="banner_image"
                        accept=".png, .jpg, .jpeg">
                    @if (!empty($cms->banner_image))
                    <div class="mt-2">
                        <img src="{{ $cms->banner_image }}" style="height:75px">
                    </div>
                    @endif

                </div>
            </div>
        </div>
    </div>

    <!-- Banner title, heading & description -->
    <div class="card">
        <div class="card-body">
            <div class="row">
                @php
                $languages = getlanguages();
                @endphp

                @foreach ($languages as $lang)
                @php
                // Attempt to retrieve the translation for this language
                $translation = $cms->translate($lang['lang_code']) ?? null;
                @endphp

                <!-- Banner Heading -->
                <div class="mb-3 col-md-4">
                    <label class="form-label" for="banner_heading_{{ $lang['lang_code'] }}">{{ $lang['lang_name'] }}
                        {{ translate('Banner Heading') }}</label>
                    <input class="form-control" id="banner_heading_{{ $lang['lang_code'] }}"
                        name="{{ $lang['lang_code'] }}[banner_heading]" type="text"
                        placeholder="{{ translate('Banner heading') }}"
                        value="{{ $translation ? $translation->banner_heading : '' }}">
                </div>

                <!-- Banner Title -->
                <div class="mb-3 col-md-4">
                    <label class="form-label" for="banner_title_{{ $lang['lang_code'] }}">{{ $lang['lang_name'] }}
                        {{ translate('Banner Title') }}</label>
                    <input class="form-control" id="banner_title_{{ $lang['lang_code'] }}"
                        name="{{ $lang['lang_code'] }}[banner_title]" type="text"
                        placeholder="{{ translate('Banner title') }}"
                        value="{{ $translation ? $translation->banner_title : '' }}">
                </div>

                <!-- Button Text -->
                <div class="mb-3 col-md-4">
                    <label class="form-label" for="button_text_{{ $lang['lang_code'] }}">{{ $lang['lang_name'] }}
                        {{ translate('Button Text') }}</label>
                    <input class="form-control" id="button_text_{{ $lang['lang_code'] }}"
                        name="{{ $lang['lang_code'] }}[button_text]" type="text"
                        placeholder="{{ translate('Button Text') }}"
                        value="{{ $translation ? $translation->button_text : '' }}">
                </div>
                @endforeach
            </div>
        </div>
    </div>

    <!-- Title Fields -->
    <div class="card mb-3">
        <div class="card-header">
            <strong>{{ __('Title Section') }}</strong>
        </div>
        <div class="card-body">
            <div class="row g-2">
                @foreach ($languages as $lang)
                @php
                // Attempt to retrieve the translation for this language
                $translation = $cms->translate($lang['lang_code']) ?? null;
                @endphp

                <!-- Title Field -->
                <div class="col-md-4">
                    <div class="mb-3">
                        <label class="form-label" for="title_field_{{ $lang['lang_code'] }}">
                            {{ __('Title Field') }} ({{ $lang['lang_name'] }})
                        </label>
                        <input class="form-control" id="title_field_{{ $lang['lang_code'] }}"
                            name="{{ $lang['lang_code'] }}[title_field]" type="text"
                            placeholder="{{ __('Enter Title 1') }}"
                            value="{{ $translation ? $translation->title_field : '' }}">
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>



    <!-- SEO details -->
    <div class="card mb-3">
        <div class="card-header">
            <strong>{{ __('SEO Deatils') }}</strong>
        </div>
        <div class="card-body">
            <div class="row g-2">
                <div class="mb-3 col-md-12">
                    <label class="form-label" for="meta_title">{{ __('Meta title') }}</label>
                    <input class="form-control" id="meta_title" name="meta_title" type="text"
                        placeholder="{{ __('Meta title') }}" aria-label="{{ __('Meta title') }}"
                        value="{{ $cms->meta_title }}" disabled>
                </div>
                <div class="mb-3 col-md-12">
                    <label class="form-label" for="meta_description">{{ __('Meta description') }}</label>
                    <textarea class="form-control" id="meta_description" name="meta_description" type="text"
                        placeholder="{{ __('Meta description') }}">{{ $cms->meta_description }}</textarea>
                </div>
            </div>
        </div>
    </div>
    @endif


    <!-- ------------------------------------------------------- -->

    <!-- EARN WITH US PAGE -->
    @if (in_array($cms->id, [5]))
    <div>
        <h5><strong>{{ __('Blog Details') }}</strong></h5>
    </div>
    <br>

    <!-- Banner Image Field -->
    <div class="card mb-3">
        <div class="card-header">
            <strong>{{ __('Banner Section') }}</strong>
        </div>
        <div class="card-body">
            <div class="row g-2">
                <div class="mb-3 col-md-6">
                    <label class="form-label" for="banner_image">{{ __('Banner Image') }}
                        <span class="text-danger">*</span>
                    </label>
                    (<span class="text-danger">200px * 200px</span>)
                    <input class="form-control" id="banner_image" type="file" name="banner_image"
                        accept=".png, .jpg, .jpeg">
                    @if (!empty($cms->banner_image))
                    <div class="mt-2">
                        <img src="{{ $cms->banner_image }}" style="height:75px">
                    </div>
                    @endif

                </div>
            </div>
        </div>
    </div>

    <!-- Banner title, heading & description -->
    <div class="card">
        <div class="card-body">
            <div class="row">
                @php
                $languages = getlanguages();
                @endphp

                @foreach ($languages as $lang)
                @php
                // Attempt to retrieve the translation for this language
                $translation = $cms->translate($lang['lang_code']) ?? null;
                @endphp

                <!-- Banner Heading -->
                <div class="mb-3 col-md-4">
                    <label class="form-label" for="banner_heading_{{ $lang['lang_code'] }}">{{ $lang['lang_name'] }}
                        {{ translate('Banner Heading') }}</label>
                    <input class="form-control" id="banner_heading_{{ $lang['lang_code'] }}"
                        name="{{ $lang['lang_code'] }}[banner_heading]" type="text"
                        placeholder="{{ translate('Banner heading') }}"
                        value="{{ $translation ? $translation->banner_heading : '' }}">
                </div>

                <!-- Banner Title -->
                <div class="mb-3 col-md-4">
                    <label class="form-label" for="banner_title_{{ $lang['lang_code'] }}">{{ $lang['lang_name'] }}
                        {{ translate('Banner Title') }}</label>
                    <input class="form-control" id="banner_title_{{ $lang['lang_code'] }}"
                        name="{{ $lang['lang_code'] }}[banner_title]" type="text"
                        placeholder="{{ translate('Banner title') }}"
                        value="{{ $translation ? $translation->banner_title : '' }}">
                </div>

                <!-- Button Text -->
                <div class="mb-3 col-md-4">
                    <label class="form-label" for="button_text_{{ $lang['lang_code'] }}">{{ $lang['lang_name'] }}
                        {{ translate('Button Text') }}</label>
                    <input class="form-control" id="button_text_{{ $lang['lang_code'] }}"
                        name="{{ $lang['lang_code'] }}[button_text]" type="text"
                        placeholder="{{ translate('Button Text') }}"
                        value="{{ $translation ? $translation->button_text : '' }}">
                </div>
                @endforeach
            </div>
        </div>
    </div>

    <!-- Cab section -->
    <div class="card mb-3">
        <div class="card-header">
            <strong>{{ __('Cab Section') }}</strong>
        </div>
        <div class="card-body">
            <div class="row g-2">
                <div class="col-md-4">
                    <div class="mb-3">
                        <label class="form-label" for="cab_images">{{ __('Cab Image') }} <span
                                class="text-danger">*</span></label>
                        (<span class="text-danger">200px * 200px</span>)
                        <input class="form-control" id="cab_images" type="file" name="cab_images"
                            accept=".png, .jpg, .jpeg">
                        @if (!empty($cms->cab_images))
                        <div class="mt-2">
                            <a href="{{ $cms->cab_images }}" target="_blank">
                                <img src="{{ $cms->cab_images }}" style="height:75px">
                            </a>
                        </div>
                        @endif

                    </div>
                </div>
                <div class="col-md-4">
                    <div class="mb-3">
                        <label class="form-label" for="cab_images_2">{{ __('Cab Image 2') }} <span
                                class="text-danger">*</span></label>
                        (<span class="text-danger">200px * 200px</span>)
                        <input class="form-control" id="cab_images_2" type="file" name="cab_images_2"
                            accept=".png, .jpg, .jpeg">
                        @if (!empty($cms->cab_images_2))
                        <div class="mt-2">
                            <a href="{{ $cms->cab_images_2 }}" target="_blank">
                                <img src="{{ $cms->cab_images_2 }}" style="height:75px">
                            </a>
                        </div>
                        @endif

                    </div>
                </div>
                <div class="col-md-4">
                    <div class="mb-3">
                        <label class="form-label" for="cab_images_3">{{ __('Cab Image 3') }} <span
                                class="text-danger">*</span></label>
                        (<span class="text-danger">200px * 200px</span>)
                        <input class="form-control" id="cab_images_3" type="file" name="cab_images_3"
                            accept=".png, .jpg, .jpeg">
                        @if (!empty($cms->cab_images_3))
                        <div class="mt-2">
                            <a href="{{ $cms->cab_images_3 }}" target="_blank">
                                <img src="{{ $cms->cab_images_3 }}" style="height:75px">
                            </a>
                        </div>
                        @endif

                    </div>
                </div>
                <div class="row">
                    @foreach ($languages as $lang)
                    @php
                    $translation = $cms->translate($lang->lang_code) ?? null;
                    @endphp
                    <div class="col-md-4">
                        <div class="mb-3">
                            <label class="form-label" for="cab_title">{{ __('Cab Title') }}
                                ({{ $lang->lang_name }})
                            </label>
                            <input class="form-control" id="cab_title" name="{{ $lang->lang_code }}[cab_title]"
                                type="text" placeholder="{{ __('Cab Title') }}"
                                value="{{ $translation ? $translation->cab_title : '' }}">
                        </div>
                    </div>
                    @endforeach
                </div>

                @foreach ($languages as $lang)
                @php
                $translation = $cms->translate($lang->lang_code) ?? null;
                @endphp
                <div class="col-md-4">
                    <div class="mb-3">
                        <label class="form-label" for="cab_description">{{ __('Cab Description') }}
                            ({{ $lang->lang_name }})
                        </label>
                        <textarea class="form-control" id="cab_description"
                            name="{{ $lang->lang_code }}[cab_description]" placeholder="{{ __('Cab Description') }}"
                            rows="4">{{ $translation ? $translation->cab_description : '' }}</textarea>
                    </div>
                </div>

                @endforeach

                @foreach ($languages as $lang)
                @php
                $translation = $cms->translate($lang->lang_code) ?? null;
                @endphp
                <div class="col-md-4">
                    <div class="mb-3">
                        <label class="form-label" for="button_text_2">{{ __('Button Text 2') }}
                            ({{ $lang->lang_name }})
                        </label>
                        <input class="form-control" id="button_text_2" name="{{ $lang->lang_code }}[button_text_2]"
                            type="text" placeholder="{{ __('Button Text 2') }}"
                            value="{{ $translation ? $translation->button_text_2 : '' }}">
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>

    <!-- Driver Section -->
    <div class="card mb-3">
        <div class="card-header">
            <strong>{{ __('Driver Section') }}</strong>
        </div>
        <div class="card-body">
            <div class="row g-5">
                @foreach ($languages as $lang)
                @php
                // Attempt to retrieve the translation for this language
                $translation = $cms->translate($lang->lang_code) ?? null;
                @endphp
                <!-- Title for the section -->
                <div class="mb-3 col-md-4">
                    <label class="form-label" for="driver_heading_{{ $lang->lang_code }}">{{ __('Driver Heading') }}
                        ({{ $lang->lang_name }})
                    </label>
                    <input class="form-control" id="driver_heading_{{ $lang->lang_code }}"
                        name="driver_heading[{{ $lang->lang_code }}]" type="text"
                        placeholder="{{ __('Driver Heading') }}"
                        value="{{ $translation ? $translation->driver_heading : '' }}">
                </div>
                @endforeach
            </div>

            @foreach (range(1, 6) as $index)
            <div class="row g-2">
                @foreach ($languages as $lang)
                @php
                // Attempt to retrieve the translation for this language
                $translation = $cms->translate($lang->lang_code) ?? null;
                @endphp
                <!-- Heading Section -->
                <div class="mb-3 col-md-6">
                    <label class="form-label" for="driver_title_{{ $index }}_{{ $lang->lang_code }}">{{ __(
                        'Driver Title ' .
                        $index,
                        ) }}
                        ({{ $lang->lang_name }})
                    </label>
                    <input class="form-control" id="driver_title_{{ $index }}_{{ $lang->lang_code }}"
                        name="driver_title_{{ $index }}[{{ $lang->lang_code }}]" type="text"
                        placeholder="{{ __('Driver Title ' . $index) }}"
                        value="{{ $translation ? $translation->{'driver_title_' . $index} : '' }}">
                </div>

                <!-- Description Section -->
                <div class="col-md-6">
                    <div class="mb-4">
                        <label class="form-label" for="driver_description_{{ $index }}_{{ $lang->lang_code }}">{{
                            __('Driver Description ' . $index) }}
                            ({{ $lang->lang_name }})</label>
                        <textarea class="form-control" id="driver_description_{{ $index }}_{{ $lang->lang_code }}"
                            placeholder="{{ __('Driver Description ' . $index) }}"
                            name="driver_description_{{ $index }}[{{ $lang->lang_code }}]">{{ $translation ? $translation->{'driver_description_' . $index} : '' }}</textarea>
                    </div>
                </div>
                @endforeach
            </div>
            @endforeach
        </div>
    </div>


    <!-- Our App section -->
    <div class="card">
        <div class="card-header">
            <strong>{{ __('Our App Section') }}</strong>
        </div>
        <div class="card-body">

            <div class="row">
                <div class="mb-3 col-md-4">
                    <label class="form-label" for="our_app_image_1">{{ __('Our App Image 1') }}
                        <span class="text-danger">*</span>
                    </label>
                    (<span class="text-danger">200px * 200px</span>)
                    <input class="form-control" id="our_app_image_1" type="file" name="our_app_image_1"
                        accept=".png, .jpg, .jpeg">
                    @if (!empty($cms->our_app_image_1))
                    <div class="mt-2">
                        <a href="{{ $cms->our_app_image_1 }}" target="_blank">
                            <img src="{{ $cms->our_app_image_1 }}" style="height:75px">
                        </a>
                    </div>
                    @endif
                </div>
                <div class="mb-3 col-md-4">
                    <label class="form-label" for="our_app_image_2">{{ __('Our App Image 2') }}
                        <span class="text-danger">*</span>
                    </label>
                    (<span class="text-danger">200px * 200px</span>)
                    <input class="form-control" id="our_app_image_2" type="file" name="our_app_image_2"
                        accept=".png, .jpg, .jpeg">
                    @if (!empty($cms->our_app_image_2))
                    <div class="mt-2">
                        <a href="{{ $cms->our_app_image_2 }}" target="_blank">
                            <img src="{{ $cms->our_app_image_2 }}" style="height:75px">
                        </a>
                    </div>
                    @endif
                </div>
                <div class="mb-3 col-md-4">
                    <label class="form-label" for="our_app_image_3">{{ __('Our App Image 3') }}
                        <span class="text-danger">*</span>
                    </label>
                    (<span class="text-danger">200px * 200px</span>)
                    <input class="form-control" id="our_app_image_3" type="file" name="our_app_image_3"
                        accept=".png, .jpg, .jpeg">
                    @if (!empty($cms->our_app_image_3))
                    <div class="mt-2">
                        <a href="{{ $cms->our_app_image_3 }}" target="_blank">
                            <img src="{{ $cms->our_app_image_3 }}" style="height:75px">
                        </a>
                    </div>
                    @endif
                </div>
            </div>

            <div class="row">
                @foreach ($languages as $lang)
                @php
                $translation = $cms->translate($lang->lang_code) ?? null;
                @endphp
                <div class="mb-3 col-md-4">
                    <label class="form-label" for="our_app_heading_{{ $lang->lang_code }}">{{ __('Our App Heading') }}
                        ({{ $lang->lang_name }})
                    </label>
                    <input class="form-control" id="our_app_heading_{{ $lang->lang_code }}"
                        name="{{ $lang->lang_code }}[our_app_heading]" type="text"
                        placeholder="{{ __('Our App Heading') }}"
                        value="{{ $translation ? $translation->our_app_heading : '' }}">
                </div>
                @endforeach
            </div>
            <div class="row">
                @foreach ($languages as $lang)
                @php
                $translation = $cms->translate($lang->lang_code) ?? null;
                @endphp
                <div class="mb-3 col-md-4">
                    <label class="form-label" for="our_app_title_{{ $lang->lang_code }}">{{ __('Our App Title') }}
                        ({{ $lang->lang_name }})
                    </label>
                    <input class="form-control" id="our_app_title_{{ $lang->lang_code }}"
                        name="{{ $lang->lang_code }}[our_app_title]" type="text" placeholder="{{ __('Our App Title') }}"
                        value="{{ $translation ? $translation->our_app_title : '' }}">
                </div>
                @endforeach
            </div>

            <div class="row">
                @foreach ($languages as $lang)
                @php
                $translation = $cms->translate($lang->lang_code) ?? null;
                @endphp
                <div class="mb-3 col-md-4">
                    <label class="form-label" for="our_app_description_{{ $lang->lang_code }}">{{ __('Our App
                        Description') }}
                        ({{ $lang->lang_name }})
                    </label>
                    <input class="form-control" id="our_app_description_{{ $lang->lang_code }}"
                        name="{{ $lang->lang_code }}[our_app_description]" type="text"
                        placeholder="{{ __('Our App Description') }}"
                        value="{{ $translation ? $translation->our_app_description : '' }}">
                </div>
                @endforeach
            </div>
        </div>
    </div>



    <!-- SEO details -->
    <div class="card mb-3">
        <div class="card-header">
            <strong>{{ __('SEO Deatils') }}</strong>
        </div>
        <div class="card-body">
            <div class="row g-2">
                <div class="mb-3 col-md-12">
                    <label class="form-label" for="meta_title">{{ __('Meta title') }}</label>
                    <input class="form-control" id="meta_title" name="meta_title" type="text"
                        placeholder="{{ __('Meta title') }}" aria-label="{{ __('Meta title') }}"
                        value="{{ $cms->meta_title }}" disabled>
                </div>
                <div class="mb-3 col-md-12">
                    <label class="form-label" for="meta_description">{{ __('Meta description') }}</label>
                    <textarea class="form-control" id="meta_description" name="meta_description" type="text"
                        placeholder="{{ __('Meta description') }}">{{ $cms->meta_description }}</textarea>
                </div>
            </div>
        </div>
    </div>
    @endif


    <!-- ------------------------------------------------------- -->

    <!-- Privacy Policy -->
    @if (in_array($cms->id, [6]))
    <div>
        <h5><strong>{{ __('Privacy Policy') }}</strong></h5>
    </div>
    <br>

    <!-- Banner Image Field -->
    <div class="card mb-3">
        <div class="card-header">
            <strong>{{ __('Banner Section') }}</strong>
        </div>
        <div class="card-body">
            <div class="row g-2">
                <div class="mb-3 col-md-6">
                    <label class="form-label" for="banner_image">{{ __('Banner Image') }}
                        <span class="text-danger">*</span>
                    </label>
                    (<span class="text-danger">200px * 200px</span>)
                    <input class="form-control" id="banner_image" type="file" name="banner_image"
                        accept=".png, .jpg, .jpeg">
                    @if (!empty($cms->banner_image))
                    <div class="mt-2">
                        <img src="{{ $cms->banner_image }}" style="height:75px">
                    </div>
                    @endif

                </div>
            </div>
        </div>
    </div>

    <!-- Banner title, heading & description -->
    <div class="card">
        <div class="card-body">
            <!-- Loop through the languages -->
            @php
            $languages = getlanguages();
            @endphp

            <!-- Banner Heading -->
            <div class="row">
                @foreach ($languages as $lang)
                @php
                // Attempt to retrieve the translation for this language
                $translation = $cms->translate($lang['lang_code']) ?? null;
                @endphp

                <div class="mb-3 col-md-4">
                    <label class="form-label" for="banner_heading_{{ $lang['lang_code'] }}">{{ $lang['lang_name'] }}
                        {{ translate('Banner Heading') }}</label>
                    <input class="form-control" id="banner_heading_{{ $lang['lang_code'] }}"
                        name="{{ $lang['lang_code'] }}[banner_heading]" type="text"
                        placeholder="{{ translate('Banner heading') }}"
                        value="{{ $translation ? $translation->banner_heading : '' }}">
                </div>
                @endforeach
            </div>
        </div>
    </div>

    <!-- description Fields -->
    <div class="card mb-3">
        <div class="card-header">
            <strong>{{ __('Description Section') }}</strong>
        </div>
        <div class="card-body">
            <div class="row g-5">
                @foreach ($languages as $lang)
                @php
                // Attempt to retrieve the translation for this language
                $translation = $cms->translate($lang->lang_code) ?? null;
                @endphp
                <div class="col-md-12">
                    <div class="mb-4">
                        <label class="form-label" for="description_{{ $lang->lang_code }}">{{ __('Description') }}
                            ({{ $lang->lang_name }})
                        </label>
                        <textarea class="form-control" id="description_{{ $lang->lang_code }}"
                            name="description[{{ $lang->lang_code }}]" placeholder="{{ __('Description') }}">
                                                                                                                                                                                                                    {{ $translation ? $translation->description : '' }}
                                                                                                                                                                                                                </textarea>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>

    <!-- SEO details -->
    <div class="card mb-3">
        <div class="card-header">
            <strong>{{ __('SEO Deatils') }}</strong>
        </div>
        <div class="card-body">
            <div class="row g-2">
                <div class="mb-3 col-md-12">
                    <label class="form-label" for="meta_title">{{ __('Meta title') }}</label>
                    <input class="form-control" id="meta_title" name="meta_title" type="text"
                        placeholder="{{ __('Meta title') }}" aria-label="{{ __('Meta title') }}"
                        value="{{ $cms->meta_title }}" disabled>
                </div>
                <div class="mb-3 col-md-12">
                    <label class="form-label" for="meta_description">{{ __('Meta description') }}</label>
                    <textarea class="form-control" id="meta_description" name="meta_description" type="text"
                        placeholder="{{ __('Meta description') }}">{{ $cms->meta_description }}</textarea>
                </div>
            </div>
        </div>
    </div>
    @endif



    <!-- ------------------------------------------------------- -->

    <!-- Terms of Use -->
    @if (in_array($cms->id, [7]))
    <div>
        <h5><strong>{{ __('Terms Of Use') }}</strong></h5>
    </div>
    <br>

    <!-- Banner Image Field -->
    <div class="card mb-3">
        <div class="card-header">
            <strong>{{ __('Banner Section') }}</strong>
        </div>
        <div class="card-body">
            <div class="row g-2">
                <div class="mb-3 col-md-6">
                    <label class="form-label" for="banner_image">{{ __('Banner Image') }}
                        <span class="text-danger">*</span>
                    </label>
                    (<span class="text-danger">200px * 200px</span>)
                    <input class="form-control" id="banner_image" type="file" name="banner_image"
                        accept=".png, .jpg, .jpeg">
                    @if (!empty($cms->banner_image))
                    <div class="mt-2">
                        <img src="{{ $cms->banner_image }}" style="height:75px">
                    </div>
                    @endif

                </div>
            </div>
        </div>
    </div>

    <!-- Banner title, heading & description -->
    <div class="card">
        <div class="card-body">
            <!-- Loop through the languages -->
            @php
            $languages = getlanguages();
            @endphp

            <!-- Banner Heading -->
            <div class="row">
                @foreach ($languages as $lang)
                @php
                // Attempt to retrieve the translation for this language
                $translation = $cms->translate($lang['lang_code']) ?? null;
                @endphp

                <div class="mb-3 col-md-4">
                    <label class="form-label" for="banner_heading_{{ $lang['lang_code'] }}">{{ $lang['lang_name'] }}
                        {{ translate('Banner Heading') }}</label>
                    <input class="form-control" id="banner_heading_{{ $lang['lang_code'] }}"
                        name="{{ $lang['lang_code'] }}[banner_heading]" type="text"
                        placeholder="{{ translate('Banner heading') }}"
                        value="{{ $translation ? $translation->banner_heading : '' }}">
                </div>
                @endforeach
            </div>
        </div>
    </div>

    <!-- description Fields -->
    <div class="card mb-3">
        <div class="card-header">
            <strong>{{ __('Description Section') }}</strong>
        </div>
        <div class="card-body">
            <div class="row g-5">
                @foreach ($languages as $lang)
                @php
                // Attempt to retrieve the translation for this language
                $translation = $cms->translate($lang->lang_code) ?? null;
                @endphp
                <div class="col-md-12">
                    <div class="mb-4">
                        <label class="form-label" for="description_{{ $lang->lang_code }}">{{ __('Description') }}
                            ({{ $lang->lang_name }})
                        </label>
                        <textarea class="form-control" id="description_{{ $lang->lang_code }}"
                            name="description[{{ $lang->lang_code }}]" placeholder="{{ __('Description') }}">
                            {{ $translation ? $translation->description : '' }}
                        </textarea>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>

    <!-- SEO details -->
    <div class="card mb-3">
        <div class="card-header">
            <strong>{{ __('SEO Deatils') }}</strong>
        </div>
        <div class="card-body">
            <div class="row g-2">
                <div class="mb-3 col-md-12">
                    <label class="form-label" for="meta_title">{{ __('Meta title') }}</label>
                    <input class="form-control" id="meta_title" name="meta_title" type="text"
                        placeholder="{{ __('Meta title') }}" aria-label="{{ __('Meta title') }}"
                        value="{{ $cms->meta_title }}" disabled>
                </div>
                <div class="mb-3 col-md-12">
                    <label class="form-label" for="meta_description">{{ __('Meta description') }}</label>
                    <textarea class="form-control" id="meta_description" name="meta_description" type="text"
                        placeholder="{{ __('Meta description') }}">{{ $cms->meta_description }}</textarea>
                </div>
            </div>
        </div>
    </div>
    @endif


    <!-- ------------------------------------------------------- -->

    <!-- Legal Documents -->
    @if (in_array($cms->id, [8]))
    <div>
        <h5><strong>{{ __('Legal Documents') }}</strong></h5>
    </div>
    <br>

    <!-- Banner Image Field -->
    <div class="card mb-3">
        <div class="card-header">
            <strong>{{ __('Banner Section') }}</strong>
        </div>
        <div class="card-body">
            <div class="row g-2">
                <div class="mb-3 col-md-6">
                    <label class="form-label" for="banner_image">{{ __('Banner Image') }}
                        <span class="text-danger">*</span>
                    </label>
                    (<span class="text-danger">200px * 200px</span>)
                    <input class="form-control" id="banner_image" type="file" name="banner_image"
                        accept=".png, .jpg, .jpeg">
                    @if (!empty($cms->banner_image))
                    <div class="mt-2">
                        <img src="{{ $cms->banner_image }}" style="height:75px">
                    </div>
                    @endif

                </div>
            </div>
        </div>
    </div>

    <!-- Banner title, heading & description -->
    <div class="card">
        <div class="card-body">
            <!-- Loop through the languages -->
            @php
            $languages = getlanguages();
            @endphp

            <!-- Banner Heading -->
            <div class="row">
                @foreach ($languages as $lang)
                @php
                // Attempt to retrieve the translation for this language
                $translation = $cms->translate($lang['lang_code']) ?? null;
                @endphp

                <div class="mb-3 col-md-4">
                    <label class="form-label" for="banner_heading_{{ $lang['lang_code'] }}">{{ $lang['lang_name'] }}
                        {{ translate('Banner Heading') }}</label>
                    <input class="form-control" id="banner_heading_{{ $lang['lang_code'] }}"
                        name="{{ $lang['lang_code'] }}[banner_heading]" type="text"
                        placeholder="{{ translate('Banner heading') }}"
                        value="{{ $translation ? $translation->banner_heading : '' }}">
                </div>
                @endforeach
            </div>
        </div>
    </div>

    <!-- description Fields -->
    <div class="card mb-3">
        <div class="card-header">
            <strong>{{ __('Description Section') }}</strong>
        </div>
        <div class="card-body">
            <div class="row g-5">
                @foreach ($languages as $lang)
                @php
                // Attempt to retrieve the translation for this language
                $translation = $cms->translate($lang->lang_code) ?? null;
                @endphp
                <div class="col-md-12">
                    <div class="mb-4">
                        <label class="form-label" for="description_{{ $lang->lang_code }}">{{ __('Description') }}
                            ({{ $lang->lang_name }})
                        </label>
                        <textarea class="form-control" id="description_{{ $lang->lang_code }}"
                            name="description[{{ $lang->lang_code }}]" placeholder="{{ __('Description') }}">
                            {{ $translation ? $translation->description : '' }}
                        </textarea>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>

    <!-- SEO details -->
    <div class="card mb-3">
        <div class="card-header">
            <strong>{{ __('SEO Deatils') }}</strong>
        </div>
        <div class="card-body">
            <div class="row g-2">
                <div class="mb-3 col-md-12">
                    <label class="form-label" for="meta_title">{{ __('Meta title') }}</label>
                    <input class="form-control" id="meta_title" name="meta_title" type="text"
                        placeholder="{{ __('Meta title') }}" aria-label="{{ __('Meta title') }}"
                        value="{{ $cms->meta_title }}" disabled>
                </div>
                <div class="mb-3 col-md-12">
                    <label class="form-label" for="meta_description">{{ __('Meta description') }}</label>
                    <textarea class="form-control" id="meta_description" name="meta_description" type="text"
                        placeholder="{{ __('Meta description') }}">{{ $cms->meta_description }}</textarea>
                </div>
            </div>
        </div>
    </div>
    @endif


    <!-- ------------------------------------------------------- -->

    <!-- Legal Documents -->
    @if (in_array($cms->id, [9]))
    <div>
        <h5><strong>{{ __('Service') }}</strong></h5>
    </div>
    <br>

    <!-- Banner Image Field -->
    <div class="card mb-3">
        <div class="card-header">
            <strong>{{ __('Banner Section') }}</strong>
        </div>
        <div class="card-body">
            <div class="row g-2">
                <div class="mb-3 col-md-6">
                    <label class="form-label" for="banner_image">{{ __('Banner Image') }}
                        <span class="text-danger">*</span>
                    </label>
                    (<span class="text-danger">200px * 200px</span>)
                    <input class="form-control" id="banner_image" type="file" name="banner_image"
                        accept=".png, .jpg, .jpeg">
                    @if (!empty($cms->banner_image))
                    <div class="mt-2">
                        <img src="{{ $cms->banner_image }}" style="height:75px">
                    </div>
                    @endif

                </div>
            </div>
        </div>
    </div>

    <!-- Banner title, heading & description -->
    <div class="card">
        <div class="card-body">
            <!-- Loop through the languages -->
            @php
            $languages = getlanguages();
            @endphp

            <!-- Banner Heading -->
            <div class="row">
                @foreach ($languages as $lang)
                @php
                // Attempt to retrieve the translation for this language
                $translation = $cms->translate($lang['lang_code']) ?? null;
                @endphp

                <div class="mb-3 col-md-4">
                    <label class="form-label" for="banner_title_{{ $lang['lang_code'] }}">{{ $lang['lang_name'] }}
                        {{ translate('Banner Title') }}</label>
                    <input class="form-control" id="banner_title_{{ $lang['lang_code'] }}"
                        name="{{ $lang['lang_code'] }}[banner_title]" type="text"
                        placeholder="{{ translate('Banner title') }}"
                        value="{{ $translation ? $translation->banner_title : '' }}">
                </div>
                @endforeach
            </div>
        </div>
    </div>

    <!-- Our app -->
    <div class="card">
        <div class="card-header">
            <strong>{{ __('Our App Section') }}</strong>
        </div>
        <div class="card-body">

            <div class="row">
                <div class="mb-3 col-md-4">
                    <label class="form-label" for="our_app_image_1">{{ __('Our App Image 1') }}
                        <span class="text-danger">*</span>
                    </label>
                    (<span class="text-danger">200px * 200px</span>)
                    <input class="form-control" id="our_app_image_1" type="file" name="our_app_image_1"
                        accept=".png, .jpg, .jpeg">
                    @if (!empty($cms->our_app_image_1))
                    <div class="mt-2">
                        <a href="{{ $cms->our_app_image_1 }}" target="_blank">
                            <img src="{{ $cms->our_app_image_1 }}" style="height:75px">
                        </a>
                    </div>
                    @endif
                </div>
                <div class="mb-3 col-md-4">
                    <label class="form-label" for="our_app_image_2">{{ __('Our App Image 2') }}
                        <span class="text-danger">*</span>
                    </label>
                    (<span class="text-danger">200px * 200px</span>)
                    <input class="form-control" id="our_app_image_2" type="file" name="our_app_image_2"
                        accept=".png, .jpg, .jpeg">
                    @if (!empty($cms->our_app_image_2))
                    <div class="mt-2">
                        <a href="{{ $cms->our_app_image_2 }}" target="_blank">
                            <img src="{{ $cms->our_app_image_2 }}" style="height:75px">
                        </a>
                    </div>
                    @endif
                </div>
                <div class="mb-3 col-md-4">
                    <label class="form-label" for="our_app_image_3">{{ __('Our App Image 3') }}
                        <span class="text-danger">*</span>
                    </label>
                    (<span class="text-danger">200px * 200px</span>)
                    <input class="form-control" id="our_app_image_3" type="file" name="our_app_image_3"
                        accept=".png, .jpg, .jpeg">
                    @if (!empty($cms->our_app_image_3))
                    <div class="mt-2">
                        <a href="{{ $cms->our_app_image_3 }}" target="_blank">
                            <img src="{{ $cms->our_app_image_3 }}" style="height:75px">
                        </a>
                    </div>
                    @endif
                </div>
            </div>

            <div class="row">
                @foreach ($languages as $lang)
                @php
                $translation = $cms->translate($lang->lang_code) ?? null;
                @endphp
                <div class="mb-3 col-md-4">
                    <label class="form-label" for="our_app_heading_{{ $lang->lang_code }}">{{ __('Our App Heading') }}
                        ({{ $lang->lang_name }})
                    </label>
                    <input class="form-control" id="our_app_heading_{{ $lang->lang_code }}"
                        name="{{ $lang->lang_code }}[our_app_heading]" type="text"
                        placeholder="{{ __('Our App Heading') }}"
                        value="{{ $translation ? $translation->our_app_heading : '' }}">
                </div>
                @endforeach
            </div>
            <div class="row">
                @foreach ($languages as $lang)
                @php
                $translation = $cms->translate($lang->lang_code) ?? null;
                @endphp
                <div class="mb-3 col-md-4">
                    <label class="form-label" for="our_app_title_{{ $lang->lang_code }}">{{ __('Our App Title') }}
                        ({{ $lang->lang_name }})
                    </label>
                    <input class="form-control" id="our_app_title_{{ $lang->lang_code }}"
                        name="{{ $lang->lang_code }}[our_app_title]" type="text" placeholder="{{ __('Our App Title') }}"
                        value="{{ $translation ? $translation->our_app_title : '' }}">
                </div>
                @endforeach
            </div>

            <div class="row">
                @foreach ($languages as $lang)
                @php
                $translation = $cms->translate($lang->lang_code) ?? null;
                @endphp
                <div class="mb-3 col-md-4">
                    <label class="form-label" for="our_app_description_{{ $lang->lang_code }}">{{ __('Our App
                        Description') }}
                        ({{ $lang->lang_name }})
                    </label>
                    <input class="form-control" id="our_app_description_{{ $lang->lang_code }}"
                        name="{{ $lang->lang_code }}[our_app_description]" type="text"
                        placeholder="{{ __('Our App Description') }}"
                        value="{{ $translation ? $translation->our_app_description : '' }}">
                </div>
                @endforeach
            </div>
        </div>
    </div>

    <!-- SEO details -->
    <div class="card mb-3">
        <div class="card-header">
            <strong>{{ __('SEO Deatils') }}</strong>
        </div>
        <div class="card-body">
            <div class="row g-2">
                <div class="mb-3 col-md-12">
                    <label class="form-label" for="meta_title">{{ __('Meta title') }}</label>
                    <input class="form-control" id="meta_title" name="meta_title" type="text"
                        placeholder="{{ __('Meta title') }}" aria-label="{{ __('Meta title') }}"
                        value="{{ $cms->meta_title }}" disabled>
                </div>
                <div class="mb-3 col-md-12">
                    <label class="form-label" for="meta_description">{{ __('Meta description') }}</label>
                    <textarea class="form-control" id="meta_description" name="meta_description" type="text"
                        placeholder="{{ __('Meta description') }}">{{ $cms->meta_description }}</textarea>
                </div>
            </div>
        </div>
    </div>
    @endif





    @if (in_array($cms->id, [10]))
    <div>
        <h5><strong>{{ __('Career Details') }}</strong></h5>
    </div>
    <br>

    <!-- Banner Image Field -->
    <div class="card mb-3">
        <div class="card-header">
            <strong>{{ __('Banner Section') }}</strong>
        </div>
        <div class="card-body">
            <div class="row g-2">
                <div class="mb-3 col-md-12">
                    <label class="form-label" for="banner_image">{{ __('Banner Image') }}
                        <span class="text-danger">*</span>
                    </label>
                    (<span class="text-danger">200px * 200px</span>)
                    <input class="form-control" id="banner_image" type="file" name="banner_image"
                        accept=".png, .jpg, .jpeg">
                    @if (!empty($cms->banner_image))
                    <div class="mt-2">
                        <img src="{{ $cms->banner_image }}" style="height:75px">
                    </div>
                    @endif

                </div>
            </div>
        </div>
    </div>

    <!-- Banner title, heading & description -->
    <div class="card">
        <div class="card-body">
            <div class="row">
                @php
                $language = getlanguages();
                @endphp

                @foreach ($language as $lang)
                @php
                // Attempt to retrieve the translation for this language
                $translation = $cms->translate($lang['lang_code']) ?? null;
                @endphp
                <!-- Banner Heading -->
                <div class="mb-3 col-md-4">
                    <label class="form-label" for="banner_heading">{{ $lang['lang_name'] }}
                        {{ translate('Banner Heading') }}</label>
                    <input class="form-control" id="banner_heading" name="{{ $lang['lang_code'] }}[banner_heading]"
                        type="text" placeholder="{{ translate('Banner heading') }}"
                        value="{{ $translation ? $translation->banner_heading : '' }}">
                </div>

                <!-- Banner Title -->
                <div class="mb-3 col-md-4">
                    <label class="form-label" for="banner_title">{{ $lang['lang_name'] }}
                        {{ translate('Banner Title') }}</label>
                    <input class="form-control" id="banner_title" name="{{ $lang['lang_code'] }}[banner_title]"
                        type="text" placeholder="{{ translate('Banner title') }}"
                        value="{{ $translation ? $translation->banner_title : '' }}">
                </div>

                <!-- Button Text -->
                <div class="mb-3 col-md-4">
                    <label class="form-label" for="button_text">{{ $lang['lang_name'] }}
                        {{ translate('Button Text') }}</label>
                    <input class="form-control" id="button_text" name="{{ $lang['lang_code'] }}[button_text]"
                        type="text" placeholder="{{ translate('Button Text') }}"
                        value="{{ $translation ? $translation->button_text : '' }}">
                </div>
                @endforeach
            </div>
        </div>
    </div>

    <!-- Service Section -->
    <div class="card mb-3">
        <div class="card-header">
            <strong>{{ __('Service Section') }}</strong>
        </div>
        <div class="card-body">
            <div class="row g-2">
                <!-- Service Images Upload -->
                @foreach (['1', '2', '3', '4'] as $index)
                <div class="col-md-6">
                    <div class="mb-3">
                        <label class="form-label" for="service_images_{{ $index }}">{{ __('Service Image')
                            }}
                            {{ $index }}
                            <span class="text-danger">*</span>
                        </label>
                        (<span class="text-danger">200px * 200px</span>)
                        <input class="form-control" id="service_images_{{ $index }}" type="file"
                            name="service_images_{{ $index }}" accept=".png, .jpg, .jpeg">
                        @if (!empty($cms->{'service_images_' . $index}))
                        <div class="mt-2">
                            <a href="{{ $cms->{'service_images_' . $index} }}" target="_blank">
                                <img src="{{ $cms->{'service_images_' . $index} }}" style="height:75px">
                            </a>
                        </div>
                        @endif

                    </div>
                </div>
                @endforeach
            </div>

            <!-- Service title & description -->
            <div class="row">
                @foreach (['1', '2', '3', '4'] as $index)
                @foreach ($language as $lang)
                @php
                // Attempt to retrieve the translation for this language
                $translation = $cms->translate($lang['lang_code']) ?? null;
                @endphp
                <!-- Service Title -->
                <div class="mb-3 col-md-6">
                    <label class="form-label" for="service_title_{{ $index }}">{{ $lang['lang_name'] }}
                        {{ __('Service title') }} {{ $index }}</label>
                    <input class="form-control" id="service_title_{{ $index }}"
                        name="{{ $lang['lang_code'] }}[service_title_{{ $index }}]" type="text"
                        placeholder="{{ __('Service title') }}"
                        value="{{ $translation ? $translation->{'service_title_' . $index} : '' }}">
                </div>

                <!-- Service Description -->
                <div class="mb-3 col-md-6">
                    <label class="form-label" for="service_description_{{ $index }}">{{ $lang['lang_name']
                        }}
                        {{ __('Service Description') }} {{ $index }}</label>
                    <textarea class="form-control" id="service_description_{{ $index }}"
                        name="{{ $lang['lang_code'] }}[service_description_{{ $index }}]"
                        placeholder="{{ __('Service description') }}">{{ old('service_description_' . $index, $translation ? $translation->{'service_description_' . $index} : '') }}</textarea>
                </div>
                @endforeach
                @endforeach
            </div>
        </div>
    </div>




    <!-- Our App section -->
    <div class="card">
        <div class="card-header">
            <strong>{{ __('Our App Section') }}</strong>
        </div>
        <div class="card-body">

            <div class="row">
                <div class="mb-3 col-md-4">
                    <label class="form-label" for="our_app_image_1">{{ __('Our App Image 1') }}
                        <span class="text-danger">*</span>
                    </label>
                    (<span class="text-danger">200px * 200px</span>)
                    <input class="form-control" id="our_app_image_1" type="file" name="our_app_image_1"
                        accept=".png, .jpg, .jpeg">
                    @if (!empty($cms->our_app_image_1))
                    <div class="mt-2">
                        <a href="{{ $cms->our_app_image_1 }}" target="_blank">
                            <img src="{{ $cms->our_app_image_1 }}" style="height:75px">
                        </a>
                    </div>
                    @endif
                </div>
                <div class="mb-3 col-md-4">
                    <label class="form-label" for="our_app_image_2">{{ __('Our App Image 2') }}
                        <span class="text-danger">*</span>
                    </label>
                    (<span class="text-danger">200px * 200px</span>)
                    <input class="form-control" id="our_app_image_2" type="file" name="our_app_image_2"
                        accept=".png, .jpg, .jpeg">
                    @if (!empty($cms->our_app_image_2))
                    <div class="mt-2">
                        <a href="{{ $cms->our_app_image_2 }}" target="_blank">
                            <img src="{{ $cms->our_app_image_2 }}" style="height:75px">
                        </a>
                    </div>
                    @endif
                </div>
                <div class="mb-3 col-md-4">
                    <label class="form-label" for="our_app_image_3">{{ __('Our App Image 3') }}
                        <span class="text-danger">*</span>
                    </label>
                    (<span class="text-danger">200px * 200px</span>)
                    <input class="form-control" id="our_app_image_3" type="file" name="our_app_image_3"
                        accept=".png, .jpg, .jpeg">
                    @if (!empty($cms->our_app_image_3))
                    <div class="mt-2">
                        <a href="{{ $cms->our_app_image_3 }}" target="_blank">
                            <img src="{{ $cms->our_app_image_3 }}" style="height:75px">
                        </a>
                    </div>
                    @endif
                </div>
            </div>

            <div class="row">
                @foreach ($languages as $lang)
                @php
                $translation = $cms->translate($lang->lang_code) ?? null;
                @endphp
                <div class="mb-3 col-md-4">
                    <label class="form-label" for="our_app_heading_{{ $lang->lang_code }}">{{ __('Our App Heading') }}
                        ({{ $lang->lang_name }})
                    </label>
                    <input class="form-control" id="our_app_heading_{{ $lang->lang_code }}"
                        name="{{ $lang->lang_code }}[our_app_heading]" type="text"
                        placeholder="{{ __('Our App Heading') }}"
                        value="{{ $translation ? $translation->our_app_heading : '' }}">
                </div>
                @endforeach
            </div>
            <div class="row">
                @foreach ($languages as $lang)
                @php
                $translation = $cms->translate($lang->lang_code) ?? null;
                @endphp
                <div class="mb-3 col-md-4">
                    <label class="form-label" for="our_app_title_{{ $lang->lang_code }}">{{ __('Our App Title') }}
                        ({{ $lang->lang_name }})
                    </label>
                    <input class="form-control" id="our_app_title_{{ $lang->lang_code }}"
                        name="{{ $lang->lang_code }}[our_app_title]" type="text" placeholder="{{ __('Our App Title') }}"
                        value="{{ $translation ? $translation->our_app_title : '' }}">
                </div>
                @endforeach
            </div>

            <div class="row">
                @foreach ($languages as $lang)
                @php
                $translation = $cms->translate($lang->lang_code) ?? null;
                @endphp
                <div class="mb-3 col-md-4">
                    <label class="form-label" for="our_app_description_{{ $lang->lang_code }}">{{ __('Our App
                        Description') }}
                        ({{ $lang->lang_name }})
                    </label>
                    <input class="form-control" id="our_app_description_{{ $lang->lang_code }}"
                        name="{{ $lang->lang_code }}[our_app_description]" type="text"
                        placeholder="{{ __('Our App Description') }}"
                        value="{{ $translation ? $translation->our_app_description : '' }}">
                </div>
                @endforeach
            </div>
        </div>
    </div>


    <!-- Fairer field-->
    <!-- <div class="card mb-3">
        <div class="card-header">
            <strong>{{ __('Fairer Section') }}</strong>
        </div>
        <div class="card-body">
            <div class="row">
                @foreach ($languages as $lang)
                @php
                $translation = $cms->translate($lang->lang_code) ?? null;
                @endphp

                @for ($i = 1; $i <= 4; $i++) <div class="mb-3 col-md-3">
                    <label class="form-label" for="career_count_text_{{ $i }}_{{ $lang->lang_code }}">
                        {{ __('Career Count') }} {{ $i }} ({{ $lang->lang_name }})
                    </label>
                    <input class="form-control" id="career_count_text_{{ $i }}_{{ $lang->lang_code }}"
                        name="{{ $lang->lang_code }}[career_count_text_{{ $i }}]" type="text"
                        placeholder="{{ __('Career Count') }} {{ $i }}"
                        value="{{ $translation ? $translation->{'career_count_text_' . $i} : '' }}">
            </div>
            @endfor
            @endforeach
        </div>



        <div class="row">
            @foreach ($languages as $lang)
            @php
            $translation = $cms->translate($lang->lang_code) ?? null;
            @endphp
            @for ($i = 1; $i <= 4; $i++) <div class="mb-3 col-md-3">
                <label class="form-label" for="career_title_{{ $i }}_{{ $lang->lang_code }}">
                    {{ __('Career Title') }} {{ $i }} ({{ $lang->lang_name }})
                </label>
                <input class="form-control" id="career_title_{{ $i }}_{{ $lang->lang_code }}"
                    name="{{ $lang->lang_code }}[career_title_{{ $i }}]" type="text"
                    placeholder="{{ __('Career Title') }} {{ $i }}"
                    value="{{ $translation ? $translation->{'career_title_' . $i} : '' }}">
        </div>
        @endfor
        @endforeach
    </div>

</div>
</div> -->


<!-- SEO details -->
<div class="card mb-3">
    <div class="card-header">
        <strong>{{ __('SEO Deatils') }}</strong>
    </div>
    <div class="card-body">
        <div class="row g-2">
            <div class="mb-3 col-md-12">
                <label class="form-label" for="meta_title">{{ __('Meta title') }}</label>
                <input class="form-control" id="meta_title" name="meta_title" type="text"
                    placeholder="{{ __('Meta title') }}" aria-label="{{ __('Meta title') }}"
                    value="{{ $cms->meta_title }}" disabled>
            </div>
            <div class="mb-3 col-md-12">
                <label class="form-label" for="meta_description">{{ __('Meta description') }}</label>
                <textarea class="form-control" id="meta_description" name="meta_description" type="text"
                    placeholder="{{ __('Meta description') }}">{{ $cms->meta_description }}</textarea>
            </div>
        </div>
    </div>
</div>

@endif

<div class="text-end">
    <button class="btn btn-primary" type="submit">Save</button>
    <!-- <a href="{{ route('cms.index') }}" class="btn btn-secondary">Back</a> -->
    <button class="btn btn-success" type="button" onclick="window.history.back();">Back</button>
</div>
<br>
</form>
</div>
</div>
</div>

<!-- CKEditor Script -->
<script src="https://cdn.ckeditor.com/ckeditor5/35.0.1/classic/ckeditor.js"></script>
<script>
    document.addEventListener("DOMContentLoaded", function () {
        // Initialize CKEditor for each language's description field
        @foreach($languages as $lang)
        ClassicEditor
            .create(document.querySelector('#description_{{ $lang->lang_code }}'))
            .catch(error => {
                console.error(error);
            });
        @endforeach

    });
</script>

@endsection