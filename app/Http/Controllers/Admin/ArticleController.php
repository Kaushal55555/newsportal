<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Article;
use App\Models\Category;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
    public function index()
    {
        $articles = Article::all();
        return view("admin.article.index", compact('articles'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $categories = Category::all();
        return view("admin.article.create", compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // return $request;
        $request->validate([
            "title" => "required",
            "image" => "required",
        ]);
        $article = new Article();
        $article->title = $request->title;
        $article->content = $request->content;
        $article->meta_keywords = $request->keywords;
        $article->meta_description = $request->description;
        $file = $request->image;
        if ($file) {
            $newName = uniqid() . "." . $file->getClientOriginalExtension();
            $file->move('article/', $newName);
            $article->image = "article/$newName";
        }
        $article->save();
        $article->categories()->attach($request->categories);
        toast("Article Created Successfully", 'success');

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
        $article = Article::find($id);
        $categories = Category::all();
        return view('admin.article.edit',  compact('article', 'categories'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {

        $article = Article::find($id);
        $article->title = $request->title;
        $article->content = $request->content;
        $article->meta_keywords = $request->keywords;
        $article->meta_description = $request->description;
        $file = $request->image;
        if ($file) {
            $newName = uniqid() . "." . $file->getClientOriginalExtension();
            $file->move('article/', $newName);
            $article->image = "article/$newName";
        }
        $article->save();
        $article->categories()->sync($request->categories);
        toast("Article Updated Successfully", 'success');

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
