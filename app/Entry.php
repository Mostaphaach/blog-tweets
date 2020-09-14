<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\user;

class Entry extends Model
{
    //Relacion Entry y user($entry->user)
    //Entry n y User 1
    //Eager loading
    public function user() {
       return $this->belongsTo(User::class);
    }
}
