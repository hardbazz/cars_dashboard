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
            'year_build' => 'required|numeric|min:4',
            'bodytype' => 'required|numeric',
            'fuel' => 'required',
        ];
    }

    public function messages()
    {
        return [
           'brand.required' => '- No brand selected!',
           'model.required' => '- No model selected!',
           'year_build.required' => '- No year inserted!',
           'year_build.numeric' => '- Year must be inserted as numbers!',
           'year_build.min' => '- Year must be at least 4 charaters!',
           'bodytype.required' => '- No body type selected!',
           'fuel.required' => '- No fuel selected!'
        ];
    }
}
