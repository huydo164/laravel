<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/project', 'App\Http\Controllers\ProjectController@index');
Route::post('/project', 'App\Http\Controllers\ProjectController@store');
Route::get('/project/{project}', 'App\Http\Controllers\ProjectController@show');
Route::put('/project/{project}', 'App\Http\Controllers\ProjectController@update');
Route::delete('/project/{project}', 'App\Http\Controllers\ProjectController@destroy');

//Post
Route::get('/post', 'App\Http\Controllers\PostController@index');
Route::post('/post', 'App\Http\Controllers\PostController@store');
Route::get('/post/{post}', 'App\Http\Controllers\PostController@show');
Route::put('/post/{post}', 'App\Http\Controllers\PostController@update');
Route::delete('/post/{post}', 'App\Http\Controllers\PostController@destroy');