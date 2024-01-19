<?php
require_once "../models/registerModel.php";


if ($_SERVER['REQUEST_METHOD']==='POST')
{
    if (isset($_POST['registerButton']))
    {


    if (isset($_POST['username']) && isset($_POST['email'])  && isset($_POST['password'])&& isset($_POST['confirmPassword']))
    {
        $username=$_POST['username'];
        $email= $_POST['email'];
        $password=$_POST['password'];
        $confirmPassword=$_POST['confirmPassword'];

        $register=new registerModel();
        $registerModel = $register->checkRegister($username, $email, $password);



        if ($password===$confirmPassword){

            if ($registerModel)
            {
                $_SESSION['username']=$username;
                $_SESSION['password']=$password;
                echo '<script>alert("Register successfully! '.$username, $password.' ");
                        window.location.href="../views/login.php";
                        </script>';

            }
        }
        else
        {
            echo '<script>
                     alert("password and confirm password not match!");
                      window.location.href="../views/register.php";
                  </script>';

        }


    }
}
}
?>