<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\DrugFamily;
use App\Atc;
use Illuminate\Notifications\Notifiable;

class Drug extends Model
{
    use Notifiable;

    protected $fillable = [
        'id','name', 'user_id'
    ];
    /**
     * Get the drugs for the blog drug_families.
     */
 

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function drugs()
    {
        return $this->belongsTo(Drug::class,'drug_id');

    }
    
    public function targets()
    {
        return $this->belongsToMany(Target::class, 'dinteractions')->withTimestamps();
    }

    public function dinteractions()
    {
        return $this->hasMany(Dinteraction::class);
    }

    public function routesDrugs (){

        return $this->hasMany(RouteDrug::class,'drug_id');
    }

    public function atcLevel4sDrugs (){

        return $this->hasMany(AtcLevel4Drug::class,'drug_id');
    }

    public function drugFamiliesDrugs (){

        return $this->hasMany(DrugFamilyDrug::class,'drug_id');
    }

}
