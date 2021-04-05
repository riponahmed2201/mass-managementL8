<?php

use App\Http\Controllers\Backend\DashboardController;
use App\Http\Controllers\Backend\FoodCategoryController;
use App\Http\Controllers\Backend\MemberController;
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
    return view('frontend.login');
});



//All Backend Routes
Route::group(['prefix' => 'admin'], function () {

    //Admin Dashboard Route
    Route::get('/dashboard',[DashboardController::class,'index'])->name('admin.dashboard');

    //Member Routes
    Route::group(['prefix' => 'member'], function () {
        Route::get('/index',[MemberController::class,'index'])->name('member.index');
        Route::get('/create',[MemberController::class,'create'])->name('member.create');
        Route::post('/store',[MemberController::class,'store'])->name('member.store');
        Route::get('/edit/{id}',[MemberController::class,'edit'])->name('member.edit');
        Route::post('/update/{id}',[MemberController::class,'update'])->name('member.update');
        Route::get('/destroy/{id}',[MemberController::class,'destroy'])->name('member.destroy');
    });

    //Food Category Routes
    Route::group(['prefix' => 'food-category'], function () {
        Route::get('/index',[FoodCategoryController::class,'index'])->name('food.category.index');
        Route::get('/create',[FoodCategoryController::class,'create'])->name('food.category.create');
        Route::post('/store',[FoodCategoryController::class,'store'])->name('food.category.store');
        Route::get('/edit/{id}',[FoodCategoryController::class,'edit'])->name('food.category.edit');
        Route::post('/update/{id}',[FoodCategoryController::class,'update'])->name('food.category.update');
        Route::get('/destroy/{id}',[FoodCategoryController::class,'destroy'])->name('food.category.destroy');
    });

});



