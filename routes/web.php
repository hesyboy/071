<?php

use App\Http\Controllers\Admin\AdminPanelController;
use App\Http\Controllers\Admin\AdvertiseController;
use App\Http\Controllers\Admin\AdvertiseAreaController;
use App\Http\Controllers\Admin\AdvertiseAttributeController;
use App\Http\Controllers\Admin\AdvertiseCategoryController;
use App\Http\Controllers\Admin\AdvertiseCityController;
use App\Http\Controllers\Admin\AdvertiseFilterController;
use App\Http\Controllers\Admin\ContentCategoryController;
use App\Http\Controllers\Admin\ContentController;
use App\Http\Controllers\Admin\ContentTagController;
use App\Http\Controllers\Admin\UserController;
use App\Models\AdvertiseCategory;
use App\Models\ContentCategory;
use App\Models\ContentTag;
use Illuminate\Support\Facades\Artisan;
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

Route::get('/link', function () {
    Artisan::call('storage:link');
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
    // | Advertise Routes
    // |-----------------------

    Route::prefix('advertise')->group(function(){

        Route::get('/',[AdvertiseController::class,'index'])->name('admin.advertise.index');
        Route::get('/create',[AdvertiseController::class,'create'])->name('admin.advertise.create');
        Route::post('/store',[AdvertiseController::class,'store'])->name('admin.advertise.store');
        Route::get('/edit/{advertise}',[AdvertiseController::class,'edit'])->name('admin.advertise.edit');
        Route::put('/update/{advertise}',[AdvertiseController::class,'update'])->name('admin.advertise.update');
        Route::delete('/delete/{advertise}',[AdvertiseController::class,'delete'])->name('admin.advertise.delete');

        Route::get('/report',[AdvertiseController::class,'report'])->name('admin.advertise.report');

    // |-----------------------
    // | Advertise Categories Routes
    // |-----------------------

        Route::prefix('categories')->group(function(){
            Route::get('/',[AdvertiseCategoryController::class,'index'])->name('admin.advertise.categories.index');
            Route::get('/create',[AdvertiseCategoryController::class,'create'])->name('admin.advertise.categories.create');
            Route::post('/store',[AdvertiseCategoryController::class,'store'])->name('admin.advertise.categories.store');
            Route::get('/edit/{advertisecategory}',[AdvertiseCategoryController::class,'edit'])->name('admin.advertise.categories.edit');
            Route::put('/update/{advertisecategory}',[AdvertiseCategoryController::class,'update'])->name('admin.advertise.categories.update');
            Route::delete('/delete/{advertisecategory}',[AdvertiseCategoryController::class,'delete'])->name('admin.advertise.categories.delete');
        });

    // |-----------------------
    // | Advertise Cities Routes
    // |-----------------------

        Route::prefix('cities')->group(function(){
            Route::get('/',[AdvertiseCityController::class,'index'])->name('admin.advertise.cities.index');
            Route::get('/create',[AdvertiseCityController::class,'create'])->name('admin.advertise.cities.create');
            Route::post('/store',[AdvertiseCityController::class,'store'])->name('admin.advertise.cities.store');
            Route::get('/edit/{city}',[AdvertiseCityController::class,'edit'])->name('admin.advertise.cities.edit');
            Route::put('/update/{city}',[AdvertiseCityController::class,'update'])->name('admin.advertise.cities.update');
            Route::delete('/delete/{city}',[AdvertiseCityController::class,'delete'])->name('admin.advertise.cities.delete');
        });


    // |-----------------------
    // | Advertise areas Routes
    // |-----------------------

        Route::prefix('areas')->group(function(){
            Route::get('/',[AdvertiseAreaController::class,'index'])->name('admin.advertise.areas.index');
            Route::get('/create',[AdvertiseAreaController::class,'create'])->name('admin.advertise.areas.create');
            Route::post('/store',[AdvertiseAreaController::class,'store'])->name('admin.advertise.areas.store');
            Route::get('/edit/{area}',[AdvertiseAreaController::class,'edit'])->name('admin.advertise.areas.edit');
            Route::put('/update/{area}',[AdvertiseAreaController::class,'update'])->name('admin.advertise.areas.update');
            Route::delete('/delete/{area}',[AdvertiseAreaController::class,'delete'])->name('admin.advertise.areas.delete');
        });


    // |-----------------------
    // | Advertise Filters Route
    // |-----------------------

    Route::prefix('filters')->group(function(){
        Route::get('/',[AdvertiseFilterController::class,'index'])->name('admin.advertise.filters.index');
        Route::get('/create',[AdvertiseFilterController::class,'create'])->name('admin.advertise.filters.create');
        Route::post('/store',[AdvertiseFilterController::class,'store'])->name('admin.advertise.filters.store');
        Route::get('/edit/{filter}',[AdvertiseFilterController::class,'edit'])->name('admin.advertise.filters.edit');
        Route::put('/update/{filter}',[AdvertiseFilterController::class,'update'])->name('admin.advertise.filters.update');
        Route::delete('/delete/{filter}',[AdvertiseFilterController::class,'delete'])->name('admin.advertise.filters.delete');
    });


        // |-----------------------
    // | Advertise Attributes Route
    // |-----------------------

    Route::prefix('attributes')->group(function(){
        Route::get('/',[AdvertiseAttributeController::class,'index'])->name('admin.advertise.attributes.index');
        Route::get('/create',[AdvertiseAttributeController::class,'create'])->name('admin.advertise.attributes.create');
        Route::post('/store',[AdvertiseAttributeController::class,'store'])->name('admin.advertise.attributes.store');
        Route::get('/edit/{attribute}',[AdvertiseAttributeController::class,'edit'])->name('admin.advertise.attributes.edit');
        Route::put('/update/{attribute}',[AdvertiseAttributeController::class,'update'])->name('admin.advertise.attributes.update');
        Route::delete('/delete/{attribute}',[AdvertiseAttributeController::class,'delete'])->name('admin.advertise.attributes.delete');
    });

});





    // |-----------------------
    // | Blog Routes
    // |-----------------------

    Route::prefix('blog')->group(function(){

        Route::get('/report',[ContentController::class,'report'])->name('admin.blog.report');

        Route::prefix('content')->group(function(){
            Route::get('/',[ContentController::class,'index'])->name('admin.blog.content.index');
            Route::get('/create',[ContentController::class,'create'])->name('admin.blog.content.create');
            Route::post('/store',[ContentController::class,'store'])->name('admin.blog.content.store');
            Route::get('/edit/{content}',[ContentController::class,'edit'])->name('admin.blog.content.edit');
            Route::put('/update/{content}',[ContentController::class,'update'])->name('admin.blog.content.update');
            Route::delete('/delete/{content}',[ContentController::class,'delete'])->name('admin.blog.content.delete');
        });

        Route::prefix('categories')->group(function(){
            Route::get('/',[ContentCategoryController::class,'index'])->name('admin.blog.categories.index');
            Route::get('/create',[ContentCategoryController::class,'create'])->name('admin.blog.categories.create');
            Route::post('/store',[ContentCategoryController::class,'store'])->name('admin.blog.categories.store');
            Route::get('/edit/{category}',[ContentCategoryController::class,'edit'])->name('admin.blog.categories.edit');
            Route::put('/update/{category}',[ContentCategoryController::class,'update'])->name('admin.blog.categories.update');
            Route::delete('/delete/{category}',[ContentCategoryController::class,'delete'])->name('admin.blog.categories.delete');
        });

        Route::prefix('tags')->group(function(){
            Route::get('/',[ContentTagController::class,'index'])->name('admin.blog.tags.index');
            Route::get('/create',[ContentTagController::class,'create'])->name('admin.blog.tags.create');
            Route::post('/store',[ContentTagController::class,'store'])->name('admin.blog.tags.store');
            Route::get('/edit/{tag}',[ContentTagController::class,'edit'])->name('admin.blog.tags.edit');
            Route::put('/update/{tag}',[ContentTagController::class,'update'])->name('admin.blog.tags.update');
            Route::delete('/delete/{tag}',[ContentTagController::class,'delete'])->name('admin.blog.tags.delete');
        });

    });











});


require __DIR__.'/auth.php';
