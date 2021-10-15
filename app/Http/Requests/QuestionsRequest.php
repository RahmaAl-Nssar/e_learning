<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class QuestionsRequest extends FormRequest
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
            'content'=>'required|string|min:3|max:255',
            'full_mark'=>'required',
            'correct_answer'=>'required',
            'image'=>'nullable|file|mimes:jpg,png,jpeg'
        ];
    }
}
