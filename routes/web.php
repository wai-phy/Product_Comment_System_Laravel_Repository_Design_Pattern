<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/products',[ProductController::class,'index'])->name('product.index');
Route::get('/products/create',[ProductController::class,'create'])->name('product.create');
Route::post('/products/store',[ProductController::class,'store'])->name('product.store');
Route::get('/products/{id}',[ProductController::class,'show'])->name('product.show');
Route::get('/products/edit/{id}',[ProductController::class,'edit'])->name('product.edit');
Route::post('/products/update/{id}',[ProductController::class,'update'])->name('product.update');

//Comment
Route::post('/products/{id}',[CommentController::class,'addComment'])->name('product.comment');

//Admin
Route::get('/admin/products',[AdminController::class,'adminGetAllProducts'])->name('admin.products');
Route::get('/admin/comments',[AdminController::class,'adminGetAllComments'])->name('admin.comments');
Route::delete('/admin/products/{id}',[AdminController::class,'adminDeleteSingleProduct'])->name('admin.product.delete');
Route::delete('/admin/comments/{id}',[AdminController::class,'adminDeleteSingleComment'])->name('admin.comment.delete');