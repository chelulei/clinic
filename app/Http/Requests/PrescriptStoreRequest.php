<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use App\Http\Requests\Request;
class PrescriptStoreRequest extends FormRequest
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
            'patient_id' => 'required',
            'user_id' => 'required',
            'bp'=> 'nullable',
            'pr'=> 'nullable',
            'rr'=> 'nullable',
            'temp'=> 'nullable',
            'wt'=> 'nullable',
            'hpi'=> 'nullable',
            'assessment'=> 'nullable',
            'symptoms'=> 'nullable',
            'diagnostics'=> 'nullable',
            'prescriptions'=> 'nullable'
    ];

    }
}
