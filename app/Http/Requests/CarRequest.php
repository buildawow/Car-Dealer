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
        return auth()->check();
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'brand'             =>      ['required', 'string'],
            'model'             =>      ['required', 'string'],
            'year'              =>      ['required', 'string'],
            'price'             =>      ['required', 'string'],
            'plates'            =>      ['required', 'string'],
            'availability'      =>      ['required', 'boolean']
        ];
    }
}
