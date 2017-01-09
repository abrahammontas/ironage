<?php

namespace App\Http\Controllers;

use App\Category;
use App\Http\Requests;
use App\Gallery;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('home');
    }

    public function gallery()
    {
        $galleries = Gallery::all();

        $categories = Category::all();

        return view('main.gallery', ['galleries' => $galleries, 'categories' => $categories]);
    }
}
