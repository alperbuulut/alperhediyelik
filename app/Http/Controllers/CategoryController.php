<?php

namespace App\Http\Controllers;

use App\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

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

        return view('categories.index')->withCategories($categories);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('categories.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //FIRST OF ALL, VALIDATE THE DATA
        $this->validate($request, array(
           'cname_tr' => 'required|max:100',
           'cname_en' => 'required|max:100',
           'cname_ar' => 'required|max:100',
           'slug' => 'required|unique:categories,slug'
        ));

        $category = new Category;

        $category->status = $request->status;
        $category->tr = $request->cname_tr;
        $category->en = $request->cname_en;
        $category->ar = $request->cname_ar;
        $category->slug = $request->slug;

        $category->save();

        Session::flash('success', 'Kategori başarıyla oluşturuldu!');

        return redirect()->route('categories.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $category = Category::find($id);

        return view('categories.show')->withCategory($category);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $category = Category::find($id);

        return view('categories.edit')->withCategory($category);
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
        // Validate the data
        $category = Category::find($id);

        if ($request->input('slug') == $category->slug) {
            $this->validate($request, array(
                'tr' => 'required|max:100',
                'en' => 'required|max:100',
                'ar' => 'required|max:100'
            ));
        } else {
            $this->validate($request, array(
                'tr' => 'required|max:100',
                'en' => 'required|max:100',
                'ar' => 'required|max:100',
                'slug' => 'required|unique:categories,slug'
            ));
        }

        $category = Category::find($id);

        $category->tr = $request->input('tr');
        $category->en = $request->input('en');
        $category->ar = $request->input('ar');
        $category->slug = $request->input('slug');
        $category->status = $request->input('status');

        $category->save();

        // set flash data with success message
        Session::flash('success', 'Kategori başarıyla güncellendi!');

        // redirect with flash data to posts.show
        return redirect()->route('categories.index');
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

        Session::flash('success', 'Kategori başarıyla kaldırıldı!');
        return redirect()->route('categories.index');
    }
}
