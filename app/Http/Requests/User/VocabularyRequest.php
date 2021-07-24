<?php

namespace App\Http\Requests\User;

use Illuminate\Foundation\Http\FormRequest;

class VocabularyRequest extends FormRequest
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
            'word' => [
                'required',
                'max:40'
            ],

            'sentence' => [
                'required',
                'max:50'
            ],

            'category_id' => [
                'required',
                'exists:categories,id'
            ],
        ];
    }

    /**
     * display error messages
     *
     * @return void
     */
    public function messages()
    {
        return [
            'required' => 'Prerequisite item',
            'max' => 'Please fill out within :max letters',
            'exists' => 'This category is no exist',
        ];
    }
}