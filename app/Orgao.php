<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Orgao extends Model
{

    use \Staudenmeir\EloquentHasManyDeep\HasRelationships;

    protected $table = 'orgao';
    protected $fillable = ['nome', 'codigo'];
    public function militante()
    {
        return $this->belongsToMany('App\Militante', 'militante_orgao', 'orgao_id', 'militante_id' );
    }

    public function cargo()
    {
        return $this->hasManyThrough(
            'App\Cargo',
            'App\MilitanteOrgaoCargo',
            'militante_orgao_id', // Foreign key on cargo table...
            'cargo_id', // Foreign key on posts table...
            'id', // Local key on countries table...
            'id' // Local key on cargo table...
        );
    }

    public function asd()
    {
        return 'asd';
    }

    public function orgaoasd(){
        return $this->hasManyDeep('App\Cargo', ['App\MilitanteOrgao', 'App\MilitanteOrgaoCargo']);
    }

}
