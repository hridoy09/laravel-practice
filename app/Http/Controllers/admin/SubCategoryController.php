<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\SubCategory;
use Illuminate\Http\Request;

class SubCategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $categories = Category::all();
        $subcategories=SubCategory::with('category')->get();
        // dd($subcategories);
        return view('admin.subcategory.index', compact('categories','subcategories'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    public function save(Request $request, $id=NULL)
    {
        // dd($request->all());
        $request->validate([

            'category_id' => 'required',
            'name' => 'required',

        ]);
        $subcategory=new SubCategory();
        $notification = "SubCategory Successfully Added.";
        if($id){
            $subcategory=SubCategory::findOrFail($id);
            $notification = "SubCategory Successfully Updated.";
        }
        $subcategory->category_id=$request->category_id;
        $subcategory->name=$request->name;
        $subcategory->save();

        return back()->with('message',$notification);


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
        //
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
    public function destroy(string $id)
    {
        $subcategory=SubCategory::findOrFail($id);
        $subcategory->delete();
        return back()->with('message', 'subCategory Successfully Deleted.');
    }
}
