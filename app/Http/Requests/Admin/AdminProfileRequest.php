<?php

namespace App\Http\Requests\Admin;

use App\Models\User;
use Illuminate\Validation\Rule;
use Illuminate\Foundation\Http\FormRequest;

class AdminProfileRequest extends FormRequest
{

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            //
            'first_name' => ['required', 'string', 'max:255'],
            'last_name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'lowercase', 'email', 'max:255', Rule::unique(User::class)->ignore($this->user()->id)],
            'phone' => ['required', 'min:9', 'max:11'],
        ];
    }
    public function messages(): array
    {
        return [
            'first_name.required' => translate('this_field_is_required'),
            'first_name.string' => translate('The field must be a string'),
            'first_name.max' => translate('The field must not exceed :max characters.'),
            'last_name.required' => translate('this_field_is_required'),
            'last_name.string' => translate('The field must be a string'),
            'last_name.max' => translate('The field must not exceed :max characters.'),
            'email.required' => translate('this_field_is_required'),
            'email.string' => translate('The field must be a string'),
            'email.lowercase' => translate('The email must be in lowercase letters.'),
            'email.email' => translate('Please enter a valid email address.'),
            'email.max' =>  translate('The field must not exceed :max characters.'),
            'email.unique' => translate('The email address is already in use.'),
            'phone.required' => translate('The phone number field is required.'),
            'phone.min' => translate('The phone number must be at least 9 characters.'),
            'phone.max' => translate('The phone number may not be greater than 11 characters.'),
            'phone.unique' => translate('The phone number has already been taken.'),
        ];
    }
}
