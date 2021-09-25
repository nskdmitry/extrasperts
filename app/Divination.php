<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Divination extends Model
{
    //
    public function userCase()
    {
        return $this->belongsTo('user_stories');
    }

    public function sayer()
    {
        return $this->belongsTo('extrasexers');
    }

    public function trueth()
    {
        return $this->userCase()->number == $this->telling;
    }
}
