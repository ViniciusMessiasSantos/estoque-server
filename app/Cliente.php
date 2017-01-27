<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
    protected $fillable = ['nome', 'sexo', 'data_nascimento', 'cpf', 'rg', 'profissao',
        'telefone', 'celular', 'endereco_id'];

    protected $dates = ['data_nascimento'];

    public function endereco()
    {
        return $this->belongsTo(Endereco::class);
    }
}
