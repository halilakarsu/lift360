<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Lift extends Model
{
    protected $fillable = [
        'name',
        'building_name',
        'phone',
        'address',
    ];
}
