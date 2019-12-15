<?php

namespace App\Http\Controllers;

use App\Post;
use Illuminate\Http\Request;

class TrumbowygController extends Controller
{
    public function index()
    {
        $posts = Post::all();
        return view('index', compact('posts'));
    }

    public function create()
    {
        return view('create');
    }

    public function store()
    {
        Post::create(['content' => request()->content]);
        return redirect('/');
    }
}
