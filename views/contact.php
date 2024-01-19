<?php
require_once "../views/inc/header.php";
require_once "../views/inc/navbar.php";
require_once "../controllers/contactController.php";
if ($_SERVER['REQUEST_METHOD']==='POST')
{
        if (isset($_POST['name']) && isset($_POST['email']) && isset($_POST['message']))
        {

            $name  = $_POST['name'];
            $email = $_POST['email'];
            $message= $_POST['message'];
//        echo '<script>alert("Feedback successfully!'.$name,$email,$message.'")</script>';
            if (isset($_COOKIE['email']) && $_COOKIE['email'] !== '') {
                // Có cookie 'email' và giá trị của nó không rỗng
                $contactController = new contactController();
                $contactController->displayFeedback($email, $name, $message);
            }  else
            {
                echo '<script>document.addEventListener("DOMContentLoaded", function () {showModal("modalContact");});</script>';

            }
        }
}
?>

<!-- Start Contact Header -->
<div class="text-center pt-4">
    <div class="container-custom mt-4">
        <div class="row py-5">
<!--            <h1 class="h1 fw-bold mb-4"></h1>-->
        </div>
    </div>
</div>
<!-- End Contact Header -->
<section class="text-center py-4" >
    <div class="container-custom my-4" style="max-width: 70%;">
        <h2 class="h2 fw-bold mb-4">Write for Us</h2>
<p class="mb-4" style="max-width: 70%;margin: 0 auto">Reach out to us using the contact form below, and we’ll fold right back to you as swiftly as an
    origami crane takes flight.</p>
    </div>
<div class="row py-3 " style="max-width: 70%;margin: 0 auto">
    <form action="#" method="post" style="margin-bottom: 1vh">
        <div class="row justify-content-center">
            <div class="col-md-5 text-start">
                <div class="md-form mb-0">
                    <label for="name" class=""></label>
                    <input type="text" id="name" name="name" class="form-control form-control-lg" placeholder="Your name" required >
                </div>
            </div>
            <div class="col-md-5 text-start">
                <div class="md-form mb-0">
                    <label for="email" class=""></label>
                    <input type="text" id="email" name="email" class="form-control form-control-lg" placeholder="Email" required>
                </div>
            </div>
        </div>
        <div class="row justify-content-center mt-3">
            <div class="col-md-10 text-start">
                <div class="md-form">
                    <label for="message"></label>
                    <textarea type="text" id="message" name="message" rows="3"
                              class="form-control md-textarea" placeholder="Message" required></textarea>
                    <div class="d-flex row justify-content-center">
                        <div class="input-group w-auto py-2 mb-4">
                            <div class="modal fade" id="modalContact" tabindex="-1" aria-labelledby="modalLabel" aria-hidden="true">
                                            <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <p style="margin:0; auto">Opp!</p>
                                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                        </div>
                                                            <div class="modal-body py-5" style="text-align: center">
                                                                    <h5 class="h5 mb-4 fw-bold">You must be our Members to do this!</h5>
                                                                    <p>Have not subscribed yet?<a href="../views/register.php">Click here!</a></p>
                                                                    <p>Already subscribed? <a href="../views/login.php">Login</a></p>
                                                                </div>
                                                       </div>
                                               </div>
                                      </div>
                        </div>
                    </div>





                    <div class="d-flex row justify-content-center">
                        <div class="input-group w-auto py-2 mb-4">
                            <div class="modal fade" id="modalFeedback1" tabindex="-1" aria-labelledby="modalLabel" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <p style="margin:0; auto">Opp!</p>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body py-5" >
                                            <h5 class="h5 mb-4 fw-bold" style="text-align: center">Your feedback successfully!</h5>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="d-flex row justify-content-center">
                        <div class="input-group w-auto py-2 mb-4">
                            <div class="modal fade" id="modalFeedback2" tabindex="-1" aria-labelledby="modalLabel" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <p style="margin:0; auto">Opp!</p>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body py-5" >
                                            <h5 class="h5 mb-4 fw-bold" style="text-align: center">email isn't match your email</h5>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <input type="submit" class="input-group-text btn btn-dark" name="submitFeedback" value="Submit" >

    </form>
</div>
</section>



<?php
require_once "../views/inc/footer.php";
?>
