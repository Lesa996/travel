<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PlanPuta extends Model
{
    protected $fillable = [
        'dan', 'opis', 'putovanje_id',
    ];
    protected $table = 'plan_puta';

    public $timestamps = true;
}
