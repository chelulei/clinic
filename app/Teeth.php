<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Teeth extends Model
{
    //
    public function patients()
    {
        return $this->belongsToMany(Patient::class, 'patient_teeth');
    }



}
