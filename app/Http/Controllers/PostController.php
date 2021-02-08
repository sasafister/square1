<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;

class PostController extends Controller
{
    const TWO_HOURS = 7200;

    public function index()
    {
        $posts = Post::all();
        return view('welcome', compact('posts'));
    }

    public function store(Request $request) 
    {
        $data = $request->input();
        $data['user_id'] = auth()->id();
        Post::create($data);
    }


    public function all() 
    {
        return Cache::remember('user-posts', self::TWO_HOURS, function() {
            return Post::whereUserId(auth()->id())->get();
        });
    }
}
