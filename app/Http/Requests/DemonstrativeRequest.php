<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class DemonstrativeRequest extends FormRequest
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
            'socio' => 'required',
            'empresa' => 'required',
            'tomador' => 'required',
            'pagamento_date' => 'required',
            'valor_bruto' => 'required',
            'saldo' => 'required',
            'date_emissao' => 'required',
        ];
    }

    public function messages()
    {
        return [
            'socio.required' => 'INFORME O SÓCIO(A) PRESTADOR(A) DO SERVIÇO',
            'empresa.required' => 'INFORME A EMPRESA',
            'tomador.required' => 'INFORME O TOMADO DO SERVIÇO',
            'pagamento_date.required' => 'INFORME O VALOR DO PAGAMENTO',
            'valor_bruto.required' => 'INFORME O VALOR BRUTO',
            'saldo.required' => 'INFORME O SALDO',
            'date_emissao.required' => 'INFORME A DATA DE EMISSÃO',
        ];
    }
}
