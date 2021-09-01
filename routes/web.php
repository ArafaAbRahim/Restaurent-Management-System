<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\HomeController;
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

//Route::get('/', function () {
//    return view('welcome');
//});

Route::get('/', [HomeController::class, "index"]);

Route::get('/users', [AdminController::class, "user"]);
Route::get('/deleteuser/{id}', [AdminController::class, "deleteUser"]);

Route::get('/fooditem', [AdminController::class, "foodItem"]);
Route::post('/uploadfood', [AdminController::class, "uploadFood"]);
Route::get('/foods', [AdminController::class, "foodMenu"]);
Route::get('/deleteitem/{id}', [AdminController::class, "deleteMenu"]);

Route::get('/redirects', [HomeController::class, "redirects"]);

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');
