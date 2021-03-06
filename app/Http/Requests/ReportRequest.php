<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ReportRequest extends FormRequest
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
            'date_start' => 'required',
            'date_end' => 'required'
        ];
    }

    public function messages()
    {
        return [
            'date_start.required' => 'Infome a data de início',
            'date_end.required' => 'Infome a data de final'
        ];
    }
}
