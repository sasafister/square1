<?php

namespace App\Services;

use App\Models\Post;

class PostService 
{
    public function getUserPosts() 
    {
        return Post::whereUserId(auth()->id())->get();
    }

    public function getAllPosts($sort = 'asc')
    {
        return Post::with('author')
            ->orderBy('publication_date', $sort)
            ->get();
    }
}