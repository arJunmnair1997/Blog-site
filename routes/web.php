<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Auth\AuthController;
use App\Http\Controllers\BlogCrud;
use App\Http\Controllers\BlogCrudController;
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

Route::get('login', [AuthController::class, 'index'])->name('login');
Route::post('post-login', [AuthController::class, 'postLogin'])->name('login.post');
Route::get('registration', [AuthController::class, 'registration'])->name('register');
Route::post('post-registration', [AuthController::class, 'postRegistration'])->name('register.post');
Route::get('dashboard', [AuthController::class, 'dashboard']);
Route::get('logout', [AuthController::class, 'logout'])->name('logout');



//Blog Crud for admin
Route::get('/admin/blog', [BlogCrudController::class, 'index'])->name('admin.blog');
Route::post('/blogs-crud', [BlogCrudController::class, 'store'])->name('blogs.store');
Route::get('/admin/blog/{id}', [BlogCrudController::class, 'edit'])->name('blogs.edit');
Route::put('/admin/blog/{id}', [BlogCrudController::class, 'update'])->name('blogs.update');
Route::delete('/admin/blog/{id}', [BlogCrudController::class, 'destroy'])->name('blogs.destroy');

//For User
Route::get('/', [UserController::class, 'index'])->name('home');
Route::get('/view', [UserController::class, 'view'])->name('user.viewblog');
Route::get('/blog/{id}', [UserController::class, 'blog'])->name('user.blog');
Route::post('/addcomment', [UserController::class, 'cmt'])->name('user.cmt');
Route::post('/addreply', [UserController::class, 'addReply'])->name('user.reply');
