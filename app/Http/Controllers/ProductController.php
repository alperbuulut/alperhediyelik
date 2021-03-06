<?php

namespace App\Http\Controllers;

use App\Category;
use App\Product;
use Illuminate\Http\Request;
use Session;
use Image;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = Product::all();

        return view('products.index')->withProducts($products);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::all();

        return view('products.create')->withCategories($categories);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        // validate the data
        $this->validate($request, array(
            'pname_tr'         => 'required|max:255',
            'pname_en'         => 'required|max:255',
            'pname_ar'         => 'required|max:255',
            'category_id'   => 'required|integer',
            'pdesc_tr'          => 'required|max:255',
            'pdesc_en'          => 'required|max:255',
            'pdesc_ar'          => 'required|max:255'
        ));

        // store in the database
        $product = new Product;

        $product->pname_tr = $request->pname_tr;
        $product->pname_en = $request->pname_en;
        $product->pname_ar = $request->pname_ar;
        $product->category_id = $request->category_id;
        $product->status = $request->status;
        $product->pdesc_tr = $request->pdesc_tr;
        $product->pdesc_en = $request->pdesc_en;
        $product->pdesc_ar = $request->pdesc_ar;


        if ($request->hasFile('featured_img')) {
            $image = $request->file('featured_img');
            $filename = time() . '-' . join("_", explode(" ", strtolower($product->pname_tr))) . '.' . $image->getClientOriginalExtension();
            $location = '/img/products/' . $filename;
            Image::make($image)->resize(800, 600)->save(public_path($location));

            $product->img_path = $location;
        }   else {
            // IF USER DID NOT ADD IMG, THIS WILL BE A DEFAULT PHOTO OF PRODUCTS
            $product->img_path = public_path('img/product/1.jpg');
        }

        $product->save();

        Session::flash('success', 'Ürün başarıyla oluşturuldu!');

        return redirect()->route('products.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $product = Product::find($id);
        $catname = Category::where('id', $product->category_id)->get();
        return view('products.show')->withProduct($product)->withCatname($catname);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $product = Product::find($id);
        $categories = Category::all();
        $cats = array();
        foreach ($categories as $category) {
            $cats[$category->id] = $category->tr;
        }
        return view('products.edit')->withProduct($product)->withCategories($cats);
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
        // validate the data
        $this->validate($request, array(
            'pname_tr'         => 'required|max:255',
            'pname_en'         => 'required|max:255',
            'pname_ar'         => 'required|max:255',
            'category_id'   => 'required|integer',
            'pdesc_tr'          => 'required|max:255',
            'pdesc_en'          => 'required|max:255',
            'pdesc_ar'          => 'required|max:255'
        ));

        $product = Product::find($id);


        $product->pname_tr = $request->input('pname_tr');
        $product->pname_en = $request->input('pname_en');
        $product->pname_ar = $request->input('pname_ar');
        $product->category_id = $request->input('category_id');
        $product->status = $request->input('status');
        $product->pdesc_tr = $request->input('pdesc_tr');
        $product->pdesc_en = $request->input('pdesc_en');
        $product->pdesc_ar = $request->input('pdesc_ar');

        if ($request->hasFile('featured_img')) {
            $image = $request->file('featured_img');
            $filename = time() . '-' . join("_", explode(" ", strtolower($product->pname_tr))) . '.' . $image->getClientOriginalExtension();
            $location = '/img/products/' . $filename;
            Image::make($image)->resize(800, 600)->save(public_path($location));

            $product->img_path = $location;
        }

        $product->save();

        // set flash data with success message
        Session::flash('success', 'Ürün başarıyla güncellendi!');

        // redirect with flash data to posts.show
        return redirect()->route('products.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $product = Product::find($id);

        $product->delete();

        Session::flash('success', 'Ürün başarıyla silinmiştir!');
        return redirect()->route('products.index');
    }
}
