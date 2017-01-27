<?php

namespace App;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
    protected $fillable = ['nome', 'sexo', 'data_nascimento', 'cpf', 'rg', 'profissao',
        'telefone', 'celular', 'endereco_id'];

    protected $dates = ['data_nascimento'];

    public function getDataNascimentoAttribute($data)
    {
        return $data ? Carbon::createFromFormat('Y-m-d H:i:s', $data)->format('d/m/Y') : null;
    }

    public function setDataNascimentoAttribute($data)
    {
        if ($data) {
            return $this->attributes['birthday'] = Carbon::createFromFormat('d/m/Y', $data)->format('Y-m-d');
        }
    }

    public function endereco()
    {
        return $this->belongsTo(Endereco::class);
    }
}
