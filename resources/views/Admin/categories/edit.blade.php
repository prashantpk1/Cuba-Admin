@extends('Admin.layouts.app')
@section('title', translate('edit_category'))
@section('content')

    <div class="container-fluid">
        <div class="page-title">
            <div class="row">
                <div class="col-6">
                    <h4>{{ translate('edit_category') }}</h4>
                </div>
            </div>
        </div>
        <div class="container mt-4">
            <div class="card">
                <div class="card-body">
                    <form action="{{ route('categories.update', $category->id) }}" method="POST">
                        @csrf
                        @method('PUT')

                        @php
                            $languages = getlanguages();
                        @endphp

                        @foreach ($languages as $lang)
                            <div class="form-group">
                                <label for="name_{{ $lang['lang_code'] }}">
                                    <strong>{{ $lang['lang_name'] }} {{ translate('category_name') }}</strong>
                                </label>
                                <input type="text" name="{{ $lang['lang_code'] }}[name]" id="name_{{ $lang['lang_code'] }}"
                                    class="form-control"
                                    value="{{ old($lang['lang_code'] . '.name', $category->getTranslation($lang['lang_code'])?->name) }}">

                                <!-- Display validation errors for this language input -->
                                @if ($errors->has($lang['lang_code'] . '.name'))
                                    <div class="invalid-feedback">
                                        {{ $errors->first($lang['lang_code'] . '.name') }}
                                    </div>
                                @endif
                            </div>
                            <br>
                        @endforeach

                        <div class="text-end">
                            <button type="submit" class="btn btn-primary">{{ translate('update') }}</button>
                            <a href="{{ route('categories.index') }}" class="btn btn-secondary">{{ translate('back') }}</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

@endsection