<?php namespace Mistress;

use Illuminate\Database\Eloquent\Model;

class Confession extends Model {

    protected $table    = 'confessions';
    protected $fillable = ['description'];

}
