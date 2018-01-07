<?php

namespace App\Http\Controllers;

use App\Cart;
use App\Product;
use App\Order;
use App\User;
use App\Blog;
use Form;
use Html;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;

use App\Http\Requests;
use Session;
use Auth;
use Stripe\Charge;
use Stripe\Stripe;

class BlogController extends Controller
{
    
    public function getNews()
    {
        $blogs = Blog::where('type', 1)->paginate(15);
		
        return view('blogpost', ['blogs' => $blogs]);
    }
    public function getAchievement()
    {
        $blogs = Blog::where('type', 2)->paginate(15);
		
        return view('blogpost', ['blogs' => $blogs]);
    }
    public function getIndex()
    {
        $blogs = Blog::all();
        return view('blogpost', ['blogs' => $blogs]);
    }




   
    //crud started here using RESTFUL API B-)
    public function index()
    {
        //$orders=Order::orderBy('confirmed', 'desc');
        $blogs=Blog::all();
        $users=User::all();

        if(Auth::user()->roles == '1') {
         return view('crud.blog.admin',compact('blogs','users'));
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
        $blogs = new Blog;
        $blogs->type = $request->input('type');
        $blogs->title = $request->input('title');
         $blogs->content = $request->input('content');

        $blogs -> save();

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
        $blogs=Blog::findOrFail($id);
        return view('crud.blog.edit',compact('blogs'));
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
        $blogs = Blog::findOrFail($id);
        $blogs->type = $request->input('type');
        $blogs->title = $request->input('title');
         $blogs->content = $request->input('content');
        $blogs -> save();

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
         $blogs = Blog::findOrFail($id);
        $blogs->delete();
        return back()->with('success','Done successfully.');
    }
}
