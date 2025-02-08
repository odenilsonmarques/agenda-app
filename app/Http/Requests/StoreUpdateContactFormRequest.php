<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreUpdateContactFormRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        // por padrao esse return vem false, deve-se trocar para true
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    //aplicando regras de validação
    public function rules()
    {
        return [
            'name' => ['required', 'string', 'max:100'],
            // estamos usando o $this->route('id')] para igonar os campos atuais no form de edição. Email e telefone que estão como unique
            'email' => ['required', 'string', 'unique:contacts,email,' . $this->route('id')],
            'telefone' => ['required', 'string', 'max:15', 'unique:contacts,telefone,' . $this->route('id'), 'regex:/^[0-9]{10,15}$/'],

        ];
    }

    //exibe as mensagem de acordo com a regra de validação
    public function messages()
    {
        return [
            'name.required' => 'O nome é obrigatório.',
            'email.required' => 'O e-mail é obrigatório.',
            'email.email' => 'Insira um e-mail válido.',
            'email.unique' => 'O email informado já está cadastrado',
            'telefone.required' => 'O telefone é obrigatório.',
            'telefone.unique' => 'O telefone informado já está cadastrado',
            'telefone.regex' => 'O telefone deve conter apenas números e ter entre 10 e 15 dígitos.',
            'telefone.max' => 'O telefone deve ter no máximo 15 caracteres.',
        ];
    }
}
