<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Orgao extends Model
{
    protected $table = 'orgao';
    protected $fillable = ['nome', 'codigo'];
}
