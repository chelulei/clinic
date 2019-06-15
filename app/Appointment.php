<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
class Appointment extends Model
{
    //
    protected $fillable = ['user_id','patient_id','date','time'];

    public  function user(){

        return $this->belongsTo(User::class);
    }

     public function patient()
    {
        return $this->belongsTo(Patient::class,'patient_id');
    }
}
