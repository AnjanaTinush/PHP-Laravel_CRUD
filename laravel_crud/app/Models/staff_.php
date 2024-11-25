<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class staff_ extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'address',
        'position',
        'phone',
    ];
}
