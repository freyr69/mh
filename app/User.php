<?php

namespace Mistress;

use Illuminate\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Auth\Passwords\CanResetPassword;
use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;
use Illuminate\Contracts\Auth\CanResetPassword as CanResetPasswordContract;

class User extends Model implements AuthenticatableContract, CanResetPasswordContract
{

    use Authenticatable,
        CanResetPassword;

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'users';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['name', 'email', 'submissive', 'password'];

    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    protected $hidden = ['password', 'remember_token'];

    public function dom()
    {
        return $this->belongsTo('Mistress\User', 'mistress_id', 'id');
    }

    public function sub()
    {
        return $this->hasOne('Mistress\User', 'mistress_id', 'id');
    }

    public function mood()
    {
        return $this->hasOne('Mistress\Mood', 'user_id', 'id');
    }

    public function profile()
    {
        return $this->hasOne('Mistress\Profile', 'user_id', 'id');
    }

    public function tasks()
    {
        return $this->hasMany('Mistress\Task', 'user_id', 'id');
    }

    public function punishmentList()
    {
        return $this->hasMany('Mistress\Punishment', 'user_id', 'id');
    }

    public function punishments()
    {
        return $this->hasMany('Mistress\AssignedPunishment', 'user_id', 'id');
    }

}
