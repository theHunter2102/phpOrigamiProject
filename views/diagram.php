<?php
session_start();
require_once "../controllers/diagramController.php";
require_once "../views/inc/navbar.php";
require_once "../views/inc/header.php";
?>

<div class="text-center py-4">
    <div class="container-custom my-4">
        <div class="row py-5">
            <h1 class="h1 fw-bold mb-4">Easy Origami Step-by-Step Instructions</h1>
            <p class="mb-4">Origami enthusiasts, get ready to embark on a wonderful journey of creativity and
                imagination! Discover the joy of origami with our collection of 110+ easy-to-fold models. You don’t need
                any special skills to create stunning pieces of art – even if you’re a beginner. Click on any model to
                unveil simple step-by-step instructions, and let your folding adventures begin!</p>
        </div>
       <span>No Experience? <a href="../views/guide.php">Click here <i class="bi bi-arrow-right"></i></a></span>
    </div>
</div>

<!-- Animal Diagrams Section Start -->
<section class="text-center py-4">
    <div class="container-custom my-md-0 my-4">
        <div class="row text-start">
            <h2 class="h2 fw-bold mb-4">Animals Origami</h2>
            <p class="mb-4">Creating your own origami animal is so much fun! With our easy origami mammal diagrams,
                you’ll be able to bring to life cute paper versions of your favorite warm-blooded animals, from the
                forest to the savannah. Just follow our step-by-step instructions and enjoy the process!</p>
        </div>
        <div class="row">
            <?php
            $diagramController = new diagramController();
            $diagramController->displayItems('animals');
            ?>
        </div>
    </div>
</section>
<!-- Animal Diagrams Section End -->

    <section class="text-center py-4">
        <div class="container-custom my-md-0 my-4">
            <div class="row text-start">
                <h2 class="h2 fw-bold mb-4">Bird Origami</h2>
                <p class="mb-4">Creating your own origami animal is so much fun! With our easy origami mammal diagrams,
                    you’ll be able to bring to life cute paper versions of your favorite warm-blooded animals, from the
                    forest to the savannah. Just follow our step-by-step instructions and enjoy the process!</p>
            </div>
            <div class="row">
                <?php
                $diagramController = new diagramController();
                $diagramController->displayItems('bird');
                ?>
            </div>
        </div>
    </section>

    <section class="text-center py-4">
        <div class="container-custom my-md-0 my-4">
            <div class="row text-start">
                <h2 class="h2 fw-bold mb-4">Fish and Sea Creatures Origami</h2>
                <p class="mb-4">Creating your own origami animal is so much fun! With our easy origami mammal diagrams,
                    you’ll be able to bring to life cute paper versions of your favorite warm-blooded animals, from the
                    forest to the savannah. Just follow our step-by-step instructions and enjoy the process!</p>
            </div>
            <div class="row">
                <?php
                $diagramController = new diagramController();
                $diagramController->displayItems('sea');
                ?>
            </div>
        </div>
    </section>



    <section class="text-center py-4">
        <div class="container-custom my-md-0 my-4">
            <div class="row text-start">
                <h2 class="h2 fw-bold mb-4">Clothing Origami</h2>
                <p class="mb-4">Creating your own origami animal is so much fun! With our easy origami mammal diagrams,
                    you’ll be able to bring to life cute paper versions of your favorite warm-blooded animals, from the
                    forest to the savannah. Just follow our step-by-step instructions and enjoy the process!</p>
            </div>
            <div class="row">
                <?php
                $diagramController = new diagramController();
                $diagramController->displayItems('clothing');
                ?>
            </div>
        </div>
    </section>

    <section class="text-center py-4">
        <div class="container-custom my-md-0 my-4">
            <div class="row text-start">
                <h2 class="h2 fw-bold mb-4">Fruit and vegetable Origami</h2>
                <p class="mb-4">Lorem ipsum dolor sit amet consectetur adipisicing elit. Repudiandae quo quidem et, adipisci
                    accusamus fugiat sit autem ea fugit praesentium quasi quod earum quis facere, voluptatibus totam veniam,
                    perferendis magnam?</p>
            </div>
            <div class="row">
                <?php
                $diagramController = new diagramController();
                $diagramController->displayItems('fruit');
                ?>
            </div>
        </div>
    </section>
    <section class="text-center py-4">
        <div class="container-custom my-md-0 my-4">
            <div class="row text-start">
                <h2 class="h2 fw-bold mb-4">Dinosaurs Origami</h2>
                <p class="mb-4">Lorem ipsum dolor sit amet consectetur adipisicing elit. Repudiandae quo quidem et, adipisci
                    accusamus fugiat sit autem ea fugit praesentium quasi quod earum quis facere, voluptatibus totam veniam,
                    perferendis magnam?</p>
            </div>
            <div class="row">
                <?php
                $diagramController = new diagramController();
                $diagramController->displayItems('dinosaurs');
                ?>
            </div>
        </div>
    </section>

    <!-- ... Diagrams Section Start -->
    <section class="text-center py-4">
        <div class="container-custom my-md-0 my-4">
            <div class="row text-start">
                <h2 class="h2 fw-bold mb-4">Holidays Origami</h2>
                <p class="mb-4">Lorem ipsum dolor sit amet consectetur adipisicing elit. Repudiandae quo quidem et, adipisci
                    accusamus fugiat sit autem ea fugit praesentium quasi quod earum quis facere, voluptatibus totam veniam,
                    perferendis magnam?</p>
            </div>
            <div class="row">
                <?php
                $diagramController = new diagramController();
                $diagramController->displayItems('holiday');
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
                <p class="mb-4">Lorem ipsum dolor sit amet consectetur adipisicing elit. Repudiandae quo quidem et, adipisci
                    accusamus fugiat sit autem ea fugit praesentium quasi quod earum quis facere, voluptatibus totam veniam,
                    perferendis magnam?</p>
            </div>
            <div class="row">
                <?php
                $diagramController = new diagramController();
                $diagramController->displayItems('insect');
                ?>
            </div>
        </div>
    </section>
    <!-- ... Diagrams Section End -->
    <!-- ... Diagrams Section Start -->
    <section class="text-center py-4">
        <div class="container-custom my-md-0 my-4">
            <div class="row text-start">
                <h2 class="h2 fw-bold mb-4">Food Origami</h2>
                <p class="mb-4">Lorem ipsum dolor sit amet consectetur adipisicing elit. Repudiandae quo quidem et, adipisci
                    accusamus fugiat sit autem ea fugit praesentium quasi quod earum quis facere, voluptatibus totam veniam,
                    perferendis magnam?</p>
            </div>
            <div class="row">
                <?php
                $diagramController = new diagramController();
                $diagramController->displayItems('food');
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
            <p class="mb-4">Lorem ipsum dolor sit amet consectetur adipisicing elit. Repudiandae quo quidem et, adipisci
                accusamus fugiat sit autem ea fugit praesentium quasi quod earum quis facere, voluptatibus totam veniam,
                perferendis magnam?</p>
        </div>
        <div class="row">
            <?php
            $diagramController = new diagramController();
            $diagramController->displayItems('box');
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
                <p class="mb-4">Lorem ipsum dolor sit amet consectetur adipisicing elit. Repudiandae quo quidem et, adipisci
                    accusamus fugiat sit autem ea fugit praesentium quasi quod earum quis facere, voluptatibus totam veniam,
                    perferendis magnam?</p>
            </div>
            <div class="row">
                <?php
                $diagramController = new diagramController();
                $diagramController->displayItems('tree');
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
<!-- To top button -->

<?php
require_once "../views/inc/footer.php";
?>