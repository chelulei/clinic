<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Inventory;

class Medicine extends Model
{
    //
    protected $fillable=['user_id','patient_id','med_id','quantity'];


    public function patient()
    {
        return $this->belongsTo(Patient::class);
    }


    public function getMedicineName($id){

         return Inventory::where('id', $id)->pluck('name')->first();

    }


    public function getDateAttribute($value)
    {
        return $this->created_at->toFormattedDateString();
    }


}
