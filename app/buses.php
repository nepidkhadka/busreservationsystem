<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class buses extends Model
{
    protected $table = "buses";
    protected $fillable = ['busnumber','busname','bustype','status'];
}
