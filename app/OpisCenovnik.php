<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class OpisCenovnik extends Model
{
    protected $fillable = [
        'napomena_cenovnik',  'obuhvata', 'neobuhvata', 'dinamika_placanja','nacin_placanja','nacin_prijave','cenovnik_id'
    ];
    protected $table = 'opis_cenovnik';

    public $timestamps = true;
}
