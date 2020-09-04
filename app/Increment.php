<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Increment extends Model
{
    protected $guarded = [];

    public function parents()
    {
        return $this->belongsTo(Parents::class);
    }
}
