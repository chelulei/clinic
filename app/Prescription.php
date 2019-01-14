<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Prescription extends Model
{
    //
    protected $fillable = [
             'patient_id',
              'user_id',
              'age',
              'bp',
              'pr',
              'rr',
              'temp',
              'wt',
              'hpi',
              'assessment'
    ];


    public function patient()
    {
        return $this->belongsTo(Patient::class,'patient_id');
    }

    public function user()
    {
        return $this->belongsTo(User::class,'user_id');
    }
}

