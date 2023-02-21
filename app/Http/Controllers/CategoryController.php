<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Http\Requests\StoreCategoryRequest;
use App\Http\Requests\UpdateCategoryRequest;
use App\Models\Product;
use Illuminate\Support\Facades\DB;
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
        //     ['product' => $product]()
        // );
    }
    public function shop()
    {
        $products = DB::table('products')
        ->join('categories', 'products.id_category', '=', 'categories.id')
        ->select('products.*', 'categories.name as name_category')->paginate(9);
        // ->where('id_category', '=', 1)->paginate(9);
    return view('.shop', [
        'products' => $products,
    ]);

    }
    public function slect()
    {
        // $products = DB::table('products')
        // ->where('id_category', '=', 1)->paginate(9);



        $products = DB::table('products')
            ->join('categories', 'products.id_category', '=', 'categories.id')
            ->select('products.*', 'categories.name as name_category')
            ->where('id_category', '=', 1)->paginate(9);
        // dd($products['1']);
        return view('.shop', [
            'products' => $products,
        ]);
    }
    public function slect1()
    {
        $products = DB::table('products')
            ->join('categories', 'products.id_category', '=', 'categories.id')
            ->select('products.*', 'categories.name as name_category')
            ->where('id_category', '=', 2)->paginate(9);
        // dd($products);
        return view('.shop', [
            'products' => $products,
        ]);
    }
    public function slect2()
    {
        $products = DB::table('products')
            ->join('categories', 'products.id_category', '=', 'categories.id')
            ->select('products.*', 'categories.name as name_category')
            ->where('id_category', '=', 3)->paginate(9);
        // dd($products);
        return view('.shop', [
            'products' => $products,
        ]);
    }
#asdfasdfasfasdfsdag

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function cart()
    {
        return view('cart');
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
    public function AddtoCart($id)
    {
        $product = Product::findOrFail($id);

        $cart = session()->get('cart', []);

        if (isset($cart[$id])) {
            $cart[$id]['quantity']++;
        } else {
            $cart[$id] = [
                "id" => $id,
                "name" => $product->name,
                "quantity" => 1,
                "price" => $product->price,
                "sale" => $product->sale,
                "pre_image" => $product->pre_image
            ];
        }

        session()->put('cart', $cart);
        return redirect()->back()->with('success', 'Đã thêm sản phẩm vào giỏ hàng');
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
    public function update(Request $request)
    {
        if ($request->id && $request->quantity) {
            $cart = session()->get('cart');
            $cart[$request->id]["quantity"] = $request->quantity;
            session()->put('cart', $cart);
            session()->flash('success', 'Cart updated successfully');
        }
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
    public function checkout(){

    }
}
