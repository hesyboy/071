<?php

use App\Http\Controllers\Admin\AdminPanelController;
use App\Http\Controllers\Admin\AdvertiseCategoryController;
use App\Http\Controllers\Admin\UserController;
use App\Models\AdvertiseCategory;
use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');



/*
|--------------------------------------------------------------------------
| Admin Panel Routes
|--------------------------------------------------------------------------
|
*/

Route::prefix('admin')->namespace('admin')->group(function(){

    // |-----------------------
    // | Admin Dashboard Routes
    // |-----------------------

    Route::get('/',[AdminPanelController::class,'index'])->name('admin.index');


    // |-----------------------
    // | Users Routes
    // |-----------------------

    Route::prefix('users')->group(function(){
        Route::get('/',[UserController::class,'index'])->name('admin.users.index');
        Route::get('/create',[UserController::class,'create'])->name('admin.users.create');
        Route::post('/store',[UserController::class,'store'])->name('admin.users.store');
        Route::get('/edit/{user}',[UserController::class,'edit'])->name('admin.users.edit');
        Route::put('/update/{user}',[UserController::class,'update'])->name('admin.users.update');
        Route::delete('/delete/{user}',[UserController::class,'delete'])->name('admin.users.delete');
    });


        // |-----------------------
    // | Advertise Categories Routes
    // |-----------------------

    Route::prefix('advertise-categories')->group(function(){
        Route::get('/',[AdvertiseCategoryController::class,'index'])->name('admin.advertise-categories.index');
        Route::get('/create',[AdvertiseCategoryController::class,'create'])->name('admin.advertise-categories.create');
        Route::post('/store',[AdvertiseCategoryController::class,'store'])->name('admin.advertise-categories.store');
        Route::get('/edit/{advertisecategory}',[AdvertiseCategoryController::class,'edit'])->name('admin.advertise-categories.edit');
        Route::put('/update/{advertisecategory}',[AdvertiseCategoryController::class,'update'])->name('admin.advertise-categories.update');
        Route::delete('/delete/{advertisecategory}',[AdvertiseCategoryController::class,'delete'])->name('admin.advertise-categories.delete');
    });


});


require __DIR__.'/auth.php';
