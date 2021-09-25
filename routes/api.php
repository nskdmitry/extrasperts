<?php

use App\Http\Controllers\ExtrasexerController;
use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\UserController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
Route::post('/wish', function (Request $request) {
    $user_helper = new UserController();
    $expert_helper = new ExtrasexerController();

    $login = $request->post('login');
    $email = $request->post('email');
    $user = User::where('email', 'LIKE', "'{$email}'")->where("login", "LIKE", "'{$login}'")->first()
        ?? $user_helper->anoname($request);
    $wish = $user_helper->initWish(new Request([], ['uid' => $user->id]));

    $extrasexers = \App\Extrasexer::all(["id"]);
    foreach ($extrasexers as $extrasexer) {
        $expert_helper->divination($extrasexer->id, $wish->id);
    }
    redirect()->route("/user/wish/{$wish->id}/answer");
});
