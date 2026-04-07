<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Firma extends Model
{
    protected $fillable = [
        'name',
        'email',
        'telefon',
        'adres',
        'aktif',
    ];
}