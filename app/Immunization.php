<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Immunization extends Model
{
    //
    public function patients()
    {
        return $this->hasMany(Patient::class);
    }
}
