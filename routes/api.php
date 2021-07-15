<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\AuthController;
use App\Http\Controllers\Api\ClientController;
use App\Http\Controllers\Api\V1\UserController;
use App\Http\Controllers\Api\V1\UtilityController;

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
Route::get('client', [ClientController::class, 'get']);
Route::group(['prefix' => 'auth'], function () {
  Route::post('login', [AuthController::class, 'login']);
  Route::post('logout', [AuthController::class, 'logout']);
  Route::post('register', [AuthController::class, 'register']);
});

Route::group(['prefix' => 'v1'], function () {
  Route::get('user-profile', [UserController::class, 'getProfile']);
  Route::get('country-list', [UtilityController::class, 'getCountryList']);
});

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
