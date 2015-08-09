<?php namespace Mistress;

use Illuminate\Database\Eloquent\Model;

class Timer extends Model {

    protected $table    = 'timers';
    protected $fillable = ['name', 'description', 'duration', 'sub_visible'];
    protected $dates    = ['duration'];
    
    public function scopeVisible($query)
    {
        return $query->where('sub_visible', '=', true);
    }
    
    public function scopeInvisible($query)
    {
        return $query->where('sub_visible', '=', false);
    }
}
