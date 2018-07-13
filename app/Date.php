<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Date extends Model
{
     protected $fillable = ['date_id', 'user_id'];
     
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
