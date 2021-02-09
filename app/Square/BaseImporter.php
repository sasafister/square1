<?php

namespace App\Square;

use App\Models\Post;
use App\Square\Import;
use Illuminate\Http\Request;

class BaseImporter implements Import
{
    public function allPosts($request)
    {
        try {
            Post::insert($this->hydratePosts($request));
        } catch (\Exception $e) {
            return $e->getMessage();
        }

        return response()->json(['success' => true]);
    }

    private function hydratePosts($request)
    {
        $posts = $request->input();
        
        $importedPosts = [];
        foreach ($posts as $post) {
            $post['user_id'] = auth()->id();
            $importedPosts[] = $post;
        }

        return $importedPosts;
    }
    
}