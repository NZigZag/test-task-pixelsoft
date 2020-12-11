<?php

namespace App\Repositories\Eloquent;

use App\Models\Post;
use App\Models\User;
use App\Repositories\Interfaces\PostRepositoryInterface;
use App\Support\Collection;

class EloquentPostRepository implements PostRepositoryInterface
{
    /**
     * @var Post
     */
    protected $post;

    /**
     * Sort field
     *
     * @var string
     */
    public $sortBy = 'published_at';

    /**
     * Sorting type
     *
     * @var string
     */
    public $sortOrder = 'asc';

    /**
     * @var int
     */
    public $perPage = 12;

    /**
     * EloquentPostRepository constructor
     *
     * @param Post $post
     */
    public function __construct(Post $post)
    {
        $this->post = $post->with('user')
                           ->cacheTags(["all:posts"])
                           ->get();
    }

    /**
     * Get the posts with pagination
     *
     * @param null $sortOrder
     * @param null|int $perPage
     * @return mixed
     */
    public function paginated($sortOrder = null, $perPage = null)
    {
        $sortOrder = $sortOrder ?? $this->sortOrder;
        $typeSort = ($sortOrder === 'asc') ? false : true;

        return (new Collection($this->post))->sortBy($this->sortBy, SORT_REGULAR, $typeSort)
                                            ->paginate($perPage ?? $this->perPage);
    }

    /**
     * Get all the posts by user
     *
     * @param User $user
     * @param null|int $perPage
     * @return mixed
     */
    public function getByUser(User $user, $perPage = null)
    {
        return (new Collection($this->post))->where('user_id' , $user->id)
                                            ->paginate($perPage);
    }

    /**
     * Creating a new post
     *
     * @param array $post
     * @return mixed
     */
    public function create(array $post)
    {
        return Post::create($post);
    }
}
