<?php

namespace App\Services;

use App\Repositories\Interfaces\PostRepositoryInterface;
//use Illuminate\Support\Facades\Auth;

class ImportService
{
    /**
     * @var PostRepositoryInterface
     */
    protected $postRepository;

    /**
     * ImportService constructor
     *
     * @param PostRepositoryInterface $postRepository
     */
    public function __construct(PostRepositoryInterface  $postRepository)
    {
        $this->postRepository = $postRepository;
    }

    /**
     * This method gets posts from another site and returns JSON
     *
     * @return array|string
     */
    public function importPosts()
    {
        $urlService = "https://sq1-api-test.herokuapp.com/posts";
        $posts = file_get_contents($urlService, false);

        if (!$posts) {
            return null;
        }

        $posts = json_decode($posts, true)['data'];
        $posts = array_map(function (array $poem) {
            return [
                'title'          => $poem['title'],
                'description'    => $poem['description'],
                'published_at'   => $poem['publication_date'],
                //'user_id'        => Auth::user()->id,
            ];
        }, $posts);

        //\DB::table('posts')->insert($posts);
        foreach ($posts as $post) {
            $this->postRepository->create($post);
        }

        return json_encode($posts);
    }
}
