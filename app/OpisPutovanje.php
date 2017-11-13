<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class OpisPutovanje extends Model
{
    protected $fillable = [
        'kratak_opis', 'destinacija', 'napomena', 'dodatna_napomena','rok_prijava',
        'min_putnika','rok_otkaz','organizator','program','licenca','garancija','putovanje_id'
    ];

    public $timestamps = true;
}
