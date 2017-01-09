<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\CategoriesRules;
use App\Category;
use App\Http\Requests;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categories = Category::all();

        return view('admin.categories.List', ['categories' => $categories]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.categories.Add');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CategoriesRules $request)
    {
        $data = array(
            'name'  => $request['name']
        );

        $category = Category::create($data);

        if(isset($category->id)){
            $message = "The category has been created successfully.";
            $class = "alert alert-success";
        }
        else{
            $message = "Error! please try again.";
            $class = "alert alert-danger";
        }

        return redirect('admin/categories')->with('message', $message)
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
        return view('admin.categories.Edit', ['category' => Category::find($id)]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(CategoriesRules $request, $id)
    {
        $data = array(
            'name'  => $request['name']
        );

        $category = Category::where('id', '=', $id)->update($data);

        if(isset($category)){
            $message = "The category has been edited successfully.";
            $class   = "alert alert-success";
        }
        else{
            $message = "Error! please try again.";
            $class = "alert alert-danger";
        }

        return redirect('admin/categories')->with('message', $message)
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
        $category = Category::find($id);
        $category->delete();

        if(isset($category)){
            $message = "The category has been deleted successfully";
            $class = "alert alert-success";
        }
        else{
            $message = "Error! Please try again";
            $class = "alert alert-danger";
        }

        return redirect('admin/categories')->with('message', $message)
            ->with('class', $class);
    }
}
