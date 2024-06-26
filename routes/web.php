<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
// Method htpp 
// + GET , POST , PUT , PATCH , DELETE
// Base url : http://127.0.0.1:8000/

Route::get('/test' , function(){
    echo 'hello';
});
Route::get('/' , function(){
    echo 'Trang chủ';
});
// list-product
Route::get('list-product',[ProductController::class, 'showProduct']);
Route::get('thong-tin',[ProductController::class, 'thongtinsv']);

// slug and Params
//1 slug :: http://127.0.0.1:8000/list-product/1/name
Route::get('get-product/{id}',[ProductController::class,'getProduct']);

//2 Params:: http://127.0.0.1:8000/list-product?id=1&name=iphone
Route::get('update-product',[ProductController::class,'updateProduct']);