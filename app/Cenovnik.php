<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cenovnik extends Model
{
    protected $fillable = [
        'smestaj_id',  'putovanje_id', 'tip', 'datum_od','datum_do','cena'
    ];
    protected $table = 'cenovnik';

    public $timestamps = true;
}
