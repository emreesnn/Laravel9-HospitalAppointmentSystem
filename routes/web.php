<?php

use App\Http\Controllers\AdminPanel\AdminPoliclinicController;
use App\Http\Controllers\AdminPanel\ImageController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminPanel\HomeController as AdminHomeController;
use App\Http\Controllers\AdminPanel\CategoryController as AdminCategoryController;
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
//1-Do something on route
Route::get('/hello', function () {
    return 'Hello World';
});

//2- Call view in route
Route::get('/welcome', function () {
    return view('welcome');
});

//3- Call controller function
Route::get('/', [HomeController::class,'index'])->name('home');

//4- Route-> Controller-> View
Route::get('/test', [HomeController::class,'test'])->name('test');

//5- Route with parameters
Route::get('/param/{id}/{number}', [HomeController::class,'param'])->name('param');

//6- Route with post
Route::post('/save', [HomeController::class,'save'])->name('save');

Route::get('/bolumler', [HomeController::class,'bolumler'])->name('bolumler');
Route::get('/bolumler/policlinic/{id}', [HomeController::class,'policlinic'])->name('policlinic');
Route::get('/categorypoliclinics/{id}/{slug}', [HomeController::class,'categorypoliclinics'])->name('categorypoliclinics');
Route::get('/', [HomeController::class,'index'])->name('index');

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});

// *****************ADMIN PANEL ROUTES *********************
Route::prefix('admin')->name('admin.')->group(function () {
    Route::get('/', [AdminHomeController::class,'index'])->name('index');
// *****************General ROUTES *********************
    Route::get('/setting', [AdminHomeController::class,'setting'])->name('setting');
    Route::post('/setting', [AdminHomeController::class,'settingUpdate'])->name('setting.update');

// *****************ADMIN CATEGORY ROUTES *********************
    Route::prefix('/category')->name('category.')->controller(AdminCategoryController::class)->group(function () {
        Route::get('/', 'index')->name('index');
        Route::get('/create','create')->name('create');
        Route::post('/store','store')->name('store');
        Route::get('/edit/{id}','edit')->name('edit');
        Route::post('/update/{id}','update')->name('update');
        Route::get('/destroy/{id}','destroy')->name('destroy');
        Route::get('/show/{id}','show')->name('show');
    });

    // *****************ADMIN POLICLINIC ROUTES *********************
    Route::prefix('/policlinic')->name('policlinic.')->controller(AdminPoliclinicController::class)->group(function () {
        Route::get('/', 'index')->name('index');
        Route::get('/create','create')->name('create');
        Route::post('/store','store')->name('store');
        Route::get('/edit/{id}','edit')->name('edit');
        Route::post('/update/{id}','update')->name('update');
        Route::get('/destroy/{id}','destroy')->name('destroy');
        Route::get('/show/{id}','show')->name('show');
    });

    // *****************ADMIN POLICLINIC IMAGE GALLERY ROUTES *********************
    Route::prefix('/image')->name('image.')->controller(ImageController::class)->group(function () {
        Route::get('/{pid}', 'index')->name('index');
        Route::post('/store/{pid}','store')->name('store');
        Route::get('/destroy/{pid}/{id}','destroy')->name('destroy');
    });
});
