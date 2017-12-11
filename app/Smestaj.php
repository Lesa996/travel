<?php

namespace App;

use App\Models\Post;
use Illuminate\Database\Eloquent\Model;

class Smestaj extends Model
{
    protected $fillable = [
        'naziv', 'tip_objekta', 'broj_zvezdica', 'vrsta_soba', 'tip_soba','broj_ljudi',
        'struktura_sobe','sadrzaj_sobe','udaljenost_centar','udaljenost_plaza','udaljenost_stanica',
        'udaljenost_zicara','dodatni_sadrzaj','napomena_hotel','drzava','grad','lat','lng','slajder','piktogram',
        'redosled',
    ];

    public $timestamps = true;
    protected $table = 'smestaj';
    public function opis()
    {
        return $this->hasOne('App\OpisSmestaj');
    }
    public function gallery()
    {
        return $this->morphMany('\App\Image', 'imageable')->where('avatar', false);
    }
    public function cover()
    {
        return $this->morphOne('\App\Image', 'imageable')->where('avatar', true);
    }
    public function cenovnik()
    {
        return $this->hasMany('App\Cenovnik');
    }
    public function blog()
    {
        return $this->belongsToMany(Post::class,'blog_smestaj','smestaj_id');
    }
    public function scopeSearchDrzaca($query, $location)
    {
        if ($location) $query->where('drzava','like',  '%' . $location . '%');
    }
    public function scopeSearchGrad($query, $location)
    {
        if ($location) $query->where('grad', 'like',  '%' .$location . '%');
    }
    public function scopeSearchObjekat($query, $location)
    {
        if ($location) $query->where('tip_objekta','like',  '%' . $location . '%');
    }
    public function scopeSearchSobe($query, $location)
    {
        if ($location){

            $query->where('tip_soba', 'like',  '%' .$location . '%');
        }
    }
    public function scopeSearchDodatno($query, $location)
    {
        if ($location){
            $query->where('dodatni_sadrzaj', 'like',  '%' .$location . '%');
        }
    }
}
