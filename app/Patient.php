<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Patient extends Model
{
    //
    //
    protected $fillable = [
        'name',
        'age'  ,
        'sex',
        'status',
        'address',
        'date_birth',
        'weight',
        'height',
        'course',
        'year',
        'religion',
        'name2',
        'contact',
        'address2',
        'others',
        'allergies',
        'illness',
        'immune',
        'others2',
        'medics',
        'hospital'
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

    public function histories()
    {
        return $this->belongsToMany(History::class,'history_patient','patient_id', 'history_id');
    }
    public function immunizations()
    {
        return $this->belongsToMany(Immunization::class,'immunize_patient','patient_id', 'immunize_id');
    }
}
