<?php

namespace App\Http\Controllers;

use App\Divination;
use Illuminate\Http\Request;

class ExtrasexerController extends Controller
{
    private static $astral = [
        "90 + rand(0, 9)",
        "min(rand(10, 99), time() % 100)",
        "rand(0, 9)*10 + rand(0, 9)",
        "100 - rand(1, 99)",
        "rand(10, 84)",
        "time() % 90 + 10",
        "54",
    ];

    //
    public function divination($id_person, $id_wish)
    {
        return Divination::create([
            'id_extra' => $id_person,
            'id_history' => $id_wish,
            'telling' => eval(static::$astral[$id_person % count(static::$astral)])
        ]);
    }
}
