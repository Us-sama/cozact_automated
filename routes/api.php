<?php

use App\Http\Controllers\AutomatismeController;
use App\Models\Automatisme;
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

Route::get('/get_all_automatisme',[AutomatismeController::class , 'get_all_automatisme']);
Route::post('/add_automatisme',[AutomatismeController::class ,'add_automatisme']);
Route::get('/get_edit_automatisme/{id}',[AutomatismeController::class, 'get_edit_automatisme']);
Route::post('/update_automatisme/{id}',[AutomatismeController::class,'update_automatisme']);
Route::get('/delete_automatisme/{id}',[AutomatismeController::class , 'delete_automatisme']);

