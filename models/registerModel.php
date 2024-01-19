<?php
require_once "../models/connectDb.php";

class registerModel
{
    function checkRegister($username, $email, $password)
    {
        global $conn;

        // Kiểm tra xem email đã tồn tại chưa
        $checkEmailQuery = "SELECT * FROM users WHERE email = '$email'";
        $checkEmailResult = mysqli_query($conn, $checkEmailQuery);

        if (!$checkEmailResult) {
            die("Error in SQL query: " . mysqli_error($conn));
        }

        // Nếu email đã tồn tại, thông báo và không thực hiện việc chèn
        if (mysqli_num_rows($checkEmailResult) > 0) {
            echo '<script>alert("Email already exists!")</script>';
            return false;
        }

        // Nếu email chưa tồn tại, thực hiện việc chèn mới
        $sql = "INSERT INTO users(username, email, password) VALUES ('$username', '$email', '$password')";
        $result = mysqli_query($conn, $sql);

        if (!$result) {
            die("Error in SQL query: " . mysqli_error($conn));
        } else {
            return true;
        }
    }
}
?>
