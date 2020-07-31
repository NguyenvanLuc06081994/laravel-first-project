<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

//Route::get('/users', 'LoginController@index');
//Route::post('/users','LoginController@login');

Route::get('/product',function (){
    return view('product');
});
Route::post('/display-discount',function (\Illuminate\Http\Request $request){
   $result = $request->price * $request->discount * 0.01;
   $price = $request->price - $result;
    dd($request->all());
    return view('display-discount', compact('result','price'));
});
