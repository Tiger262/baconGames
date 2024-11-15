<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class GamerGame extends Model
{
    function game(){
        return $this->belongsTo(Game::class);
    }
}
