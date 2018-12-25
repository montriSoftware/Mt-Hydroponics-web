<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class GrowthTables extends Model
{
    public function greenHouse()
    {
        return $this->belongsTo('App\GreenHouse');
    }
}
