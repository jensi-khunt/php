<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <style>
        body {
            height: 100%;
            margin: 0;
            margin-top: 190px;
            font-family: Arial, Helvetica, sans-serif;
            display: flex;
            justify-content: center;
            align-items: center;
            background-image: url('./images/i9.jpg');
            background-size:cover;
        }
        .login-container {
            background-color: rgba(255, 255, 255, 0.8);
            padding: 20px;
            border-radius: 10px;
            width: 300px;
            box-shadow: 0 0 15px rgba(0, 0, 0, 0.5);
           
        }
        .login-container h1 {
            text-align: center;
            margin-bottom: 20px;
        }
        .login-container input[type="text"], .login-container input[type="password"] {
            width: 100%;
            padding: 10px;
            margin: 5px 0 10px 0;
            display: inline-block;
            border: 1px solid #ccc;
            box-sizing: border-box;
            border-radius: 5px;
        }
        .login-container button {
            background-color: black;
            color: white;
            padding: 10px;
            margin: 10px 2px;
            border: none;
            border-radius: 5px;
            width: 100%;
            cursor: pointer;
        }
        .login-container button:hover {
            opacity: 0.8;
        }
        .error-message {
            color: red;
            text-align: center;
            margin-bottom: 10px;
        }
    </style>
    <script>
        function validateForm() {
            var username = document.getElementById('username').value;
            var password = document.getElementById('password').value;
            var errorMessage = document.getElementById('error-message');

            if (username === "") {
                errorMessage.textContent = "Username is required";
                return false;
            }
            if (password === "") {
                errorMessage.textContent = "Password is required";
                return false;
            }
            return true;
        }
    </script>
</head>
<body>

<div class="login-container">
    <h1>Login</h1>
    <?php if (isset($_GET['error'])): ?>
        <div class="error-message"><?php echo htmlspecialchars($_GET['error']); ?></div>
    <?php endif; ?>
    <form action="index.php" method="post" onsubmit="return validateForm()">
        <div id="error-message" class="error-message"></div>
        <label for="username">Username:</label>
        <input type="text" name="username" id="username" required>
        
        <label for="password">Password:</label>
        <input type="password" name="password" id="password" required>
        
        <button type="submit">Login</button>
    </form>
</div>

</body>
</html>
