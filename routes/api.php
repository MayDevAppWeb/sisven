<?php

use App\Http\Controllers\api\CategoriesController;
use App\Http\Controllers\api\CustomersController;
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
Route::post('/categories' , [categoriesController::class, 'store'])
->name('custoemers.store');
// show categories
Route::get('/categories/{id}', [categoriesController::class, 'show'])
->name('categories.show');
// update categories
Route::put('/categories/{id}', [categoriesController::class, 'update'])
->name('categories.update');
// destroy categories
Route::delete('/categories/{id}', [categoriesController::class, 'destroy'])
->name('categories.destroy');

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
