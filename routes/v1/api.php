<?php

use App\Http\Controllers\API\V1\CarController;
use App\Http\Controllers\API\V1\CustomerController;
use App\Http\Controllers\API\V1\DepositController;
use App\Http\Controllers\API\V1\DepositValueController;
use App\Http\Controllers\API\V1\ReservationPriceController;
use App\Http\Controllers\API\V1\DiscountController;
use App\Http\Controllers\API\V1\ExtraFeatureController;
use App\Http\Controllers\API\V1\ReservationController;
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

// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });

Route::apiResource('cars', CarController::class)->parameter('cars', 'car_id');

Route::name('deposit-value.')
    ->controller(DepositValueController::class)
    ->prefix('cars/{car_id}/')
    ->group(function () {
        Route::get('deposit-value', 'show')->name('show')->whereNumber('car_id');
        Route::post('deposit-value', 'store')->name('store')->whereNumber('car_id');
        Route::match(['put', 'patch'], 'deposit-value', 'update')->name('update')->whereNumber('car_id');
    });

Route::name('reservation-price.')
    ->controller(ReservationPriceController::class)
    ->prefix('cars/{car_id}/')
    ->group(function () {
        Route::get('reservation-price', 'show')->name('show')->whereNumber('car_id');
        Route::post('reservation-price', 'store')->name('store')->whereNumber('car_id');
        Route::match(['put', 'patch'], 'reservation-price', 'update')->name('update')->whereNumber('car_id');
    });

Route::name('discount.')
    ->controller(DiscountController::class)
    ->prefix('cars/{car_id}/')
    ->group(function () {
        Route::get('discount', 'show')->name('show')->whereNumber('car_id');
        Route::post('discount', 'store')->name('store')->whereNumber('car_id');
        Route::match(['put', 'patch'], 'discount', 'update')->name('update')->whereNumber('car_id');
    });

Route::name('extra-features.')
    ->controller(ExtraFeatureController::class)
    ->prefix('cars/{car_id}/')
    ->group(function () {
        Route::get('extra-features', 'index')->name('index')->whereNumber('car_id');
        Route::post('extra-features', 'store')->name('store')->whereNumber('car_id');
        Route::delete('extra-features/{feature_id}', 'destroy')->name('destroy')->whereNumber(['car_id', 'feature_id']);
    });

Route::apiResource('customers', CustomerController::class)
    ->parameter('customers', 'customer_id')
    ->whereNumber('customer_id');

Route::apiResource('reservations', ReservationController::class)
    ->parameter('reservations', 'reservation_id')
    ->whereNumber('reservation_id');

Route::apiResource('deposits', DepositController::class)
    ->parameter('deposits', 'deposit_id')
    ->whereNumber('deposit_id');
