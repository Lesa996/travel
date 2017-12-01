<?php

namespace App;

use App\Models\Post;
use Illuminate\Database\Eloquent\Model;

class Putovanja extends Model
{
//    ODVOJI GRUPU
    protected $fillable = [
        'naziv', 'status', 'cena_od', 'precrtana_cena', 'broj_dana','broj_noci',
        'vrsta_prevoza','obroci','grupa','drzava','grad','lat','lng','glavni_slajder','slajder'
    ];
    protected $table = 'putovanja';

    public $timestamps = true;

    public function opis()
    {
        return $this->hasOne('App\OpisPutovanje','putovanje_id');
    }
    public function gallery()
    {
        return $this->morphMany('\App\Image', 'imageable')->where('avatar', false);
    }
    public function cover()
    {
        return $this->morphOne('\App\Image', 'imageable')->where('avatar', true);
    }
    public function plan()
    {
        return $this->hasMany('App\PlanPuta','putovanje_id');
    }
    public function cenovnik()
    {
        return $this->hasMany('App\Cenovnik','putovanje_id');
    }
    public function cenovnikGroup()
    {
        return $this->hasMany('App\Cenovnik');
    }
    public function izlet()
    {
        return $this->belongsToMany('App\Izlet','izlet_putovanje','putovanje_id');
    }
    public function blog()
    {
        return $this->belongsToMany(Post::class,'blog_putovanje','putovanje_id');
    }
}
