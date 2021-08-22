<?php

use App\Http\Controllers\BackController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\PortfolioController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\BackBlogController;
use App\Http\Controllers\BackPortfolioController;




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



Route::get('/', [HomeController::class, "index"])->name('home');
Route::get('/blog', [BlogController::class, "index"])->name('blog');
Route::get('/portfolio', [PortfolioController::class, "index"])->name('portfolio');
Route::get('/contact', [ContactController::class, "index"])->name('contact');
Route::get('/back', [BackController::class, "index"])->name('backoffice');
Route::get('/back/blog', [BackBlogController::class, "index"])->name('backblog');
Route::get('/back/portfolio', [BackPortfolioController::class, "index"])->name('backportfolio');

//Blog 
Route::get('/back/blog/create', [BackBlogController::class, "create"]);
Route::post('/back/blog', [BackBlogController::class, "store"]);
Route::delete('/back/blog/{id}/delete', [BackBlogController::class, "delete"])->name("delete");
Route::get('/back/blog/{id}/edit', [BackblogController::class, 'edit'])->name('edit');
Route::put('/back/blog/{id}/update', [BackblogController::class, 'update'])->name('update');



//Portfolio
Route::get('/back/portfolio/create', [BackPortfolioController::class, "create"]);
Route::post('/back/portfolio', [BackPortfolioController::class, "store"]);
Route::delete('/back/portfolio/{id}/delete', [BackPortfolioController::class, "delete"])->name("delete2");
Route::get('/back/portfolio/{id}/edit', [BackPortfolioController::class, 'edit'])->name('edit2');
Route::put('/back/portfolio/{id}/update', [BackPortfolioController::class, 'update'])->name('update2');



