<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Authentication System</title>
    <link rel="stylesheet" href="styles.css">
</head>

<body>

    <div class="container">
        <h1>User Authentication System</h1>

        <!-- User Registration Form -->
        <div id="register-form" class="form-container">
            <h2>Register</h2>
            <form id="registrationForm" onsubmit="registerUser(event)">
                <label for="first_name">First Name:</label>
                <input type="text" id="first_name" name="first_name" required value="John">

                <label for="last_name">Last Name:</label>
                <input type="text" id="last_name" name="last_name" required value="Doe">

                <label for="email">Email:</label>
                <input type="email" id="email" name="email" required value="john.doe@example.com">

                <label for="mobile_number">Mobile Number:</label>
                <input type="text" id="mobile_number" name="mobile_number" required value="1234567890">

                <label for="address">Address:</label>
                <textarea id="address" name="address">123 Main St, Cityville</textarea>

                <label for="password">Password:</label>
                <input type="password" id="password" name="password" required value="password123">

                <button type="submit">Register</button>
            </form>
        </div>

        <!-- User Login Form -->
        <div id="login-form" class="form-container">
            <h2>Login</h2>
            <form id="loginForm" onsubmit="loginUser(event)">
                <label for="email_mobile">Email/Mobile:</label>
                <input type="text" id="email_mobile" name="email_mobile" required value="john.doe@example.com">

                <label for="login_password">Password:</label>
                <input type="password" id="login_password" name="login_password" required value="password123">

                <button type="submit">Login</button>
            </form>
        </div>

        <!-- Forgotten Password Form -->
        <div id="forgot-password-form" class="form-container">
            <h2>Forgot Password</h2>
            <form id="forgotPasswordForm" onsubmit="forgotPassword(event)">
                <label for="forgot_email_mobile">Email/Mobile:</label>
                <input type="text" id="forgot_email_mobile" name="forgot_email_mobile" required value="john.doe@example.com">

                <button type="submit">Submit</button>
            </form>
        </div>
    </div>

    <script src="script.js"></script>
</body>

</html>