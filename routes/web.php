<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
*/

// Main portfolio page - using welcome.blade.php
Route::get('/', function () {
    return view('welcome');  // This uses resources/views/welcome.blade.php
});

// Direct APK download route
Route::get('/download-apk', function () {
    $file = public_path('downloads/mg-portfolio.apk');
    
    if (file_exists($file)) {
        return response()->download($file, 'MG-Portfolio.apk');
    }
    
    return response()->json(['error' => 'File not found'], 404);
});