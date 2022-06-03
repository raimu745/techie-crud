<?php

use App\Http\Controllers\FormController;
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

route::get('/',[FormController::class,'index']);
route::get('/about',[FormController::class,'about']);
route::post('/store',[FormController::class,'store']);
route::get('/show',[FormController::class,'show']);
route::get('delete/{id}',[FormController::class,'destroy'])->name('del');
route::get('edit/{id}',[FormController::class,'edit'])->name('editt');
route::post('update/{id}',[FormController::class,'update'])->name('upload');