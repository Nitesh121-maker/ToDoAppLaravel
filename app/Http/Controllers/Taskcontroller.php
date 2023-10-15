<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Task;
use App\Models\CompletedTask;
class Taskcontroller extends Controller
{
    //
    public function store(Request $request)
    {
        $task = new Task;
        $task->task_name = $request->input('task-name');
        $task->end_date = $request->input('end-date');
        $task->priority = $request->input('priority');
        $task->task_description = $request->input('task-description');
        
    
        $task->save();

    
        return redirect()->route('dashboard');
    }

    public function markAsCompleted(Request $request)
{
    // Get the task ID from the form submission
    $taskId = $request->input('task_id');

    // Find and delete the task in the "tasks" table
    $task = Task::find($taskId);
    $task->delete();

    // Create a completed task in the "completed_tasks" table
    CompletedTask::create([
        'task_name' => $task->task_name,
        'end_date' => $task->end_date,
        'priority' => $task->priority,
        'task_description' => $task->task_description,
    ]);

    return redirect()->back(); // Redirect back to the same page
}
public function delete(CompletedTask $completedTask)
{
    $completedTask->delete();
    return redirect()->back();
}
public function deleteTask(Task $Task)
{
    $Task->delete();
    return redirect()->back();
}
}
