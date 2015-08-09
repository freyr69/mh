<?php namespace Mistress;

use Illuminate\Database\Eloquent\Model;

class Confession extends Model {

    protected $table    = 'confessions';
    protected $fillable = ['description','confirmed'];

    public function scopeConfirmed($query)
    {
        return $query->where('confirmed', '=', true);
    }
    
    public function scopeUnconfirmed($query)
    {
        return $query->where('confirmed', '=', false);
    }
}
