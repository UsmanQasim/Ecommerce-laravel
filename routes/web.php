<?php


use App\Http\Controllers\cartController;
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


// THIS FU**ING FUNCTION Works
//Route::get('/',[App\Http\Controllers\cartController::class , 'getIndex']);
Route::get('/',  [cartController::class , 'getIndex']);

Route::get('/get-item-cart/{id}', [cartController::class, 'addToCArt']);

Route::get('/cart' , function(){
    return view('cart');
});


Route::get('/checkout' , function(){
    return view('checkout');
});

