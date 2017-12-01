<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Presenters\DatePresenter;
use App\Models\User;
use App\Models\Tag;
use App\Models\Comment;

class Izlet extends Model
{
    use DatePresenter;

    /**
     * One to Many relation
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function user()
    {
        return $this->belongsTo(User::class);
    }


    public function tags()
    {
        return $this->belongsToMany(Tag::class);
    }

    /**
     * One to Many relation
     *
     * @return \Illuminate\Database\Eloquent\Relations\hasMany
     */
    public function comments()
    {
        return $this->hasMany(Comment::class);
    }
    public function putovanje()
    {
        return $this->belongsToMany('App\Putovanja','izlet_putovanje','izlet_id','putovanje_id');
    }
}
