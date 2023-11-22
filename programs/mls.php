<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <!-- Bootstrap JavaScript (bundle includes Popper) -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"></script>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"
        integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- Bootstrap Icons -->
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.8.3/font/bootstrap-icons.min.css">

    <!-- Custom CSS -->
    <link rel="stylesheet" href="../css/style.css">


    <title>Computer Program</title>
</head>

<body>
    <?php

    include '../header.php'

        ?>

    <section class="hero" id="mission-hero">
        <div id="mission-carousel" class="carousel slide" data-bs-ride="carousel">



            <!-- The slideshow/carousel -->
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <div class="carousel-background">
                        <img src="../image/slider/slider_1.jpg" alt>
                        <div class="carousel-container">
                            <div class="carousel-content-container">
                                <h2>Medical Laboratory Science Program</h2>
                                <p>Join the field of Medical Laboratory Science and contribute to healthcare
                                    diagnostics. Develop expertise in laboratory techniques and analysis for accurate
                                    patient diagnosis.</p>
                                <div class="buttons">
                                    <a href="#medical-lab-details" class="btn btn-success btn-lg">Learn More</a>
                                    <a href="../application.php" class="btn btn-secondary btn-lg">Apply Now</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
        </div>
    </section>
    <section class="program-details mt-5 mb-5">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <img src="../image/courses/mechanical_engineering.jpg" class="img-fluid"
                        alt="Medical Laboratory Science Image">
                </div>
                <div class="col-lg-6">
                    <div class="single-courses border p-5">
                        <h2>Medical Laboratory Science Program</h2>
                        <p>Our Medical Laboratory Science program is designed to train professionals in the field of
                            diagnostic testing and analysis. With a strong emphasis on laboratory techniques and medical
                            technology, students gain the knowledge and skills needed for a successful career in
                            healthcare.</p>
                        <h3>Degrees Offered:</h3>
                        <ul>
                            <li>HND (Higher National Diploma) in Medical Laboratory Science</li>
                            <li>BSc (Bachelor of Science) in Medical Laboratory Science</li>
                            <li>MSc (Master of Science) in Medical Laboratory Science</li>
                        </ul>
                        <p>Explore the intricacies of laboratory science, including clinical chemistry, microbiology,
                            hematology, and more. Our program combines theoretical knowledge with hands-on experience,
                            preparing graduates to contribute to the field of medical diagnostics and research.</p>
                        <div class="buttons">
                            <a href="#" class="button-3">Apply Now <i class="bi bi-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <?php

    include '../footer.php';

    ?>

</body>

</html>