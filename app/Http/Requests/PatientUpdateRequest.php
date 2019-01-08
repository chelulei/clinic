<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use App\Http\Requests\Request;
class PatientUpdateRequest extends FormRequest
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
            'age'    => 'required',
            'sex'    => 'required',
            'status'    => 'required',
            'address'    => 'required',
            'date_birth'    => 'required',
            'weight'    => 'nullable',
            'height'    => 'nullable',
            'course'    => 'required',
            'year'    => 'required',
            'religion'    => 'nullable|religion',
            'name2'    => 'required',
            'contact'    => 'required',
            'address2'    => 'required',
            'others'    => 'nullable|others',
            'allergies'    => 'nullable|allergies',
            'illness'    => 'nullable|illness',
            'immune'    => 'nullable|immune',
            'others2'    => 'nullable|others2',
            'medics'    => 'nullable|medics',
            'hospital'    => 'nullable|hospital'
        ];
    }
}
