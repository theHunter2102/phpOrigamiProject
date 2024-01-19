<?php
require_once "../views/inc/header.php";
require_once "../views/inc/navbar.php";
?>

    <div class="wrapper">
        <div class="container main">
            <div class="row formLogin">
                <div class="col-md-6 side-image" >

                    <!-------------      image     ------------->
                    <!---->
                    <!--                    <img src="../public/images/iconCrane.png" alt="">-->
                    <div class="text">
                        <p id="logo" class="text-decoration-none fs-4 fw-bold">OrigaMe</p>
                    </div>
                </div>
                <div class="col-md-6 right">

                    <div class="input-box">

                        <header><h2>Register</h2></header>
                        <form action="../controllers/registerController.php" method="post">
                            <div class="input-field">
                                <input type="text" class="input" id="username" name="username" required="" autocomplete="off">
                                <label for="username">Username</label>
                            </div>
                            <div class="input-field">
                                <input type="email" class="input" id="email" name="email" required="" autocomplete="on">
                                <label for="email">Email</label>
                            </div>
                            <div class="input-field">
                                <input type="password" class="input" id="password" name="password" required="">
                                <label for="password">Password</label>
                            </div>
                            <div class="input-field">
                                <input type="password" class="input" id="password" name="confirmPassword" required="">
                                <label for="confirmPassword">Confirm password</label>
                            </div>
                            <div class="input-field">
                                <input type="submit" class="submitLogin" name="registerButton" value="Register">
                            </div>
                            <div class="register">
                                <span>Already have an account? <a href="../views/login.php">Log in here</a></span>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php
require_once "../views/inc/footer.php";
?>