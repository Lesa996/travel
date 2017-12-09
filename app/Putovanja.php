<?php

namespace App;

use Nicolaslopezj\Searchable\SearchableTrait;
use App\Models\Post;
use Illuminate\Database\Eloquent\Model;

class Putovanja extends Model
{
    use SearchableTrait;
//    ODVOJI GRUPU
    protected $fillable = [
        'naziv', 'status', 'cena_od', 'precrtana_cena', 'broj_dana','broj_noci',
        'vrsta_prevoza','obroci','grupa','drzava','grad','lat','lng','glavni_slajder',
        'slajder','piktogram','cena_do_vreme','redosled',
    ];
    protected $table = 'putovanja';

    public $timestamps = true;

    /**
     * Searchable rules.
     *
     * @var array
     */
    protected $searchable = [
        /**
         * Columns and their priority in search results.
         * Columns with higher values are more important.
         * Columns with equal values have equal importance.
         *
         * @var array
         */
        'columns' => [
            'putovanja.naziv' => 10,
            'cenovnik.datum_od' => 5,
            'cenovnik.datum_do' => 5,

        ],
        'joins' => [
            'cenovnik' => ['putovanja.id','cenovnik.putovanje_id'],
        ],
    ];
    public function opis()
    {
        return $this->hasOne('App\OpisPutovanje','putovanje_id');
    }
    public function opisCenovnik()
    {
        return $this->hasOne(OpisCenovnik::class,'putovanje_id');
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
