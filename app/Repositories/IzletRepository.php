<?php

namespace App\Repositories;

use App\Izlet;
use App\Models\Post;
use App\Models\Tag;
use App\Models\Comment;

class IzletRepository extends BaseRepository
{
    /**
     * The Tag instance.
     *
     * @var \App\Models\Tag
     */
    protected $tag;

    /**
     * The Comment instance.
     *
     * @var \App\Models\Comment
     */
    protected $comment;

    /**
     * Create a new BlogRepository instance.
     *
     * @param  \App\Models\Post $post
     * @param  \App\Models\Tag $tag
     * @param  \App\Models\Comment $comment
     * @return void
     */
    public function __construct(Izlet $post, Tag $tag, Comment $comment)
    {
        $this->model = $post;
        $this->tag = $tag;
        $this->comment = $comment;
    }

    /**
     * Create or update a post.
     *
     * @param  \App\Models\Post $post
     * @param  array  $inputs
     * @param  integer  $user_id
     * @return \App\Models\Post
     */
    protected function savePost($post, $inputs, $user_id = null)
    {
        $post->title = $inputs['title'];
        $post->summary = $inputs['summary'];
        $post->content = $inputs['content'];
        $post->slug = $inputs['slug'];
        $post->active = isset($inputs['active']);
        if ($user_id) {
            $post->user_id = $user_id;
        }
        $post->save();

        return $post;
    }

    /**
     * Create a query for Post.
     *
     * @return Illuminate\Database\Eloquent\Builder
     */
    protected function queryActiveWithUserOrderByDate()
    {
        return $this->model
            ->select('id', 'created_at', 'updated_at', 'title', 'slug', 'user_id', 'summary')
            ->whereActive(true)
            ->with('user')
            ->latest();
    }

    /**
     * Get post collection.
     *
     * @param  int  $n
     * @return Illuminate\Support\Collection
     */
    public function getActiveWithUserOrderByDate($n)
    {
        return $this->queryActiveWithUserOrderByDate()->paginate($n);
    }

    /**
     * Get post collection with tag.
     *
     * @param  int  $n
     * @param  int  $id
     * @return Illuminate\Support\Collection
     */
    public function getActiveWithUserOrderByDateForTag($n, $id)
    {
        return $this->queryActiveWithUserOrderByDate()
            ->whereHas('tags', function ($q) use ($id) {
                $q->where('tags.id', $id);
            })->paginate($n);
    }

    /**
     * Get search collection.
     *
     * @param  int  $n
     * @param  string  $search
     * @return Illuminate\Support\Collection
     */
    public function search($n, $search)
    {
        return $this->queryActiveWithUserOrderByDate()
            ->where(function ($q) use ($search) {
                $q->where('summary', 'like', "%$search%")
                    ->orWhere('content', 'like', "%$search%")
                    ->orWhere('title', 'like', "%$search%");
            })->paginate($n);
    }

    /**
     * Get post collection.
     *
     * @param  int     $n
     * @param  int     $user_id
     * @param  string  $orderby
     * @param  string  $direction
     * @return Illuminate\Support\Collection
     */
    public function getPostsWithOrder($n, $user_id = null, $orderby = 'created_at', $direction = 'desc')
    {
        $query = $this->model
            ->select('izlets.id', 'izlets.created_at', 'title', 'izlets.seen', 'active', 'user_id', 'slug', 'username')
            ->join('users', 'users.id', '=', 'izlets.user_id')
            ->orderBy($orderby, $direction);

        if ($user_id) {
            $query->where('user_id', $user_id);
        }

        return $query->paginate($n);
    }

    /**
     * Get post collection with post slug.
     *
     * @param  string  $slug
     * @return array
     */
    public function getPostBySlug($slug)
    {
        $post = $this->model->with('user', 'tags')->whereSlug($slug)->firstOrFail();

        $comments = $this->comment
            ->wherePostId($post->id)
            ->with('user')
            ->whereHas('user', function ($q) {
                $q->whereValid(true);
            })
            ->get();

        return compact('post', 'comments');
    }

    /**
     * Get post collection.
     *
     * @param  \App\Models\Post $post
     * @return array
     */
    public function getPostWithTags($post)
    {
        $tags = [];

//        foreach ($post->tags as $tag) {
//            array_push($tags, $tag->tag);
//        }

        return compact('post', 'tags');
    }

    /**
     * Get post collection.
     *
     * @param  int  $id
     * @return array
     */
    public function getByIdWithTags($id)
    {
        return $this->model->findOrFail($id);
    }

    /**
     * Update a post.
     *
     * @param  array  $inputs
     * @param  \App\Models\Post $post
     * @return void
     */
    public function update($inputs, $post)
    {
        $post = $this->savePost($post, $inputs);
        $post->putovanje()->detach();
        $post->putovanje()->attach($inputs['putovanja']);


    }

    /**
     * Update "seen" in post.
     *
     * @param  array  $inputs
     * @param  int    $id
     * @return void
     */
    public function updateSeen($inputs, $id)
    {
        $post = $this->getById($id);

        $post->seen = $inputs['seen'] == 'true';

        $post->save();
    }

    /**
     * Update "active" in post.
     *
     * @param  array  $inputs
     * @param  int    $id
     * @return void
     */
    public function updateActive($inputs, $id)
    {
        $post = $this->getById($id);

        $post->active = $inputs['active'] == 'true';

        $post->save();
    }

    /**
     * Create a post.
     *
     * @param  array  $inputs
     * @param  int    $user_id
     * @return void
     */
    public function store($inputs, $user_id)
    {
        $post = $this->savePost(new $this->model, $inputs, $user_id);
        $post->putovanje()->attach($inputs['putovanja']);
        // Tags gestion
//        if (array_key_exists('tags', $inputs) && $inputs['tags'] != '') {
//            $tags = explode(',', $inputs['tags']);
//
//            foreach ($tags as $tag) {
//                $tag_ref = $this->tag->whereTag($tag)->first();
//                if (is_null($tag_ref)) {
//                    $tag_ref = new $this->tag;
//                    $tag_ref->tag = $tag;
//                    $post->tags()->save($tag_ref);
//                } else {
//                    $post->tags()->attach($tag_ref->id);
//                }
//            }
//        }

        // Maybe purge orphan tags...
    }

    /**
     * Destroy a post.
     *
     * @param  \App\Models\Post $post
     * @return void
     */
    public function destroy($post)
    {
//        $post->tags()->detach();

        $post->delete();
    }

    /**
     * Get post slug for comment.
     *
     * @param  int  $comment_id
     * @return string
     */
    public function getSlug($comment_id)
    {
        return $this->comment->findOrFail($comment_id)->post->slug;
    }

    /**
     * Get tag name by id.
     *
     * @param  int  $tag_id
     * @return string
     */
    public function getTagById($tag_id)
    {
        return $this->tag->findOrFail($tag_id)->tag;
    }
}
