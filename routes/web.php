<?php

use App\Models\Posts;
use App\Models\Categories;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\PostsController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\CategoriesController;
use App\Http\Controllers\DashboardCategoriesController;
use App\Http\Controllers\DashboardPostsController;
use App\Http\Controllers\DashboardReportController;
use App\Http\Controllers\ReportCreate;
use App\Http\Controllers\LogoutController;
use App\Http\Controllers\ReportController;
use App\Models\Report;
use GuzzleHttp\Middleware;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;

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



Route::get('/', [PostsController::class, 'create']);



Route::get('/create', [PostsController::class, 'home'])->middleware('auth');

// report
Route::get('/report', [ReportController::class, 'index'])->middleware('auth');

// Route::get('/report/{report:slug}', [ReportController::class, 'show'])->middleware('auth');

// Posting task
Route::get('/task', [PostsController::class, 'task'])->middleware('auth');

Route::get('/posts/{posts:slug}', [PostsController::class, 'show'])->middleware('auth');
Route::post('/posts', [PostsController::class, 'store']);

// ROUTE CATEGORIES
Route::get('/categories/{categories:slug}', [CategoriesController::class, 'categories'])->middleware('auth');

Route::get('/categories', [CategoriesController::class, 'view_categories'])->middleware('auth');

// ROUTE GET USER
Route::get('/authors/{author:username}', [UserController::class, 'author'])->middleware('auth');

// ROUTE LOGIN
Route::get('/login', [LoginController::class, 'index'])->name('login')->middleware('guest');

Route::post('/login', [LoginController::class, 'authenticate']);

// ROUTE REGISTER

Route::get('/register', [RegisterController::class, 'index'])->middleware('guest');

Route::post('/register', [RegisterController::class, 'store']);

// ROUTE LOGOUT
Route::post('/logout', [LogoutController::class, 'logout']);


// CLOSURE DASHBOARD
Route::get('/dashboard', function () {
    return view('dashboard.index');
})->Middleware('auth');

route::get('/dashboard/users', [UserController::class, 'index'])->middleware('admin');

// ROUTE RESOURCE DASHBOARD POST
// Route::get('/dashboard/posts/{posts:slug}', DashboardPostsController::class, 'show')->middleware('auth');
Route::resource('/dashboard/posts', DashboardPostsController::class)->middleware('admin');

// SLUGGABLE
Route::get('/dashboard/posts/checkSlug', [DashboardPostsController::class, 'checkSlug'])->middleware('auth');


// ROUTE RESOURCE DASBOARD REPORT
Route::resource('/dashboard/report', DashboardReportController::class)->middleware('auth');
// Route::post('report/create',[ReportCreate::class, 'store'])->name('createreport')->middleware('auth');

// ROUTE RESOURCE DASHBOARD CATEGORIES
Route::resource('/dashboard/categories', DashboardCategoriesController::class)->middleware('admin');
