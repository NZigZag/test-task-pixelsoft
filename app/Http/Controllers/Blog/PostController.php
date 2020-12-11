<?php

namespace App\Http\Controllers\Blog;

use App\Http\Requests\Blog\PostStoreRequest;
use App\Services\PostService;
use Illuminate\Http\Request;

class PostController extends BaseController
{
    /**
     * @var PostService
     */
    protected $postService;

    /**
     * PostController constructor
     *
     * @param PostService $postService
     */
    public function __construct(PostService $postService)
    {
        $this->postService = $postService;
    }

    /**
     * Home page (display of all posts)
     *
     * @param Request $request
     * @return \Illuminate\Contracts\View\View
     */
    public function home(Request $request)
    {
        $posts = $this->postService->index($request->sort);
        return view('front.main', compact('posts'));
    }

    /**
     * The action for saving the post
     *
     * @param PostStoreRequest $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(PostStoreRequest $request)
    {
        $newPost = $this->postService->store($request->validated());
        $newPost ? $request->session()->flash('success', 'The post was added successfully')
                 : $request->session()->flash('error', 'Error');
        return redirect()->route("user.cabinet");
    }
}
