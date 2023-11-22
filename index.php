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
    <link rel="stylesheet" href="css/style.css">

    <title>Ebenezer Institute</title>
</head>

<body>
    <?php

    include 'header.php'

        ?>

    <section class="hero" id="hero">
        <div id="demo" class="carousel slide" data-bs-ride="carousel">

            <!-- Indicators/dots -->
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#demo" data-bs-slide-to="0" class="active"></button>
                <button type="button" data-bs-target="#demo" data-bs-slide-to="1"></button>
            </div>

            <!-- The slideshow/carousel -->
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <div class="carousel-background">
                        <img src="image/slider/slider_1.jpg" alt>
                        <div class="carousel-container">
                            <div class="carousel-content-container">
                                <h2>Welcome to EHIST</h2>
                                <p>Your Gateway to Excellence in Higher
                                    Education</p>
                                <div class="buttons">
                                    <a href="#programs" class="btn btn-success rounded-5">Explore
                                        Our Programs</a>
                                    <a href="application.php" class="btn btn-secondary rounded-5">Apply
                                        Now</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="carousel-background">
                        <img src="image/slider/slier_2.jpg" alt>
                        <div class="carousel-container">
                            <div class="carousel-content-container">
                                <h2>Empowering Minds, Transforming Lives</h2>
                                <p>EHIST offers a diverse range of programs,
                                    including HNDs, degrees, and master's in
                                    computing, nursing,
                                    marketing, and more.</p>
                                <div class="buttons">
                                    <a href="#programs" class="btn btn-success rounded-5">Discover
                                        Our Offerings</a>
                                    <a href="application.php" class="btn btn-secondary rounded-5">Apply
                                        Now</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Left and right controls/icons -->
                <button class="carousel-control-prev" type="button" data-bs-target="#demo" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon"></span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#demo" data-bs-slide="next">
                    <span class="carousel-control-next-icon"></span>
                </button>
            </div>
        </div>
    </section>

    <section class="feature mt-5 mb-5" id="feature">
        <div class="container">
            <div class="row">
                <div class="col-sm-6 col-md-6 col-lg-3">
                    <div class="main-feature-box">
                        <div class="icon">
                            <i class="bi bi-house-door-fill"></i>
                        </div>
                        <h3>Professional Tutors</h3>
                        <p>EHIST has a team of professional tutors who are
                            experts in their fields. They are dedicated to
                            creating a supportive and engaging learning
                            environment for students. Through effective
                            teaching methods and real-world examples, our
                            tutors enhance the learning experience at EHIST.</p>
                    </div>
                </div>
                <div class="col-sm-6 col-md-6 col-lg-3">
                    <div class="main-feature-box">
                        <div class="icon">
                            <i class="bi bi-align-center"></i>
                        </div>
                        <h3>Quality Education</h3>
                        <p>EHIST offers a quality
                            education focused on practical learning and
                            personal development. Our faculty members are
                            experienced and passionate about sharing their
                            knowledge. Choose EHIST for a transformative
                            educational journey.</p>
                    </div>
                </div>
                <div class="col-sm-6 col-md-6 col-lg-3">
                    <div class="main-feature-box">
                        <div class="icon">
                            <i class="bi bi-award-fill"></i>
                        </div>
                        <h3>Always On Time</h3>
                        <p>EHIST emphasizes the value of punctuality and
                            maintains a culture of timeliness to optimize
                            learning opportunities. Schedules are carefully
                            planned and communicated, fostering discipline
                            and professionalism in students..</p>
                    </div>
                </div>
                <div class="col-sm-6 col-md-6 col-lg-3">
                    <div class="main-feature-box">
                        <div class="icon">
                            <i class="bi bi-bank2"></i>
                        </div>
                        <h3>We are Passionates</h3>
                        <p>EHIST is driven by passion. Our dedicated
                            educators and staff provide an exceptional
                            educational experience. Passionate instructors
                            create a dynamic learning environment, and
                            personalized attention supports student success.
                            EHIST encourages students to pursue their
                            passions through exploration and hands-on
                            projects.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <?php

    include 'about-section.php';

    ?>

    <section class="courses mt-5 mb-5" id="programs">
        <div class="container">
            <div class="row">
                <h2 class="text-center">Our Programs</h2>
            </div>
            <div class="row mt-5">
                <div class="col-lg-4">
                    <div class="single-courses border">
                        <img src="image/courses/civil.png" width="88px" class="img-fluid" alt>
                        <h3>Civil Engineering</h3>
                        <p>Lorem ipsum dolor sit amet consectetur
                            adipisicing elit. Voluptatum a dolores nobis
                            inventore
                            quis quaerat ex ratione hic voluptatem
                            repudiandae.</p>
                        <div class="buttons">
                            <a href class="button-3">Read More <i class="bi bi-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="single-courses border">
                        <img src="image/courses/software.png" width="88px" class="img-fluid" alt>
                        <h3>Software Engineering</h3>
                        <p>Lorem ipsum dolor sit amet consectetur
                            adipisicing elit. Voluptatum a dolores nobis
                            inventore
                            quis quaerat ex ratione hic voluptatem
                            repudiandae.</p>
                        <div class="buttons">
                            <a href class="button-3">Read More <i class="bi bi-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="single-courses border">
                        <img src="image/courses/cybersecurity.jpg" width="88px" class="img-fluid" alt>
                        <h3>Cyber Security</h3>
                        <p>Lorem ipsum dolor sit amet consectetur
                            adipisicing elit. Voluptatum a dolores nobis
                            inventore
                            quis quaerat ex ratione hic voluptatem
                            repudiandae.</p>
                        <div class="buttons">
                            <a href class="button-3">Read More <i class="bi bi-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="single-courses border">
                        <img src="image/courses/electrical_engineering.jpg" width="88px" class="img-fluid" alt>
                        <h3>Electrical Engineering</h3>
                        <p>Lorem ipsum dolor sit amet consectetur
                            adipisicing elit. Voluptatum a dolores nobis
                            inventore
                            quis quaerat ex ratione hic voluptatem
                            repudiandae.</p>
                        <div class="buttons">
                            <a href class="button-3">Read More <i class="bi bi-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="single-courses border">
                        <img src="image/courses/mechanical_engineering.png" width="88px" class="img-fluid" alt>
                        <h3>Mineral Engineering</h3>
                        <p>Lorem ipsum dolor sit amet consectetur
                            adipisicing elit. Voluptatum a dolores nobis
                            inventore
                            quis quaerat ex ratione hic voluptatem
                            repudiandae.</p>
                        <div class="buttons">
                            <a href class="button-3">Read More <i class="bi bi-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="single-courses border">
                        <img src="image/courses/network_4762713.png" width="88px" class="img-fluid" alt>
                        <h3>IT/Networking</h3>
                        <p>Lorem ipsum dolor sit amet consectetur
                            adipisicing elit. Voluptatum a dolores nobis
                            inventore
                            quis quaerat ex ratione hic voluptatem
                            repudiandae.</p>
                        <div class="buttons">
                            <a href class="button-3">Read More <i class="bi bi-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="testimonials">
        <div class="container">
            <div class="row">
                <h2 class="text-center">Testimonials</h2>
            </div>
            <div class="row mt-5">
                <div class="col-lg-4 text-center" id="testimony">
                    <i class="bi bi-quote" style=" color: #336233;"></i>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing
                        elit. Voluptatum a dolores nobis inventore
                        quis quaerat ex ratione hic voluptatem repudiandae.</p>
                    <div class="rating" style=" color: #336233;">
                        <i class="bi bi-star-fill"></i>
                        <i class="bi bi-star-fill"></i>
                        <i class="bi bi-star-fill"></i>
                        <i class="bi bi-star-fill"></i>
                        <i class="bi bi-star"></i>
                    </div>
                    <div class="image">
                        <img src="image/testimonials/portrait-african-american-man.jpg" class="img-fluid" alt>
                    </div>
                    <h4>Barry Bones</h4>
                </div>
                <div class="col-lg-4 text-center" id="testimony">
                    <i class="bi bi-quote" style=" color: #336233;"></i>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing
                        elit. Voluptatum a dolores nobis inventore
                        quis quaerat ex ratione hic voluptatem repudiandae.</p>
                    <div class="rating" style=" color: #336233;">
                        <i class="bi bi-star-fill"></i>
                        <i class="bi bi-star-fill"></i>
                        <i class="bi bi-star-fill"></i>
                        <i class="bi bi-star-fill"></i>
                        <i class="bi bi-star"></i>
                    </div>
                    <div class="image">
                        <img src="image/testimonials/close-up-portrait-smiling-black-girl-looking-relaxed-happy-standing-striped-blouse-against-white-background.jpg"
                            class="img-fluid" alt>
                    </div>
                    <h4>Nora Wells</h4>
                </div>
                <div class="col-lg-4 text-center" id="testimony">
                    <i class="bi bi-quote" style=" color: #336233;"></i>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing
                        elit. Voluptatum a dolores nobis inventore
                        quis quaerat ex ratione hic voluptatem repudiandae.</p>
                    <div class="rating" style=" color: #336233;">
                        <i class="bi bi-star-fill"></i>
                        <i class="bi bi-star-fill"></i>
                        <i class="bi bi-star-fill"></i>
                        <i class="bi bi-star-fill"></i>
                        <i class="bi bi-star"></i>
                    </div>
                    <div class="image">
                        <img src="image/testimonials/happiness-concept-beautiful-black-woman-with-afro-haircut.jpg"
                            class="img-fluid" alt>
                    </div>
                    <h4>James Comfort</h4>
                </div>

            </div>
        </div>
    </section>

    <?php

    include 'footer.php'
        ?>
        	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"></script>



</body>

</html>