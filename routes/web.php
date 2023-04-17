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
Route::post('/ocr', 'OCR_COntroller@extractText')->name('ocr.extractText');
Route::get('texthere','OCR_COntroller@extractHere')->name('ocr.texthere');
Route::get('stringDisplay','OCR_COntroller@StringDisplay')->name('ocr.string');
Route::post('showString','OCR_COntroller@ShowString')->name('show.string');