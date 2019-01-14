<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Support\Facades\Hash;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Spatie\Permission\Traits\HasRoles;
class User extends Authenticatable
{
    use Notifiable;
    use HasRoles;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];


    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];



    public function setPasswordAttribute($password)
    {
        if ( $password !== null & $password !== "" )
        {
            $this->attributes['password'] = Hash::make($password);
        }
    }

    public function patients()
    {
        return $this->belongsToMany(User::class);
    }

    public function prescriptions()
    {
        return $this->hasMany(Prescription::class);
    }

    public  function events(){

        return $this->hasMany(Event::class);
    }

}
