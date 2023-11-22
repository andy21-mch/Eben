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
    <link rel="stylesheet" href="./css/style.css">

    <title>Ebenezer Higher Institure of Science and Technology</title>
</head>

<body>
    <?php

    include 'header.php'

        ?>
    <!-- Hero Section for Mission -->
    <section class="hero" id="mission-hero">
        <div id="mission-carousel" class="carousel slide" data-bs-ride="carousel">

            <!-- Indicators/dots -->
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#mission-carousel" data-bs-slide-to="0" class="active"></button>
                <button type="button" data-bs-target="#mission-carousel" data-bs-slide-to="1"></button>
            </div>

            <!-- The slideshow/carousel -->
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <div class="carousel-background">
                        <img src="image/slider/slider_1.jpg" alt>
                        <div class="carousel-container">
                            <div class="carousel-content-container">
                                <h2>Our Mission</h2>
                                <p>At Ebenezer Christian University, our
                                    mission is to provide a transformative
                                    education
                                    rooted in Christian values. We strive to
                                    empower students to excel academically,
                                    grow
                                    spiritually, and positively impact their
                                    communities and the world.</p>
                                <div class="buttons">
                                    <a href="#courses" class="btn btn-success btn-lg">Explore
                                        Programs</a>
                                    <a href="application.php" class="btn btn-secondary btn-lg">Apply
                                        Now</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="carousel-background">
                        <img src="image/slider/slider_2.jpg" alt>
                        <div class="carousel-container">
                            <div class="carousel-content-container">
                                <h2>Fostering Faith and Excellence</h2>
                                <p>Our commitment is to foster a community
                                    where faith and academic excellence
                                    intersect.
                                    Through rigorous scholarship, spiritual
                                    formation, and community engagement, we
                                    prepare
                                    students to lead with integrity,
                                    compassion, and a commitment to social
                                    justice.</p>
                                <div class="buttons">
                                    <a href="#courses" class="btn btn-success btn-lg">Explore
                                        Programs</a>
                                    <a href="application.php" class="btn btn-secondary btn-lg">Apply
                                        Now</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Left and right controls/icons -->
                <button class="carousel-control-prev" type="button" data-bs-target="#mission-carousel"
                    data-bs-slide="prev">
                    <span class="carousel-control-prev-icon"></span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#mission-carousel"
                    data-bs-slide="next">
                    <span class="carousel-control-next-icon"></span>
                </button>
            </div>
        </div>
    </section>
    <!-- End Hero Section for Mission -->

    <?php

    include 'about-section.php';

    ?>

    <section class="about mt-5 mb-5">
        <div class="container-fluid">
            <div class="row mt-5 mb-5">
                <h2 class="text-center">Our Mission Statement</h2>
            </div>
            <div class="row">
                <div class="col-md-6 d-none d-lg-flex">
                    <img src="image/about/mission.jpg" class="img-fluid" alt="Mission Image">
                </div>
                <div class="col-md-6">
                    <div class="about-content">
                        <h2>Learn, Discover, Heal, Create—and Make the World Ever Better</h2>
                        <p>At EHIST, our mission is to inspire and empower individuals to learn, discover,
                            heal, create, and contribute to making the world a better place. We believe in the
                            transformative power of education and the boundless potential within each person.</p>
                        <p>Our commitment is to provide a nurturing environment where students can explore their
                            passions, embrace diversity, and develop the skills and knowledge needed to make a positive
                            impact on society. We strive to foster a culture of innovation, critical thinking, and
                            compassionate leadership.</p>
                        <p>With a focus on excellence in education, research, and community engagement, we aim to
                            instill values of integrity, curiosity, and social responsibility in our students. Together,
                            as a community of learners, educators, and changemakers, we aspire to create a future that
                            is brighter, more inclusive, and filled with possibilities.</p>
                    </div>
                </div>
            </div>

        </div>
    </section>

    <section class="choose">
        <div class="container">
            <div class="row mt-5 mb-5">
                <h2 class="text-center">Why Choose Us</h2>
            </div>
            <div class="row">
                <div class="col-md-4">
                    <div class="choose-item">
                        <img src="image/offer/profesionalTeacher.jpg" class="img-fluid" alt="Professional Tutors Image">
                        <div>
                            <h3>Professional Tutors</h3>
                            <p>Our dedicated team of professional tutors is committed to providing quality education and
                                personalized support to help students achieve their academic goals. With a wealth of
                                knowledge and experience, our tutors inspire and guide students on their learning
                                journey.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="choose-item">
                        <img src="image/offer/project_baced_study.jpg" class="img-fluid"
                            alt="Project Based Study Image">
                        <div>
                            <h3>Project Based Study</h3>
                            <p>Embrace a dynamic and engaging learning experience with our project-based study approach.
                                Students have the opportunity to apply theoretical knowledge to real-world scenarios,
                                fostering critical thinking, problem-solving skills, and a deeper understanding of their
                                subjects.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="choose-item">
                        <img src="image/offer/real-worl_development.jpg" class="img-fluid"
                            alt="Real World Development Image">
                        <div>
                            <h3>Real World Development</h3>
                            <p>Prepare for the challenges of the modern world with our focus on real-world development.
                                Our programs emphasize practical skills and experiential learning, ensuring that
                                students graduate with the tools and knowledge needed for success in their chosen
                                fields.</p>
                        </div>
                    </div>
                </div>
            </div>

        </div>
        </div>
    </section>

    <?php

    include 'footer.php';

    ?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"></script>

</body>

</html>