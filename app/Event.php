<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    //
    protected $fillable = ['user_id','title','start_date','end_date'];


    public  function user(){

        return $this->belongsTo(User::class);
    }
}
