<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AtcLevel1 extends Model
{
    const TABLE_NAME = "atc_level1s";

    const CODE_COL = "code";
    const NAME_COL = "name";

    protected $table = AtcLevel1::TABLE_NAME;

    protected $fillable = [
        
        AtcLevel1::CODE_COL,
        AtcLevel1::NAME_COL
    ];

    public function atc_level2s()
    {
        return $this->hasMany(AtcLevel2::class);
    }
}
