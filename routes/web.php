<?php

use App\Http\Controllers\SiteController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return redirect()->route('home');
});
Route::get('/site', function () {
    return redirect()->route('home');
});
Route::get('/site/index', [SiteController::class, 'index'])->name('home');
