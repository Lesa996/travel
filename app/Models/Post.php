<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Presenters\DatePresenter;
use App\Models\User;
use App\Models\Tag;
use App\Models\Comment;

class Post extends Model
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

    /**
     * Many to Many relation
     *
     * @return \Illuminate\Database\Eloquent\Relations\belongToMany
     */
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
        return $this->belongsToMany('App\Putovanja','blog_putovanje','post_id','putovanje_id');
    }
    public function smestaj()
    {
        return $this->belongsToMany('App\Smestaj','blog_smestaj','post_id','smestaj_id');
    }
}
