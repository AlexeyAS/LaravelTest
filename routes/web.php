<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PostingController;
use App\Http\Controllers\MailController;
use App\Http\Controllers\UserController;
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

Route::get('/', [PostingController::class,'lastMessage'])->name('main');

Route::get('/home', [HomeController::class, 'index'])->name('home');

Route::get('/about', function () {
    return view('about');
})->name('about');

Route::get('/posting-new', function () {
    return view('posting-new');
})->name('posting-new');

//Route::post('/contact/submit', function () {
//dd(Request::all());

Route::get('/posting/all',[PostingController::class,'allData'])->name('posting-data');
Route::post('/posting/submit',[PostingController::class,'submit'])->name('posting-form');
Route::get('/posting/all/{id}',[PostingController::class,'showOneMessage'])->name('posting-data-one');
Route::get('/posting/all/{id}/update',[PostingController::class,'updateMessage'])->name('posting-update');
Route::post('/posting/all/{id}/update',[PostingController::class,'updateMessageSubmit'])->name('posting-update-submit');
Route::get('/posting/all/{id}/delete',[PostingController::class,'deleteMessage'])->name('posting-delete');


Route::get('send',[MailController::class,'send'])->name('send');


Route::get('postings',[PostingController::class,'index'])->name('postings');
Route::get('users', [UserController::class,'index'])->name('users');

Route::resource('postings-search', 'App\Http\Controllers\PostingController');
Route::resource('users-search', 'App\Http\Controllers\UserController');

