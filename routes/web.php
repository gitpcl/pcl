<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MainController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/projects', function () {
    return view('projects');
})->name('projects');

Route::get('/resources', function () {
    return view('resources');
})->name('resources');

Route::get('/articles', function () {
    return view('articles');
})->name('articles');

Route::get('/download-resume', [MainController::class, 'downloadResume']);

Route::get('/thank-you', function () {
    return view('thank-you');
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
