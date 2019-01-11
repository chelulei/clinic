<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    //
    protected $fillable = ['title'];

    public function employees()
    {
        return $this->hasMany(Employee::class);
    }
}
