<?php

use App\Http\Controllers\ProductController;
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


// Route::get('/products', [ProductController::class, 'index']);

// Route::post('/products/save', [ProductController::class, 'store']);

// Route::post('/products/update', [ProductController::class, 'update']);
// Route::post('/products', [ProductController::class, 'store']);



//API route for register new user
// Route::post('/register', [App\Http\Controllers\API\AuthController::class, 'register']);
// //API route for login user
// Route::post('/login', [App\Http\Controllers\API\AuthController::class, 'login']);

Route::resource('/products', ProductController::class);

Route::group(['middleware' => ['auth:sanctum']], function (){

    //CRUD Product
    

    // API route for logout user
    Route::post('/logout', [App\Http\Controllers\API\AuthController::class, 'logout']);
});
