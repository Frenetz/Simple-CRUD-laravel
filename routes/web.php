<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use App\Models\People;
use App\Http\Controllers\PageController;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\NewsController;

//Песочница
Route::get('/', function () {
    return "Hello Worerrld!";
});

Route::get('/people', function(){
    $people = People::all();
    return view('people', ['people'=>$people]);
});

Route::get('/dogs', function(){
    return view('dogs');
});

Route::get('about', [PageController::class, 'about']);

Route::get('news', [NewsController::class, 'news']);

//Хекслет

Route::get('articles', [ArticleController::class, 'index'])->name('articles.index');

Route::post('articles', [ArticleController::class, 'store'])->name('articles.store');

Route::get('articles/controller', [ArticleController::class, 'create'])->name('articles.create');

Route::get('articles/{id}', [ArticleController::class, 'show'])->name('articles.show');

Route::get('articles/{id}/edit', [ArticleController::class, 'edit'])->name('articles.edit');

Route::patch('articles/{id}', [ArticleController::class, 'update'])->name('articles.update');

Route::delete('articles/{id}', [ArticleController::class, 'delete'])->name('articles.delete');