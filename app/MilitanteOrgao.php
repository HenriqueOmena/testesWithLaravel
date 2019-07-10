<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class MilitanteOrgao extends Model
{
    protected $table = 'militante_orgao';
    protected $fillable = ['data_inicio', 'data_fim'];

    public function cargo(){
        return $this->belongsToMany('App\Cargo', 'militante_orgao_cargo', 'militante_orgao_id', 'cargo_id');
    }
}
