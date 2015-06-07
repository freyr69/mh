<?php namespace Mistress;

use Illuminate\Database\Eloquent\Model;

class Profile extends Model {

	protected $table = 'profiles';
        protected $fillable = ['about','gender','picture'];

}
