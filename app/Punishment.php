<?php

namespace Mistress;

use Illuminate\Database\Eloquent\Model;

class Punishment extends Model
{

    protected $table    = 'punishments';
    protected $fillable = ['name', 'description','severity'];

}