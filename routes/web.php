<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

Route::get('/', 'App\Http\Controllers\HomeController@index')->name('home.index');

Route::get('/about', function () {
  $data1 = 'About us - Online Store';
  $data2 = 'About us';
  $description = 'This is an about page ...';
  $author = 'Developed by: Gisel Jaramillo';

  return view('home.about')
    ->with('title', $data1)
    ->with('subtitle', $data2)
    ->with('description', $description)
    ->with('author', $author);
})->name('home.about');

Route::get('/contact', function () {
  $title = 'Contact - Online Store';
  $subtitle = 'Contact Us';
  $name = 'Gisel Jaramillo';
  $phone = '+57 300 123 4567';
  $address = 'Calle 10 # 40-20, Medellín';
  $email = 'gisel@example.com';

  return view('home.contact')
    ->with('title', $title)
    ->with('subtitle', $subtitle)
    ->with('name', $name)
    ->with('phone', $phone)
    ->with('address', $address)
    ->with('email', $email);
})->name('home.contact');

Route::get('/products', 'App\Http\Controllers\ProductController@index')->name("product.index");

Route::get('/products/create', 'App\Http\Controllers\ProductController@create')->name("product.create"); 

Route::post('/products/save', 'App\Http\Controllers\ProductController@save')->name("product.save"); 

Route::get('/products/{id}', 'App\Http\Controllers\ProductController@show')->name("product.show"); 

Auth::routes();
