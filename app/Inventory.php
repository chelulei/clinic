<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Inventory extends Model
{
    //
    protected $fillable=['name','quantity','body'];


    public function patient()
    {
        return $this->belongsTo(Patient::class);
    }


}
