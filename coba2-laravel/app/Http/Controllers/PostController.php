<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Models\Post;

class PostController extends Controller
{
    // public function index()
    // {
    //     return view('post', [
    //         "title" => "Blog",
    //         "posts" => Post::all()
    //     ]);
    // }

    // public function show($slug)
    // {
    //     return view('blog', [
    //         "title" => "Single Post",
    //         "post" => Post::find($slug)
    //     ]);
    // }
    public function index()
    {
        return view('post',[
            "title" => "Halaman Blog",
            "post"=> Post::all()
        ]);
    }
    public function find(Post $post)
    {
        return view('blog',[
            "title" => "Single Post",
            "blog" => $post
        ]);
    }
}