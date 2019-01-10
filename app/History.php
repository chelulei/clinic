<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class History extends Model
{
    //
    public function patients()
    {
        return $this->belongsToMany(Patient::class,'history_patient','patient_id', 'history_id');
    }

}
