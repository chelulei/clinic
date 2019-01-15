<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    //
    protected $fillable = ['user_id','patient_id','title','date','start_time','finish_time'];


    public  function user(){

        return $this->belongsTo(User::class);
    }
}
