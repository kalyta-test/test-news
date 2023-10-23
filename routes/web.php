<?php

use App\Http\Controllers\CategoriesController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
php artisan route:list
|
*/

Route::get('/', function () {
    return view('test-news');
});

//Route::get('/categories', [
//    'as' => 'categories.index',
//    'uses' => 'CategoriesController@index',
//]);

//Route::get('/news', [
//    'as' => 'news.index',
//    'uses' => 'NewsController@index',
//]);

