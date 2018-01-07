<?php

namespace App\Http\Controllers;

use App\Cart;
use App\Product;
use App\Order;
use Form;
use Mail;
use Html;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;

use App\Http\Requests;
use Session;
use Auth;
use Stripe\Charge;
use Stripe\Stripe;

class ProductController extends Controller
{
    public function getProduct()
    {
        $products = Product::where('type', 1)->paginate(15);
		
        return view('shop.product', ['products' => $products]);
    }
    public function getService()
    {
        $products = Product::where('type', 2)->paginate(15);
		
        return view('shop.service', ['products' => $products]);
    }
    public function getIndex()
    {
        $products = Product::all();
        return view('shop.index', ['products' => $products]);
    }

    public function getAddToCart(Request $request, $id)
    {
        $product = Product::find($id);
        $oldCart = Session::has('cart') ? Session::get('cart') : null;
        $cart = new Cart($oldCart);
        $cart->add($product, $product->id);

        $request->session()->put('cart', $cart);
        return back();
        //return redirect()->route('product.index');
    }

    public function getReduceByOne($id) {
        $oldCart = Session::has('cart') ? Session::get('cart') : null;
        $cart = new Cart($oldCart);
        $cart->reduceByOne($id);

        if (count($cart->items) > 0) {
            Session::put('cart', $cart);
        } else {
            Session::forget('cart');
        }
        return redirect()->route('product.shoppingCart');
    }

    public function getRemoveItem($id) {
        $oldCart = Session::has('cart') ? Session::get('cart') : null;
        $cart = new Cart($oldCart);
        $cart->removeItem($id);

        if (count($cart->items) > 0) {
            Session::put('cart', $cart);
        } else {
            Session::forget('cart');
        }

        return redirect()->route('product.shoppingCart');
    }

    public function getCart()
    {
        if (!Session::has('cart')) {
            return view('shop.shopping-cart');
        }
        $oldCart = Session::get('cart');
        $cart = new Cart($oldCart);
        return view('shop.shopping-cart', ['products' => $cart->items, 'totalPrice' => $cart->totalPrice]);
    }

    public function getCheckout()
    {
        if (!Session::has('cart')) {
            return view('shop.shopping-cart');
        }
        $oldCart = Session::get('cart');
        $cart = new Cart($oldCart);
        $total = $cart->totalPrice;
        return view('shop.checkout', ['total' => $total]);
    }

    public function postCheckout(Request $request)
    {
        /*
*/
        if (!Session::has('cart')) {
            return redirect()->route('shop.shoppingCart');
        }
        $oldCart = Session::get('cart');
        $cart = new Cart($oldCart);

        Stripe::setApiKey('sk_test_EC6s0bJNydYW9Uhfbnu4IdCo');
        try {
            $charge = Charge::create(array(
                "amount" => $cart->totalPrice * 100,
                "currency" => "usd",
                "source" => $request->input('stripeToken'), // obtained with Stripe.js
                "description" => "Test Charge"
            ));
            $messages = [
            'book.required' => 'Give us when you need it!',
            'book.date_format' => 'Please use a right format date!',
             'book.unique' => 'Date already reserved!',
            'phone.required' => 'Do not says you can not afford a phone',
            'phone.numeric' => 'Phone with numbers only',
        ];
            $this->validate($request, [
            'book' => 'required|date|date_format:m/d/Y|unique:orders',
            'phone' => 'required|min:7|numeric'
        ], $messages);

            $order = new Order();
            $order->cart = serialize($cart);
            $order->address = $request->input('address');
            $order->name = $request->input('name');
            $order->book = $request->input('book');
            $order->phone = $request->input('phone');
            $order->payment_id = $charge->id;
                        



            Auth::user()->orders()->save($order);
        } catch (\Exception $e) {
            return redirect()->route('checkout')->with('error', $e->getMessage())
            ->with('messages', $messages);
        }

        Session::forget('cart');
        return back()->with('success', 'Successfully purchased products!');
        //return redirect()->route('product.index')->with('success', 'Successfully purchased products!');
    }


    
}
