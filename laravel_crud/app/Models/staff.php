<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class staff extends Model
{
   
    use HasFactory;

    protected $fillable = [
        'name',
        'address',
        'position',
        'phone'
    ];
}
