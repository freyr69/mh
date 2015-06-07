<?php

namespace Mistress;

use Illuminate\Database\Eloquent\Model;

class Task extends Model
{

    protected $table    = 'tasks';
    protected $fillable = ['name', 'description', 'due_on', 'complete', 'completed_on', 'verified', 'verified_on', 'verified_notes'];
    protected $dates    = ['due', 'completed_on', 'verified_on'];

    public function scopeCompleted($query)
    {
        return $query->where('complete', '=', true);
    }

    public function scopeIncomplete($query)
    {
        return $query->where('complete', '=', false);
    }

    public function scopeVerified($query)
    {
        return $query->where('verified', '=', 2);
    }

    public function scopeUnverified($query)
    {
        return $query->where('verified', '<', 2);
    }

}
