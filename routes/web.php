<?php

use App\Http\Controllers\AdminController;
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

Route::get('/exams', [QuestionController::class, 'index']);
Route::get('/get-questions', [QuestionController::class, 'getQuestions']);
Route::get('/question-by-id/{id}', [QuestionController::class, 'getQuestionById']);

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
