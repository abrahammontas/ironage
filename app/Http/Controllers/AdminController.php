<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use Validator;
use App\Post;
use Storage;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $posts = Post::orderBy('date', 'DESC')->get();

        return view('admin.index', ['posts' => $posts]);
    }

    /**
     * Create post
     *
     * @return \Illuminate\Http\Response
     */
    public function createPost(Request $request) {

        $this->validate($request, [
            'title' => 'required|max:255',
            'content' => 'required',
            'image' => 'required|image',
            'date' => 'required|date'
        ]);

        $input = $request->all();
        $file = $request->file('image');
        $name = $input['image'] = time() . '_' . $file->getClientOriginalName();

        Storage::put("public/post_img/$name", file_get_contents($file));

        Post::create($input);

        return back()->with('success', 'Post added successfully.');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function editPost($id)
    {
        $post = Post::findOrFail($id);

        return back()->with('post', $post);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function updatePost(Request $request, $id)
    {
        $post = Post::findOrFail($id);

        if($request->hasFile('image')) {

            $input = $request->all();
            $file = $request->file('image');
            $name = $input['image'] = time() . '_' . $file->getClientOriginalName();

            Storage::delete('public/post_img/' . $post->image);
            Storage::put('public/post_img/' . $name, file_get_contents($file));

            $post->update($input);

        } else {

            $input = $request->except('image');
            $post->update($input);
        }

        return back()->with('success', 'Post updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function deletePost($id)
    {
        $post = Post::findOrFail($id);
        Storage::delete('public/post_img/' . $post->image);
        $post->delete();

        return back()->with('success', 'Post deleted successfully.');
    }
}
