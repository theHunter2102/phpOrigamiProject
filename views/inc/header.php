<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- favicon -->
    <link rel="apple-touch-icon" sizes="180x180" href="../public/images/favicon_io/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="../public/images/favicon_io/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="../public/images/favicon_io/favicon-16x16.png">
    <link rel="manifest" href="../public/images/favicon_io/site.webmanifest">

    <title>OrigaMe</title>

    <!-- Bootstrap Stylesheet -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"
          rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />

    <!-- Main Stylesheet -->
    <link rel="stylesheet" href="../public/css/main.css">
    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Alegreya:wght@700&family=Montserrat:wght@400;700&display=swap"
        rel="stylesheet">
    <!-- Bootstrap Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.1/font/bootstrap-icons.css">
</head>

<body>
<header class="header p-3 fixed-top start-0 top-0 end-0">
    <div class="d-flex justify-content-between align-items-center">
        <!-- Logo  -->
        <a href="../views/index.php" id="logo" class="text-decoration-none fs-4 fw-bold">OrigaMe</a>
        <!-- Logo  -->

        <!--Icon User-->
        <div  class="d-flex align-items-center">

<!--            <div id="userIcon">-->
<!--                <span class="username">-->
<!--                    --><?php
//                    if (isset($_COOKIE['email'])) {
//                        $email = $_COOKIE['email'];
//                        echo $email;
//                    } else {
//                        echo"";
//                    }
//                    ?>
<!--                </span>-->
<!--                Icon User-->
<!--                <a href="../views/login.php">-->
<!--                    <img src="../public/images/giang.jpg" class="user-avatar me-2" alt="User Avatar">-->
<!--                </a>-->
<!--            </div>-->
            <div id="userIcon" class="dropdown">
                    <span class="username">
                        <?php
                        if (isset($_COOKIE['email'])) {
                            $email = $_COOKIE['email'];
                            echo $email;
                        } else {
                            echo "";
                        }
                        ?>
                    </span>
                <!-- Icon User -->
                <img src="../public/images/userIcon.png" class="user-avatar me-2" alt="User Avatar" onclick="toggleDropdown()">

                <!-- Dropdown Content -->
                <div id="userDropdown" class="dropdown-content">
                    <?php
                    if (isset($_COOKIE['email'])) {
                        echo '<a href="#" onclick="logout()">Logout</a>';
                    } else {
                        echo '<a href="../views/login.php">Login</a>';
                        echo '<a href="../views/register.php">Register</a>';
                    }
                    ?>
                </div>
            </div>

            <!-- Navbar Button  -->
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbar"
                    aria-controls="navbar" aria-expanded="false" aria-label="Toggle navigation">
                <i class="bi bi-filter-right fs-1"></i>
            </button>
            <!-- Navbar Button  -->
        </div>
    </div>
</header>
