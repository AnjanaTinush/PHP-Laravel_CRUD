<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    use HasFactory;

    protected $table = 'task'; // Specify the table name

    protected $fillable = [
        'name',
        'finaldate',
        'description',
        'staff_id',
    ];   
}
