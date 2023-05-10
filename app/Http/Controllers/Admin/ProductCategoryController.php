<?php

namespace App\Http\Controllers\Admin;

use App\Models\Product_cat;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ProductCategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {      $data=Product_cat::latest() -> get();
       return view('admin.user.product_cat.index',[
        'all_data'    => $data,
      

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
        $data=new Product_cat;

             //validate
       $this -> validate ($request,[
        'name'   => 'required'
      ]);
      
        $data ->name=$request -> name;
        $data ->slug=Str::slug($request -> name);

        $data -> save();
        return redirect() -> back() -> with('success', 'Data added successfully');
        
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
    public function edit($id)
    {
        $data=Product_cat::latest() -> get();
        $edit_data=Product_cat::findOrFail($id);
        return view('admin.user.product_cat.edit',[
         'all_data'    => $data,
         'edit'        => $edit_data,
         
 
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $delete_data = Product_cat::findOrFail($id);
        $delete_data -> delete();
        return back() ->with('success', 'Category deleted successfuly');

    }
}
