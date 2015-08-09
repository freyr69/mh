<?php namespace Mistress;

use Illuminate\Database\Eloquent\Model;

class Count extends Model {

    protected $table    = 'counts';
    protected $fillable = ['name', 'description', 'count', 'sub_visible'];

    public function scopeVisible($query)
    {
        return $query->where('sub_visible', '=', true);
    }
    
    public function scopeInvisible($query)
    {
        return $query->where('sub_visible', '=', false);
    }
}
