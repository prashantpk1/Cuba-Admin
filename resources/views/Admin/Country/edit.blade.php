<div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel1">Create Language Key </h5>
            <button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close"
                onclick="return close_or_clear();"></button>
        </div>
        <div class="modal-body" id="myModal">
            <form class="form-bookmark" method="post" action="{{ route('platform-lang.update', $data->id) }}"
                id="platform-lang-edit-form" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="row g-2">
                    <div class="mb-3 col-md-12">
                        <label class="form-label" for="key">Language Key <span class="text-danger">*</span></label>
                        <input class="form-control" id="key" name="key" type="text"
                            placeholder="Enter Language Key">
                    </div>

                    @php
                        $language = getlanguages();
                    @endphp

                    @foreach ($language as $lang)
                        @php
                            $translation = $data->translate($lang['lang_code']) ?? null;
                        @endphp
                        <div class="mb-3 col-md-6">
                            <label class="form-label" for="translation">{{ $lang['lang_name'] }} Translation <span
                                    class="text-danger">*</span></label>
                            <input type="text" class="form-control" placeholder="Enter Content"
                                name="{{ $lang['lang_code'] }}[translation]"
                                value="{{ old($lang['lang_code'] . '.translation', $translation ? $translation->translation : '') }}">
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
