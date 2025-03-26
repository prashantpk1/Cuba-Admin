<div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel1">{{ translate('add_language') }}</h5>
            <button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close" onclick="return close_or_clear();"></button>
        </div>
        <div class="modal-body"  id="myModal">
            {{-- <form class="form-bookmark"> --}}
            <form class="form-bookmark" method="post" action="{{ route('language.store') }}" id="language-frm" enctype="multipart/form-data">
                @csrf
                <div class="row g-2">
                    <div class="mb-3 col-md-4">
                        <label class="form-label" for="lang_name">{{ translate('language_name') }}<span class="text-danger">*</span></label>
                        <input class="form-control" id="lang_name" name="lang_name" type="text">
                    </div>
                    <div class="mb-3 col-md-4">
                        <label class="form-label" for="lang_code">{{ translate('language_code') }} <span class="text-danger">*</span></label>
                        <input class="form-control" id="lang_code" name="lang_code" type="text" aria-label="Language Code">
                    </div>
                   
                    <div class="mb-3 col-md-4">
                        <label class="form-label " for="lang_flag">{{ translate('language_flag') }} <span class="text-danger">*</span></label>
                        <input class="form-control" id="lang_flag" name="lang_flag" type="file">
                    </div>
                    <div class="mb-3 col-md-6">
                        <label class="form-label" for="is_default">{{ translate('language_is_default') }}</label>&nbsp;&nbsp;&nbsp;
                        <input class="form-check-input" id="is_default" name="is_default" type="checkBox" value="1">
                    </div>
                    
                    <div class="mb-3 col-md-6">
                        <label class="form-label" for="lang_is_rtl">{{ translate('language_is_RTL') }}</label>&nbsp;&nbsp;&nbsp;
                        <input class="form-check-input" id="lang_is_rtl" name="lang_is_rtl" type="checkBox" value="1">
                    </div>
                   

                </div>
                <button class="btn btn-primary btn-sm btn-custom" type="submit" id="languageSubmit"><i class="fa fa-spinner fa-spin d-none icon"></i>{{ translate('submit') }}</button>
                <button class="btn btn-secondary btn-sm" type="button" data-bs-dismiss="modal"
                    id="is_close" onclick="return close_or_clear();">{{ translate('close') }}</button>
            </form>
        </div>
    </div>
</div>
