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
            'email' => 'required|email|max:255|unique:users',
            'designation'     => 'required',
            'address'     => 'required',
            'phone'     => 'required',
            'image'    => 'mimes:jpg,jpeg,bmp,png',

    ];

    }
}
