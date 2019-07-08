<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Militante extends Model
{
    protected $table = 'militante';
    protected $fillable = ['nome', 'num_regional'];

    public function orgao(){
        return $this->belongsToMany('App\Orgao', 'militante_orgao', 'militante_id', 'orgao_id');
    }

}
