<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Immunization extends Model
{
    //
    public function patients()
    {
        return $this->belongsToMany(Patient::class,'immunize_patient','patient_id', 'immunize_id');
    }
}
