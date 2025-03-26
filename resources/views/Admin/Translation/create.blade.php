<div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel1">{{ translate('create_language_key') }} </h5>
            <button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close"
                onclick="return close_or_clear();"></button>
        </div>
        <div class="modal-body" id="myModal">
            <form class="form-bookmark" method="POST" action="{{ route('translation.store') }}" enctype="multipart/form-data" id="translation-frm">
                @csrf
                <div class="row g-2">
                    <div class="mb-3 col-md-12">
                        <label class="form-label" for="key">{{ translate('key') }} <span class="text-danger">*</span></label>
                        <input class="form-control" id="key" name="key" type="text" placeholder="{{ translate('enter_key') }}">
                    </div>
                    
                    @php
                        $language = getlanguages();
                    @endphp
                    
                    @foreach ($language as $lang)
                        <div class="mb-3 col-md-6">
                            <label class="form-label" for="{{ $lang['lang_code'] }}_value"> {{ $lang['lang_name'] }} {{ translate('for_translation') }} <span class="text-danger">*</span></label>
                            <textarea name="{{ $lang['lang_code'] }}_value" id="{{ $lang['lang_code'] }}_value" cols="4" rows="4" class="form-control" placeholder="{{ translate('enter_text_for') }} {{ $lang['lang_name'] }} "></textarea>
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
