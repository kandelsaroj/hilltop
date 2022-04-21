<?php

use App\Http\Controllers\AboutController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FrontendController;


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
    return view('index');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::resource('file','App\Http\Controllers\FileController');
Route::get('deletedprojects', [FileController::class, 'getDeleteProjects'])->name('getDeleteProjects');
Route::get('/deletedprojects/{id}', [FileController::class, 'restoreDeletedProjects'])->name('restoreDeletedProjects');
Route::get('/retoreprojects/{id}', [FileController::class, 'deletePermanently'])->name('deletePermanently');

// Route::get('projects/deletedprojects', [ProjectController::class, 'getDeleteProjects'])->name('getDeleteProjects');
 Route::resource('about','App\Http\Controllers\AboutController');
 Route::resource('slider','App\Http\Controllers\SliderController');
 Route::resource('why_choose_us','App\Http\Controllers\WhyChooseUSController');
 Route::resource('menu','App\Http\Controllers\MenuController');
 Route::resource('menu_catagory','App\Http\Controllers\MenuCatagoryController');
 Route::resource('our_special','App\Http\Controllers\OurSpecialController');
 Route::resource('ourspecial_catagory','App\Http\Controllers\OurspecialCategoryController');
 Route::resource('booking','App\Http\Controllers\BookingController');
 Route::resource('event','App\Http\Controllers\EventController');   
 Route::resource('testimonial','App\Http\Controllers\TestimonialsController');   

 //frontend routes

Route::get('/', [FrontendController::class, 'mainFunction']);
// Route::get('/', [FrontendController::class, 'sliderf']);


