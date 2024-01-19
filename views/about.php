<?php
require_once "../views/inc/header.php";
require_once "../views/inc/navbar.php";
?>

<!-- Start About Us Header -->
<div class="text-center pt-4">
    <div class="container-custom my-4">
        <div class="row py-5">
            <h1 class="h1 fw-bold mb-4">We are OrigaMe</h1>
            <p class="mb-4">
                Welcome to OrigaMe! Our mission is to help people discover the joy of paper folding. We
                love to blend the timeless art of origami with intuitive guidance, placing the secrets of folding right
                at your fingertips. Let’s explore the endless possibilities of paper together!
            </p>
            <p class="mb-4">Origami is fun, easy, inexpensive, and great for sharing with others. This is an activity
                that has been passed on from one generation to another, despite huge technological advances.</p>
            <p class="mb-4">Let's make sure that it will continue for many generations to come.</p>
        </div>
    </div>
</div>
<!-- End About Us Header -->

<!-- Start Meet the Team Section -->
<section class="text-center">
    <div class="container-custom my-md-0 my-4">
        <div class="row text-start">
            <h2 class="h2 fw-bold mb-4">Meet the Team</h2>
        </div>
        <div class="row">
            <?php
            $teamMembers = [
                ["Quang Long Tran", "Developer", "https://i.pinimg.com/564x/48/ae/dd/48aeddf5f020f7a0a42ff6ce23ff3295.jpg"],
                ["Ngoc Hiep Vu", "Developer", "https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTz3lAZ2HRsRRHaLli8-koit3_COe-2zAHGNO0Tx7OrvOzQvVa_4WUnk-UhIxxT7J8vCUk&usqp=CAU"],
                ["Thu Trang Nguyen", "Developer", "https://i.pinimg.com/736x/6c/03/7d/6c037d54bf3c288c3ec1c3390fcb03f8.jpg"],
                ["Anh Trung Pham", "Developer", "https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQfTs5PLBfKl4xm3hOEETQsjNhKI5F8exkmlEj9MpWgn5dq1s5U6WPoVjo25RQRvi7ie8Y&usqp=CAU"],
            ];

            foreach ($teamMembers as $member) {
                list($name, $role, $image) = $member;
                ?>
                <div class="col-12 col-sm-6 mb-4">
                    <a href="../views/instruction.php" class="text-decoration-none">
                        <img src="<?php echo $image; ?>" class="mb-4 img-fluid rounded-circle" alt="<?php echo $name; ?>" width="300" height="300" loading="lazy">
                    </a>
                    <h3 class="fw-bold"><?php echo $name; ?></h3>
                    <h5><?php echo $role; ?></h5>
                    <p>"Growing up in Vietnam, and currently a student at Aptech Computer Education."</p>
                </div>
            <?php } ?>
        </div>
    </div>
</section>
<!-- End Meet the Team Section -->

<!-- About Section Start -->
<section class="text-center py-4">
    <article class="container-custom my-4">
        <div class="row">
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
