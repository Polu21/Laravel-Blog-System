<?php

use App\Http\Controllers\AdminDashboardController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\RegisterController;
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

Route::get('/dummy', function () {
    return view('pages/dummy');
});

Route::get('/register', [RegisterController::class, 'index'])->name('register.index');
Route::post('/user/register', [RegisterController::class, 'create'])->name('register.create');
Route::get('/login', [LoginController::class, 'login'])->name('login');
Route::post('/login', [LoginController::class, 'loginPost'])->name('login.post');
Route::get('/profile', [ProfileController::class, 'profile'])->name('profile');

Route::get('/admin/dashboard', [AdminDashboardController::class, 'index'])->name('dashboard.index');
Route::get('/blog/index', [BlogController::class, 'index'])->name('blog.index');
Route::post('/blog/create', [BlogController::class, 'create'])->name('blog.create');
Route::put('/blog/{id}/update', [BlogController::class, 'update'])->name('blog.update');
Route::get('/blog/{id}/edit', [BlogController::class, 'edit'])->name('blog.edit');
Route::get('/blog/{id}/delete', [BlogController::class, 'destroy'])->name('blog.delete');

// Frontent Route //
Route::get('/frontend/dashboard', [DashboardController::class, 'index'])->name('frontend.index');
Route::get('/blog/list', [BlogController::class, 'list'])->name('blog.list');
Route::get('/blog/{id}/show', [BlogController::class, 'show'])->name('blog.show');
Route::get('/contact', [ContactController::class, 'index'])->name('contact');
Route::post('/contact/post', [ContactController::class, 'store'])->name('contact.create');
