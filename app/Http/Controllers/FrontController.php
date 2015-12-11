<?php
namespace App\Http\Controllers;
use Illuminate\Support\Facades\Request;
use Illuminate\Support\Facades\Redirect;
use App\Product;
use Cart;

class FrontController extends Controller {

    public function cart() {
        $image = 'arian';
        if (Request::isMethod('post')) {
            $product_id = Request::get('product_id');
            $product = Product::find($product_id);
            $image = $product->imgAddress;
            Cart::add(array('id' => $product_id, 'name' => $product->title,'qty' => 1, 'price' => (int)($product->price)));
        }

        //increment the quantity
        if (Request::get('product_id') && (Request::get('increment')) == 1) {
            $rowId = Cart::search(array('id' => Request::get('product_id')));
            $item = Cart::get($rowId[0]);

            Cart::update($rowId[0], $item->qty + 1);
        }

        //decrease the quantity
        if (Request::get('product_id') && (Request::get('decrease')) == 1) {
            $rowId = Cart::search(array('id' => Request::get('product_id')));
            $item = Cart::get($rowId[0]);

            Cart::update($rowId[0], $item->qty - 1);
        }

        $cart = Cart::content();
        return view('cart', array('cart' => $cart, 'image' => $image));
    }
}