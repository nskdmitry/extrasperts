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
}
