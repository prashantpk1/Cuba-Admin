@extends('Admin.layouts.app')
@section('title', 'Create Category')
@section('content')

    <div class="container-fluid">
        <div class="page-title">
            <div class="row">
                <div class="col-6">
                    <h4>{{ translate('create_category') }}</h4>
                </div>
            </div>
        </div>
        <div class="container mt-4">
            <div class="card">
                <div class="card-body">
                    <form action="{{ route('categories.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf

                        @php
                            $languages = getlanguages();
                        @endphp

                        @foreach ($languages as $lang)
                            <div class="form-group">
                                <label for="name_{{ $lang['lang_code'] }}"><strong>{{ $lang['lang_name'] }}
                                        {{ translate('category_name') }}</strong></label>
                                <input type="text" name="{{ $lang['lang_code'] }}[name]" id="name_{{ $lang['lang_code'] }}"
                                    class="form-control" value="{{ old($lang['lang_code'] . '[name]') }}">

                                @error($lang['lang_code'] . '[name]')
                                    <div class="invalid-feedback d-block">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <br>
                        @endforeach

                        <div class="text-end">
                            <button class="btn btn-primary" type="submit">Save</button>
                            <button class="btn btn-success" type="button" onclick="window.history.back();">Back</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

@endsection

@section('script')
    <script type="text/javascript">
        $(document).ready(function () {
            // Any custom JavaScript or jQuery you may need
        });
    </script>
@endsection