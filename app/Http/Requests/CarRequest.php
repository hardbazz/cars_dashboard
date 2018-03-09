<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CarRequest extends FormRequest
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
            'brand' => 'required|numeric',
            'model' => 'required|min:1',
            'bodytype' => 'required|numeric',
            'fuel' => 'required',
            'weight' => 'required|numeric',
        ];
    }

    public function messages()
    {
        return [
           'brand.required' => '- No brand selected!',
           'model.required' => '- No model selected!',
           'bodytype.required' => '- No body type selected!',
           'fuel.required' => '- No fuel selected!',
           'weight.required' => '- No weight inserted!',
           'weight.numeric' => '- Weight must be inserted as numbers!'
        ];
    }
}
