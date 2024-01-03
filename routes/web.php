<?php

use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\PostController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\Website\WebsiteController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/', [WebsiteController::class, 'website'])->name('web.maaster');
Route::get('/single-fullwidth-sidebar', [WebsiteController::class, 'singlePage'])->name('single.page');

// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth', 'verified'])->name('dashboard');
Route::get('/logout', [DashboardController::class, 'logout'])->name('dashboard.logout');



Route::get('/admin/dashboard', [DashboardController::class, 'dashboard'])->name('admin.dashboard');



Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::controller(CategoryController::class)->group(function() {
    Route::get('/category-index', 'index')->name('category.index');
    Route::get('/category-create', 'create')->name('category.create');
    Route::post('/category-post', 'post')->name('category.post');
    Route::get('/category-edit/{id}', 'edit')->name('category.edit');
    Route::post('/category-update/{id}', 'update')->name('category.update');
    Route::get('/category-delete/{id}', 'delete')->name('category.delete');
});

Route::controller(PostController::class)->group(function() {
    Route::get('/posts-index', 'index')->name('posts.index');
    Route::get('/posts-create', 'create')->name('posts.create');
    Route::post('/posts-store', 'store')->name('posts.store');
    Route::get('/posts-edit/{id}', 'edit')->name('post.edit');
    Route::post('/posts-update/{id}', 'update')->name('posts.update');
    Route::get('/posts-delete/{id}', 'delete')->name('posts.delete');
});

Route::controller(UserController::class)->group(function() {
    Route::get('/user-index', 'user')->name('user.index');
    Route::get('/user-edit/{id}', 'edit')->name('user.edit');
    Route::put('/user-update/{id}', 'update')->name('user.update');
});




require __DIR__.'/auth.php';
