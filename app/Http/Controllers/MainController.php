<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Post;

class MainController extends Controller
{
    public function getPosts() {
        $posts = Post::orderBy('date', 'DESC')->paginate(10);

        return view('main.blog', ['posts' => $posts]);
    }

    public function showPost($slug) {
        $post = Post::whereSlug($slug)->first();
        $posts = Post::where('slug', '!=', $slug)->orderBy('date', 'DESC')->limit(5)->get();

        return view('main.post', ['post' => $post, 'posts' => $posts]);
    }
}
