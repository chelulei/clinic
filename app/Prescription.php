<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Prescription extends Model
{
    //
    protected $fillable = [
        'name','username','role','slug','email','password','image',
    ];
}
