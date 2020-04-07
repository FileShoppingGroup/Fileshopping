<?php

namespace App\Http\Controllers;

use App\Category;
use App\Product;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function show(Category $cat)
    {
        // dd($cat->id);
         //=======variabel header and aside ===========================
         $categories = Category::where('chid', 0)->get();
         $bestsellers = Product::orderBy('sales_number', 'desc')->get();
         $favorites = Product::orderBy('download_number', 'desc')->get();
         $newests = Product::orderBy('created_at', 'desc')->get();
 
         //=============variable page category ========================
        //  $cat = $category;
         $c = Category::where('chid',$cat->id)->get();
         $pros=[];
         foreach($c as $item)
         {
             $pros[] = Product::where('category_id',$item->id)->get();
         }
 
 
         return view('site.category',compact('pros','cat','categories','bestsellers','favorites','newests'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function edit(Category $category)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Category $category)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function destroy(Category $category)
    {
        //
    }
}
