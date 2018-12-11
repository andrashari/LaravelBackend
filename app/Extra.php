<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Extra extends Model
{
    protected $guarded = ['id'];

    public function camper()
    {
        return $this->belongsTo(Camper::class);
    }
}

