<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CreateAccontController;


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


//Route::get('/create', 'CreateAccontController@creates');
//در شیوه فراخوانی بالا دیگر از لاراول هشت به بعد پشتیبانی نمیکند 
Route::get('/create', [CreateAccontController::class, 'createView']);

Route::get('/read', [CreateAccontController::class, 'readView']);
Route::post('/read', [CreateAccontController::class, 'addDatabase'])->name('read');

Route::get('/update', [CreateAccontController::class, 'updateView']);
Route::post('/update', [CreateAccontController::class, 'update']);

Route::get('/delete', [CreateAccontController::class, 'deleteView']);
Route::post('/delete', [CreateAccontController::class, 'deleteObj']);


Route::get('/', function () {
    return view('welcome');
});



