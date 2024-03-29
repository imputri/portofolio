<?php

use App\Http\Controllers\BiodataController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PendidikanController;
use App\Http\Controllers\PengalamanController;
use App\Http\Controllers\ProjectController;
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



// Route::get('/', function () {
//     return view('welcome');
// });


Route::get('/', [App\Http\Controllers\FrontendController::class, 'index']);
Auth::routes();

Route::get('/dashboard', [HomeController::class, 'index'])->name('home')->middleware('auth');


Route::get('/biodata', [BiodataController::class, 'index'])->name('biodata.index')->middleware('auth');
Route::get('/biodata/create', [BiodataController::class, 'create'])->name('biodata.create')->middleware('auth');
Route::post('/biodata/store', [BiodataController::class, 'store'])->name('biodata.store')->middleware('auth');
Route::patch('/biodata/update/{id}', [BiodataController::class, 'update'])->name('biodata.update')->middleware('auth');
Route::delete('/biodata/destroy/{id}', [BiodataController::class, 'destroy'])->name('biodata.destroy')->middleware('auth');
Route::get('/biodata/show/{id}', [BiodataController::class, 'show'])->name('biodata.show')->middleware('auth');
Route::get('/biodata/edit/{id}', [BiodataController::class, 'edit'])->name('biodata.edit')->middleware('auth'); 


Route::get('/pendidikan', [PendidikanController::class, 'index'])->name('pendidikan.index')->middleware('auth');
Route::get('/pendidikan/create', [PendidikanController::class, 'create'])->name('pendidikan.create')->middleware('auth');
Route::post('/pendidikan/store', [PendidikanController::class, 'store'])->name('pendidikan.store')->middleware('auth');
Route::patch('/pendidikan/update/{id}', [PendidikanController::class, 'update'])->name('pendidikan.update')->middleware('auth');
Route::delete('/pendidikan/destroy/{id}', [PendidikanController::class, 'destroy'])->name('pendidikan.destroy')->middleware('auth');
Route::get('/pendidikan/show/{id}', [PendidikanController::class, 'show'])->name('pendidikan.show')->middleware('auth');
Route::get('/pendidikan/edit/{id}', [PendidikanController::class, 'edit'])->name('pendidikan.edit')->middleware('auth');

Route::get('/pengalaman', [PengalamanController::class, 'index'])->name('pengalaman.index')->middleware('auth');
Route::get('/pengalaman/create', [PengalamanController::class, 'create'])->name('pengalaman.create')->middleware('auth');
Route::post('/pengalaman/store', [PengalamanController::class, 'store'])->name('pengalaman.store')->middleware('auth');
Route::patch('/pengalaman/update/{id}', [PengalamanController::class, 'update'])->name('pengalaman.update')->middleware('auth');
Route::delete('/pengalaman/destroy/{id}', [PengalamanController::class, 'destroy'])->name('pengalaman.destroy')->middleware('auth');
Route::get('/pengalaman/show/{id}', [PengalamanController::class, 'show'])->name('pengalaman.show')->middleware('auth');
Route::get('/pengalaman/edit/{id}', [PengalamanController::class, 'edit'])->name('pengalaman.edit')->middleware('auth'); 

Route::get('/project', [ProjectController::class, 'index'])->name('project.index')->middleware('auth');
Route::get('/project/create', [ProjectController::class, 'create'])->name('project.create')->middleware('auth');
Route::post('/project/store', [ProjectController::class, 'store'])->name('project.store')->middleware('auth');
Route::patch('/project/update/{id}', [ProjectController::class, 'update'])->name('project.update')->middleware('auth');
Route::delete('/project/destroy/{id}', [projectController::class, 'destroy'])->name('project.destroy')->middleware('auth');
Route::get('/project/show/{id}', [ProjectController::class, 'show'])->name('project.show')->middleware('auth');
Route::get('/project/edit/{id}', [ProjectController::class, 'edit'])->name('project.edit')->middleware('auth'); 
