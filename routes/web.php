<?php



Route::get('/', function () {
    return view('index');
});

Route::get('Home', function () {
    return view('Home');
});

Route::get('about', function () {
    return view('about');
});
Route::get('experiences', function () {
    return view('experiences');
});

Route::get('contact', function () {
    return view('contact');
});


