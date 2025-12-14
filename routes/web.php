<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegisterController;

Route::get('/', function () {
    return view('html101');
});

Route::get('/view2',function(){
    return view('myview2');
});

Route::post('/register', [RegisterController::class, 'store'])->name('register.submit');
