<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Gamer extends Model
{
    function games(){
        return $this->hasMany(GamerGame::class);
    }
}
