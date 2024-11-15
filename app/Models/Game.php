<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Game extends Model
{
    function genre(){
        return $this->belongsTo(Genre::class);
    }
}
