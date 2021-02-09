<?php

namespace App\Services;

use App\Models\Post;

class PostService 
{
    public function getPosts() 
    {
        return Post::whereUserId(auth()->id())->get();
    }
}