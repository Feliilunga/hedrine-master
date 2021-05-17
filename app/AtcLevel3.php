<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AtcLevel3 extends Model
{
    protected $fillable = [
        'id', 'code', 'name', 'atc_level2_id'
    ];

    public function atc_level4s()
    {
        return $this->hasMany(AtcLevel4::class);
    }

    public function atc_level2()
    {
        return $this->belongsTo(AtcLevel2::class);
    }
}
