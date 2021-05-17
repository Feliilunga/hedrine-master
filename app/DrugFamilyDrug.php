<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DrugFamilyDrug extends Model
{
    //table intermédiaire
    protected $fillable = [
        'drug_family_id','drug_id'
    ];

    public function drugsFamilies(){
        return $this->belongTo(DrugFamily::class,'drug_family_id');
    }
   
    public function drugs(){
        return $this->belongTo(Drug::class,'drug_id');
    }
}
