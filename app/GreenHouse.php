<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class GreenHouse extends Model
{
    public function growthTables()
    {
        return $this->hasMany('App\GrowthTables');
    }
}
