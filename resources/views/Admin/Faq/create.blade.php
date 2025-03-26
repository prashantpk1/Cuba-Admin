<div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel1">{{ translate('add_faq') }} </h5>
            <button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close"
                onclick="return close_or_clear();"></button>
        </div>
        <div class="modal-body" id="myModal">
            <form class="form-bookmark" method="post" action="{{ route('faq.store') }}" id="faq-frm"
                enctype="multipart/form-data">
                @csrf
                <div class="row g-2">
                    <div class="mb-3 col-md-12">
                        <label class="form-label" for="order">{{ translate('order_number') }}<span class="text-danger">*</span></label>
                        <input class="form-control" id="order" name="order" type="number"
                            placeholder="{{ translate('enter_order') }}">
                    </div>

                    @php
                        $language = getlanguages();
                    @endphp

                    @foreach ($language as $lang)
                        <div class="mb-3 col-md-12">
                            <label class="form-label" for="question">{{ $lang['lang_name'] }} {{ translate('question') }} <span
                                    class="text-danger">*</span></label>
                            <input type="text" class="form-control" placeholder="{{ translate('enter_question') }}"
                                name="{{ $lang['lang_code'] }}[question]">
                        </div>

                        <div class="mb-3 col-md-12">
                            <label class="form-label" for="answer">{{ $lang['lang_name'] }} {{ translate('answer') }} <span
                                    class="text-danger">*</span></label>
                            <textarea name="{{ $lang['lang_code'] }}[answer]" id="" cols="4" rows="4"
                                class="form-control custom_ck_editor" placeholder="{{ translate('enter_answer') }} {{ $lang['lang_name'] }} "></textarea>
                        </div>
                    @endforeach


                    <div class="mb-3 col-md-12">
                        <label class="form-label" for="status">{{ translate('status') }}<span class="text-danger">*</span></label>
                        {{-- <input class="form-control" id="order" name="order" type="number"
                            placeholder="Enter Language order"> --}}

                    <select class="form-control" name="status" id="status">
                         <option>{{ translate('select_status') }}</option>
                         <option value="active">{{ translate('active') }}</option>
                         <option value="inactive">{{ translate('inactive') }}</option>
                    </select>
                    </div>


                </div>
                <button class="btn btn-primary btn-sm btn-custom" type="submit" id="languageSubmit"><i
                        class="fa fa-spinner fa-spin d-none icon"></i> {{ translate('submit') }}</button>
                <button class="btn btn-secondary btn-sm" type="button" data-bs-dismiss="modal" id="is_close"
                    onclick="return close_or_clear();">{{ translate('close') }}</button>
            </form>
        </div>
    </div>
</div>
