<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cargo extends Model
{
    protected $table = 'cargo';
    protected $fillable = ['descricao'];

    use \Staudenmeir\EloquentHasManyDeep\HasRelationships;

    public function orgao(){
        return $this->hasManyDeep('App\Cargo', ['App\MilitanteOrgao', 'App\MilitanteOrgaoCargo']);
    }

}
