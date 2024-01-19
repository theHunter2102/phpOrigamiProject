<?php
require_once "../models/connectDb.php";
class indexModel
{
    public function insertFeedback($email, $username, $message)
    {

        global $conn;
        $sql = "INSERT INTO feedback (email, username, content) VALUES (?, ?, ?)";

        // Sử dụng câu lệnh chuẩn bị để tránh lỗ hổng SQL injection
        $stmt = mysqli_prepare($conn, $sql);

        if ($stmt) {
            // Bind các tham số
            mysqli_stmt_bind_param($stmt, "sss", $email, $username, $message);

            // Thực hiện câu lệnh
            $result = mysqli_stmt_execute($stmt);

            if ($result) {
                return true;
            } else {
                die("Lỗi SQL Insert: " . mysqli_error($conn));
            }

            mysqli_stmt_close($stmt);
        } else {
            die("Lỗi chuẩn bị câu lệnh: " . mysqli_error($conn));
        }

    }
    public function checkEmail($email)
    {
        global $conn;
        $sql = "SELECT email FROM users";
        $result = mysqli_query($conn, $sql);

        if (!$result) {
            die("Query SQL Select không hợp lệ: " . mysqli_error($conn));
        }

        $matchingEmail=null;
        while ($row = mysqli_fetch_assoc($result)) {
            if ($email === $row['email']) {
                $matchingEmail = $row['email'];
                break;
            }
        }
        return $matchingEmail;
    }
}
