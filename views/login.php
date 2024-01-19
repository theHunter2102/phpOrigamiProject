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

                        <header><h2>Log In</h2></header>
                        <form action="../controllers/loginController.php" method="post">
                            <div class="input-field">
                                <input type="text" class="input" id="email" name="email" required="" autocomplete="off">
                                <label for="email">Email</label>
                            </div>
                            <div class="input-field">
                                <input type="password" class="input" id="pass" name="password" required="">
                                <label for="pass">Password</label>
                            </div>
                            <div class="input-field">

                                <input type="submit" class="submitLogin" name="submit" value="Login">
                            </div>
                            <div class="register">
                                <span>Don't have an account yet? <a href="../views/register.php">Register here</a></span>
                            </div>

                            <div class="input-group w-auto py-2 mb-4">
                                <div class="modal fade" id="modalLogin" tabindex="-1" aria-labelledby="modalLabel" aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body py-5">
                                                <h5 class="h5 mb-4 fw-bold">You must be our Members to do this!</h5>
                                                <p>Have not subscribed yet?<a href="../views/register.php">Click here!</a></p>
                                                <p>Already subscribed? <a href="../views/login.php">Login</a></p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!--                            <button type="submit" class="input-group-text btn btn-dark"-->
                                <!--                            >Submit</button>-->
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