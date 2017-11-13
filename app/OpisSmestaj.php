<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class OpisSmestaj extends Model
{
    protected $fillable = [
        'kratak_opis', 'opis', 'adresa', 'link','smestaj_id'
    ];

    public $timestamps = true;
}
