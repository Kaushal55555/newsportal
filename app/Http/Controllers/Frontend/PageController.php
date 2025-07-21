<?php

namespace App\Http\Controllers\Frontend;

use Anuzpandey\LaravelNepaliDate\LaravelNepaliDate;
use App\Http\Controllers\Controller;
use App\Models\Advertise;
use App\Models\Article;
use App\Models\Category;
use App\Models\Company;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cookie;
use Illuminate\Support\Facades\View;

class PageController extends Controller
{

    public function __construct()
    {
        $company = Company::first();
        $categories = Category::all();
        $date = LaravelNepaliDate::from(now())->toNepaliDate(format: 'D, j F Y', locale: 'np');
        View::share([
            "company" => $company,
            "categories" => $categories,
            "date" => $date,
        ]);
    }


    public function home()
    {
        $latest_articles = Article::orderBy('id', 'desc')->limit(5)->get();
        $trending_articles = Article::orderBy('views', 'desc')->limit(5)->get();
        return view('frontend.home', compact('latest_articles', 'trending_articles'));
    }

    public function category($slug)
    {
        $category = Category::where('slug', $slug)->first();
        $articles = $category->articles()->paginate(10);
        $advertises = Advertise::where('expire_date', '>', now())->get();
        return view('frontend.category', compact('articles', 'category', 'advertises'));
    }

    public function article($id)
    {
        $article = Article::find($id);
        $cookie = Cookie::get("article$id");
        if(!$cookie){
            $article->increment('views');
            Cookie::queue("article$id", $id);
        }
        $advertises = Advertise::where('expire_date', '>', now())->get();
        return view('frontend.article', compact('article', 'advertises'));
    }

     public function search(Request $request)
    {
        $q = $request->q;
        $articles = Article::where('title', "like", "%$q%")->orWhere('content', "like", "%$q%")->get();
        $advertises = Advertise::where('expire_date', '>', now())->get();
        return view('frontend.search', compact('articles', 'q', 'advertises'));
    }
}
