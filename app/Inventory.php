<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Inventory extends Model
{
    //
    protected $fillable=['user_id','name','slug','quantity','body'];


    // public function getRouteKeyName()
    // {
    //     return 'slug';
    // }

     /**
     * Boot the model.
     */
    protected static function boot()
    {
        parent::boot();

        static::created(function ($inventory) {

           $inventory->update(['slug' =>$inventory->name]);

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

    public function scopeLatestFirst($query)
    {
        return $query->orderBy('created_at', 'desc');
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }


}
