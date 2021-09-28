<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class TeacherRequest extends FormRequest
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
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users,id,'.$this->id],
            'job'      => 'required',
            'bio'      => 'required',
            'image'   =>['nullable','file','mimes:jpg,png,,jpeg']
        ];
    }

    public function message()
    {
        return [
            'name.required'=>__('validation.required'), 
            'email.required'=>__('validation.required'), 
            'job.required'=>__('validation.required'), 
            'bio.required'=>__('validation.required'), 
            'name.string'=>__('validation.string'), 
            'email.string'=>__('validation.string'), 
            'name.max'=>__('validation.max'), 
            'emil.string'=>__('validation.email'), 
            'email.max'=>__('validation.max'),
            'email.unique'=>__('validation.max'),
            'image.nullable'=>__('validation.nullable'),
            'image.file'=>__('validation.file'),
            'image.mimes'=>__('validation.mimes'),
        ];
    }
}
