<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class DoctorRequest extends FormRequest
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
            'name' => 'required',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:8|confirmed',
            'cpf' => 'required',
            'crm' => 'required',
            'rg' => 'required',
            'estado_civil' => 'required',
            'nacionalidade' => 'required',
            'naturalidade' => 'required',
            'banco' => 'required',
            'agencia' => 'required',
            'conta' => 'required',
            'endereco' => 'required',
            'telefone' => 'required',
            'local_servico' => 'required',
            'servico_prestado' => 'required',
            'servico_cnpj' => 'required',
            'servico_endereco' => 'required',
            'servico_telefone' => 'required',
        ];
    }

    public function messages()
    {
        return [
            'name.required' => 'Informe o nome do Médico',
            'cpf.required' => 'Informe o CPF',
            'crm.required' => 'Informe o CRM',
            'rg.required' => 'Informe o RG',
            'estado_civil.required' => 'Informe o Estado Civil',
            'nacionalidade.required' => 'Informe a nacionalidade',
            'naturalidade.required' => 'Informe o naturalidade',
            'banco.required' => 'Informe o Banco',
            'agencia.required' => 'Informe a Agência',
            'conta.required' => 'Informe a Conta',
        ];
    }
}
