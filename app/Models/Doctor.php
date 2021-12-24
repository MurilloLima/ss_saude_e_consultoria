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
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
        # code...
    }
}
