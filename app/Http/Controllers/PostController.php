<?php

namespace App\Http\Controllers;

use App\Category;
use App\Product;
use Illuminate\Http\Request;
use App\Post;
use Illuminate\Support\Facades\Session;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

    	$categories = Category::where('status', 'A')->get();
    	$latests = Product::latest()->take(6)->get();


    	return view('welcome')->with('categories', $categories)->with('latests', $latests);

    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function indexCatBased($slug)
    {

        $categories = Category::where('status', 'A')->get();
        $category = Category::where('slug', $slug)->get();
        $products = Product::where('category_id', $category[0]->id)->get();

    	return view('guest.show')->withProducts($products)->withCategory($category[0])->withCategories($categories);

    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function about()
    {
        $categories = Category::where('status', 'A')->get();
        return view('guest.about')->withCategories($categories);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function contact()
    {
        $categories = Category::where('status', 'A')->get();
        return view('guest.contact')->withCategories($categories);
    }
}
