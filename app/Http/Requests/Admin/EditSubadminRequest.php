<?php

namespace App\Http\Requests\Admin;

use App\Models\User;
use Illuminate\Validation\Rule;
use Illuminate\Foundation\Http\FormRequest;

class EditSubadminRequest extends FormRequest
{
    public function rules(): array
    {
        //
        return [
            'first_name' => ['required', 'min:4'],
            'last_name' => ['required', 'min:4'],
            'phone' => ['required', 'min:9', 'max:11'],
            // 'email' => ['required', 'email', 'max:255', Rule::unique(User::class)->ignore($this->user()->id)],
            // 'email' => [
            //     'required',
            //     'email',
            //     'max:255',
            //     Rule::unique('users')->where(function ($query) {
            //         return $query->where('is_delete', "0");
            //     })->ignore($this->route('id')) // Ignore the current user ID
            // ],
            'gender' => ['required'],
            'select_role' => ['required'],
            'country_id' => ['required'],
            'country_id.required' => translate('The country field is required.'),

        ];
    }
    public function messages(): array
    {


        return [
            'first_name.required' => __('error.The first name field is required.'),
            'first_name.min' => __('error.The first name must be at least 4 characters.'),
            'last_name.required' => __('error.The last name field is required.'),
            'last_name.min' => __('error.The first name must be at least 4 characters.'),
            'phone.required' => __('error.The phone number field is required.'),
            'phone.min' => __('error.The phone number must be at least 9 characters.'),
            'phone.max' => __('error.The phone number may not be greater than 11 characters.'),
            'phone.unique' => __('error.The phone number has already been taken.'),
            'gender.required' => __('error.The gender field is required.'),
            'select_role.required' => __('error.The select role field is required.'),


        ];
    }
}
