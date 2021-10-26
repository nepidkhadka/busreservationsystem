<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class routes extends Model
{
    protected $table = "routes";
    protected $fillable = ['sourcelocation','destinationlocation','routename','status'];
}
