<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;

class CreateLanguageRequest extends FormRequest
{
    public function rules(): array
    {
        return [
            'lang_code' => ['required', 'string', 'max:255', 'unique:languages,lang_code'],
            'lang_name' => ['required', 'string', 'max:255','unique:languages,lang_name'],
            'lang_flag' => ['required'],
        ];
    }

    public function messages(): array
    {
        return [
            'lang_code.required' => translate('this_field_is_required'),
            'lang_code.unique' => translate('Language code already exists'),
            'lang_name.required' => translate('this_field_is_required'),
            'lang_name.unique' => translate('Language name already exists'),
            'lang_flag.required' => translate('this_field_is_required'),
        ];
    }
}
