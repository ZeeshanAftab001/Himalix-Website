<?php
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
})->name('home');

Route::get('/about', function () {
    return view('about');
})->name('about');

Route::get('/products', function () {
    return view('product');
})->name('products');

Route::get('/contact', function () {
    return view('contact');
})->name('contact');

// Route::post('/contact/submit', function () {
//     // Handle form submission
// })->name('contact.submit');


?>



