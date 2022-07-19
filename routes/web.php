<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\adminController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\category;
use App\Http\Controllers\contactController;
use App\Http\Controllers\footerController;
use App\Http\Controllers\Home\HomeSlideController;
use App\Http\Controllers\PortfolioController;
use App\Http\Controllers\ServiceController;
use App\Models\CategoryBlog;
use App\Models\portfolio;
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
});//end method
//admin all route
Route::controller(adminController::class)->group(function(){
Route::get('/admin/logout', 'destroy')->name('admin.logout');
Route::get('/admin/profile', 'profile')->name('admin.profile');
Route::get('/edit/profile', 'edit')->name('edit.profile');
Route::post('/store/profile/img', 'store')->name('store.profile');
});//end method

//HomeSlide all route
Route::controller(HomeSlideController::class)->group(function(){
    Route::get('/home/slide', 'index')->name('home.slide');
    Route::post('/home/slideUpdate', 'update')->name('store.homeSlide');
    });//end method

//About all route
Route::controller(AboutController::class)->group(function(){
    Route::get('/about/setup', 'index')->name('about.setup');
    Route::post('/about/update', 'update')->name('about.update');
    Route::get('/about', 'homeAbout')->name('home.about');

    Route::get('/about/multiImage', 'multiImage')->name('about.multi.img');
    Route::post('/store/multiImage', 'storeMultiImage')->name('store.multiImage');
    Route::get('/multiImage', 'all_multi_img')->name('all.multi.img');
    Route::get('/edit/multi/image/{id}', 'edit_multi_img')->name('edit.multiImage');
    Route::post('/update/multiImage', 'update_multi_image')->name('update.multi.image');
    Route::get('/delete/multi/image/{id}', 'delete_multi_img')->name('delete.multiImage');

});
//end method

Route::controller(ServiceController::class)->group(function(){
    Route::get('service/show', 'index')->name('service.show');
    Route::get('service/add', 'add')->name('service.add');
    Route::post('service/add', 'add_service')->name('add.one.service');
    Route::get('service/destroy/{id}', 'destroy')->name('service.destroy');
    Route::get('service/edit/{id}', 'edit')->name('service.edit');
    Route::post('service.update', 'update')->name('service.update');
});
//end method

Route::controller(PortfolioController::class)->group(function(){
    Route::get('portfolio/all', 'index')->name('all.portfolio');
    Route::get('portfolio/add', 'add')->name('add.portfolio');
    Route::post('portfolio/store', 'store')->name('store.portfolio');
    Route::get('portfolio/edit/{id}', 'edit')->name('edit.portfolio');
    Route::post('portfolio/update/', 'update')->name('update.portfolio');
    Route::get('portfolio/delete/{id}', 'delete')->name('delete.portfolio');
    Route::get('portfolio/details/{id}', 'details')->name('portfolio.details'); 
});
//end method


Route::controller(category::class)->group(function(){
    Route::get('category/all', 'index')->name('all.category');
    Route::get('category/add', 'add')->name('add.category');

    Route::post('category/store', 'store')->name('store.category');
    Route::get('category/edit/{id}', 'edit')->name('edit.category');

    Route::post('category/update', 'update')->name('update.category');
    Route::get('category/delete/{id}', 'delete')->name('delete.category');
});
//end method


Route::controller(BlogController::class)->group(function(){
    Route::get('blog/all', 'index')->name('all.blog');
    Route::get('blog/add', 'add')->name('add.blog');

    Route::post('blog/store', 'store')->name('store.blog');
    Route::get('blog/edit/{id}', 'edit')->name('edit.blog');

    Route::post('blog/update', 'update')->name('update.blog');
    Route::get('blog/delete/{id}', 'delete')->name('delete.blog');

    Route::get('blog/details/{id}', 'blogDetails')->name('blog.details');
    Route::get('category/post/{id}', 'categoryPost')->name('category.post');

    Route::get('blog', 'blog')->name('home.blog');

});
//end method

Route::controller(footerController::class)->group(function(){
    Route::get('footer', 'footerPage')->name('footer.page');
    Route::post('footer', 'footerUpdate')->name('footer.update');

});//end method

Route::controller(contactController::class)->group(function(){
    Route::get('contact', 'contact')->name('contact');

});//end method

//breeze default all route
Route::get('/dashboard', function () {
    return view('admin.index')->with('message','Data added Successfully');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';
//end method
