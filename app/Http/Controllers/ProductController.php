<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Http\Requests\StoreProductRequest;
use Illuminate\Support\Facades\DB;
use App\Http\Requests\UpdateProductRequest;
use Illuminate\Http\Request;

class ProductController extends Controller
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
    public function details($id)
    {
        $products = DB::table('products')
            ->join('categories', 'products.id_category', '=', 'categories.id',)
            ->select('products.*', 'categories.name as name_category')
            ->where('products.id', $id)->first();
        // dd($products);
        return view('details_product', ['products' => $products]);
    }
   
    public function search(Request $request)
    {
        // if ($request->ajax()) {

            $data = Product::where('id', 'like', '%' . $request->search . '%')
                ->orwhere('name', 'like', '%' . $request->search . '%')->get();
            // dd($data);

            $output = '';
            if($request!=''){
                if (count($data) > 0) {


                    foreach ($data as $row) {
                        $link = route('details',$row->id);
                        $output .= '
                           
                            <ul style="margin-top:3px;background: #f5f5f5;border-radius:3px;" class="test1">
                            <li style="padding: 20px 0 3px 20px;" class="test11">
                            <a href='.$link.'>'.$row->name.'</a>
                            </li>
                            </ul>';
                    }
                } else {
    
                    $output .= '
                           
                    <ul style="margin-top:3px;background: #f5f5f5;border-radius:3px; display:block" class="test1">
                    <li  style="padding: 20px 0 3px 20px;width: 620px;" class="test11">
                    Không tìm thấy kết quả                             
                    </li>
                    </ul>';
                }
            }
                

            return $output;
        // }
    }
    public function wishlist(){
        if(session()->has('id')){
            return view('wishlist');
        }else{
            return  view('login');
        }
    }
    public function addToWishlist($id){
        $product = Product::findOrFail($id);

        $wishlist = session()->get('wishlist', []);
        // dd($wishlist);

        if (isset($wishlist[$id])) {
            $wishlist[$id]['quantity']++;
        }else {
            $wishlist[$id] = [
                "id" => $id,
                "name" => $product->name,
                "quantity" => 1,
                "price" => $product->price,
                "sale" => $product->sale,
                "pre_image" => $product->pre_image
            ];
        }

        session()->put('wishlist', $wishlist);
        return redirect()->back()->with('success', 'Đã thêm sản phẩm yêu thích');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreProductRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreProductRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function show(Product $product)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit(Product $product)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateProductRequest  $request
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateProductRequest $request, Product $product)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy(Product $product)
    {
        //
    }
}
