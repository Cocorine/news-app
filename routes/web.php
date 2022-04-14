<?php

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
    $today = \Carbon\Carbon::now()
        ->settings(
            [
                'locale' => app()->getLocale(),
            ]
        );
    // LL is macro placeholder for MMMM D, YYYY (you could write same as dddd, MMMM D, YYYY)
    $dateMessage = $today->isoFormat('dddd, LL');
    return view('welcome', [
        'date_message' => $dateMessage
    ]);
});

Route::get('/', function () {
    return view('welcome');
});
