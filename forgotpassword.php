<?php
include('db_connection.php');

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $email_mobile = $_POST['forgot_email_mobile'];

    $sql = "SELECT * FROM users WHERE email = '$email_mobile' OR mobile_number = '$email_mobile'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        $user_id = $row['id'];
        $reset_token = bin2hex(random_bytes(16));

        $update_token_sql = "UPDATE users SET reset_token = '$reset_token' WHERE id = $user_id";
        $conn->query($update_token_sql);

        $reset_link_or_otp = generateResetLinkOrOTP($row['email'], $reset_token);

        echo json_encode(array("status" => "success", "message" => "Reset link or OTP sent successfully"));
    } else {
        echo json_encode(array("status" => "error", "message" => "User not found"));
    }
} else {
    echo json_encode(array("status" => "error", "message" => "Invalid request method"));
}

$conn->close();

function generateResetLinkOrOTP($email, $reset_token)
{
}
