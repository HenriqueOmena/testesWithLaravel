<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Militante extends Model
{
    protected $table = 'militante';
    protected $fillable = ['nome', 'num_regional'];
}
