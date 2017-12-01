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
    public function smestaj()
    {
        return $this->belongsTo('App\Smestaj');
    }
    public function putovanje()
    {
        return $this->belongsTo('App\Putovanja','putovanje_id');
    }
}
