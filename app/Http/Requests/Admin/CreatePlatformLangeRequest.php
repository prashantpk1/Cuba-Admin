<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;

class CreatePlatformLangeRequest extends FormRequest
{
    public function rules(): array
    {
        return [
            'key' => ['required', 'string', 'max:255', 'unique:platform_keys,key'],
        ];
    }

    public function messages(): array
    {
        return [
            'key.required' => translate('this_field_is_required'),
        ];
    }
}
