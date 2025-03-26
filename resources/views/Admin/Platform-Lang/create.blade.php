<div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel1">{{ translate('add_language_key') }} </h5>
            <button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close"
                onclick="return close_or_clear();"></button>
        </div>
        <div class="modal-body" id="myModal">
            <form class="form-bookmark" method="post" action="{{ route('platform-lang.store') }}" id="platform-lang-frm"
                enctype="multipart/form-data">
                @csrf
                <div class="row g-2">
                    <div class="mb-3 col-md-12">
                        <label class="form-label" for="key">{{ translate('language_key') }} <span class="text-danger">*</span></label>
                        <input class="form-control" id="key" name="key" type="text" placeholder="{{ translate('enter_key') }}">
                    </div>

                    @php
                           $language = getlanguages();
                    @endphp

                    @foreach ($language as $lang)
                    <div class="mb-3 col-md-6">
                        <label class="form-label" for="translation">{{ $lang['lang_name'] }}  {{ translate('translation') }} <span
                                class="text-danger">*</span></label>
                        <input type="text" class="form-control"
                            placeholder="{{ translate('enter_content') }}"
                            name="{{ $lang['lang_code'] }}[translation]">
                    </div>
                    @endforeach
             
                </div>
                <button class="btn btn-primary btn-sm btn-custom" type="submit" id="languageSubmit"><i
                        class="fa fa-spinner fa-spin d-none icon"></i> {{ translate('submit') }}</button>
                <button class="btn btn-secondary btn-sm" type="button" data-bs-dismiss="modal" id="is_close"
                    onclick="return close_or_clear();">{{ translate('close') }}</button>
            </form>
        </div>
    </div>
</div>
