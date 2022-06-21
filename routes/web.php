<?php

use App\Http\Controllers\AuthLoginController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\FindGamesController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\GameController;
use App\Http\Controllers\ManageCategoryController;
use App\Http\Controllers\ManageGameController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\ReviewController;
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

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/find', [FindGamesController::class, 'findGames']);
Route::get('/game/{id}', [GameController::class, 'Game']);

Route::controller(AuthLoginController::class)->group(function () {
    Route::get('/login', 'index')->name('login');
    Route::post('/auth_login', 'auth_login_process')->name('auth_login_process');
    Route::get('/logout', 'logout')->name('logout');
});

Route::controller(RegisterController::class)->group(function () {
    Route::get('/register', 'index')->name('register');
    Route::post('/register_process', 'register_process')->name('register_process');
});

Route::group(['middleware' => ['auth']], function () {
    
    Route::group(['middleware' => ['auth_login:admin']], function () {
        Route::get('/admin', [HomeController::class,'index']);
        Route::controller(ManageGameController::class)->group(function () {
            Route::get('/admin/managegame', 'index')->name('gameList');
            Route::get('/admin/addgame', 'addGame')->name('addGame');
            Route::get('/admin/updategame/{id}', 'updateGame')->name('updateGame');
            Route::post('/admin/addgameprocess', 'addGameProcess')->name('addGameProcess');
            Route::post('/admin/updategameprocess', 'updateGameProcess')->name('updateGameProcess');
            Route::get('/admin/deletegame/{id}', 'deleteGameProcess')->name('deleteGameProcess');
        });

        Route::controller(ManageCategoryController::class)->group(function () {
            Route::get('/admin/managecategory', 'index')->name('categoryList');
            Route::get('/admin/addcategory', 'addCategory')->name('addCategory');
            Route::get('/admin/updatecategory/{id}', 'updateCategory')->name('updateCategory');
            Route::post('/admin/addcategoryprocess', 'addCategoryProcess')->name('addCategoryProcess');
            Route::post('/admin/updatecategoryprocess', 'updateCategoryProcess')->name('updateCategoryProcess');
            Route::get('/admin/deletecategory/{id}', 'deleteCategoryProcess')->name('deleteCategoryProcess');
        });
    });

    Route::group(['middleware' => ['auth_login:member']], function () {
        Route::get('/member', [HomeController::class,'index']);
    });

    Route::controller(CartController::class)->group(function () {
        Route::post('/addcart', 'addCart')->name('addCart');
        Route::post('/checkout', 'checkout')->name('checkout');
        Route::get('/cart/{id}', 'removeCart')->name('removeCart');
        Route::get('/cart', 'index')->name('cart');
    });

    Route::post('/addreview', [ReviewController::class, 'addReview'])->name('addReview');
});

