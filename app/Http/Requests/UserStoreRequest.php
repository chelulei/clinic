<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UserStoreRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {

        return [
            'name' => 'required|string|max:255',
            'username' => 'required|unique:users',
            'slug'     => 'required|unique:users',
            'email' => 'required|email|max:255|unique:users',
            'address' => 'required',
            'phone' => 'required',
            'password' => 'required|confirmed|min:6',
            'image'        => 'mimes:jpeg,png,jpg'

        ];

    }


}
