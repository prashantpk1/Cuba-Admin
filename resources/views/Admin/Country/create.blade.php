<div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel1">Create Country </h5>
            <button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close"
                onclick="return close_or_clear();"></button>
        </div>
        <div class="modal-body" id="myModal">
            <form class="form-bookmark" method="post" action="{{ route('country.store') }}" id="country-frm"
                enctype="multipart/form-data">
                @csrf
                <div class="row g-2">
                    <div class="mb-3 col-md-4">
                        <label class="form-label" for="short_name">Country Short Name <span class="text-danger">*</span></label>
                        <input class="form-control" id="short_name" name="short_name" type="text"
                            placeholder="Enter country short code">
                    </div>

                    <div class="mb-3 col-md-4">
                        <label class="form-label" for="phone_code">Country Phone Code <span class="text-danger">*</span></label>
                        <input class="form-control" id="phone_code" name="phone_code" type="text"
                            placeholder="Enter phone code">
                    </div>

                    <div class="mb-3 col-md-4">
                        <label class="form-label" for="flag_image">Country Flag Image <span class="text-danger">*</span></label>
                        <input class="form-control" id="flag_image" name="flag_image" type="file">
                    </div>

                    @php
                           $language = getlanguages();
                    @endphp

                    @foreach ($language as $lang)
                    <div class="mb-3 col-md-6">
                        <label class="form-label" for="name">{{ $lang['lang_name'] }}  Name <span
                                class="text-danger">*</span></label>
                        <input type="text" class="form-control"
                            placeholder="Enter Content"
                            name="{{ $lang['lang_code'] }}[name]">
                    </div>
                    @endforeach
             
                </div>
                <button class="btn btn-primary btn-sm btn-custom" type="submit" id="languageSubmit"><i
                        class="fa fa-spinner fa-spin d-none icon"></i> Submit</button>
                <button class="btn btn-secondary btn-sm" type="button" data-bs-dismiss="modal" id="is_close"
                    onclick="return close_or_clear();">Close</button>
            </form>
        </div>
    </div>
</div>
