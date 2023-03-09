<?php

use App\Http\Controllers\Api\SclassController;
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

// Student class
Route::get('/sclass',[SclassController::class,'index']);

Route::post('/sclass/add',[SclassController::class,'store']);

Route::get('/sclass/edit/{id}',[SclassController::class,'edit']);

Route::post('/sclass/edit/{id}',[SclassController::class,'update']);

Route::get('/sclass/delete/{id}',[SclassController::class,'delete']);

// Student Subject




// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });
