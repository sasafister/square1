<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use App\Services\PostService;
use Illuminate\Support\Facades\Cache;

class PostController extends Controller
{
    const TWO_HOURS = 7200;

    public function index(PostService $postService)
    {
        $sort = request()->input('sortBy');
        try {
            if(isset($sort)) {
                Cache::forget('all-posts');
                $posts = $postService->getAllPosts($sort);
            } else {
                $posts = Cache::remember('all-posts', self::TWO_HOURS, function() use ($postService) {
                    return $postService->getAllPosts();
                });
            }
            return view('welcome', compact('posts'));
        } catch (\Expection $e) {
            return $e->getMessage();
        }
    
    }

    public function store(Request $request) 
    {
        $data = $request->input();
        $data['user_id'] = auth()->id();

        try {
            Post::create($data);
            return response()->json(['success' => true]);
        } catch (\Expection $e) {
            return $e->getMessage();
        }
    }

    public function all(PostService $postService) 
    {
        try {
            return Cache::remember('user-posts', self::TWO_HOURS, function() use ($postService) {
                return $postService->getUserPosts();
            });
        } catch (\Exception $e) {
            return $e->getMessage();
        }
    }
}
