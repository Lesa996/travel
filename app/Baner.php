<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Baner extends Model
{
    protected $fillable = [
        'url',  'slika', 'veliki','mali',
    ];
    public $timestamps = true;
}
