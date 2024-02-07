<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Authentication System</title>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

    <link rel="stylesheet" href="styles.css">
</head>

<body>
    <div class="container mt-5">
        <div id="forgot-password-form" class="form-container">
            <h2 class="text-center mb-4">Forgot Password</h2>
            <form id="forgotPasswordForm" onsubmit="forgotPassword(event)">
                <div class="form-group">
                    <label for="forgot_email_mobile">Email/Mobile:</label>
                    <input type="text" id="forgot_email_mobile" name="forgot_email_mobile" class="form-control" required>
                </div>

                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

    <script src="script.js"></script>
</body>

</html>