<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ServicesController;
use App\Http\Controllers\ClientController;


Route::get('/', function () {
    return view('welcome');
});

Route::get('/add', function () {
    return view('add_data');
});

Route::get('/add_client', function () {
    return view('add_client_data');
});

Route::get('/pn', function () {
    return view('panel');
});

Route::post('/homedata', [ServicesController::class, 'homedata']);
Route::post('/clientdata', [ServicesController::class, 'clientdata']);

Route::get('/', [ServicesController::class, 'homeview']);
Route::get('/cnt', [ServicesController::class, 'updview']);



Route::get('/ed/{id}', [ServicesController::class, 'homecontrrol']);
Route::get('/edd/{id}', [ServicesController::class, 'clientEdit']);
Route::put('/update/{id}', [ServicesController::class, 'update']);
Route::put('/updateClient/{id}', [ServicesController::class, 'updateClient']);

Route::delete('/delete/{id}', [ServicesController::class, 'delete']);
Route::delete('/delete_client/{id}', [ServicesController::class, 'delete_client']);



Route::post('/msgg', [ServicesController::class, 'msgg']);
Route::get('/msg', [ServicesController::class, 'msgview']);


