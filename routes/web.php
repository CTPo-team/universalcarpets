<?php

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

Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('aboutus', [App\Http\Controllers\HomeController::class,'aboutUs']);
Route::post('sendcontactus', [App\Http\Controllers\HomeController::class, 'sendContactUs']);
Route::get('contacts', [App\Http\Controllers\HomeController::class,'contacts']);
Route::get('blog', [App\Http\Controllers\HomeController::class,'blog']);
Route::get('detail-blog/{slug}', [App\Http\Controllers\HomeController::class,'detailBlog']);
Route::get('older-blog', [App\Http\Controllers\HomeController::class,'olderBlog']);
Route::get('detail-product/{slug}', [App\Http\Controllers\HomeController::class,'detailProduct']);
Route::get('product', [App\Http\Controllers\HomeController::class,'product']);

// Authentication Routes...
Route::get('login', 'App\Http\Controllers\Auth\LoginController@showLoginForm')->name('login');
Route::post('login', 'App\Http\Controllers\Auth\LoginController@login');
Route::post('logout', 'App\Http\Controllers\Auth\LoginController@logout')->name('logout');

Route::group(['middleware' => ['role:superadmin']], function () {
    Route::resource('roles', App\Http\Controllers\rolesController::class);


    Route::resource('users', App\Http\Controllers\usersController::class);
});

Route::group(['middleware' => ['role:superadmin|admin|user']], function () {
    Route::resource('bannerHomepages', App\Http\Controllers\bannerHomePageController::class);


    Route::resource('aboutUsPages', App\Http\Controllers\aboutUsPageController::class,[
        'only' => ['index', 'edit', 'update', 'show']
    ]);


    Route::resource('productCategories', App\Http\Controllers\productCategoryController::class);

    Route::resource('contactUsPages', App\Http\Controllers\contactUsPageController::class);

    Route::resource('productBrands', App\Http\Controllers\productBrandController::class);

    Route::resource('products', App\Http\Controllers\productController::class);


    Route::resource('blogCategories', App\Http\Controllers\blogCategoryController::class);

    Route::resource('blogs', App\Http\Controllers\blogController::class);


    Route::resource('aboutUsPages', App\Http\Controllers\aboutUsPageController::class);


    Route::resource('bannerHomepages', App\Http\Controllers\bannerHomepageController::class);


    Route::resource('blogCategories', App\Http\Controllers\blogCategoryController::class);


    Route::resource('productCategories', App\Http\Controllers\productCategoryController::class);

    Route::resource('settingWebs', App\Http\Controllers\settingWebController::class,[
        'only' => ['index', 'update']
    ]);
});


