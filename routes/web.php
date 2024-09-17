<?php

use App\Http\Controllers\Dashboard\{
    ComplexController,
    EarthLinkController,
    ShowRoomController,
    UserController
};
use App\Http\Controllers\User\{
    EarthLinkController as UserEarthLinkController,
    ShowRoomController as UserShowRoomController
};
use App\Models\EarthLink;
use App\Models\ShowRoom;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
  
    return view('welcome');
});

Route::middleware('auth')->prefix('dashboard')->group(function() {
     Route::resource('users', UserController::class);
     Route::resource('complexes', ComplexController::class);
     Route::resource('showrooms', ShowRoomController::class);
     Route::resource('earthlinks', EarthLinkController::class);
});


Route::resource('earthlink', UserEarthLinkController::class);
Route::resource('showroom', UserShowRoomController::class);

Route::get('done', [UserEarthLinkController::class, 'done']);
Route::get('success', [UserShowRoomController::class, 'success']);