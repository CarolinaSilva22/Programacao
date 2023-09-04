<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UserStoreRequest extends FormRequest
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
        'nome' => 'required|string|min:5',
        'telefone' => 'required|min:9|max:15',
        'email' => 'required|email',    //|unique:site_contatos' para deixar o campo unico
        'motivo_contato' => 'required',
        'mensagem' => 'required|max:200'
            
        ];
    }
    public function messages()
    { 
        return[
           'required'=> 'Esse campo (:attribute) é obrigatório!!',
           'nome.string'=> 'Tem que ser caracter!!',
           'nome.min'=> 'Tem que ter no mínimo 5 caracteres!!',
           'telefone.max'=> 'Esse campo tem que ser um telefone válido!!',
           'telefone.min'=> 'Esse campo tem que ser um telefone válido!!',
           'email.email'=> 'Esse campo tem que ser um email válido!!',
           'mensagem.max'=>'Ultrapassou o limite de caracter!!'


        ];
    }

}



