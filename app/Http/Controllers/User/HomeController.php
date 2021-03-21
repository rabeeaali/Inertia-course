<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\Post;
use Inertia\Inertia;

class HomeController extends Controller
{
    public function index()
    {
        $posts = Post::get();
        
        return Inertia::render('User/Home', compact('posts'));
    }

    public function show(Post $post)
    {
        return Inertia::render('User/Show', compact('post'));
    }
}
