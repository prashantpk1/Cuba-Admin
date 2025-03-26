<?php

namespace App\Http\Requests\Admin;

use Illuminate\Validation\Rule;
use Spatie\Permission\Models\Permission;
use Illuminate\Foundation\Http\FormRequest;

class PermissionRequest extends FormRequest
{
    public function rules(): array
    {
        return [
            'name' => ['required', 'string', 'max:255'],
            // 'module_name' => ['required', 'string', 'max:255'],
            'module_name' => ['required', 'string'],
        ];
    }
    public function messages(): array
    {
        return [
            'name.required' => translate('this_field_is_required'),
            'name.string' => translate('The field must be a string'),
            'module_name.required' => translate('this_field_is_required'),
            'name.string' => translate('The field must be a string'),
        ];
    }

}
