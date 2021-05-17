<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AtcLevel4 extends Model
{
    // const TABLE_NAME = "atc_level4s";

    // const CODE_COL = "code";
    // const NAME_COL = "name";
    // const ATC_PARENT_LEVEL_COL = "atc_level3_id";

    // protected $table = AtcLevel4::TABLE_NAME;

    // protected $fillable = [
    //     AtcLevel4::CODE_COL,
    //     AtcLevel4::NAME_COL,
    //     AtcLevel4::ATC_PARENT_LEVEL_COL
    // ];

    protected $fillable = [
        'id', 'code', 'name', 'atc_level3_id'
    ];

    public function atc_level3()
    {
        return $this->belongsTo(AtcLevel3::class);
    }

    public function atcLevel4sDrugs (){

        return $this->hasMany(AtcLevel4Drug::class,'atc_level4_id');
    }
}
