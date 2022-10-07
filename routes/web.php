<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FileUploadController;

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
    return view('welcome');
});

//Route::get('file-upload', 'FileUploadController@fileUpload')->name('file.upload');
Route::get('file-upload', [FileUploadController::class, 'fileUpload'])->name('file.upload');
//Route::post('file-upload', 'FileUploadController@fileUploadPost')->name('file.upload.post');
Route::post('file-upload', [FileUploadController::class, 'fileUploadPost'])->name('file.upload.post');
Route::get('file', [FileUploadController::class, 'index'])->name('file.index');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/send', [App\Http\Controllers\HomeController::class, 'sendNotify']);

Route::resource('posts',\App\Http\Controllers\PostController::class);
Route::resource('forms',\App\Http\Controllers\FormController::class);
