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
//API articel
Route::get('articels','ArticleController@getArticel');
Route::get('articels/{articel}','ArticleController@searchArticel');
Route::post('articels','ArticleController@creatArticel');
Route::put('articels/{articel}','ArticleController@updateArticel');
Route::delete('articels/{articel}','ArticleController@deleteArticel');
