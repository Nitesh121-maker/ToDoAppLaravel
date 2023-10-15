<!DOCTYPE html>
<html>
<head>

</head>
<body>
<div class="all-tasks">
    <h2>All Tasks</h2>
    <div class="all-tasks-container">
        @foreach ($tasks as $task)
        <div class="task-card" data-task-id="{{ $task->id }}">
            <div class="task-details">
                <p><strong>Task Name:</strong> {{ $task->task_name }}</p>
                <p><strong>End Date:</strong> {{ $task->end_date }}</p>
                <p><strong>Priority Level:</strong> {{ $task->priority }}</p>
                <p><strong>Task Description:</strong> {{ $task->task_description }}</p>
            </div>
            <div class="task-actions">
                <button class="edit-task" data-task-id="{{ $task->id }}">Edit</button>
                <form id="deleteForm" action="{{ route('deleteTask', $task->id) }}" method="post">
                    @csrf
                    @method('DELETE')
                    <button type="button" class="delete-task" onclick="confirmDelete()">Delete</button>
                </form>
                <form action="/mark-complete" method="post">
                    @csrf
                    <input type="hidden" name="task_id" value="{{ $task->id }}">
                    <button type="submit" class="mark-complete">Mark Complete</button>
                </form>
            </div>
        </div>
        @endforeach

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
