<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\BookController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LanguageController;
use Illuminate\Support\Facades\Auth;
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

Auth::routes();

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/login', [HomeController::class, 'showLoginForm'])->name('login');
Route::get('/register', [HomeController::class, 'showRegistrationForm'])->name('register');


//admin
Route::group(['name' => 'admin.', 'prefix' => 'admin', 'middleware' => 'adminmiddleware'], function () {
    Route::get('/', [AdminController::class, 'index'])->name('index');
    Route::resource('categories', CategoryController::class);
    Route::resource('books', BookController::class);
});

//home
Route::get('/listBook', [HomeController::class, 'listBook'])->name('listBook');
Route::get('/detail/{id}', [HomeController::class, 'detailBook'])->name('detailBook');
Route::get('/listBook/{categoryID}', [HomeController::class, 'listBookByCategory'])->name('listBook.category');

/**
 * Change Language
 */
Route::get('locale/{locale}', [LanguageController::class, 'changeLanguage'])->name('locale');
