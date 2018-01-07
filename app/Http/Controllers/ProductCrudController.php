<?php

namespace App\Http\Controllers;

use App\Cart;
use App\Product;
use App\Order;
use Form;
use Html;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;

use App\Http\Requests;
use Session;
use Auth;
use Stripe\Charge;
use Stripe\Stripe;

class ProductCrudController extends Controller
{

    //crud started here using RESTFUL API B-)
    public function index()
    {
        $products=Product::paginate(15);
        if(Auth::user()->roles == '1') {
         return view('crud.product.admin',compact('products'));
        } else {
         return view('errors.admin');
        }
        //return view('crud.product.admin',compact('products'));
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
        $products = new Product;
        $products->imagePath = $request->input('imagePath');
        $products->title = $request->input('title');
        $products->description = $request->input('description');
        $products->price = $request->input('price');
        $products->type = $request->input('type');
        $products -> save();

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
        $products=Product::findOrFail($id);
        return view('crud.product.edit',compact('products'));
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
        $products = Product::findOrFail($id);
            $products->imagePath = $request->input('imagePath');
        $products->title = $request->input('title');
        $products->description = $request->input('description');
        $products->price = $request->input('price');
        $products->type = $request->input('type');
        $products -> save();

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
