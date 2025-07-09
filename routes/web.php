<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    $person = [
        "name" => "phandor",
        "email" => "phan.dorel.lam@gmail.com",
    ];
    dd($person);
    return view('welcome');
});

Route::view('/about', 'about');

Route::get('/product/{category?}', action: function(string $category = null) {
    return "Product for category=$category";
}); 

//Route::get('/product/{id}', function(string $id) {
//    return "Product ID=$id";
//});

//Route::get('{lang}/product/{id}/review/{reviewId}', 
//function (string $lang, string $id, string $reviewId) {
//    return "Product ID=$id";
//}); 