<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CartController extends Controller
{
    public function plus_quantity($id)
    {
        $cart = session()->get('cart');
        $cart[$id]['quantity']++;
        session()->put('cart', $cart);
        return redirect()->back();
    }
    public function minus_quantity($id)
    {
        $cart = session()->get('cart');
        $cart[$id]['quantity']--;
        if ($cart[$id]['quantity'] == 0) {
            unset($cart[$id]);
        }
        session()->put('cart', $cart);
        return redirect()->back();
    }
    public function remove($id)
    {
        $cart = session()->get('cart');
        unset($cart[$id]);
        session()->put('cart', $cart);
        return redirect()->back()->with('success', 'Xoá sản phẩm thành công');
    }
    public function clearcart()
    {
        $cart = session()->get('cart');
        session()->forget('cart');
        return redirect()->back()->with('success', 'Xóa toàn bộ sản phẩm thành công');

    }
}
