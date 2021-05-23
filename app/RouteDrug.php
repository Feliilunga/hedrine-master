<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class RouteDrug extends Model
{
     //table intermédiaire
     protected $fillable = [
        'id, route_id','drug_id'
    ];

    public function routes(){
        return $this->belongsTo(Route::class,'route_id');
    }
   
    public function drugs(){
        return $this->belongsTo(Drug::class,'drug_id');
    }

    public function dinteractions (){

        return $this->hasMany(Dinteraction::class,'route_drug_id');
    }
}
