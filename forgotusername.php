<?php
include('db_connection.php');

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $email_mobile = $_POST['forgot_email_mobile'];
    $sql = "SELECT * FROM users WHERE email = '$email_mobile' OR mobile_number = '$email_mobile'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        $username = $row['email'];

        echo json_encode(array("status" => "success", "username" => $username));
    } else {
        echo json_encode(array("status" => "error", "message" => "User not found"));
    }
} else {
    echo json_encode(array("status" => "error", "message" => "Invalid request method"));
}
