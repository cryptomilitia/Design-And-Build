<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Contact Us | Matere Design And Build</title>
  
  <!-- Main CSS File -->
  <link href="assets/css/main.css" rel="stylesheet">

  <!--Bootstrap CSS CDN-->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

  <!-- Main JS File -->
  <script src="assets/javascript/main.js"></script>

  <!--Bootstrap Javascript CDN-->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

  <!--Bootstrap icons library CDN-->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

  <!-- Google fonts -->
  <link href="https://fonts.googleapis.com" rel="preconnect">
  <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;1,300;1,400;1,500;1,600;1,700;1,800&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

  <!--Font awesome icon libraries-->
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" rel="stylesheet" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  
  <!-- Toastr CSS -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">

  <!-- AOS CSS -->
  <link href="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.css" rel="stylesheet">
  
  <!--AOS Javascript-->
  <script src="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.js"></script>

</head>

<body>
<nav class="fixed-top"> 
    <nav class="topNav navbar navbar-expand-xl text-bg-primary">
        <button class="mx-3 navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#collapsibleTopNav" aria-controls="collapsibleTopNav" aria-expanded="false" aria-label="Topnav toggler">
            <span><i class="fa-solid fa-ellipsis-vertical"></i></span>
        </button>
        <div class="collapse navbar-collapse" id="collapsibleTopNav">
            <ul class="px-3 navbar-nav me-auto">
                <li class="nav-item">
                    <a class="nav-link" style="text-decoration: none;" href="mailto:materedesignandbuild@gmail.com">
                        <span><i aria-hidden="true" class="fas fa-envelope" style="color: red;"></i></span>
                        <span>materedesignandbuild@gmail.com</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" style="text-decoration: none;" href="tel:+254725484688">
                        <span><i aria-hidden="true" class="fas fa-phone" style="color: red;"></i> +254 725 484 688</span>
                    </a>
                </li>
            </ul>

            <!-- Social media links -->
            <ul class="px-3 navbar-nav flex-row socialMedia">
                <li class="nav-item">
                    <a class="nav-link px-2" href="https://web.facebook.com/profile.php?id=100063939943907" target="_blank">
                        <i aria-hidden="true" class="bi bi-facebook"></i>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link px-2" href="https://wa.me/254725484688" target="_blank">
                        <i aria-hidden="true" class="bi bi-whatsapp"></i>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link px-2" href="https://instagram.com/materedesign_build" target="_blank">
                        <i aria-hidden="true" class="bi bi-instagram"></i>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link px-2" href="https://linkedin.com/MatereDesignAndBuild" target="_blank">
                        <i aria-hidden="true" class="bi bi-linkedin"></i>
                    </a>
                </li>
            </ul>
        </div>
    </nav>
    <!-- Main Nav -->
    <nav class="p-3 mainNav navbar navbar-expand-xl bg-light">
        <div class="container-fluid">
            <!-- Brand logo -->
            <a class="navbar-brand" href="#">
                <img class="d-inline-block align-text-top" src="#" alt="logo">
                <span class="navbar-text">Matere Design And Build</span>
            </a>
            <!-- Hamburger menu btn -->
            <button type="button" class="navbar-toggler hamburger-btn" data-bs-toggle="collapse" data-bs-target="#collapsibleNavbar" aria-expanded="false">
                <span><i class="fas fa-bars"></i></span>
            </button>
            <!-- Navigation menu -->
            <div class="collapse navbar-collapse justify-content-evenly" id="collapsibleNavbar">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="index.html">HOME</a>
                    </li>
                    <li class="nav-item">
                        <a href="about.html" class="nav-link">ABOUT US</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" role="button" data-bs-toggle="dropdown">OUR SERVICES</a>
                        <ul class="dropdown-menu">
                            <li><a href="architectural design.html" class="dropdown-item">Architectural Design</a></li>
                            <li><a href="quantity survey.html" class="dropdown-item">Quantity Survey</a></li>
                            <li><a href="project mgt.html" class="dropdown-item">Project Management</a></li>
                            <li><a href="interior design.html" class="dropdown-item">Interior Design</a></li>
                            <li><a href="structural design.html" class="dropdown-item">Structural Design</a></li>
                            <li><a href="construction.html" class="dropdown-item">Construction</a></li>
                        </ul>
                    </li>
                    <li class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" role="button" data-bs-toggle="dropdown">PORTFOLIO</a>
                        <ul class="dropdown-menu">
                            <li><a href="portfolio.html" class="dropdown-item">All Projects</a></li>
                            <li><a href="#" class="dropdown-item">3D concepts</a></li>
                            <li><a href="#" class="dropdown-item">Maisonettes</a></li>
                            <li><a href="#" class="dropdown-item">Offices</a></li>
                            <li><a href="#" class="dropdown-item">Institutions</a></li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a href="blog.html" class="nav-link">BLOG</a>
                    </li>
                    <li class="nav-item">
                        <a href="contact.html" class="nav-link active" aria-current="page">CONTACT US</a>
                    </li>
                </ul>
          
                <!-- Search form -->
                <form class="d-flex" role="search" method="get" action="forms/search.php">
                    <input class="form-control" type="search" placeholder="Search" aria-label="Search">
                    <button class="border-0 bg-light" type="submit">
                    <span><i aria-hidden="true" class="fas fa-search"></i></span>
                    </button>
                </form>
            </div>
        </div>
    </nav>
</nav>

</body>