<?php

namespace App\Http\Controllers;


use App\Models\Post;
use App\Models\Logs;
use Illuminate\Support\Facades\Log;

use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    {
        $posts = Post::all();
       return view('posts.index', compact('posts'));
    }

    public function create()
    {
       return view('posts.create');
    }

    public function store(Request $request)
    {
        // Log::channel('myDailyLog')->info('create post request:'.json_encode($request->all()));
        $validated = $request->validate(['title' => 'required' , 'body' => 'required']);
        Post::create($validated);
        return to_route('posts.index');
    }
    public function destroy(Post $post, Logs $logs)
    {
      
        Log::channel('myDailyLog')->info('delete post request' .json_encode($logs->all()));
        Log::channel('mysql')->info('delete post request');
        $post->delete();
        return to_route('posts.index');
    }


}
