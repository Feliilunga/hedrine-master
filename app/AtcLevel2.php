<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AtcLevel2 extends Model
{
    protected $fillable = [
        'id', 'code', 'name', 'atc_level1_id'
    ];

    public function atc_level3s()
    {
        return $this->hasMany(AtcLevel3::class);
    }

    public function atc_level1()
    {
        return $this->belongsTo(AtcLevel1::class);
    }
}
