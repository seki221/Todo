<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class TodoRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return false;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'index' => 'required',
            'content' => 'integer|min:0|max:100',
            'add' => 'required',
            'creat' => 'required',
            'delete' => 'required',
            'remove' => 'required',

        ];
    }
}
