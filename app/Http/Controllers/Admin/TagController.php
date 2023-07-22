<?php

namespace App\Http\Controllers\Admin;

use App\Models\Tag;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class TagController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {   $tags = Tag::latest()->get();
        return view('admin.posts.tag.index',[
            'form'  => 'create',
            'tags'  =>$tags

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
            'name'   => 'required|unique:tags'
        ]);

        Tag::create([
            'name' => $request -> name,
            'slug' =>Str::slug($request -> name)

        ]);

        return back();
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
    {   $edit = Tag::findOrfail($id);
        $tags = Tag::latest()->get();
        return view('admin.posts.tag.index',[
            'form'    => 'edit',
            'tags'    => $tags,
            'edit'    => $edit

        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {   $updatetag = Tag::findOrfail($id);


        $this -> validate($request,[
            'name'   => 'required|unique:tags'
        ]);

        $updatetag -> update([
            'name' => $request -> name,
            'slug' =>Str::slug($request -> name)

        ]);

        return back() -> with('success', 'Tag Updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $deleteData = Tag::findOrfail($id);

        $deleteData -> delete();
        
        return redirect()->back()-> with('success', 'Product deleted successfuly');
    }
}
