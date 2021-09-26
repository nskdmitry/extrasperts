<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Extrasexer extends Model
{
    //
    protected $fillable = ["name",];

    public function history()
    {
        return $this->hasMany(Divination::class);
    }

    public function calcRating()
    {
        $items = $this->hasMany(Divination::class)->join(UserStorie::class, "id", "=", "id_history");
        $all = $items->count("id");
        $trues = $items->having("number", "=", "tells")->count("id");
        return $all > 0 ? $trues / $all : 0;
    }
}
