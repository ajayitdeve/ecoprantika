<?php

use App\Http\Controllers\ContactController;
use App\Http\Controllers\WebsiteController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });
//test
Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// Route::get('/home', function () {
//     return view('layouts.master');
// });

Route::get('/',[WebsiteController::class,'index'])->name('index');

Route::get('about', function(){
    return view('website.about');
});

Route::get('tourism', function(){
    return view('website.tourism');
});

Route::get('tourpackage', function(){
    return view('website.tour-package');
});

Route::get('contact-us', function(){
    return view('website.contact-us');
});

Route::post('thanks',[ContactController::class,'sendmail'])->name('sendmail');

Route::get('gallery', function(){
    return view('website.gallery');
});
