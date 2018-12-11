<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Camper extends Model
{
    protected $guarded = ['id'];

    /**
     * Get the images for the camper.
     */
    public function images()
    {
        return $this->hasMany('App\Image');
    }

    /**
     * Get the extras for the camper.
     */
    public function extras()
    {
        return $this->hasMany('App\Extra');
    }

    /**
     * Get the specifications for the camper.
     */
    public function specifications()
    {
        return $this->hasMany('App\Specification');
    }

    /**
     * Get the includeds for the camper.
     */
    public function includeds()
    {
        return $this->hasMany('App\Included');
    }
}

