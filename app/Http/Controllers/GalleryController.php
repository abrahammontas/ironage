<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\GalleryRules;
use App\Gallery;
use App\Category;
use App\Http\Requests;

class GalleryController extends Controller
{

    protected $target_dir = "img/gallery/";
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $galleries = Gallery::all();
        return view('admin.gallery.List', ['galleries' => $galleries]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::all();
        $array = [];

        foreach($categories as $c){
            $array[$c->id] = $c->name;
        }

        return view('admin.gallery.Add', ['categories' => $array]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(GalleryRules $request)
    {
        $imageType = ['jpg', 'JPG', 'png', 'PNG'];

        $target_file = $this->target_dir . basename($_FILES["image"]["name"]);
        $uploadOk = 1;
        $imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);

        // Check if file already exists
        if (file_exists($target_file)) {
            echo "Sorry, file already exists.";
            $uploadOk = 0;
        }

        if(in_array($imageFileType,$imageType) && (move_uploaded_file($_FILES["image"]["tmp_name"], $target_file)) && $uploadOk){

            $data = array(
                'name' => $_FILES["image"]["name"],
                'category'  => $request['category']
            );

            $gallery = Gallery::create($data);

            if(isset($gallery->id)){
                $message = "The image has been uploaded successfully.";
                $class = "alert alert-success";
            }
            else{
                $message = "Error! please try again.";
                $class = "alert alert-danger";
            }

        } else{
            $message = "Error! This feature doesn't support this extension. Please try again.";
            $class = "alert alert-danger";
        }

        return redirect('admin/gallery')->with('message', $message)
            ->with('class', $class);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $gallery = Gallery::find($id);

        $categories = Category::all();
        $array = [];

        foreach($categories as $c){
            $array[$c->id] = $c->name;
        }

        return view('admin.gallery.Edit', ['gallery' => $gallery,'categories' => $array]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $data = array(
            'category'  => $request['category']
        );

        $gallery = Gallery::where('id', '=', $id)->update($data);

        if(isset($gallery)){
            $message = "The image has been edited successfully.";
            $class   = "alert alert-success";
        }
        else{
            $message = "Error! please try again.";
            $class = "alert alert-danger";
        }

        return redirect('admin/gallery')->with('message', $message)
            ->with('class', $class);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $gallery = Gallery::find($id);
        unlink($this->target_dir.$gallery->name);
        $gallery->delete();

        if(isset($gallery)){
            $message = "The image has been deleted successfully";
            $class = "alert alert-success";
        }
        else{
            $message = "Error! Please try again";
            $class = "alert alert-danger";
        }

        return redirect('admin/gallery')->with('message', $message)
            ->with('class', $class);
    }
}
