<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class userRequest extends FormRequest
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
            'name'=>'required|min:2',
            'email'=>'required|email',
            'password'=>'required|min:3',
        ];
    }

    public function messages(){
        return [
            'name.required'=>'Ad daxil etmədiniz',
            'name.min'=>'Ad minimum iki simvoldan ibarət olmalıdır',
            'email.required'=>'Email daxil etmədiniz',
            'email.email'=>'Yanlış email formatı',
            'password.required'=>'Parol daxil etmədiniz',
            'password.min'=>'Parol minimum üç simvoldan ibarət olmalıdır',
        ];
    }
}
