<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CreateValidationRequest extends FormRequest
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
            'name' => 'required|unique:foods',
            //'name' => new Uppercase,
            'count' => 'required|integer|min:0|max:100',
            'category_id' => 'required',
            'image_path' => 'required|mimes:lpg,png,jpeg|max:5048'
        ];
    }
}
