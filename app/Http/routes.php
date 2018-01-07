<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/
Route::group(['prefix' => 'error'], function () {
    
    Route::get('/503', function()
    {
        return view('errors.503');
    });
    Route::get('/404', function()
    {
        return view('errors.404');
    });
    Route::get('/maintenance', function()
    {
        return view('errors.maintenance');
    });
    Route::get('/admin-only', function()
    {
        return view('errors.admin');
    });

});

Route::get('/calendar', function()
    {
        return view('calendar');
    });
Route::get('/contact', function()
    {
        return view('contact');
    });

Route::get('/', function()
{
    return view('index');
});

Route::get('/about', function()
{
    return view('about');
});

Route::get('/vacancy', function()
{
    return view('front.vacancy');
});


Route::get('/blogs', [
    'uses' => 'BlogController@getIndex',
    'as' => 'blogpost.all'
]);
Route::get('/news', [
    'uses' => 'BlogController@getNews',
    'as' => 'blogpost.news'
]);
Route::get('/portfolio', [
    'uses' => 'BlogController@getAchievement',
    'as' => 'blogpost.achievement'
]);
Route::get('/organization', function()
{
    return view('organization');
});

Route::get('/products', [
    'uses' => 'ProductController@getProduct',
    'as' => 'product.product'
]);

Route::get('/services', [
    'uses' => 'ProductController@getService',
    'as' => 'product.service'
]);



Route::get('/shop', [
    'uses' => 'ProductController@getIndex',
    'as' => 'product.index'
]);

Route::get('/add-to-cart/{id}', [
    'uses' => 'ProductController@getAddToCart',
    'as' => 'product.addToCart'
]);

Route::get('/reduce/{id}', [
    'uses' => 'ProductController@getReduceByOne',
    'as' => 'product.reduceByOne'
]);

Route::get('/remove/{id}', [
    'uses' => 'ProductController@getRemoveItem',
    'as' => 'product.remove'
]);

Route::get('/shopping-cart', [
    'uses' => 'ProductController@getCart',
    'as' => 'product.shoppingCart'
]);

Route::get('/checkout', [
    'uses' => 'ProductController@getCheckout',
    'as' => 'checkout',
    'middleware' => 'auth'
]);

Route::post('/checkout', [
    'uses' => 'ProductController@postCheckout',
    'as' => 'checkout',
    'middleware' => 'auth'
]);

Route::group(['prefix' => 'user'], function () {
    Route::group(['middleware' => 'guest'], function () {
        Route::get('/signup', [
            'uses' => 'UserController@getSignup',
            'as' => 'user.signup'
        ]);

        Route::post('/signup', [
            'uses' => 'UserController@postSignup',
            'as' => 'user.signup'
        ]);

        Route::get('/signin', [
            'uses' => 'UserController@getSignin',
            'as' => 'user.signin'
        ]);

        Route::post('/signin', [
            'uses' => 'UserController@postSignin',
            'as' => 'user.signin'
        ]);
    });

    Route::group(['middleware' => 'auth'], function () {
        Route::get('/profile', [
            'uses' => 'UserController@getProfile',
            'as' => 'user.profile'
        ]);

        Route::get('/logout', [
            'uses' => 'UserController@getLogout',
            'as' => 'user.logout'
        ]);
    });
});

 Route::group(['middleware' => 'auth'], function () {

    Route::resource('product','ProductCrudController');
     Route::resource('order','OrderController');
     Route::resource('blog','BlogController');

    
    });
