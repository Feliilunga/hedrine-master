<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Route extends Model
{
    public function drugs()
    {
        return $this->belongsToMany(Drug::class, 'drug_id');
    }

    
    public function RoutesDrugs (){

        return $this->hasMany(RouteDrug::class,'route_id');
    }
}
