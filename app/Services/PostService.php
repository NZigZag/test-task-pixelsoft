<?php

namespace App\Services;

use App\Models\User;
use App\Repositories\Interfaces\PostRepositoryInterface;

class PostService
{
    /**
     * @var PostRepositoryInterface
     */
    protected $postRepository;

    /**
     * PostService constructor
     *
     * @param PostRepositoryInterface $postRepository
     */
    public function __construct(PostRepositoryInterface  $postRepository)
    {
        $this->postRepository = $postRepository;
    }

    /**
     * Display of all posts on the main page with pagination
     *
     * @param null|string $sortOrder
     * @param null|int $perPage
     * @return mixed
     */
    public function index($sortOrder= null, $perPage = null)
    {
        return $this->postRepository->paginated($sortOrder, $perPage);
    }

    /**
     * The user's cabinet
     * @param User $user
     * @param null|int $perPage
     * @return mixed
     */
    public function cabinet(User $user, $perPage = null)
    {
        return $this->postRepository->getByUser($user, $perPage);
    }

    /**
     * Saving the post
     *
     * @param array $post
     * @return mixed
     */
    public function store(array $post)
    {
        return $this->postRepository->create($post);
    }
}
