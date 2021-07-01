<?php

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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::post('form', [App\Http\Controllers\insertFormController::class, 'insert'])->name('insert_form');

Route::get('/view', [App\Http\Controllers\HomeController::class, 'view1'])->name('viewreport'); 
Route::get('/delete/{id}', [App\Http\Controllers\HomeController::class, 'delete'])->name('delete');


// pdf

Route::get('/export/{id}', [App\Http\Controllers\PDFController::class, 'exportPdf'])->name('export_pdf'); 
