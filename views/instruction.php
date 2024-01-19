<?php
require_once '../controllers/instructionController.php';
require_once "../views/inc/header.php";
require_once "../views/inc/navbar.php";
?>

<!-- Start Instruction Header -->
<div class="text-center py-4">
    <div class="container-custom my-4">
        <div class="row py-5">
            <h1 class="h1 fw-bold mb-4">Step-by-Step Instructions for <!--model_name--></h1>
            <p class="mb-4">These instructions will show you how to fold an easy <!--model_name-->. You’ll need to use a few somewhat more complicated folds to make this model. If you have trouble at any point check out our <a href="../views/guide.php">Beginner's Guide</a> to familiarize yourself with all the basic folds.</p>
        </div>
    </div>
</div>
<!-- End Instruction Header -->

<!-- Step-by-Step Instructions Section Start -->
<section class="text-center py-4">
    <div class="container-custom my-md-0 my-4">
        <div class="row">
            <?php
            $guideController = new instructionController();

            if (isset($_POST['idShowDetail']))
            {
                $modelId=$_POST['modelId'];
                $guideController->getGuide($modelId);

            }

            ?>
        </div>
    </div>
</section>
<!-- Step-by-Step Instructions Section End -->

<!-- Start Instruction Footer -->
<section class="text-center py-4">
    <div class="container-custom my-4">
        <div class="row py-5">
            <p class="mb-4">How did you like this origami <!--model_name-->? Do you want to fold more Origami?</p>
            <a href="../views/diagram.php">Check it here</a>
        </div>
    </div>
</section>
<!-- End Instruction Footer -->

<!-- About Section Start -->
<section class="text-center py-4">
    <article class="container-custom my-4">
        <div class="row">
            <h2 class="h2 fw-bold mb-4">OrigaMe</h2>
            <p class="mb-4">
                Welcome to OrigaMe! Our mission is to help peoples discover the joy of paper folding. We
                love to blend the timeless art of origami with intuitive guidance, placing the secrets of folding right
                at your fingertips. Let’s explore the endless possibilities of paper together!
            </p>
        </div>
        <div class="row">
            <a href="../views/about.php">Get to know more about Us <i class="bi bi-arrow-right"></i></a>
            <a href="../views/index.php"><i class="bi bi-arrow-left"></i> Back to Home</a>
        </div>
    </article>
</section>
<!-- About Section End -->

<!-- To top button -->
<div id="to-top" class="col-1 fixed-bottom text-end w-100 mb-5 pb-3 pe-2">
    <a href="#" class="btn btn-dark fw-semibold"><i class="bi bi-arrow-up-short"></i></a>
</div>
<!-- To top button -->

<?php
require_once "../views/inc/footer.php";
?>