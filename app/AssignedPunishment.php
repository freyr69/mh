<?php

namespace Mistress;

use Illuminate\Database\Eloquent\Model;

class AssignedPunishment extends Model
{
    protected $table = 'assigned_punishment';
    protected $fillable = ['name', 'description', 'severity', 'assigned_on','complete', 'completed_on', 'notes'];
    protected $dates = ['assigned_on', 'completed_on'];

    public function scopeCompleted($query)
    {
        return $query->where('complete', '=', true);
    }

    public function scopeIncomplete($query)
    {
        return $query->where('complete', '=', false);
    }
}