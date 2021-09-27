<?php

namespace App\Http\Controllers;

use App\Divination;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class ExtrasexerController extends Controller
{
    private $astral = [];

    public function __construct()
    {
        $this->astral = [
            function () { return 90 + rand(0, 9); },
            function () { return min(rand(10, 99), time() % 100); },
            function () { return rand(1, 9)*10 + rand(0, 9); },
            function () { return 100 - rand(0, 90); },
            function () { return rand(22, 84); },
            function () { return time() % 90 + 10; },
            function () { return 56; },
        ];
    }

    //
    public function divination($id_person, $id_wish)
    {
        Log::debug("Divination of extrasexer #{$id_person} by user wish #{$id_wish}.");
        return Divination::create([
            'id_extra' => $id_person,
            'id_history' => $id_wish,
            'telling' => $this->astral[$id_person % count($this->astral)]()
        ]);
    }
}
