<?php

use App\Http\Controllers\Frontend\MainController;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\LanguageController;

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

//Frontend Route start
Route::get('/', [MainController::class, 'index'])->name('home');
Route::get('/about', [MainController::class, 'about'])->name('about');
Route::get('/team', [MainController::class, 'team'])->name('team');
Route::get('/catalog', [MainController::class, 'catalog'])->name('catalog');
Route::get('/contact', [MainController::class, 'contact'])->name('contact');
Route::get('/service/{id?}', [MainController::class, 'service'])->name('service');
Route::get('/service-single/{id}', [MainController::class, 'serviceSingle'])->name('serviceSingle');
Route::get('/blog', [MainController::class, 'blog'])->name('blog');
Route::get('/showroom', [MainController::class, 'showroom'])->name('showroom');
Route::get('/blog-single/{id}', [MainController::class, 'blogSingle'])->name('blogSingle');

Route::get('/projects', [MainController::class, 'projects'])->name('projects');
Route::get('/project-single/{id}', [MainController::class, 'projectSingle'])->name('projectSingle');

Route::post('/change-language', [LanguageController::class, 'changeLanguage'])->name('change.language');






Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});
