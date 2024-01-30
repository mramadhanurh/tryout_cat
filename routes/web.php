<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\DatasoalController;
use App\Http\Controllers\DatatipesoalController;
use App\Http\Controllers\QuestionController;
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
Auth::routes();

Route::get('/', function () {
    return view('welcome');
});


// Route::view('/admin/home', 'admin.dashboard');
Route::get('/admin/home', [AdminController::class, 'index']);
Route::get('/admin/datatipesoal', [DatatipesoalController::class, 'index']);
Route::get('/admin/datasoal', [DatasoalController::class, 'index'])->name('datasoal.index');
Route::get('/admin/datasoal/create', [DatasoalController::class, 'create'])->name('datasoal.create');
Route::post('/admin/datasoal/create', [DatasoalController::class, 'store'])->name('datasoal.store');
Route::get('/admin/datasoal/edit/{id}', [DatasoalController::class, 'edit'])->name('datasoal.edit');
Route::post('/admin/datasoal/edit', [DatasoalController::class, 'update'])->name('datasoal.update');
Route::delete('/admin/datasoal/delete/{id}', [DatasoalController::class, 'destroy'])->name('datasoal.destroy');

Route::get('/exams', [QuestionController::class, 'index']);
Route::get('/get-questions', [QuestionController::class, 'getQuestions']);
Route::get('/question-by-id/{id}', [QuestionController::class, 'getQuestionById']);

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
