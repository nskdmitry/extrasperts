<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UserStorie extends Model
{
    //
    public function user()
    {
        return $this->belongsTo("users", "id_user", "id");
    }
}
