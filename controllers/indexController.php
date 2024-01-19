<?php
require_once '../models/indexModel.php';

class indexController {
    public function displayFeedback($email, $username, $message) {
        $indexModel = new indexModel();
        $checkMail = $indexModel->checkEmail($email);
        $insertFeedback=$indexModel->insertFeedback($email, $username, $message);
        if ($checkMail!=null)
        {
            if ($insertFeedback)
            {
                echo '<script>alert("Feedback successfully!")</script>';
            }
        }
        else
        {
            echo '<script>alert("email invalid, you need register!")</script>';
        }
    }
}
?>
