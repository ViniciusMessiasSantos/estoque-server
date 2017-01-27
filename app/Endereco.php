<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Endereco extends Model
{
    protected $fillable = ['rua', 'numero', 'cep', 'bairro', 'cidade', 'estado'];

    public function cliente()
    {
        return $this->hasOne(Cliente::class);
    }
}