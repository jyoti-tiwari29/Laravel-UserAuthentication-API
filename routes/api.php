<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserApiController;

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

/*Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();*/




Route::post('login', [UserApiController::class, 'authenticate']);
Route::post('register', [UserApiController::class, 'register']);
Route::group(['middleware' => ['jwt.verify']], function() {
Route::get('logout', [UserApiController::class, 'logout']);
Route::get('get_user', [UserApiController::class, 'get_user']);
    
});
