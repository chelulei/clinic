<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    //

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name','username','service_id','slug','email','password','image',
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


    public function getRole()
    {
        if ( ! $this->getAttribute('service_id')) {
            return null;
        }
        return $this->getAttribute('service');
    }


    public function service()
    {
        return $this->belongsTo(Service::class);
    }

}
