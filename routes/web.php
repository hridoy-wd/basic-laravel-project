<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\adminController;
use App\Http\Controllers\Home\HomeSlideController;
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
    return view('frontend.index');
});
//admin all route
Route::controller(adminController::class)->group(function(){
Route::get('/admin/logout', 'destroy')->name('admin.logout');
Route::get('/admin/profile', 'profile')->name('admin.profile');
Route::get('/edit/profile', 'edit')->name('edit.profile');
Route::post('/store/profile/img', 'store')->name('store.profile');
});

Route::controller(HomeSlideController::class)->group(function(){
    Route::get('/home/slide', 'index')->name('home.slide');
    Route::post('/home/slideUpdate', 'update')->name('store.homeSlide');
    });

Route::controller(AboutController::class)->group(function(){
    Route::get('/about/setup', 'index')->name('about.setup');
    Route::post('/about/update', 'update')->name('about.update');
    Route::get('/about', 'homeAbout')->name('home.about');
});

Route::get('/dashboard', function () {
    return view('admin.index')->with('message','Data added Successfully');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';
