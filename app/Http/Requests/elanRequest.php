<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class elanRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'cat_id'=>'required',
            'citi_id'=>'required',
            'title'=>'required',
            'about'=>'required',
        ];
    }

    public function messages()
    {
        return[
        'cat_id.required'=>'Kategoria daxil etmediz',
        'citi_id.required'=>'Seher daxil etmediz',
        'title.required'=>'Title daxil etmediz',
        'about.required'=>'Haqqinda melumat daxil etmediz',
        ];

    }
}
