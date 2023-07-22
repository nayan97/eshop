<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Support\Str;
use App\Models\categoryPost;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CategoryPostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {   $cats = categoryPost::latest() -> get();
        return view('admin.posts.category.index',[
            'cats'   => $cats,
            'form'   => 'create'

        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $this -> validate($request,[
            'name'    => 'required|unique:category_posts'
        ]);

        categoryPost::create([
            'name'    => $request -> name,
            'slug'    => Str::slug($request -> name)


        ]);

        return back() -> with('success', 'Category added successfully');

    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $cat  = categoryPost::findOrfail($id);
        $cats = categoryPost::latest()-> get();
        return view('admin.posts.category.index',[
            'form'     => 'edit',
            'cat'      => $cat,
            'cats'     => $cats
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    { 
        $catupdate  = categoryPost::findOrfail($id);

        $this -> validate($request,[
            'name'    => 'required|unique:category_posts'
        ]);

       
        $catupdate -> update([
            'name'    => $request -> name,
            'slug'    => Str::slug($request -> name)


        ]);

        return back() -> with('success', 'Category Updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $cat  = categoryPost::findOrfail($id);

        $cat -> delete();
        return back() -> with('success', 'Category Removed successfully');
    }
}
