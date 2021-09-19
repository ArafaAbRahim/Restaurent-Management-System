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

//For Food Menu
Route::get('/fooditem', [AdminController::class, "foodItem"]);
Route::post('/uploadfood', [AdminController::class, "uploadFood"]);
Route::get('/foods', [AdminController::class, "foodMenu"]);
Route::get('/deleteitem/{id}', [AdminController::class, "deleteMenu"]);
Route::get('/updateitem/{id}', [AdminController::class, "updateMenu"]);
Route::post('/editmenu/{id}', [AdminController::class, "editMenu"]);

//For Reservation
Route::get('/reservation', [AdminController::class, "reservation"]);
Route::post('/make-reservation', [AdminController::class, "makeReservation"]);

//For Chefs
Route::get('/chefs', [AdminController::class, "chefs"]);
Route::get('/add-chef', [AdminController::class, "addChef"]);
Route::post('/uploadchef', [AdminController::class, "uploadChef"]);
Route::get('/updatechef/{id}', [AdminController::class, "updateChef"]);
Route::post('/editchef/{id}', [AdminController::class, "editChef"]);
Route::get('/deletechef/{id}', [AdminController::class, "deleteChef"]);

//For Cart
Route::post('/addcart/{id}', [HomeController::class, "addCart"]);
Route::get('/showcart/{id}', [HomeController::class, "showCart"]);
Route::get('/delete-cart-item/{id}', [HomeController::class, "deleteCartItem"]);
Route::post('/order-confirm', [HomeController::class, "orderConfirm"]);

Route::get('/orders', [AdminController::class, "order"]);
Route::post('/search', [AdminController::class, "search"]);

Route::get('/redirects', [HomeController::class, "redirects"]);

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');
