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

use App\Extrasexer;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/expert', function() {

});
Route::get('/expert/{id}', function ($id) {
    $person = Extrasexer::findOrFail($id);
    view('extrasexer.profile', ['person' => $person, 'history' => $person->history]);
});
Route::get('/user/wish', function() {
    view('wish');
});
Route::get('/user/wish/{id}/answer/{$number}', 'UserController@answer');
