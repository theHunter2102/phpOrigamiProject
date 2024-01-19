<?php
require_once ("../models/connectDb.php");

class loginModel
{
    function checkLogin($email, $password)
    {
        global $conn;
        $sql = "SELECT * FROM users WHERE email = '$email' AND password = '$password'";
        $result = mysqli_query($conn, $sql);

        if (!$result) {
            die("Error in SQL query: " . mysqli_error($conn));
        }

        foreach ($result as $row) {
            if ($row['email'] === $email && $row['password'] === $password) {
                $_SESSION['email']=$row['email'];
                return true;
            }
        }
    }
}
?>
