<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class statu extends Model
{

    protected $fillable = [
        'peste',
        'id_pes'
    ];

    public function Pessoa(){
        return $this->belongsTo(Pessoa::class, 'id_pes');
    }
}
