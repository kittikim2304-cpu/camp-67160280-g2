<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Html101Controller;

Route::get('/', function () {
    return view('html101');
});

Route::get('/se', function () {
    return view('template.default');
});

Route::get('/mycontroller', [App\Http\Controllers\MyController::class, 'index']);
Route::get('/calculate', [App\Http\Controllers\MyController::class, 'info']);
Route::post('/calculate', [App\Http\Controllers\MyController::class, 'calculate']);

// Html101 form routes
Route::get('html101/create', [Html101Controller::class, 'create'])->name('html101.create');
Route::post('html101', [Html101Controller::class, 'store'])->name('html101.store');
Route::get('html101/view', [Html101Controller::class, 'view'])->name('html101.view');
