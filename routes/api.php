<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\apiController;
use App\Http\Controllers\apiAuth;
use App\Http\Controllers\Auth\LoginController;

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

Route::post('/register',[apiAuth::class,'register']);
Route::post('/generate',[apiAuth::class,'getToken']);

Route::middleware('auth:sanctum')->group(function() {
    
    Route::post('/revoke',[apiAuth::class,'revokeToken']);
    Route::post('/todo/show',[apiController::class,'show']);
    Route::post('/todo/add',[apiController::class,'store']);
    Route::post('/todo/status',[apiController::class,'status']);
});