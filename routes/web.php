<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SalesController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// ここの前に認証が来るはず→認証前に以下記述をバックアップするように。
Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
    Route::get('/home', [SalesController::class, 'index']);
    Route::get('/edit/{param}', [SalesController::class, 'edit']);
    Route::post('/update', [SalesController::class, 'update']);
    Route::get('/add', [SalesController::class, 'add']);
    Route::post('/add', [SalesController::class, 'create']);
    Route::post('/find', [SalesController::class, 'find']);

});
