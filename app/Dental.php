<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
class Dental extends Model
{


    protected $fillable = [

        'patient_id',
        'user_id',
        'slug',
        'treat',
        'notes',

    ];
    //

     public function getRouteKeyName()
    {
        return 'slug';
    }
        /**
     * Boot the model.
     */
    protected static function boot()
    {
        parent::boot();

        static::created(function ($prescription) {


            $slug = DB::table('patients')->where('id', $prescription->patient_id)->value('type');

            $prescription->update(['slug' => $slug]);


        });
    }

/**
     * Set the proper slug attribute
     *
     * @param string $value
     */
    public function setSlugAttribute($value)
    {
        if (static::whereSlug($slug = str_slug($value))->exists()) {
            $slug = "{$slug}-{$this->id}";
        }
        $this->attributes['slug'] = $slug;
    }

    public function getNameAttribute($value)
    {
        return ucwords($value);
    }

    public function patient()
    {
        return $this->belongsTo(Patient::class);
    }


}
