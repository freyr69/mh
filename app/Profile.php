<?php

namespace Mistress;

use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{

    protected $table    = 'profiles';
    protected $fillable = ['about', 'play_name', 'real_name', 'push_id', 'about', 'gender', 'picture'];

}
