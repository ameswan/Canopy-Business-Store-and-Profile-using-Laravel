<?php

namespace App\Http\Controllers;

use App\Cart;
use App\Product;
use App\Order;
use App\User;
use Form;
use Html;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;

use App\Http\Requests;
use Session;
use Auth;
use Stripe\Charge;
use Stripe\Stripe;

class OrderController extends Controller
{
    
    //crud started here using RESTFUL API B-)
    public function index()
    {
        //$orders=Order::orderBy('confirmed', 'desc');
        $orders=Order::all();
        $users=User::all();


        if(Auth::user()->roles == '1') {
         return view('crud.order.admin',compact('orders','users'));
        } else {
         return view('errors.admin');
        }
        //return view('crud.order.admin',compact('orders','users'));
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
          $messages = [
            'book.required' => 'Give us when you need it!',
            'book.unique' => 'Date already reserved!',
            'book.date_format' => 'Please use a right format date!'
        ];
            $this->validate($request, [
            'book' => 'required|date|date_format:m/d/Y|unique:orders'
        ], $messages);

        $orders = new Order;
        
          $orders->book = $request->input('book');
         $orders->confirmed = $request->input('confirmed');
         $orders->comment = $request->input('comment');
        $orders -> save();

        return back()->with('success','Record Added successfully.');
        
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $orders=Order::findOrFail($id);
        return view('crud.order.edit',compact('orders'));
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
        $messages = [
            'book.required' => 'Give us when you need it!',
            'book.unique' => 'Date already reserved!',
            'book.date_format' => 'Please use a right format date!'
        ];
            $this->validate($request, [
            'book' => 'required|date|date_format:m/d/Y|unique:orders'
        ], $messages);

        $orders = Order::findOrFail($id);
        $orders->book = $request->input('book');
         $orders->confirmed = $request->input('confirmed');
         $orders->comment = $request->input('comment');
        $orders -> save();

        return back()->with('success','Record Added successfully.');
    
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
         $products = Product::findOrFail($id);
        $products->delete();
        return back()->with('success','Done successfully.');
    }
}
