<?php

use App\Http\Controllers\Api\v1\UserController;
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

Route::middleware('auth:sanctum')->get('/', function (Request $request) {
    return $request->user();
});

Route::prefix('users')->group(function(){
    Route::get('/',[UserController::class,'index']);
    // Route::get('/create',[UserController::class,'create'])->name('admin.users.create');
    // Route::post('/store',[UserController::class,'store'])->name('admin.users.store');
    // Route::get('/edit/{user}',[UserController::class,'edit'])->name('admin.users.edit');
    // Route::put('/update/{user}',[UserController::class,'update'])->name('admin.users.update');
    // Route::delete('/delete/{user}',[UserController::class,'delete'])->name('admin.users.delete');
});


