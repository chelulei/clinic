<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Patient extends Model
{
    //
    //
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
