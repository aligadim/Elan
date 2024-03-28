<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class profilRequest extends FormRequest
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
           'password'=>'required',
           'name'=>'required|min:3|max:15',
           'email'=>'required|email',
           
           

        ];
    }

    public function messages(){
        return[
            'password.required'=>'Cari parol daxil etmədiniz',
            'name.required'=>'Ad daxil etmədiniz',
            'name.max'=>'Ad maxsimum 15 simvol olmalıdır',
            'name.min'=>'Ad minimum 3 simvol olmalıdır',
            'email.required'=>'Email daxil etmediniz',
            'email.email'=>'yanlis email formati',
           
        ];
    }
}
