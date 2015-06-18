<?php namespace Mistress;

use Illuminate\Database\Eloquent\Model;

class Timer extends Model {

    protected $table    = 'timers';
    protected $fillable = ['name', 'description', 'duration'];
    protected $dates    = ['duration'];
}
