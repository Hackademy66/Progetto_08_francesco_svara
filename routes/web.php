<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SellController;
use App\Http\Controllers\TradeController;
use App\Http\Controllers\PublicController;

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

// Routes Public
Route::get('/', [PublicController::class, 'homepage'])->name('homepage');
Route::get('/about', [PublicController::class, 'about'])->name('about');
Route::get('/contact', [PublicController::class, 'contact'])->name('contact');
Route::post('/contact-submit', [PublicController::class, 'contact_submit'])->name('contact-submit');

// Routes Sell
Route::get('/sell/index', [SellController::class, 'index'])->name('sell.index');
Route::get('/sell/create', [SellController::class, 'create'])->name('sell.create');
Route::post('/sell/store', [SellController::class, 'store'])->name('sell.store');
Route::get('/sell/show/{sell}', [SellController::class,'show'])->name('sell.show');
Route::get('/sell/edit/{sell}', [SellController::class, 'edit'])->name('sell.edit');
Route::put('/sell/update/{sell}', [SellController::class, 'update'])->name('sell.update');
Route::delete('/sell/destroy/{sell}', [SellController::class, 'destroy'])->name('sell.destroy');

// Routes Trade
Route::get('/trade/index', [TradeController::class, 'index'])->name('trade.index');
Route::get('/trade/create', [TradeController::class, 'create'])->name('trade.create');
Route::post('/trade/store', [TradeController::class, 'store'])->name('trade.store');
Route::get('/trade/show/{trade}', [TradeController::class,'show'])->name('trade.show');
Route::get('/trade/edit/{trade}', [TradeController::class, 'edit'])->name('trade.edit');
Route::put('/trade/update/{trade}', [TradeController::class, 'update'])->name('trade.update');
Route::delete('/trade/destroy/{trade}', [TradeController::class, 'destroy'])->name('trade.destroy');