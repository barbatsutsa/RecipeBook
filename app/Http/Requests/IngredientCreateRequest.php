<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class IngredientCreateRequest extends FormRequest
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
            'recipe_id'   => ['required', 'string'],
            'product_id'  => ['required','integer'],
            'measure_id'  => ['required','integer'],
            'amount'      => ['required','string', 'max:10'],
        ];
    }
}
