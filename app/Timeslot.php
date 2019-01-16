<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Timeslot extends Model
{
    //
    protected $fillable = [
        'user_id',
        'time',
        'description'];


    public  function user(){

        return $this->belongsTo(User::class);
    }
}
