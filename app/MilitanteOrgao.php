<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class MilitanteOrgao extends Model
{
    protected $table = 'militante_orgao';
    protected $fillable = ['data_inicio', 'data_fim'];
}
