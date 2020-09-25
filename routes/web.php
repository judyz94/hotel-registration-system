<?php

use App\Http\Controllers\ClientController;
use App\Http\Controllers\NationalityController;
use App\Http\Controllers\ReceptionistController;
use App\Http\Controllers\RentalController;
use App\Http\Controllers\RentalStatusController;
use App\Http\Controllers\RoomController;
use App\Http\Controllers\RoomTypeController;
use Illuminate\Support\Facades\Auth;
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

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


Route::resources([
    'clients'       => ClientController::class,
    'nationalities' => NationalityController::class,
    'rooms'         => RoomController::class,
    'types'         => RoomTypeController::class,
    'receptionists' => ReceptionistController::class,
    'statuses'      => RentalStatusController::class,
]);

Route::resource('rentals', RentalController::class)->except(['destroy']);
