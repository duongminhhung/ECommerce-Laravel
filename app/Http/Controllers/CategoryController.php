<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Http\Requests\StoreCategoryRequest;
use App\Http\Requests\UpdateCategoryRequest;
use Illuminate\Support\Facades\DB;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $product_feature = DB::table('products')
            ->join('categories', 'products.id_category', '=', 'categories.id')
            ->select('products.*', 'categories.name as name_category')
            ->inRandomOrder()
            ->limit(8)
            ->get();
        // Dispatch::all();
        $product_popular = DB::table('products')
            ->join('categories', 'products.id_category', '=', 'categories.id')
            ->select('products.*', 'categories.name as name_category')
            ->inRandomOrder()
            ->limit(8)
            ->get();
        $product_new = DB::table('products')
            ->join('categories', 'products.id_category', '=', 'categories.id')
            ->select('products.*', 'categories.name as name_category')
            ->inRandomOrder()
            ->limit(8)
            ->get();
            
      

        return view(
            '.index',
            ['product_feature' => $product_feature],
            ['product_popular' => $product_popular],
            ['product_new' => $product_new],
        );


        // dd($product);
        // return view(
        //     '.index',
        //     ['product' => $product]
        // );
    }

    public function slect()
    {
        // $products = DB::table('products')
        // ->where('id_category', '=', 1)->paginate(9);



        $products = DB::table('products')
            ->join('categories', 'products.id_category', '=', 'categories.id')
            ->select('products.*', 'categories.name as name_category')
            ->where('id_category', '=', 1)->paginate(9);
        // dd($products);
        return view('.shop', [
            'products' => $products,
        ]);
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
     * @param  \App\Http\Requests\StoreCategoryRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreCategoryRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function show(Category $category)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function edit(Category $category)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateCategoryRequest  $request
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateCategoryRequest $request, Category $category)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function destroy(Category $category)
    {
        //
    }
}
