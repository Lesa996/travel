<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class OpisCenovnik extends Model
{
    protected $fillable = [
        'napomena',  'obuhvata', 'neobuhvata', 'dinamika_placanja','nacin_placanja','nacin_prijave'
    ];

    public $timestamps = true;
}
