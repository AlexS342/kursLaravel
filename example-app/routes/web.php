<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Admin\IndexController;
use App\Http\Controllers\NewsController;

// Route::get('/', function () {
//     return view('welcome');
// });

//урок №1
// Route::get('/hi', function () {
//     return view('hello');
// });
// Route::get('/inf', function () {
//     return view('information');
// });
// Route::get('/news', function () {
//     return view('news');
// });

//Урок №2
Route::get('/', [HomeController::class, 'index']);
// Route::get('/admin', [IndexController::class, 'index']);
// Route::get('/test', [IndexController::class, 'test1']);
// Route::get('/test', [IndexController::class, 'test2']);         // срабатывает этот роут

//Групировка маршрутов (Пример из официальной документации)
// use App\Http\Controllers\OrderController;
// Route::controller(OrderController::class)->group(function () {
//     Route::get('/orders/{id}', 'show');
//     Route::post('/orders', 'store');
// });
Route::controller(IndexController::class)->group(function () {
    Route::get('/admin', 'index');
    Route::get('/test', 'test1');
    Route::get('/test', 'test2');
});

// Route::get('/news', [NewsController::class, 'news'])->name('SuperNews');
// Route::get('/news/{id}', [NewsController::class, 'newsOne'])->name('OneNews');

Route::controller(NewsController::class)->group(function () {
    Route::get('/news', 'news')->name('SuperNews');
    Route::get('/news/{id}', 'newsOne')->name('OneNews');
});