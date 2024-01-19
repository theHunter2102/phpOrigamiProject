<?php
session_start();
require_once ("../models/loginModel.php");
require_once "../views/inc/header.php";

if ($_SERVER['REQUEST_METHOD']==='POST')
{
    if (isset($_POST['email']) && isset($_POST['password']))
    {
        $email = $_POST['email'];
        $password = $_POST['password'];
        $loginModel=new loginModel();
        $checkLogin=$loginModel->checkLogin($email,$password);
        if ($checkLogin)
        {
            echo '<script>document.addEventListener("DOMContentLoaded", function () {showModal("modalLogin");});</script>';
            setcookie("email", $email, time() + 3600, "/");
            echo '<script>window.location.href = "../views/contact.php";</script>';
        }
        else {

            echo '<script>alert("email or password invalid !");</script>';
            echo '<script>document.addEventListener("DOMContentLoaded", function () {showModal("modalLogin");});</script>';

            echo '<script>window.location.href = "../views/login.php";</script>';
        }
    }
}

require_once "../views/inc/footer.php";
?>


