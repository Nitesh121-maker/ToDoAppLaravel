<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ url('/build/css/create.css') }}">
    <title>Create a Task</title>
</head>
<body>
    <div class="form-container">
        <h2>Create a Task</h2>
        <form method="POST" action="{{ route('store') }}">
            @csrf
        
            <div class="form-group">
                <label for="task-name">Task Name</label>
                <input type="text" id="task-name" name="task-name" required>
            </div>
            <div class="form-group">
                <label for="end-date">End Date</label>
                <input type="date" id="end-date" name="end-date" required>
            </div>
            <div class="form-group">
                <label for="priority">Priority Level</label>
                <select id="priority" name="priority" required>
                    <option value="high">High</option>
                    <option value="medium">Medium</option>
                    <option value="low">Low</option>
                </select>
            </div>

            <div class="form-group">
                <label for="task-description">Task Description</label>
                <textarea id="task-description" name="task-description" rows="4" required></textarea>
            </div>
            <button type="submit">Create Task</button>
        </form>
    </div>
</body>
</html>
