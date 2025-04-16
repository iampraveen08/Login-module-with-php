<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login and Registration Page</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;700&display=swap">
    <style>
        body {
            font-family: 'Roboto', sans-serif;
            background-color: #f4f4f9;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
            padding: 20px;
        }

        .container {
            text-align: center;
            max-width: 400px;
            width: 100%;
        }

        .icon {
            font-size: 50px;
            margin-bottom: 20px;
            color: #007BFF;
        }

        .form-container {
            background-color: #fff;
            padding: 30px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            border-radius: 10px;
            width: 100%;
            text-align: center;
            margin-bottom: 20px;
        }

        h2 {
            margin-bottom: 20px;
            color: #333;
            font-size: 1.8em;
            font-weight: 700;
        }

        .input-group {
            margin-bottom: 15px;
            text-align: left;
        }

        .input-group label {
            display: block;
            margin-bottom: 5px;
            color: #555;
            font-weight: 500;
        }

        .input-group input {
            width: 100%;
            padding: 10px;
            border: 1px solid #ddd;
            border-radius: 5px;
            box-sizing: border-box;
            font-size: 1em;
        }

        .input-group input[type="checkbox"] {
            width: auto;
        }

        button {
            width: 100%;
            padding: 10px;
            border: none;
            border-radius: 5px;
            background-color: #007BFF;
            color: white;
            font-size: 1em;
            cursor: pointer;
            margin-top: 10px;
            transition: background-color 0.3s, color 0.3s;
        }

        button:hover {
            background-color: #0056b3;
        }

        .switch {
            margin-top: 15px;
            font-size: 0.9em;
        }

        .switch a {
            color: #007BFF;
            text-decoration: none;
            cursor: pointer;
        }

        .switch a:hover {
            text-decoration: underline;
        }

        .hidden {
            display: none;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="icon"><i class="fa-regular fa-user"></i></div>
        <div id="login-form" class="form-container">
            <h2>Login</h2>
            <form action="submit_login.php" method="POST">
                <div class="input-group">
                    <label for="login-username">Username</label>
                    <input type="text" id="login-username" name="username" required>
                </div>
                <div class="input-group">
                    <label for="login-password">Password</label>
                    <input type="password" id="login-password" name="password" required>
                </div>
                <div class="input-group">
                    <input type="checkbox" id="remember-me" name="remember_me">
                    <label for="remember-me">Remember Me</label>
                </div>
                <button type="submit">Login</button>
            </form>
            <p class="switch">Don't have an account? <a onclick="switchToRegistration()">Register here</a>.</p>
        </div>
        <div id="registration-form" class="form-container hidden">
            <h2>Register</h2>
            <form action="submit_registration.php" method="POST">
                <div class="input-group">
                    <label for="register-username">Username</label>
                    <input type="text" id="register-username" name="username" required>
                </div>
                <div class="input-group">
                    <label for="register-email">Email</label>
                    <input type="email" id="register-email" name="email" required>
                </div>
                <div class="input-group">
                    <label for="register-password">Password</label>
                    <input type="password" id="register-password" name="password" required>
                </div>
                <div class="input-group">
                    <label for="register-confirm-password">Confirm Password</label>
                    <input type="password" id="register-confirm-password" name="confirm_password" required>
                </div>
                <button type="submit">Register</button>
            </form>
            <p class="switch">Already have an account? <a onclick="switchToLogin()">Login here</a>.</p>
        </div>
    </div>

    <script>
        function switchToRegistration() {
            document.getElementById('login-form').classList.add('hidden');
            document.getElementById('registration-form').classList.remove('hidden');
        }

        function switchToLogin() {
            document.getElementById('registration-form').classList.add('hidden');
            document.getElementById('login-form').classList.remove('hidden');
        }
    </script>
</body>
</html>
