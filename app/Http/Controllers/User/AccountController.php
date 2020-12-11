<?php

namespace App\Http\Controllers\User;

use App\Services\PostService;
use Illuminate\Support\Facades\Auth;

class AccountController extends BaseController
{
    /**
     * @var PostService
     */
    protected $postService;

    /**
     * AccountController constructor
     *
     * @param PostService $postService
     */
    public function __construct(PostService $postService)
    {
        $this->postService = $postService;
    }

    /**
     * The action to enter the user's account
     *
     * @return \Illuminate\Contracts\View\View
     */
    public function cabinet()
    {
        $user = Auth::user();
        $posts = $this->postService->cabinet($user, 4);
        return view('front.account.cabinet', compact('posts', 'user'));
    }
}
