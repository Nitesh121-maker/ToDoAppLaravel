<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ url('/build/css/dashboard.css') }}">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="{{ asset('/build/js/dashboard.js') }}"></script>
 
    <title>Dashboard</title>
</head>
<body>
 <div class="main">
        <div class="navbar">
            <div class="navbar-right">
                <div class="dark-mode">
                    <label class="switch">
                        <input type="checkbox">
                        <span class="slider round"></span>
                    </label>
                
                </div>
                <div class="user-profile">
                    <img src="{{asset('build/img/User-avatar.svg.png')}}" alt="User Avatar">
                </div>
            </div>
        </div>
        <div class="functions">
            <div class="sidebar">
                <h2>Dashboard</h2>
                <ul>
                    <li><a href="{{ route('dashboard') }}"><svg width="19" height="16" viewBox="0 0 19 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M9.5 6.29916e-06C7.6889 -0.00209162 5.91504 0.519882 4.38791 1.50428C2.86078 2.48868 1.64417 3.89438 0.88176 5.55537C0.119354 7.21636 -0.157 9.06326 0.085337 10.8779C0.327674 12.6926 1.07858 14.3993 2.24937 15.7964L2.422 16H16.578L16.7506 15.7964C17.9214 14.3993 18.6723 12.6926 18.9147 10.8779C19.157 9.06326 18.8806 7.21636 18.1182 5.55537C17.3558 3.89438 16.1392 2.48868 14.6121 1.50428C13.085 0.519882 11.3111 -0.00209162 9.5 6.29916e-06ZM14.4488 5.51564L11.0422 8.896C11.2163 9.26818 11.2547 9.69061 11.1506 10.0886C11.0465 10.4867 10.8065 10.8347 10.4732 11.0712C10.1399 11.3076 9.73459 11.4174 9.32898 11.381C8.92337 11.3446 8.54354 11.1644 8.25662 10.8722C7.9697 10.58 7.79416 10.1948 7.76102 9.7844C7.72788 9.37405 7.83927 8.96507 8.07551 8.62972C8.31176 8.29437 8.65764 8.05426 9.05203 7.9518C9.44643 7.84935 9.86395 7.89115 10.2308 8.06982L13.6317 4.68946L14.4488 5.51564ZM1.21356 9.10546H3.17008V10.2691H1.19054C1.19054 10.0422 1.16177 9.82109 1.16177 9.58837C1.16177 9.35564 1.17328 9.26837 1.18479 9.10546H1.21356ZM4.02174 3.28728L5.43734 4.71855L4.59144 5.52146L3.17008 4.096C3.42519 3.80174 3.70014 3.52568 3.99297 3.26982L4.02174 3.28728ZM10.0754 3.22328H8.92455V1.18691H9.5C9.71291 1.18691 9.90281 1.18691 10.0754 1.21601V3.22328ZM17.8382 9.59418C17.8382 9.82109 17.8382 10.0538 17.8095 10.2749H15.7839V9.11127H17.8152C17.8267 9.26837 17.8382 9.43128 17.8382 9.59418Z" fill="#FFDDD2"/>
                        </svg>
                        Dashboard</a></li>
                    <li><a href="#" id="showAllTasks"><svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M0 8.88889H7.11111V0H0V8.88889ZM0 16H7.11111V10.6667H0V16ZM8.88889 16H16V7.11111H8.88889V16ZM8.88889 0V5.33333H16V0H8.88889Z" fill="#FFDDD2"/>
                        </svg>
                        All Tasks</a></li>
                    <li><a href="#" id="completed_Task"><svg width="17" height="17" viewBox="0 0 17 17" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M8.5 0C9.28027 0 10.0329 0.0996094 10.7578 0.298828C11.4827 0.498047 12.1579 0.785807 12.7832 1.16211C13.4085 1.53841 13.9813 1.98112 14.5015 2.49023C15.0216 2.99935 15.4671 3.5721 15.8379 4.2085C16.2087 4.84489 16.4937 5.52279 16.6929 6.24219C16.8921 6.96159 16.9945 7.71419 17 8.5C17 9.28027 16.9004 10.0329 16.7012 10.7578C16.502 11.4827 16.2142 12.1579 15.8379 12.7832C15.4616 13.4085 15.0189 13.9813 14.5098 14.5015C14.0007 15.0216 13.4279 15.4671 12.7915 15.8379C12.1551 16.2087 11.4772 16.4937 10.7578 16.6929C10.0384 16.8921 9.28581 16.9945 8.5 17C7.71973 17 6.96712 16.9004 6.24219 16.7012C5.51725 16.502 4.84212 16.2142 4.2168 15.8379C3.59147 15.4616 3.01872 15.0189 2.49854 14.5098C1.97835 14.0007 1.53288 13.4279 1.16211 12.7915C0.791341 12.1551 0.506348 11.4772 0.307129 10.7578C0.10791 10.0384 0.00553385 9.28581 0 8.5C0 7.71973 0.0996094 6.96712 0.298828 6.24219C0.498047 5.51725 0.785807 4.84212 1.16211 4.2168C1.53841 3.59147 1.98112 3.01872 2.49023 2.49854C2.99935 1.97835 3.5721 1.53288 4.2085 1.16211C4.84489 0.791341 5.52279 0.506348 6.24219 0.307129C6.96159 0.10791 7.71419 0.00553385 8.5 0ZM13.5054 5.68604L12.3765 4.55713L6.90625 10.0273L4.62354 7.74463L3.49463 8.87354L6.90625 12.2852L13.5054 5.68604Z" fill="#FFDDD2"/>
                        </svg>
                        Completed Tasks</a></li>
                    <li><a href="#" id="showForm"><svg width="17" height="17" viewBox="0 0 17 17" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M8.5 0C6.25408 0.0270964 4.10778 0.931329 2.51955 2.51955C0.931329 4.10778 0.0270964 6.25408 0 8.5C0.0270964 10.7459 0.931329 12.8922 2.51955 14.4804C4.10778 16.0687 6.25408 16.9729 8.5 17C10.7459 16.9729 12.8922 16.0687 14.4804 14.4804C16.0687 12.8922 16.9729 10.7459 17 8.5C16.9729 6.25408 16.0687 4.10778 14.4804 2.51955C12.8922 0.931329 10.7459 0.0270964 8.5 0ZM13.3571 9.10714H9.10714V13.3571H7.89286V9.10714H3.64286V7.89286H7.89286V3.64286H9.10714V7.89286H13.3571V9.10714Z" fill="#FFDDD2"/>
                        </svg>
                        Add Task</a></li>
                </ul>
            </div>

            <div class="content">
                <div class="task">
                    <div class="running-task">
                        <h2>Running Tasks</h2>
                        <div class="tasks-container">
                            @foreach ($tasks as $task)
                            <div class="task-card" data-task-id="{{ $task->id }}">
                                <div class="task-details">
                                    <p><strong>Task Name:</strong> {{ $task->task_name }}</p>
                                    <p><strong>End Date:</strong> {{ $task->end_date }}</p>
                                    <p><strong>Priority Level:</strong> {{ $task->priority }}</p>
                                    <p><strong>Task Description:</strong> {{ $task->task_description }}</p>
                                </div>
                                <div class="task-actions">
                                    {{-- <button class="edit-task" data-task-id="{{ $task->id }}">Edit</button> --}}
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
                        </div>
                    </div>
                    <div class="line"></div>
                    <div class="completed-task">
                        <h2>Completed Tasks</h2>
                        <div class="completed-tasks-container">
                            @foreach ($completedTasks as $completedTask)
                                <div class="task-card">
                    
                                    <p><strong>Task Name:</strong> {{ $completedTask->task_name }}</p>
                                    <p><strong>End Date:</strong> {{ $completedTask->end_date }}</p>
                                    <p><strong>Priority Level:</strong> {{ $completedTask->priority }}</p>
                                    <p><strong>Task Description:</strong> {{ $completedTask->task_description }}</p>
                                    <p><strong>Status:</strong> Completed</p>
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
                    
                </div>
                
                <!-- Task edit form (hidden by default) -->
                <div class="edit-form" style="display: none;">
                    <h2>Edit Task</h2>
                    <form id="edit-task-form">
                        @csrf
                        <input type="text" id="edit-task-name" name="task-name" required>
                        <input type="date" id="edit-end-date" name="end-date" required>
                        <select id="edit-priority" name="priority" required>
                            <!-- Options for priority levels -->
                        </select>
                        <textarea id="edit-task-description" name="task-description" rows="4" required></textarea>
                        <button type="submit">Update Task</button>
                    </form>
                </div>

             <div class="createform" id="createForm">
                @include('frontend.create')
             </div>
             <div class="allTask" id="allTask">
                @include('frontend.allTask')
             </div>
             <div class="completedTask" id="completedTask">
                @include('frontend.completedTask')
             </div>
            </div>
        </div>
 </div>
</body>
</html>
