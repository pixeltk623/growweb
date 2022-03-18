<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;

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

/*Route::get('/', function () {
    return view('welcome');
});*/

/* Front Route */

Route::get('/', [App\Http\Controllers\Front\HomeController::class, 'index']);
Route::get('/about', [App\Http\Controllers\Front\AboutController::class, 'index'])->name('about');
Route::get('/courses', [App\Http\Controllers\Front\CourseController::class, 'index'])->name('courses');
Route::get('/blog', [App\Http\Controllers\Front\BlogController::class, 'index'])->name('blog');
Route::get('/contact', [App\Http\Controllers\Front\ContactController::class, 'index'])->name('contact');


/* Admin Rote */


Route::get('/admin/login', [App\Http\Controllers\Admin\AuthenticateController::class, 'index'])->name('admin.login');
Route::post('/admin/login', [App\Http\Controllers\Admin\AuthenticateController::class, 'sendLoginDetails']);
Route::get('/admin/logout', [App\Http\Controllers\Admin\AuthenticateController::class, 'destroy'])->name('admin.logout');
Route::post('/admin/logout', [App\Http\Controllers\Admin\AuthenticateController::class, 'destroy'])->name('admin.logout');



Route::get('/admin', [App\Http\Controllers\Admin\HomeController::class, 'index'])->name('admin');
Route::get('/admin/category', [App\Http\Controllers\Admin\CategoryController::class, 'index'])->name('admin.category');

/*Route::get('/admin/category/create', [App\Http\Controllers\Admin\CategoryController::class, 'create'])->name('admin.category.create');*/
Route::match(['get', 'post'],'/admin/category/create', [App\Http\Controllers\Admin\CategoryController::class, 'create'])->name('admin.category.create');

Route::match(['get', 'post'],'/admin/category/edit/{id}', [App\Http\Controllers\Admin\CategoryController::class, 'edit'])->name('admin.category.edit');

Route::match(['get', 'post'],'/admin/category/change-status/{id}', [App\Http\Controllers\Admin\CategoryController::class, 'changeStatus'])->name('admin.category.change_status');

Route::match(['get', 'post'],'/admin/category/delete/{id}', [App\Http\Controllers\Admin\CategoryController::class, 'delete'])->name('admin.category.delete');

