<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pessoa extends Model
{
    protected $fillable = [
        'nome', 'uf', 'telefone', 'endereco', 'cidade', 'complemento', 'numero', 'email', 'comentario', 'imagem'
    ];
    public function satu(){
        return $this->belongsTo(statu::class, 'id_pes');
    }
}
