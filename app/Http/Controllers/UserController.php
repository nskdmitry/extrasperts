<?php

namespace App\Http\Controllers;

use App\User;
use App\UserStorie;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    /**
     * Init user without authorize or get anoname account. If user with email is not exists, register new user.
     *
     * @param Request $request
     * @return User
     */
    public function anoname(Request $request)
    {
        $user = User::find(1);
        $login = $request->post('login');
        $email = $request->post('email');
        if (!$login && !!$email) { $login = $email; }
        if (!!$email) {
            $user = User::where("email", $email)->first();
            if (!$user) {
                $user = User::create([
                    'name' => $login,
                    'email' => $email,
                    'password' => Hash::make("123"),
                ]);
            }
        }
        return $user;
    }

    public function wish (Request $request) {
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
        redirect()->route(url("/user/wish/{$wish->id}/answer"));
    }

    /**
     * @param Request $request
     * @return UserStorie
     */
    public function initWish(Request $request)
    {
        $try = new UserStorie();
        $try->id_user = $request->get("uid");
        $try->number = 00;
        $try->save();
        return $try;
    }

    public function answer(Request $request)
    {
        $id = $request->post("id");
        $number = $request->post("number");
        UserStorie::where("id", $id)->where("number", "<", 10)->update(["number" => $number]);
        redirect()->route('wish');
    }

    public function profile($id)
    {
        $user = User::find($id);
        $wishes = $user->history;
        view("user.history", ['wishes' => $wishes, 'user' => $user]);
    }
}
