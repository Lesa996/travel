<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Putovanja extends Model
{
//    ODVOJI GRUPU
    protected $fillable = [
        'naziv', 'status', 'cena_od', 'precrtana_cena', 'broj_dana','broj_noci',
        'vrsta_prevoza','obroci','grupa','drzava','grad',
    ];

    public $timestamps = true;
}
