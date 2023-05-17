<?php

use App\Http\Controllers\api\CategoriesController;
use App\Http\Controllers\api\CustomersController;
use App\Http\Controllers\api\PayModeController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/


// Rutas Customers
// index customers
Route::get('/customers', [CustomersController::class, 'index'])
->name('customers.index');
// store customers
Route::post('/customers' , [CustomersController::class, 'store'])
->name('custoemers.store');
// show customers
Route::get('/customers/{id}', [CustomersController::class, 'show'])
->name('customers.show');
// update customers
Route::put('/customers/{id}', [CustomersController::class, 'update'])
->name('customers.update');
// destroy customers
Route::delete('/customers/{id}', [CustomersController::class, 'destroy'])
->name('customers.destroy');

// Rutas categories
// index categories
Route::get('/categories', [CategoriesController::class, 'index'])
->name('categories.index');
// store categories
Route::post('/categories' , [CategoriesController::class, 'store'])
->name('custoemers.store');
// show categories
Route::get('/categories/{id}', [CategoriesController::class, 'show'])
->name('categories.show');
// update categories
Route::put('/categories/{id}', [CategoriesController::class, 'update'])
->name('categories.update');
// destroy categories
Route::delete('/categories/{id}', [CategoriesController::class, 'destroy'])
->name('categories.destroy');

// Rutas pay_mode
// index pay_mode
Route::get('/pay_mode', [PayModeController::class, 'index'])
->name('pay_mode.index');
// store pay_mode
Route::post('/pay_mode' , [PayModeController::class, 'store'])
->name('custoemers.store');
// show pay_mode
Route::get('/pay_mode/{id}', [PayModeController::class, 'show'])
->name('pay_mode.show');
// update pay_mode
Route::put('/pay_mode/{id}', [PayModeController::class, 'update'])
->name('pay_mode.update');
// destroy pay_mode
Route::delete('/pay_mode/{id}', [PayModeController::class, 'destroy'])
->name('pay_mode.destroy');


Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
