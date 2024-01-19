<?php
require_once "../views/inc/header.php";
require_once "../views/inc/navbar.php";
require_once "../controllers/diagramController.php";
?>




<div class="text-center py-4">
    <div class="container-custom my-4">
        <div class="row py-5">
            <h1 class="h1 fw-bold mb-4">Easy Origami Step-by-Step Instructions</h1>

        </div>
    </div>
</div>

<!-- Animal Diagrams Section Start -->
<section class="text-center py-4">
    <div class="container-custom my-md-0 my-4">
        <div class="row text-start">
            <h2 class="h2 fw-bold mb-4">Animals Origami</h2>
        </div>
        <div class="row">
            <?php
            $diagramController = new diagramController();
            $diagramController->displayItemsGallery('animals');
            ?>
        </div>
    </div>
</section>
<!-- Animal Diagrams Section End -->

<section class="text-center py-4">
    <div class="container-custom my-md-0 my-4">
        <div class="row text-start">
            <h2 class="h2 fw-bold mb-4">Bird Origami</h2>
        </div>
        <div class="row">
            <?php
            $diagramController = new diagramController();
            $diagramController->displayItemsGallery('bird');
            ?>
        </div>
    </div>
</section>

<section class="text-center py-4">
    <div class="container-custom my-md-0 my-4">
        <div class="row text-start">
            <h2 class="h2 fw-bold mb-4">Fish and Sea Creatures Origami</h2>
        </div>
        <div class="row">
            <?php
            $diagramController = new diagramController();
            $diagramController->displayItemsGallery('sea');
            ?>
        </div>
    </div>
</section>



<section class="text-center py-4">
    <div class="container-custom my-md-0 my-4">
        <div class="row text-start">
            <h2 class="h2 fw-bold mb-4">Clothing Origami</h2>
        </div>
        <div class="row">
            <?php
            $diagramController = new diagramController();
            $diagramController->displayItemsGallery('clothing');
            ?>
        </div>
    </div>
</section>

<section class="text-center py-4">
    <div class="container-custom my-md-0 my-4">
        <div class="row text-start">
            <h2 class="h2 fw-bold mb-4">Fruit and vegetable Origami</h2>
        </div>
        <div class="row">
            <?php
            $diagramController = new diagramController();
            $diagramController->displayItemsGallery('fruit');
            ?>
        </div>
    </div>
</section>
<section class="text-center py-4">
    <div class="container-custom my-md-0 my-4">
        <div class="row text-start">
            <h2 class="h2 fw-bold mb-4">Dinosaurs Origami</h2>
        </div>
        <div class="row">
            <?php
            $diagramController = new diagramController();
            $diagramController->displayItemsGallery('dinosaurs');
            ?>
        </div>
    </div>
</section>
<!-- ... Diagrams Section Start -->
<section class="text-center py-4">
    <div class="container-custom my-md-0 my-4">
        <div class="row text-start">
            <h2 class="h2 fw-bold mb-4">Holiday Origami</h2>
        </div>
        <div class="row">
            <?php
            $diagramController = new diagramController();
            $diagramController->displayItemsGallery('holiday');
            ?>
        </div>
    </div>
</section>
<!-- ... Diagrams Section End -->
<!-- ... Diagrams Section Start -->
<section class="text-center py-4">
    <div class="container-custom my-md-0 my-4">
        <div class="row text-start">
            <h2 class="h2 fw-bold mb-4">Insect Origami</h2>
        </div>
        <div class="row">
            <?php
            $diagramController = new diagramController();
            $diagramController->displayItemsGallery('insect');
            ?>
        </div>
    </div>
</section>
<!-- ... Diagrams Section End -->
<!-- ... Diagrams Section Start -->
<section class="text-center py-4">
    <div class="container-custom my-md-0 my-4">
        <div class="row text-start">
            <h2 class="h2 fw-bold mb-4">Cake and ice cream Origami</h2>
        </div>
        <div class="row">
            <?php
            $diagramController = new diagramController();
            $diagramController->displayItemsGallery('food');
            ?>
        </div>
    </div>
</section>
<!-- ... Diagrams Section End -->

<!-- ... Diagrams Section Start -->
<section class="text-center py-4">
    <div class="container-custom my-md-0 my-4">
        <div class="row text-start">
            <h2 class="h2 fw-bold mb-4">Box Origami</h2>
        </div>
        <div class="row">
            <?php
            $diagramController = new diagramController();
            $diagramController->displayItemsGallery('box');
            ?>
        </div>
    </div>
</section>
<!-- ... Diagrams Section End -->
<!-- ... Diagrams Section Start -->
<section class="text-center py-4">
    <div class="container-custom my-md-0 my-4">
        <div class="row text-start">
            <h2 class="h2 fw-bold mb-4">Tree Origami</h2>
        </div>
        <div class="row">
            <?php
            $diagramController = new diagramController();
            $diagramController->displayItemsGallery('tree');
            ?>
        </div>
    </div>
</section>
<!-- ... Diagrams Section End -->
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




<?php
require_once "../views/inc/footer.php";
?>
