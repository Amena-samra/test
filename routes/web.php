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


Route::get('/download', function () {
    $file = public_path()."/AMENA-CV.pdf";
    $headers = array('Content-Type : application/pdf',);
    return Response :: download($file , "AMENA-CV.pdf",$headers);
});