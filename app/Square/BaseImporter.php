<?php

namespace App\Square;

use App\Models\Post;
use App\Models\User;
use App\Square\Import;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;

class BaseImporter implements Import
{
    public function allPosts($request)
    {
        try {
            Post::insert($this->hydratePosts($request));
            Cache::forget('user-posts');
            Cache::forget('all-posts');

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
            $post['user_id'] = User::whereName('Admin')->first()->id;
            $post['created_at'] = now();
            $importedPosts[] = $post;
        }

        return $importedPosts;
    }
    
}