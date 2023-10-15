<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    use HasFactory;
    protected $table = 'tasks';

    // Specify which columns can be mass-assigned (fillable)
    protected $fillable = [
        'task_name',
        'end_date',
        'priority',
        'task_description',
    ];
}
