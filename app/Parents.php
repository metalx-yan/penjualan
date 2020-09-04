<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Parents extends Model
{
    protected $guarded = [];

    public function increments()
    {
        return $this->hasMany(Increment::class);
    }
}
