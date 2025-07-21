<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index()
    {
        $categories = Category::all();
        return view("admin.category.index", compact('categories'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view("admin.category.create");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // return $request;
        $request->validate([
            "title" => "required|unique:categories,title",
            "slug" => "required|unique:categories,slug",
        ]);
        $category = new Category();
        $category->title = $request->title;
        $category->slug = $request->slug;
        $category->meta_keywords = $request->keywords;
        $category->meta_description = $request->description;
        $category->save();
        toast("Category Created Successfully", 'success');

        return redirect()->back();
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
        $category = Category::find($id);
        return view('admin.category.edit',  compact('category'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            "title" => "required|unique:categories,title, $id",
            "slug" => "required|unique:categories,slug, $id",
        ]);
        $category = Category::find($id);
        $category->title = $request->title;
        $category->slug = $request->slug;
        $category->meta_keywords = $request->keywords;
        $category->meta_description = $request->description;
        $category->save();
        toast("Category Updated Successfully", 'success');

        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
