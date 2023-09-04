<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class LoginRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'usuario' => 'required|email',
            'senha' => 'required'
            
        ];
    }
    public function messages()
    { 
        return[
           'required'=> 'Esse campo (:attribute) é obrigatório!!',
           'usuario.email'=> 'Tem que ser um email!!',
          
        ];
    }

}



