<?php
// Start the session
session_start();

// Destroy all sessions
if(session_destroy()) {
    // Redirect to the login page or display logout message
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Logout</title>
    <style>
        body {
            font-family: 'Arial', sans-serif;
            background-color: #f5f5f5;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .logout-container {
            text-align: center;
            background-color: #fff;
            padding: 40px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            border-radius: 8px;
        }

        .logout-container h2 {
            font-size: 24px;
            margin-bottom: 20px;
        }

        .logout-container p {
            font-size: 16px;
            margin-bottom: 30px;
        }

        .logout-container a {
            display: inline-block;
            padding: 12px 24px;
            background-color: #e5603a;
            color: white;
            text-decoration: none;
            border-radius: 5px;
            font-size: 16px;
        }

        .logout-container a:hover {
            background-color: #c94b27;
        }

    </style>
</head>
<body>

<div class="logout-container">
    <h2>You have been logged out.</h2>
    <p>Thank you for visiting our website.</p>
    <a href="login.php">Return to Login</a>
</div>

</body>
</html>
