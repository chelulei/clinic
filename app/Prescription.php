<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Prescription extends Model
{
    //
    protected $fillable = [
            'patient_id',
            'date',
            'description',
            'treatment',
            'medicine',
    ];


    public function patients()
    {
        return $this->belongsTo(Patient::class);
    }
}

