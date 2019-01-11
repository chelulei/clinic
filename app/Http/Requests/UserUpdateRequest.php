<?php

namespace App\Http\Requests;
use Illuminate\Foundation\Http\FormRequest;
use App\Http\Requests\Request;
class UserUpdateRequest extends FormRequest
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
            'username' => 'required|unique:users,username,' . $this->route("user"),
            'slug' => 'required|unique:users,slug,' . $this->route("user"),
            'email' => 'required|unique:users,email,' . $this->route("user"),
            'image' => 'mimes:jpg,jpeg,bmp,png',
            'role_id' => 'required',
        ];


     }



}
