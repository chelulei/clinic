<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name','username','slug', 'email','password','image',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

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

}
