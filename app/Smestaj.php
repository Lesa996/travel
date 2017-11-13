<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Smestaj extends Model
{
    protected $fillable = [
        'naziv', 'tip_objekta', 'broj_zvezdica', 'vrsta_soba', 'tip_soba','broj_ljudi',
        'struktura_sobe','sadrzaj_sobe','udaljenost_centar','udaljenost_plaza','udaljenost_stanica',
        'udaljenost_zicara','dodatni_sadrzaj','napomena_hotel','drzava','grad','lat','lng',
    ];

    public $timestamps = true;
}
