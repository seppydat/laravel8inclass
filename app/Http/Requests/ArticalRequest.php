<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ArticalRequest extends FormRequest
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
            'title' => 'min:8|max:100|required',
            'contents' => 'min:8|required'
        ];
    }
}
