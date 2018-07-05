<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Micropost extends Model
{
    return $this->belongsTo(User::class);
}
