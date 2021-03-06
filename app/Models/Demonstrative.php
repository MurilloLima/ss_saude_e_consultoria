<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Demonstrative extends Model
{
    protected $fillable = [
        'socio',
        'cpf',
        'cnpj',
        'empresa',
        'cpf_cnpj',
        'tomador',
        'taxa_desconto',
        'pagamento_statu',
        'pagamento_date',
        'pagamento_previsao',
        'valor_bruto',
        'saldo',
        'descricao',
        'date_emissao',

        'nome',
        'prestador_cpf',
        'prestador_crm',
        'prestador_rg',
        'estado_civl',
        'endereco',
        'telefone',
        'email',
        'nacionalidade',
        'naturalidade',
        'banco',
        'agencia',
        'conta',
    ];
}
