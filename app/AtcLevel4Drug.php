<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AtcLevel4Drug extends Model
{
    //table intermédiaire
    protected $fillable = [
        'atc_level4_id','drug_id', 'drug_code'
    ];

    public function atc_level4 () {
        return $this->belongsTo(AtcLevel4::class, 'atc_level4_id');
        
    }
   
    public function drugs(){
        return $this->belongsTo(Drug::class,'drug_id');
        return $this->belongsTo(Drug::class,'drug_code');
    }
}
