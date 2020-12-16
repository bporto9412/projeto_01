<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ClientRequest extends FormRequest
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
            'name' => 'required|max: 50',
            'cpf' => 'required|max: 11',
            'galc' => 'required|max: 50',
            'porta' => 'numeric',
            'speed' => 'required|numeric',
            'adress' => 'required|max: 100',
            'id_user' => '',
        ];
    }

    public function messages()
    {
        return [
            'name' => 'O campo nome do cliente é obrigatório',
            'galc' => 'O campo Galc. é obrigatório',
            'porta' => 'Apenas números',
            'speed' => 'Informe a velocidade que deseja contratar',
            'adress' => 'Informe o endereço para instalação',
            'id_user' => 'Atendente que prestou serviço',
        ];
    }
}
