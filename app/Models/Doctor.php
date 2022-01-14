<?php

namespace App\Models;

use App\User;
use Illuminate\Database\Eloquent\Model;

class Doctor extends Model
{
    protected $fillable = [
        'user_id',
        'cpf',
        'crm',
        'rg',
        'estado_civil',
        'nacionalidade',
        'naturalidade',
        'banco',
        'agencia',
        'conta',
        'endereco',
        'telefone',
        
        'local_servico',
        'servico_prestado',
        'servico_cnpj',
        'servico_endereco',
        'servico_telefone',
        'servico_email',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
        # code...
    }
}
