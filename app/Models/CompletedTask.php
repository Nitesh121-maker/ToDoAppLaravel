<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CompletedTask extends Model
{
    use HasFactory;
    protected $table = 'completed_tasks';

    protected $fillable = [
        'task_name',
        'end_date',
        'priority',
        'task_description',
    ];
}
