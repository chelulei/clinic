<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Teeth extends Model
{
    protected $fillable = [
        'name'
    ];

    public function patient()
    {

        return $this->belongsToMany(Patient::class, 'patient_teeth');
    }


}
