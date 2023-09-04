<?php

namespace App\Http\Requests\User;

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

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array|string>
     */
    public function rules(): array
    {
        return [
            'name' => 'string|required',
            'email' => 'email|required',
            'street' => 'string|required',
            'number' =>'string|required'
        ];
    }
    public function messages()
    { 
        return[
           'name.string'=> 'Esse campo é obrigatório!!',
           'email'=> 'Esse campo é obrigatório!!',
           'street.string'=>'Esse campo é obrigatório!!',
           'number.string'=>'Esse campo é obrigatório!!'

        ];
    }

}


