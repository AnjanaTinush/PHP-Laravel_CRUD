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
    
     // Define the relationship with the staff_ model (assuming "staff_id" is the foreign key)
     public function staff()
     {
         return $this->belongsTo(Staff_::class, 'staff_id');
     }
}
