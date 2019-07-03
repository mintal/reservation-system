<?php

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


Auth::routes(['verify' => true]);

Route::get('/', 'HomeController@index')->name('home')->middleware('verified');
Route::resource('reservations', 'ReservationController')->name('index','reservations')->middleware('admin');
Route::get('/fs', function(){
    return view('reservation.fullscreen');
});

route::get('/api/reservations', function() {
    $reservations = \App\Reservation::with('section.room')->where('date', '=', now()->toDateString())->get();
    $temp = $reservations;
    return $temp->jsonSerialize();
});