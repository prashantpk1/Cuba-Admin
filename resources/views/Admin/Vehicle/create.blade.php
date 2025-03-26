<div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel1">{{ translate('add_vehicle') }}</h5>
            <button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close"
                onclick="return close_or_clear();"></button>
        </div>
        <div class="modal-body" id="myModal">
            {{-- <form class="form-bookmark"> --}}
            <form class="form-bookmark" method="post" action="{{ route('vehicle.store') }}" id="vehicle-frm"
                enctype="multipart/form-data">
                @csrf
                <div class="row g-2">

                    <div class="mb-3 col-md-6">
                        <label class="form-label" for="vehicle_image">{{ translate('vehicle_image') }}<span
                                class="text-danger">*</span></label>
                        <input class="form-control" id="vehicle_image" name="vehicle_image" type="file">
                    </div>

                    <div class="mb-3 col-md-6">
                        <label class="form-label" for="vehicle_passenger_capecity">{{ translate('vehicle_passenger_capecity') }}<span
                                class="text-danger">*</span></label>
                        <input class="form-control" id="vehicle_passenger_capecity" name="vehicle_passenger_capecity" type="number">
                    </div>
                    @php
                        $language = getlanguages();
                    @endphp

                    @foreach ($language as $lang)
                        <div class="mb-3 col-md-6">
                            <label class="form-label" for="vehicle">{{ $lang['lang_name'] }} {{ translate('vehicle') }} <span
                                    class="text-danger">*</span></label>
                            <input type="text" class="form-control" placeholder="{{ translate('enter_vehicle') }}"
                                name="{{ $lang['lang_code'] }}[name]">
                        </div>
                    @endforeach

                    <?php $countries = getCountries(); ?>

                    <div class="col-md-6" id="tag">
                        <label class="form-label">{{ translate('select_countries') }}<span class="text-danger">*</span></label>
                        <select name="country_ids[]" aria-label="Select a Countries" id="country_ids"
                            class="form-select custom_select2 js-example-basic-multiple country_ids" multiple>
                            @foreach ($countries as $country)
                                <option value="{{ $country->id }}">{{ $country->name }}</option>
                            @endforeach
                        </select>
                    </div>


                </div>
                <button class="btn btn-primary btn-sm btn-custom" type="submit" id="vehicleSubmit"><i
                        class="fa fa-spinner fa-spin d-none icon"></i> {{ translate('submit') }}</button>
                <button class="btn btn-secondary btn-sm" type="button" data-bs-dismiss="modal" id="is_close"
                    onclick="return close_or_clear();">{{ translate('close') }}</button>
            </form>
        </div>
    </div>
</div>
