<div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel1">{{ translate('add_sub_service') }}</h5>
            <button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close"
                onclick="return close_or_clear();"></button>
        </div>
        <div class="modal-body" id="myModal">
            {{-- <form class="form-bookmark"> --}}
            <form class="form-bookmark" method="post" action="{{ route('sub-service.store') }}" id="create"
                enctype="multipart/form-data">
                @csrf
                <div class="row g-2">

                    <div class="mb-3 col-md-6">
                        <label class="form-label" for="service_image">{{ translate('sub_service_image') }}<span
                                class="text-danger">*</span></label>
                        <input class="form-control" id="service_image" name="service_image" type="file">
                    </div>


                    <div class="col-sm-6">
                        <label class="form-label">{{ translate('main_service') }}</label>
                        <select name="service_id" aria-label="{{ translate('main_service') }}" data-placeholder="{{ translate('select_service') }}"
                            class="form-select">
                            <option value="">{{ translate('select_service') }}</option>
                            @php  $services = getServices(); @endphp
                            @foreach ($services as $ser)
                                @php
                                    $locale = config('app.locale');
                                    $translation = $ser->translate($locale) ?? null;
                                @endphp

                                <option value="{{ $ser['id'] }}">{{ $translation['name'] }}</option>
                            @endforeach

                        </select>
                    </div>

                    @php
                        $language = getlanguages();
                    @endphp

                    @foreach ($language as $lang)
                        <div class="mb-3 col-md-6">
                            <label class="form-label" for="service">{{ $lang['lang_name'] }} {{ translate('sub_service') }} <span
                                    class="text-danger">*</span></label>
                            <input type="text" class="form-control" placeholder="{{ translate('enter_sub_service') }}"
                                name="{{ $lang['lang_code'] }}[name]">
                        </div>
                    @endforeach




                </div>
                <button class="btn btn-primary btn-sm btn-custom" type="submit" id="serviceSubmit"><i
                        class="fa fa-spinner fa-spin d-none icon"></i> {{ translate('submit') }}</button>
                <button class="btn btn-secondary btn-sm" type="button" data-bs-dismiss="modal" id="is_close"
                    onclick="return close_or_clear();">{{ translate('close') }}</button>
            </form>
        </div>
    </div>
</div>
