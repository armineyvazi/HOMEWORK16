<?php

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
    return view('welcome');
});

Route::get('/{title}/{id}/{cat}', function (...$slug) {

    return view($slug[2] . '/index', [
        'title' => $slug[0],
        'id' => $slug[1],
        'cat' => $slug[2]
    ]);
})->whereAlpha('title')->whereNumber('id')->whereIn('cat', ['sport', 'economy']);
