<?php namespace Mistress;

use Illuminate\Database\Eloquent\Model;

class Count extends Model {

    protected $table    = 'counts';
    protected $fillable = ['name', 'description', 'count'];

}
