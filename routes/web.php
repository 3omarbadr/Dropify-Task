<?php

use App\Http\Controllers\ArticleController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('admin.home.index');
});

Route::get('/article', [ArticleController::class, 'index'])->name('articles.index');

Route::get('/article/create', [ArticleController::class, 'create']);

Route::post('/article/store', [ArticleController::class, 'store']);

Route::get('/article/edit/{id}', [ArticleController::class, 'edit']);

Route::post('/article/update/{article}', [ArticleController::class, 'update'])->name('articles.update');

Route::post('/article/delete/{article}', [ArticleController::class, 'destroy'])->name('articles.destroy');
