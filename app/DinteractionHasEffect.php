<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DinteractionHasEffect extends Model
{
    //table intermédiaire
    protected $fillable = [
        'effect_id','dinteraction_id'
    ];
    //Permet de gerer la relation la relation 1 à plusieurs
    public function effect(){
        return $this->belongTo(Effect::class,'effect_id');
    }
    //Permet de gerer la relation la relation 1 à plusieurs
    public function dinteraction(){
        return $this->belongTo(Dinteraction::class,'dinteraction_id');
    }
}
