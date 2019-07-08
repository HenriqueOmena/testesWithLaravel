<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Orgao extends Model
{
    protected $table = 'orgao';
    protected $fillable = ['nome', 'codigo'];
    public function militante()
    {
        return $this->belongsToMany('App\Militante', 'militante_orgao', 'orgao_id', 'militante_id' );
    }
}
