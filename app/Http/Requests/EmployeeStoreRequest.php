<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use App\Http\Requests\Request;
class EmployeeStoreRequest extends FormRequest
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
            'password'  => 'required|min:6|confirmed',
            'image'    => 'mimes:jpg,jpeg,bmp,png',
            'service'     => 'required',
    ];

    }
}
