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
                    <h4>{{ translate('add_blog') }}</h4>
                </div>
                <div class="card-body custom-input">
                    <form class="form-bookmark " method="post" action="{{ route('blog.store') }}"
                        enctype="multipart/form-data" id="blog-frm">
                        @csrf
                        <div class="row g-2">
                            <div class="col-md-12 mt-0">
                                <div class="row">

                                    <div class="mb-3 col-md-6">
                                        <label class="form-label" for="order">{{ translate('order_number') }}<span
                                                class="text-danger">*</span></label>
                                        <input class="form-control" id="order" name="order" type="number"
                                            placeholder="Enter Language order">
                                    </div>

                                    <div class="mb-3 col-md-6">
                                        <label class="form-label" for="blog_image">{{ translate('blog_image') }}<span
                                                class="text-danger">*</span></label>
                                        <input class="form-control" id="blog_image" name="blog_image" type="file">
                                    </div>

                                    <!-- Category Dropdown -->
                                    <div class="mb-3 col-md-12">
                                        <label class="form-label" for="category">{{ translate('category') }}<span
                                                class="text-danger">*</span></label>
                                        <select class="form-control" name="category_id" id="category">
                                            <option value="" disabled selected>Select Category</option>
                                            @foreach ($categories as $category)
                                            <option value="{{ $category->id }}">
                                                {{ $category->translations->firstWhere('locale',
                                                app()->getLocale())->name ?? 'Unnamed Category' }}
                                            </option>
                                            @endforeach
                                        </select>
                                    </div>



                                    @php
                                    $language = getlanguages();
                                    @endphp

                                    @foreach ($language as $lang)
                                    <div class="mb-3 col-md-12">
                                        <label class="form-label" for="title">{{ $lang['lang_name'] }} {{
                                            translate('title') }}
                                            <span class="text-danger">*</span></label>
                                        <input type="text" class="form-control" placeholder="Enter title"
                                            name="{{ $lang['lang_code'] }}[title]">
                                    </div>

                                    <div class="mb-3 col-md-12">
                                        <label class="form-label" for="content">{{ $lang['lang_name'] }} {{
                                            translate('content') }}
                                            <span class="text-danger">*</span></label>
                                        <textarea name="{{ $lang['lang_code'] }}[content]" id="" cols="4" rows="4"
                                            class="form-control custom_ck_editor"
                                            placeholder="{{ translate('enter_content') }} {{ $lang['lang_name'] }} "></textarea>
                                    </div>
                                    @endforeach


                                    <div class="mb-3 col-md-12">
                                        <label class="form-label" for="status">{{ translate('status') }}<span
                                                class="text-danger">*</span></label>
                                        <select class="form-control" name="status" id="status">
                                            <option>{{ translate('select_status') }}</option>
                                            <option value="active">{{ translate('active') }}</option>
                                            <option value="inactive">{{ translate('inactive') }}</option>
                                        </select>
                                    </div>

                                </div>
                            </div>

                        </div>
                        <!-- <button class="btn btn-primary btn-sm btn-custom" type="submit" id="blogSubmit"> <i
                                class="fa fa-spinner fa-spin d-none icon"></i>{{ translate('submit') }}</button>
                        <a href="{{ route('blog.index') }}" class="btn btn-light">{{ translate('cancel') }}</a> -->

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

        $(document).on('submit', '#blog-frm', function (e) {
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


                    // location.reload();
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