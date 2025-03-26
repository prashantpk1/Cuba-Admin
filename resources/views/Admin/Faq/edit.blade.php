<script src="https://cdn.ckeditor.com/ckeditor5/35.3.2/super-build/ckeditor.js"></script>
<div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel1">{{ translate('edit_faq') }}</h5>
            <button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close"
                onclick="return close_or_clear();"></button>
        </div>
        <div class="modal-body" id="myModal">
            <form class="form-bookmark" method="post" action="{{ route('faq.update', $data->id) }}" id="faq-form"
                enctype="multipart/form-data">
                @csrf
                @method('PUT')

                <div class="row g-2">
                    <div class="mb-3 col-md-12">
                        <label class="form-label" for="order">{{ translate('order_number') }}<span class="text-danger">*</span></label>
                        <input class="form-control" id="order" name="order" type="number"
                            placeholder="{{ translate('enter_order') }}" value="{{ $data->order }}">
                    </div>

                    @php
                        $language = getlanguages();
                    @endphp

                    @foreach ($language as $lang)
                        @php
                            $translation = $data->translate($lang['lang_code']) ?? null;
                        @endphp
                        <div class="mb-3 col-md-12">
                            <label class="form-label" for="question">{{ $lang['lang_name'] }} {{ translate('question') }} <span
                                    class="text-danger">*</span></label>
                            <input type="text" class="form-control" placeholder="{{ translate('enter_question') }}"
                                name="{{ $lang['lang_code'] }}[question]" value="{{ $translation->question ?? '' }}">
                        </div>

                        <div class="mb-3 col-md-12">
                            <label class="form-label" for="answer">{{ $lang['lang_name'] }} {{ translate('answer') }} <span
                                    class="text-danger">*</span></label>
                            <textarea name="{{ $lang['lang_code'] }}[answer]" id="" cols="4" rows="4"
                                class="form-control custom_ck_editor" placeholder="{{ translate('enter_answer') }} {{ $lang['lang_name'] }} ">{{ $translation->answer ?? '' }}</textarea>
                        </div>
                    @endforeach


                    <div class="mb-3 col-md-12">
                        <label class="form-label" for="status">{{ translate('status') }}<span class="text-danger">*</span></label>
                        {{-- <input class="form-control" id="order" name="order" type="number"
                            placeholder="Enter Language order"> --}}

                        <select class="form-control" name="status" id="status">
                            <option>{{ translate('select_status') }}</option>
                            <option value="active" @if ($data->status == 'active') selected="selected" @endif>{{ translate('active') }}
                            </option>
                            <option value="inactive" @if ($data->status == 'inactive') selected="selected" @endif>
                                {{ translate('inactive') }}</option>
                        </select>
                    </div>


                </div>
                <button class="btn btn-primary btn-sm btn-custom" type="submit" id="blogSubmit"><i
                        class="fa fa-spinner fa-spin d-none icon"></i> {{ translate('submit') }}</button>
                <button class="btn btn-secondary btn-sm" type="button" data-bs-dismiss="modal" id="is_close"
                    onclick="return close_or_clear();">{{ translate('close') }}</button>
            </form>
        </div>
    </div>
</div>


<script>
    document.querySelectorAll(".custom_ck_editor").forEach(editor => {
        CKEDITOR.ClassicEditor.create(editor, {
                toolbar: {
                    items: [
                        'bold', 'italic', 'underline', '|',
                        'heading', '|',
                        'bulletedList', 'numberedList', '|',
                        'undo', 'redo', '|',
                        'link', 'blockQuote'
                    ],
                    shouldNotGroupWhenFull: true
                },
                heading: {
                    options: [{
                            model: 'paragraph',
                            title: 'Paragraph',
                            class: 'ck-heading_paragraph'
                        },
                        {
                            model: 'heading1',
                            view: 'h1',
                            title: 'Heading 1',
                            class: 'ck-heading_heading1'
                        },
                        {
                            model: 'heading2',
                            view: 'h2',
                            title: 'Heading 2',
                            class: 'ck-heading_heading2'
                        }
                    ]
                },
                placeholder: 'Start writing here...',
                removePlugins: [
                    'ExportPdf', 'ExportWord', 'CKBox', 'CKFinder', 'EasyImage',
                    'RealTimeCollaborativeComments', 'RealTimeCollaborativeTrackChanges',
                    'RealTimeCollaborativeRevisionHistory', 'PresenceList', 'Comments',
                    'TrackChanges', 'TrackChangesData', 'RevisionHistory', 'Pagination',
                    'WProofreader', 'MathType'
                ]
            })
            .catch(error => console.error(error));
    });



    $(document).ready(function() {

        $(document).on('submit', '#blog-frm', function(e) {
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
                success: function(response) {
                    show_toster(response.success)
                    frm.reset();

                    jQuery('.btn-custom').removeClass('disabled');
                    jQuery('.icon').addClass('d-none');

                    var content = "{{ $url }}";

                    window.setTimeout(function() {
                        window.location.href = content;
                    }, 300);


                    // location.reload();
                },
                error: function(xhr) {
                    var errors = xhr.responseJSON;
                    $.each(errors.errors, function(key, value) {
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
