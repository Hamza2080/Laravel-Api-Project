<?php

use Illuminate\Http\Request;

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


// create api resource for product controller
Route::apiResource ('/products' , 'ProductController');

// create api resource for review controller (/product/11/review)
Route::group (['prefix' => 'products'], function () {
    Route::apiResource ('/{product}/reviews' , 'ReviewController');
});