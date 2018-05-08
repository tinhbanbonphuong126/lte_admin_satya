<?php

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




//All route for frontend

use App\Region;

Route::get('/', function () {

    $regions = Region::query()->get();

    dd($regions);

    return view('welcome');
});

























//All Route for Admin Management
Route::group(['prefix' => 'admin'], function() {

    Route::auth();

    Route::group(['middleware' => 'auth'], function () {

        Route::get('/', function () {
            return view('welcome');
        });

    });
});
