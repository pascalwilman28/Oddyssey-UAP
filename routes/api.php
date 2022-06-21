<?php

use App\Http\Controllers\LoginAPIController;
use App\Http\Controllers\RegisterAPIController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\TransactionAPIController;
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


// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });

//Pake Passport
Route::post('/login',[LoginAPIController::class, 'login']);
Route::post('/register', [RegisterAPIController::class, 'register']);
Route::group(['middleware' => 'auth:api'], function(){
    Route::get('/transaction', [TransactionAPIController::class,'transaction']);
});