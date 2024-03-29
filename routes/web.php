<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\AnswerController;
use App\Http\Controllers\DatasoalController;
use App\Http\Controllers\DatatipesoalController;
use App\Http\Controllers\PesertaController;
use App\Http\Controllers\QuestionController;
use App\Http\Controllers\InfoUjianController;
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

Auth::routes();

Route::get('/', function () {
    return view('welcome');
});

Route::get('/daftar', [PesertaController::class, 'index'])->name('daftar');
Route::post('/daftar/create', [PesertaController::class, 'store'])->name('daftar.store');
Route::get('/ranking', [PesertaController::class, 'ranking'])->name('ranking');

Route::middleware(['auth', 'checkrole:admin,user'])->group(function () {
    //Route Home
    Route::get('/home', [AdminController::class, 'index'])->name('home');

    // Route Data Tipe Soal
    Route::get('/admin/datatipesoal', [DatatipesoalController::class, 'index'])->name('datatipesoal.index');
    Route::get('/admin/datatipesoal/create', [DatatipesoalController::class, 'create'])->name('datatipesoal.create');
    Route::post('/admin/datatipesoal/create', [DatatipesoalController::class, 'store'])->name('datatipesoal.store');
    Route::get('/admin/datatipesoal/edit/{id}', [DatatipesoalController::class, 'edit'])->name('datatipesoal.edit');
    Route::post('/admin/datatipesoal/edit', [DatatipesoalController::class, 'update'])->name('datatipesoal.update');
    Route::delete('/admin/datatipesoal/delete/{id}', [DatatipesoalController::class, 'destroy'])->name('datatipesoal.destroy');

    // Route Data Soal
    Route::get('/admin/datasoal', [DatasoalController::class, 'index'])->name('datasoal.index');
    Route::get('/admin/datasoal/create', [DatasoalController::class, 'create'])->name('datasoal.create');
    Route::post('/admin/datasoal/create', [DatasoalController::class, 'store'])->name('datasoal.store');
    Route::get('/admin/datasoal/show/{id}', [DatasoalController::class, 'show'])->name('datasoal.show');
    Route::get('/admin/datasoal/edit/{id}', [DatasoalController::class, 'edit'])->name('datasoal.edit');
    Route::post('/admin/datasoal/edit', [DatasoalController::class, 'update'])->name('datasoal.update');
    Route::delete('/admin/datasoal/delete/{id}', [DatasoalController::class, 'destroy'])->name('datasoal.destroy');
    Route::post('/admin/datasoal/importexcel', [DatasoalController::class, 'importexcel'])->name('datasoal.importexcel');

    // Route Data Jawaban
    Route::get('/admin/datajawaban', [AnswerController::class, 'index'])->name('datajawaban.index');
    Route::get('/admin/datajawaban/create', [AnswerController::class, 'create'])->name('datajawaban.create');
    Route::post('/admin/datajawaban/create', [AnswerController::class, 'store'])->name('datajawaban.store');
    Route::get('/admin/datajawaban/show/{id}', [AnswerController::class, 'show'])->name('datajawaban.show');
    Route::get('/admin/datajawaban/edit/{id}', [AnswerController::class, 'edit'])->name('datajawaban.edit');
    Route::post('/admin/datajawaban/edit', [AnswerController::class, 'update'])->name('datajawaban.update');
    Route::delete('/admin/datajawaban/delete/{id}', [AnswerController::class, 'destroy'])->name('datajawaban.destroy');

    // Route Data Peserta
    Route::get('/admin/datapeserta', [PesertaController::class, 'list'])->name('datapeserta.index');
    Route::delete('/admin/datapeserta/delete/{id}', [PesertaController::class, 'destroy'])->name('datapeserta.destroy');

    // Route Data Ujian
    Route::get('/admin/dataujian', [PesertaController::class, 'listujian'])->name('dataujian.index');

    Route::get('/admin/infoujian', [InfoUjianController::class, 'index'])->name('infoujian.index');
    Route::get('/admin/infoujian/create', [InfoUjianController::class, 'create'])->name('infoujian.create');
    Route::post('/admin/infoujian/create', [InfoUjianController::class, 'store'])->name('infoujian.store');
    Route::post('/admin/infoujian/edit', [InfoUjianController::class, 'update'])->name('infoujian.update');
    // Submit Ujian
});

Route::middleware(['auth', 'checkrole:admin'])->group(function () {

});

Route::middleware(['auth', 'checkrole:user'])->group(function () {
    Route::get('/exams', [QuestionController::class, 'index'])->name('exams');
    // Route::post('/exams/finish', [QuestionController::class, 'simpanUjian'])->name('exams/finish');
    Route::post('/exams/finish', [QuestionController::class, 'submit'])->name('exams/finish');
    Route::get('/exams/getQuestion/{id}', [QuestionController::class, 'getQuestion'])->name('getQuestion');
    Route::post('/exams/saveanswer', [QuestionController::class, 'saveAnswer'])->name('saveAnswer');

});
