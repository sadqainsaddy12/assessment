<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\PaymentController;
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

/* Order Routes*/
Route::get('/', [OrderController::class, 'index']);
Route::post('create_order', [OrderController::class, 'create_order']);
/* Order Routes*/


/* Payment Routes*/
Route::get('payment', [PaymentController::class, 'index']);
Route::post('create_payment', [PaymentController::class, 'create_payment']);
Route::post('edit_payment', [PaymentController::class, 'edit_payment']);
Route::post('update_payment', [PaymentController::class, 'update_payment']);
/* Payment Routes*/
