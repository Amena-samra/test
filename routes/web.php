<?php



Route::get('/', function () {
    return view('index');
})->name('index');

Route::get('Home', function () {
    return view('Home');
})->name('Home');

Route::get('about', function () {
    return view('about');
})->name('about');
Route::get('experiences', function () {
    return view('experiences');
})->name('experiences');

Route::get('contact', function () {
    return view('contact');
})->name('contact');


Route::get('/download', function () {
    $file = public_path()."file/AMENA-CV.pdf";
    $headers = array('Content-Type : application/pdf',);
    return Response :: download($file , "AMENA-CV.pdf",$headers);
})->name('down');