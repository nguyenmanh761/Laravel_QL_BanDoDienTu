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


Route::group(['middleware'=>['locale','auth', 'check.admin']], function(){
    Route::resource('business', \App\Http\Controllers\BusinessController::class);
    Route::resource('feedback', \App\Http\Controllers\FeedbackController::class);
    Route::resource('partner', \App\Http\Controllers\PartnerController::class);
    Route::resource('category', \App\Http\Controllers\CategoryController::class);
    Route::resource('product', \App\Http\Controllers\ProductController::class);
    Route::resource('style', \App\Http\Controllers\StyleController::class);
    Route::resource('comment', \App\Http\Controllers\CommentController::class);
    Route::resource('customer', \App\Http\Controllers\CustomerController::class);
    Route::resource('order', \App\Http\Controllers\OrderController::class);
    Route::resource('user', \App\Http\Controllers\UserController::class);
    Route::get('/admin', function(){
        return view('admin');
    } )->name('admin');
});

Route::get('/notAuth', function(){
   return View('notAuth');
})->name('notAuth');


//
Route::group(['middleware'=>['locale','auth']], function(){
    Route::resource('inserttocart', App\Http\Controllers\OrderUIcontroller::class);
    Route::get('/cart', [App\Http\Controllers\CartController::class, 'index']);
    Route::delete('/cart/{id}', [App\Http\Controllers\CartController::class, 'destroy'])->name('cart.delete');
    Route::post('/cart-update', [App\Http\Controllers\CartController::class, 'update'])->name('cart.update');
    Route::get('/cart-bill', [App\Http\Controllers\CartController::class, 'writebill'])->name('cart.bill');
    Route::get('/bills', [App\Http\Controllers\CartController::class, 'showbills'])->name('cart.showbills');
});


//
Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/home.show/{id}', [App\Http\Controllers\HomeController::class, 'show'])->name('home.show');
Route::get('/categories', [App\Http\Controllers\CategoriesController::class, 'index'])->name('categories');
Route::get('/categoriess/{category_id}', [App\Http\Controllers\CategoriesController::class, 'index2']);
Route::get('/search', [App\Http\Controllers\SearchController::class, 'index']);
Route::post('/searched', [App\Http\Controllers\SearchController::class, 'searched'])->name('searched');
Route::get('/profile', [App\Http\Controllers\ProfileController::class, 'index'])->name('profile');
Route::get('/profile.edit', [App\Http\Controllers\ProfileController::class, 'edit']);
Route::get('/profile.update', [App\Http\Controllers\ProfileController::class, 'update'])->name('profile.update');


Route::get('/lang/{lang}', function($lang){
    session(['language'=>$lang]);
    return redirect()->route('home');
});