<!DOCTYPE html>
<html>
<head>

</head>
<body>
<div class="all-tasks">
    <h2>Completed task</h2>
    <div class="all-tasks-container">
        @foreach ($completedTasks as $completedTask)
        <div class="task-card">
            <p><strong>Status:</strong> Completed</p>
            <p><strong>Task Name:</strong> {{ $completedTask->task_name }}</p>
            <p><strong>End Date:</strong> {{ $completedTask->end_date }}</p>
            <p><strong>Priority Level:</strong> {{ $completedTask->priority }}</p>
            <p><strong>Task Description:</strong> {{ $completedTask->task_description }}</p>
            <!-- Add a delete button for each completed task -->
            <form action="{{ route('deleteCompletedTask', $completedTask->id) }}" method="post">
                @csrf
                @method('DELETE')
                <button type="submit" class="delete-task">Delete</button>
            </form>
        </div>
        @endforeach
    </div>
</div>
</body>
</html>
