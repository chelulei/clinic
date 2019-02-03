<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Inventory extends Model
{
    //
    protected $fillable=['name','quantity','body'];


    public function user()
    {
        return $this->belongsTo(User::class);
    }


}
