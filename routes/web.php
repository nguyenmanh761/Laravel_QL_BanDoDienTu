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



Auth::routes();


Route::group(['middleware'=>['locale','auth']], function(){
    Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
    Route::resource('business', \App\Http\Controllers\BusinessController::class);
    Route::resource('feedback', \App\Http\Controllers\FeedbackController::class);
    Route::resource('advertisment', \App\Http\Controllers\AdvertismentController::class);
    Route::resource('partner', \App\Http\Controllers\PartnerController::class);
    Route::resource('category', \App\Http\Controllers\CategoryController::class);
    Route::resource('product', \App\Http\Controllers\ProductController::class);
    Route::resource('style', \App\Http\Controllers\StyleController::class);
    Route::resource('comment', \App\Http\Controllers\CommentController::class);
    Route::resource('customer', \App\Http\Controllers\CustomerController::class);
    Route::resource('order', \App\Http\Controllers\OrderController::class);
    Route::get('/', function () {
        return view('index');
    })->name('index');
});

Route::get('/lang/{lang}', function($lang){
    session(['language'=>$lang]);
    return redirect()->route('index');
});