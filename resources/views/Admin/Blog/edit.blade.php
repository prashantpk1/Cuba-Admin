@extends('Admin.layouts.app')
<?php
$url = URL::to('/admin/blog');
?>
@section('content')
<div class="container-fluid">
    <div class="page-title">
    </div>
</div>

<!-- Container-fluid starts-->
<div class="container-fluid">
    <div class="row">
        <div class="col-xl-12">
            <div class="card height-equal">
                <div class="card-header">
                    <h4>{{ translate('edit_blog') }}</h4>
                </div>
                <div class="card-body custom-input">
                    <form class="form-bookmark" method="post" action="{{ route('blog.update', $data->id) }}"
                        id="blog-edit-form" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="row g-2">
                            <div class="col-md-12 mt-0">
                                <div class="row">

                                    <div class="mb-3 col-md-6">
                                        <label class="form-label" for="order">{{ translate('order_number') }}<span
                                                class="text-danger">*</span></label>
                                        <input class="form-control" id="order" name="order" type="number"
                                            placeholder="{{ translate('enter_language_order') }}"
                                            value="{{ $data->order }}">
                                    </div>

                                    <div class="mb-3 col-md-5">
                                        <label class="form-label" for="blog_image">{{ translate('blog_image') }}<span
                                                class="text-danger">*</span></label>
                                        <input class="form-control" id="blog_image" name="blog_image" type="file">
                                    </div>
                                    <div class="col-sm-1">
                                        <label class="form-label">&nbsp;&nbsp;&nbsp;&nbsp;</label>
                                        <img src="{{ asset($data->blog_image) }}"
                                            class="img-thumbnail brand-image img-circle elevation-3" height="150"
                                            width="150" />
                                    </div>

                                    @php
                                    $language = getlanguages();
                                    @endphp

                                    @foreach ($language as $lang)
                                        @php
                                            $translation = $data->translate($lang['lang_code']) ?? null;
                                        @endphp

                                        <div class="mb-3 col-md-12">
                                            <label class="form-label" for="title">{{ $lang['lang_name'] }} {{ translate('title') }}
                                                <span class="text-danger">*</span></label>
                                            <input type="text" class="form-control" placeholder="Enter title"
                                                name="{{ $lang['lang_code'] }}[title]"
                                                value="{{ $translation ? $translation->title : '' }}">
                                        </div>

                                        <div class="mb-3 col-md-12">
                                            <label class="form-label" for="content">{{ $lang['lang_name'] }} {{ translate('content') }}
                                                <span class="text-danger">*</span></label>
                                            <textarea name="{{ $lang['lang_code'] }}[content]" id="" cols="4" rows="4"
                                                    class="form-control custom_ck_editor"
                                                    placeholder="{{ translate('Enter content') }} {{ $lang['lang_name'] }} ">
                                                {{ $translation ? $translation->content : '' }}
                                            </textarea>
                                        </div>
                                    @endforeach


                                    <!-- Add Category Dropdown -->
                                    <div class="mb-3 col-md-12">
                                        <label class="form-label" for="category">{{ translate('category') }}<span
                                                class="text-danger">*</span></label>
                                        <select class="form-control" name="category_id" id="category">
                                            <option value="" disabled selected>Select Category</option>
                                            @foreach ($categories as $category)
                                            <option value="{{ $category->id }}" @if ($category->id ==
                                                $data->category_id) selected="selected" @endif>
                                                {{ $category->translations->firstWhere('locale',
                                                app()->getLocale())->name ?? 'Unnamed Category' }}
                                            </option>
                                            @endforeach
                                        </select>
                                    </div>

                                    <div class="mb-3 col-md-12">
                                        <label class="form-label" for="status">{{ translate('status') }}<span
                                                class="text-danger">*</span></label>
                                        <select class="form-control" name="status" id="status">
                                            <option>{{ translate('select_status') }}</option>
                                            <option value="active" @if ($data->status == 'active') selected="selected"
                                                @endif>{{ translate('active') }}
                                            </option>
                                            <option value="inactive" @if ($data->status == 'inactive')
                                                selected="selected"
                                                @endif>{{ translate('inactive') }}
                                            </option>
                                        </select>
                                    </div>

                                </div>
                            </div>
                        </div>

                        <div class="text-end">
                            <button class="btn btn-primary" type="submit">Save</button>
                            <button class="btn btn-success" type="button" onclick="window.history.back();">Back</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>

    </div>
</div>
@endsection

@section('script')
<script type="text/javascript">
    $(document).ready(function () {

        $(document).on('submit', '#blog-edit-form', function (e) {
            e.preventDefault();
            var frm = this;
            var btn = $('#blogSubmit');
            var url = $(this).attr('action');
            var formData = new FormData(frm);

            // for button
            jQuery('.btn-custom').addClass('disabled');
            jQuery('.icon').removeClass('d-none');


            $.ajax({
                url: url,
                type: "POST",
                data: formData,
                contentType: false,
                cache: false,
                processData: false,
                success: function (response) {
                    show_toster(response.success)
                    frm.reset();

                    jQuery('.btn-custom').removeClass('disabled');
                    jQuery('.icon').addClass('d-none');

                    var content = "{{ $url }}";

                    window.setTimeout(function () {
                        window.location.href = content;
                    }, 300);
                },
                error: function (xhr) {
                    var errors = xhr.responseJSON;
                    $.each(errors.errors, function (key, value) {
                        var ele = "#" + key;
                        toastr.error(value);
                    });
                    jQuery('.btn-custom').removeClass('disabled');
                    jQuery('.icon').addClass('d-none');
                },
            });

        });

    });
</script>
@endsection