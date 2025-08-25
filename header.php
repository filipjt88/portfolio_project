<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php bloginfo('name'); ?></title>
    <!-- Wp head -->
    <?php wp_head(); ?>
    <!-- Bootstrap 5-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <!-- Css -->
    <link rel="stylesheet" href="css/main.css">
</head>
<body>

    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark fixed-top shadow-sm">
        <div class="container">
            <a class="navbar-brand d-flex align-items-center gap-2 fw-bold" href="#">
                <img src="img/web-development.png" class="logo-icon" alt="hero">
                <a href="#about" class="nav-link portfolio-logo">Filip Jotić | Portfolio</a>
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item"><a class="nav-link" href="#home">Home |</a></li>
                    <li class="nav-item"><a class="nav-link" href="#about">About |</a></li>
                    <li class="nav-item"><a class="nav-link" href="#skills">Skills |</a></li>
                    <li class="nav-item"><a class="nav-link" href="#projects">Projects |</a></li>
                    <li class="nav-item"><a class="nav-link" href="#blog">Blog |</a></li>
                    <li class="nav-item"><a class="nav-link" href="#contact">Contact |</a></li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- End of Navbar -->