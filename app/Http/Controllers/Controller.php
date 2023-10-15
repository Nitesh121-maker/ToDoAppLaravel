<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use App\Models\Task;
use App\Models\CompletedTask;
class Controller extends BaseController
{
    use AuthorizesRequests, ValidatesRequests;
    public function dashboard(){
        $tasks = Task::all(); // Retrieve all tasks from the database
        $completedTasks = CompletedTask::all(); // Retrieve all completed tasks from the database

        return view('frontend.dashboard', ['tasks' => $tasks, 'completedTasks' => $completedTasks]);
        
    }
    public function alltask(){
        $tasks = Task::all(); // Retrieve all tasks from the database
        $completedTasks = CompletedTask::all(); // Retrieve all completed tasks from the database
        $completedTasks = CompletedTask::where('is_completed', true)->get();
        return view('frontend.allTask', ['tasks' => $tasks, 'completedTasks' => $completedTasks]);
        
    }

}
