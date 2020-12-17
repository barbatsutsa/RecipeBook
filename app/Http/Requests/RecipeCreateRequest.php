<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RecipeCreateRequest extends FormRequest
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
            'name'        => ['required', 'string', 'min:5', 'max:100'],
            'image'       => ['sometimes', 'image', 'mimes:jpeg,bmp,png'],
            'show'        => ['required'],
            'description' => ['required', 'string'],
            'category_id' => ['required','integer'],
            'user_id'     => ['required','integer'],
            'pub_date'    => ['sometimes','timestamp'],
        ];
    }
}
