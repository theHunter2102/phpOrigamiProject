<?php
require_once '../models/contactModel.php';

class contactController {
    public function displayFeedback($email, $username, $message) {
        $indexModel = new contactModel();
        $checkMail = $indexModel->checkEmail($email);

        if ($checkMail===$_COOKIE['email'])
        {
            $insertFeedback=$indexModel->insertFeedback($username,$email, $message);
            if ($insertFeedback)
            {
                echo '<script>document.addEventListener("DOMContentLoaded", function () {showModal("modalFeedback1");});</script>';
            }
        }
        else
        {
            echo '<script>document.addEventListener("DOMContentLoaded", function () {showModal("modalFeedback2");});</script>';

        }
    }
}
?>
