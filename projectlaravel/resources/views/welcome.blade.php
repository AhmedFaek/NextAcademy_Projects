<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <title>Welcome to Our ToDoList Website</title>
    <style>
        body {
            margin: 0;
            padding: 0;
            background-color: #121212;
            font-family: Arial, sans-serif;
            color: #ffffff;
        }
        .welcome-container {
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            height: 100vh;
            background-image: url('imgs/office2.jpg');
            background-repeat: no-repeat;
            background-size: cover;
        }
        .welcome-overlay {
            background-color: rgba(0, 0, 0, 0.5);
            width: 100%;
            height: 100%;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
        }
        .welcome-logo {
            font-size: 3rem;
            font-weight: bold;
            color: #ffffff;
            text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.5);
        }
        .welcome-description {
            font-size: 1.2rem;
            margin-top: 1rem;
            text-align: center;
        }
        .welcome-buttons {
            margin-top: 2rem;
        }
        .welcome-buttons a {
            padding: 0.5rem 1.5rem;
            margin: 0.5rem;
            border: 1px solid #ffffff;
            border-radius: 0.25rem;
            background-color: transparent;
            color: #ffffff;
            text-decoration: none;
            font-weight: bold;
            transition: background-color 0.3s ease;
        }
        .welcome-buttons a:hover {
            background-color: rgba(255, 255, 255, 0.1);
        }
    </style>
</head>
<body>
    <div class="welcome-container">
        <div class="welcome-overlay">
            <h1 class="welcome-logo">Welcome to Our ToDoList Website</h1>
            <p class="welcome-description">
                Manage your tasks efficiently with our ToDoList website. Add, edit, and remove tasks
                with ease to stay organized and focused. Whether it's work-related projects, personal
                goals, or important reminders, our website helps you stay on top of your tasks.
                Join us now and experience the power of effective task management.
            </p>
            <div class="welcome-buttons">
                @if (Route::has('login'))
                    <a href="{{ route('login') }}"><i class="fas fa-sign-in-alt"></i> Log in</a>
                @endif
                @if (Route::has('register'))
                    <a href="{{ route('register') }}"><i class="fas fa-user-plus"></i> Register</a>
                @endif
            </div>
        </div>
    </div>
</body>
</html>
