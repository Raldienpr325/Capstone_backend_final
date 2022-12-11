<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\KategoriController;
use App\Http\Controllers\MateriController;
use App\Http\Controllers\SubMateriController;
use App\Http\Controllers\UserController;

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

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/login-admin', [AdminController::class, 'loginAdmin'])->name('loginAdmin');
Route::post('/handle-admin', [AdminController::class, 'handleAdmin'])->name('handle-admin');
Route::get('login-user', [UserController::class, 'loginUser'])->name('login-user');
Route::post('authenticated', [UserController::class, 'authenticated'])->name('authenticated');
Route::post('register-user', [UserController::class, 'registerUser'])->name('register-user');
Route::get('sign-up', [UserController::class, 'signup'])->name('sign-up');
Route::get('curriculum', [UserController::class, 'curriculum'])->name('curriculum');
Route::get('class', [UserController::class, 'class'])->name('class');
Route::get('about-us', [UserController::class, 'aboutus'])->name('about-us');


// user
Route::middleware(['auth'])->group(function () {

    Route::get('dashboard/{id}', [UserController::class, 'berhasilLogin'])->name('dashboard');
    Route::get('detail-kelas/{id}', [UserController::class, 'detail'])->name('detail-kelas');
    Route::get('sub-materi/{id}', [UserController::class, 'sub'])->name('subMateri');
});

// admin
Route::group(['middleware' => 'admin'], function () {
    Route::get('dashboard-admin', [AdminController::class, 'dashboard'])->name('adminDashboard');
    Route::get('manage-materi', [AdminController::class, 'materi'])->name('manage-materi');
    Route::get('manage-categories', [AdminController::class, 'categories'])->name('manage-categories');
    Route::resource('kategori', KategoriController::class)->except('show');
    Route::resource('materi', MateriController::class)->except('show');
    Route::resource('sub-materi-admin', SubMateriController::class)->except('show');
});
