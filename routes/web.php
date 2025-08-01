<?php

use Illuminate\Support\Facades\Route;


Route::get('/', function () {
//    $aboutPageUrl = '/about';
//    $aboutPageUrl = route('about');
//    dd($aboutPageUrl);

//    $productUrl = route('product.view', ['lang' => 'en', 'id' => 1]);
//    dd($productUrl);

    return view('welcome');
});

Route::view('/about', 'about')->name('about');

Route::view('/about', 'about')->name('about');

Route::prefix('admin')->group(function () {
    Route::get('/users', function () {
        return '/users'; 
    })->name('users');
});

// Route::prefix('admin')->group(function () {
//     Route::get('/users', function () {
//         return '/admin/users';
//     });
// });

//Route::get('/user/profile', function(){})->name('profile');

//Route::get('/current-user', function(){
//    return redirect()->route('profile');
//    return to_route('profile');
//});

//Route::get("/p/{lang}/{id}", function(string $lang, string $id){
//    // ...
//})->name("product.view");


//Route::get('/', function () {
//    $person = [
//        "name" => "phandor",
//        "email" => "phan.dorel.lam@gmail.com",
//    ];
//    dd($person);
//    return view('welcome');
//});

//Route::get('/user/{username}', function(string $username){
//    // ...
//})->where('username', '[a-z]+');
//
//
//Route::get("{lang}/product/{id}", function(string $lang, string $id){
//    // ...
//})->where(['lang' => '[a-z]{2}', 'id' => '\d{4,}']);
//
//Route::get('/search/{search}', function (string $search) {
//    return $search;
//})->where('search', '.+'); 

//Route::get('/product/{category?}', function(?string $category = null) {
//    return "Product for category=$category";
//});

//Route::get('/product/{id}', function(string $id) {
//    return "Product ID=$id";
//});

//Route::get('{lang}/product/{id}/review/{reviewId}', 
//function (string $lang, string $id, string $reviewId) {
//    return "Product ID=$id";
//}); 
