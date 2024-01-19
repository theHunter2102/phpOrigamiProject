<?php
require_once "../views/inc/header.php";
require_once "../views/inc/navbar.php";
?>

<!-- Hero Start -->
<div class="hero">
    <div class="hero__overlay"></div>
    <video playsinline="playsinline" autoplay="autoplay" muted="muted" loop="loop" loading="lazy" class="hero__video">
        <source src="../public/images/hero.mp4" type="video/mp4">
    </video>
    <div class="hero__content h-100 container-custom position-relative">
        <div class="d-flex h-100 align-items-center hero__content-width">
            <div class="text-white">
                <h1 class="hero__heading fw-bold text-shadow mb-4">Discover the Art of Origami</h1>
                <p class="lead text-shadow mb-4">Unlock the magic of origami with our step-by-step instructions. Whether
                    you’re a novice or a seasoned enthusiast, explore captivating designs that bring paper to life.</p>
            </div>
        </div>
    </div>
    <a href="#scroll-down" class="hero__scroll-btn text-shadow">
        Explore <i class="bi bi-arrow-down-short"></i>
    </a>
</div>
<!-- Hero End -->

<a id="scroll-down"></a>
<!-- History Section Start -->
<section class="steps container-custom">

    <div class="row">
        <div class="col-12 col-sm-6 d-md-flex justify-content-md-center">
            <img src="../public/images/history.jpg" alt="History of Origami"
                class="img-fluid pb-4 steps__section-thumbnail" width="553" height="746" loading="lazy">
        </div>
        <div class="col-12 col-sm-6 align-self-center justify-content-md-center">

            <div class="steps__content-width">
                <h2 class="h2 fw-bold mb-4">History of Origami</h2>
                <p class="mb-4">
                    Origami, art of folding objects out of paper to create both two-dimensional and three-dimensional
                    subjects. The word origami (from Japanese oru [“to fold”] and kami [“paper”]) has become the generic
                    description of this art form.
                </p>
                <a href="../views/history.php">Learn more <i class="bi bi-arrow-right"></i></a>
            </div>

        </div>
    </div>

</section>
<!-- History Section End -->
<!-- Beginner Section Start -->
<section class="steps container-custom">
    <div class="row">
        <div class="col-12 col-sm-6 d-md-flex justify-content-md-center order-sm-1">
            <img src="../public/images/guide.jpg" alt="Beginner’s Guide" class="img-fluid pb-4 steps__section-thumbnail"
                width="553" height="746" loading="lazy">
        </div>
        <div class="col-12 col-sm-6 align-self-center justify-content-md-center">
            <div class="steps__content-width">
                <h2 class="h2 fw-bold mb-4">Beginner’s Guide</h2>
                <p class="mb-4">Looking to venture into the exciting world of paper folding but have no idea where to
                    start? Our Beginner’s Guide is just what you need!</p>
                <a href="../views/guide.php">Start now <i class="bi bi-arrow-right"></i></a>
            </div>
        </div>
    </div>
</section>
<!-- Beginner Section End -->

<!-- Highlight Section Start -->
<section class="text-center py-4">
    <div class="container-custom my-4">
        <h2 class="h2 fw-bold mb-4">Learn, Fold, Create!</h2>
        <p class="mb-4">Take a sneak peek at our most popular diagrams, and get ready to impress your friends and family
            with your newfound skills!</p>
        <div class="row">
            <div class="col-12 col-sm-4 mb-4">
                <a href="../views/instruction.php" class="text-decoration-none">
                    <img src="https://origami.me/wp-content/uploads/2023/12/crane-origami-icon.png"
                        class="mb-4 img-fluid" alt="Coffe Flavour" width="140" height="140" loading="lazy">
                </a>
                <h2>Origami Crane</h2>
            </div>
            <div class="col-12 col-sm-4 mb-4">
                <a href="../views/instruction.php" class="text-decoration-none">
                    <img src="https://origami.me/wp-content/uploads/2023/12/owl-origami-icon.png" class="mb-4 img-fluid"
                        alt="Coffe Flavour" width="140" height="140" loading="lazy">
                </a>
                <h2>Origami Owl</h2>
            </div>
            <div class="col-12 col-sm-4 mb-4">
                <a href="../views/instruction.php" class="text-decoration-none">
                    <img src="https://origami.me/wp-content/uploads/2023/12/butterfly-origami-icon.png"
                        class="mb-4 img-fluid" alt="Coffe Flavour" width="140" height="140" loading="lazy">
                </a>
                <h2>Origami Butterfly</h2>
            </div>
        </div>
        <a href="../views/diagram.php">See All Diagrams <i class="bi bi-arrow-right"></i></a>
    </div>
</section>
<!-- Highlight Section End -->

<!-- Collection Section Start -->
<section class="steps container-custom">
    <div class="row">
        <div class="col-12 col-sm-6 d-md-flex justify-content-md-center">
            <img src="../public/images/gallery.png" alt="Explore our Gallery"
                 class="img-fluid pb-4 steps__section-thumbnail" width="553" height="746" loading="lazy">
        </div>
        <div class="col-12 col-sm-6 align-self-center justify-content-md-center">
            <div class="steps__content-width">
                <h2 class="h2 fw-bold mb-4">Explore our Gallery</h2>
                <p class="mb-4">Look through a list of notable works, personally selected by our curators, to find new
                    insights about the artists and discover interesting details behind their most significant creations.
                </p>
                <a href="../views/gallery.php">Explore now <i class="bi bi-arrow-right"></i></a>
            </div>
        </div>
    </div>
</section>
<!-- Collection Section End -->

    <section class="steps container-custom">
        <div class="row">
            <div class="col-12 col-sm-6 d-md-flex justify-content-md-center order-sm-1">
                <img src="../public/images/origamiMaster.png" alt="Beginner’s Guide" class="img-fluid pb-4 steps__section-thumbnail"
                     width="500" height="500" loading="lazy">
            </div>
            <div class="col-12 col-sm-6 align-self-center justify-content-md-center">
                <div class="steps__content-width">
                    <h2 class="h2 fw-bold mb-4">Origami Masters</h2>
                    <p class="mb-4">

                        "The exceptional and skillful craftsmanship of these master origami artists forms the core essence that brings forth outstanding origami designs."</p>
                    <a href="../views/master.php">Start now <i class="bi bi-arrow-right"></i></a>
                </div>
            </div>
        </div>
    </section>

<?php
require_once "../views/inc/footer.php";
?>