<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Dental extends Model
{


    protected $fillable = [

        'patient_id',
        'user_id',
        'treat',
        'notes',

    ];
    //

    public function patient()
    {
        return $this->belongsTo(Patient::class);
    }


}
