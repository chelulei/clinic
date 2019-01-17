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
        'name','username','slug','email','address','phone','password','image'
    ];


    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function getNameAttribute($value)
    {
        return ucwords($value);
    }

    public function getRouteKeyName()
    {
        return 'slug';
    }


    public function getImageUrlAttribute($value){

        $imageUrl="";

        if(! is_null($this->image)){

            $imagePath= public_path() . "/img/" . $this->image;

            if(file_exists($imagePath))  $imageUrl = asset("img/" . $this->image);

        }

        return   $imageUrl;
    }

//    public function setPasswordAttribute($password)
//    {
//        if ( $password !== null & $password !== "" )
//        {
//            $this->attributes['password'] = Hash::make($password);
//        }
//    }

    public function patients()
    {
        return $this->belongsToMany(User::class);
    }

    public function prescriptions()
    {
        return $this->hasMany(Prescription::class);
    }

    public  function appointments(){

        return $this->hasMany(Appointment::class);
    }
    public  function slots(){

        return $this->hasMany(Timeslot::class);
    }


}
