<?php

namespace App\Repositories\Interfaces;

use App\Models\User;

interface PostRepositoryInterface
{
    public function getByUser(User $user);
    public function create(array $post);
}
