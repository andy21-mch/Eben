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

    <title>Nursing Program</title>
</head>

<body>
    <?php

    include '../header.php'

        ?>

    <section class="hero" id="mission-hero">
        <div id="mission-carousel" class="carousel slide" data-bs-ride="carousel">

            <!-- Indicators/dots -->
            <div class="carousel-indicators ">
                <button type="button" data-bs-target="#mission-carousel" data-bs-slide-to="0" class="active"></button>
                <button type="button" data-bs-target="#mission-carousel" data-bs-slide-to="1"></button>
            </div>

            <!-- The slideshow/carousel -->
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <div class="carousel-background">
                        <img src="../image/slider/slider_1.jpg" alt>
                        <div class="carousel-container">
                            <div class="carousel-content-container">
                                <h2>Nursing Program</h2>
                                <p>Prepare for a rewarding career in healthcare with our Nursing program. Gain the
                                    knowledge and
                                    skills needed to provide compassionate and quality patient care.</p>
                                <div class="buttons">
                                    <a href="../contact.php" class="btn btn-success btn-lg">Learn More</a>
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
                    <img src="../image/courses/nursing.png" class="img-fluid" alt="Nursing Image">
                </div>
                <div class="col-lg-6">
                    <div class="single-courses border p-5">
                        <h2>Nursing Program</h2>
                        <p>Our Nursing program prepares students for rewarding careers in healthcare. With a focus on
                            patient care, medical knowledge, and practical skills, our program equips students to make a
                            positive impact in the field of nursing.</p>
                        <h3>Degrees Offered:</h3>
                        <ul>
                            <li>HND (Higher National Diploma) in Nursing</li>
                            <li>BSc (Bachelor of Science) in Nursing</li>
                            <li>MSc (Master of Science) in Nursing</li>
                        </ul>
                        <p>Explore the diverse aspects of nursing, from foundational principles to advanced specialties.
                            Our
                            curriculum is designed to provide a comprehensive education, preparing students for various
                            roles in healthcare settings.</p>
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