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

use App\Divination;
use App\Extrasexer;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/expert', function() {

})->name('experts');
Route::get('/expert/{id}', function ($id) {
    $person = Extrasexer::findOrFail($id);
    view('extrasexer.profile', ['person' => $person, 'history' => $person->history]);
})->name('expert');
Route::get('/user/{id}/profile', 'UserController@profile')->name('user');
Route::get('/user/wish', function() {
    view('welcome');
})->name('wish');
Route::post('/user/wish', 'UserController@wish')->name('user.wish');
Route::post('/user/wish/answer', 'UserController@answer');

