<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\FrontendController;
use App\Http\Controllers\Admin\ProductContoller;



Route::get('/', function () {
    return view('welcome');
});

Route::get('/admin',[AdminController::class,'index']);
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


Route::middleware(['auth', 'isAdmin'])->group(function () {

     Route::get('/dashboard',[FrontendController::class,'index'])->name('admin.dashboard');
    //Category route
     Route::get('/add-category',[CategoryController::class,'addCategory'])->name('addCategory');
     Route::get('/all-category',[CategoryController::class,'allCategory'])->name('allCategory');
     Route::post('/insert-category',[CategoryController::class,'insertCategory'])->name('insertCategory');
     Route::get('/edit-category/{id}',[CategoryController::class,'editCategory'])->name('editCategory');
     Route::put('/update-category/{id}',[CategoryController::class,'updateCategory'])->name('updateCategory');
     Route::get('/delete-category/{id}',[CategoryController::class,'deleteCategory'])->name('deleteCategory');

     //Product route
     Route::get('/add-product',[ProductContoller::class,'create'])->name('product.create');
     Route::get('/all-product',[ProductContoller::class,'index'])->name('product.index');
     Route::post('/insert-product',[ProductContoller::class,'insert'])->name('product.insert');
     Route::get('/edit-product/{id}',[ProductContoller::class,'edit'])->name('product.edit');
     Route::put('/update-product/{id}',[ProductContoller::class,'update'])->name('product.update');
     Route::get('/delete-product/{id}',[ProductContoller::class,'delete'])->name('product.delete');

 });