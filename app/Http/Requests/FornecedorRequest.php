<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class FornecedorRequest extends FormRequest
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
            'nome' => 'required|min:5|max:50',
            'site' => 'required',
            'uf' => 'required|min:2|max:2',
            'email' => 'required|email',

        ];
    }
    public function messages()
    { 
        return[
           'required'=> 'Esse campo (:attribute) é obrigatório!!',
           'nome.min'=> 'Tem que ter no mínimo 5 caracteres!!',
           'nome.max'=> 'Ultrapassou o limite de caracter!!',
           'uf.min'=> 'Tem que ter no mínimo 2 caracteres!!',
           'uf.max'=>'Ultrapassou o limite de caracter!!',
           'email.email'=> 'Esse campo tem que ser um email válido!!'
          
          
        ];
    }

}



