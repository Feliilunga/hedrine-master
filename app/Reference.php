<?php

namespace App;
use App\User;


use Illuminate\Database\Eloquent\Model;

class Reference extends Model
{
     protected $fillable = [
        'id','title', 'authors','year','edition','url','user_id'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function dinteractions()
    {
        return $this->belongsToMany(Dinteraction::class,'dinteraction_has_references','reference_id', 'dinteraction_id');
    }

    public function hinteractions()
    {
        return $this->belongsToMany(Hinteraction::class,'hinteraction_has_references','reference_id', 'hinteraction_id');
    }

    public function getname()

    {

    }
}
