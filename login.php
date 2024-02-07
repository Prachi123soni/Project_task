<?php
include('db_connection.php');

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $email_mobile = $_POST['email_mobile'];
    $password = $_POST['password'];

    $sql = "SELECT * FROM users WHERE email = '$email_mobile' OR mobile_number = '$email_mobile'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();

        if (password_verify($password, $row['password'])) {
            $session_token = bin2hex(random_bytes(32));
            $user_id = $row['id'];

            $update_token_sql = "UPDATE users SET session_token = '$session_token' WHERE id = $user_id";
            $conn->query($update_token_sql);

            echo json_encode(array("status" => "success", "session_token" => $session_token));
        } else {
            echo json_encode(array("status" => "error", "message" => "Invalid password"));
        }
    } else {
        echo json_encode(array("status" => "error", "message" => "User not found"));
    }
} else {
    echo json_encode(array("status" => "error", "message" => "Invalid request method"));
}

$conn->close();
