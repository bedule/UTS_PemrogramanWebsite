<?Php

include_once("link/koneksi.php");
include_once("link/fungsi.php");

?>



<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Resume - Start Bootstrap Theme</title>
        <link rel="icon" type="image/x-icon" href="assets/img/favicon.ico" />
        <!-- Font Awesome icons (free version)-->
        <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
        <!-- Google fonts-->
        <link href="https://fonts.googleapis.com/css?family=Saira+Extra+Condensed:500,700" rel="stylesheet" type="text/css" />
        <link href="https://fonts.googleapis.com/css?family=Muli:400,400i,800,800i" rel="stylesheet" type="text/css" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="css/styles.css" rel="stylesheet" />
    </head>
    <body id="page-top">   

        <!-- Navigation-->
        <nav class="navbar navbar-expand-lg navbar-dark bg-primary fixed-top" id="sideNav">
            <a class="navbar-brand js-scroll-trigger" href="#page-top">
                <span class="d-block d-lg-none">Abdul Haris</span>
                <span class="d-none d-lg-block"><img class="img-fluid img-profile rounded-circle mx-auto mb-2" src="assets/img/haris2.png" alt="..." /></span>
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav">
                    <li class="nav-item"><a class="nav-link js-scroll-trigger" href=index.php>About</a></li>
                    <li class="nav-item"><a class="nav-link js-scroll-trigger" href=project.php>Project Completed</a></li>
                    <li class="nav-item"><a class="nav-link js-scroll-trigger" href=education.php>Education</a></li>
                    <li class="nav-item"><a class="nav-link js-scroll-trigger" href=skills.php>Skills</a></li>
                    <li class="nav-item"><a class="nav-link js-scroll-trigger" href=contact.php>Contact</a></li>
                </ul>
            </div>
        </nav>

        <!-- Page Content-->
        <div class="container-fluid p-0">

                    <!-- Skills-->
                    <section class="resume-section" id="skills">

                        <div class="resume-section-content">
                            <h2 class="mb-5"><?php 
                            
                            echo ambil_skills (1);
                            
                            ?></h2>
                            <div class="subheading mb-3">
                                <?php 
                                echo ambil_bioSkills (1);
                                ?></div>
                            <ul class="list-inline dev-icons">
                                <li class="list-inline-item"><i class="fab fa-python"></i></li>
                                <li class="list-inline-item"><i class="fab fa-java"></i></li>
                                <li class="list-inline-item"><i class="fab fa-node-js"></i></li>
                                <li class="list-inline-item"><i class="fab fa-html5"></i></li>
                                <li class="list-inline-item"><i class="fab fa-css3-alt"></i></li>
                                <li class="list-inline-item"><i class="fab fa-react"></i></li>
                                <li class="list-inline-item"><i class="fab fa-php"></i></li>

                            </ul>
                            
                        </div>
                    </section>

        </div>

        </div>
        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="js/scripts.js"></script>


    </body>
</html>
