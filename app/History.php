<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class History extends Model
{
    //
    public function patients()
    {
        return $this->hasMany(Patient::class);
    }

}
