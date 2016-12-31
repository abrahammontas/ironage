<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Post;

class MainController extends Controller
{
    public function getPosts() {
        $posts = Post::orderBy('date', 'DESC')->get();

        return view('main.blog', ['posts' => $posts]);
    }

    public function getPost($id) {
        $post = Post::findOrFail($id);
        $posts = Post::where('id', '!=', $id)->orderBy('date', 'DESC')->limit(5)->get();

        return view('main.post', ['post' => $post, 'posts' => $posts]);
    }
}
