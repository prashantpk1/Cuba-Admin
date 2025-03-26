<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;

class CreateSubadminRequest extends FormRequest
{
    public function rules(): array
    {
        return [
            //
            'first_name' => ['required','min:4',],
            'last_name' => ['required','min:4',],
            'phone' => ['required','unique:users','min:9','max:11'],
            'email' => ['required','email','unique:users','email'],
            'gender' => ['required'],
            'profile_image' => ['required','file','mimes:jpeg,png,jpg'],
            'password' => ['required'],
            'country_id' => ['required'],
            'confirm_password' => ['same:password','required'],
        ];
    }
    public function messages(): array
    {


        return [
            'first_name.required' => translate('The first name field is required.'),
            'first_name.min' => translate('The first name must be at least 4 characters.'),
            'last_name.required' => translate('The last name field is required.'),
            'last_name.min' => translate('The first name must be at least 4 characters.'),
            'phone.required' => translate('The phone number field is required.'),
            'phone.min' => translate('The phone number must be at least 9 characters.'),
            'phone.max' => translate('The phone number may not be greater than 11 characters.'),
            'phone.unique' => translate('The phone number has already been taken.'),
            'gender.required' => translate('The gender field is required.'),
            'email.required' => translate('The email field is required.'),
            'email.email' => translate('Please enter a valid email address.'),
            'email.unique' => translate('The email has already been taken.'),
            'profile_image.required' => translate('The profile image field is required.'),
            'profile_image.file' => translate('The profile image must be a file.'),
            'profile_image.mimes' => translate('The profile image must be a file of type: jpeg, png, jpg.'),
            'password.required' => translate('The password field is required.'),
            'country_id.required' => translate('The country field is required.'),
            'confirm_password.same' => translate('The confirm password must match the password.'),
            'confirm_password.required' => translate('The confirm password field is required.'),

        ];
    }
}
