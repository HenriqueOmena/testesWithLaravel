<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class MilitanteOrgaoCargo extends Model
{
    protected $table = 'militante_orgao_cargo';
    protected $fillable = ['data_inicio', 'data_fim'];
}
