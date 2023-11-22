<!DOCTYPE html>
<html lang="en">

    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- Bootstrap CSS -->
        <link
            href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css"
            rel="stylesheet"
            integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC"
            crossorigin="anonymous">

        <!-- Bootstrap JavaScript (bundle includes Popper) -->
        <script
            src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"></script>

        <link rel="stylesheet"
            href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"
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
            <div id="mission-carousel" class="carousel slide"
                data-bs-ride="carousel">

                <!-- Indicators/dots -->
                <div class="carousel-indicators">
                    <button type="button" data-bs-target="#mission-carousel"
                        data-bs-slide-to="0" class="active"></button>
                    <button type="button" data-bs-target="#mission-carousel"
                        data-bs-slide-to="1"></button>
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
                                        <a href="#courses"
                                            class="btn btn-success btn-lg">Explore
                                            Programs</a>
                                        <a href="application.php"
                                            class="btn btn-secondary btn-lg">Apply
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
                                        <a href="#courses"
                                            class="btn btn-success btn-lg">Explore
                                            Programs</a>
                                        <a href="application.php"
                                            class="btn btn-secondary btn-lg">Apply
                                            Now</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Left and right controls/icons -->
                    <button class="carousel-control-prev" type="button"
                        data-bs-target="#mission-carousel" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon"></span>
                    </button>
                    <button class="carousel-control-next" type="button"
                        data-bs-target="#mission-carousel" data-bs-slide="next">
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
                        <img src="image/about/mission.jpg" class="img-fluid">
                    </div>
                    <div class="col-md-6">
                        <div class="about-content">
                            <h2>Learn, Discover, Heal, Create—and Make the World
                                Ever Better</h2>
                            <p>Lorem ipsum dolor sit amet consectetur
                                adipisicing elit. Recusandae iste, atque magnam
                                molestiae vel tempore. Ipsum, illum magni
                                quaerat recusandae placeat eveniet impedit,
                                excepturi facilis voluptatum fugiat quam, esse
                                suscipit!</p>
                            <p>Lorem, ipsum dolor sit amet consectetur
                                adipisicing elit. Inventore, suscipit itaque
                                ipsa,
                                voluptas corrupti atque iure commodi porro ex
                                aperiam ab maxime delectus, optio facilis
                                deleniti deserunt est mollitia culpa? Aperiam
                                quam voluptas dicta provident velit molestias?
                                Blanditiis impedit aut nemo maxime earum quo
                                nobis, id illum eum, deleniti tempora quam
                                repudiandae omnis dolor non dolorum delectus,
                                alias ducimus! Eos.</p>
                            <p>Lorem ipsum dolor sit amet consectetur
                                adipisicing elit. Illum a cupiditate ex voluptas
                                laudantium,
                                quaerat incidunt minus tenetur cum
                                eligendi?Lorem ipsum dolor sit amet.</p>
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
                            <img src="image/offer/profesionalTeacher.jpg"
                                class="img-fluid">
                            <div>
                                <h3>Professional Tutors</h3>
                                <p>Lorem ipsum dolor sit amet consectetur
                                    adipisicing elit. Ipsa veniam deserunt quo
                                    reprehenderit nam soluta possimus
                                    dignissimos ab facilis dolor sapiente
                                    voluptatibus
                                    rerum modi quia, perferendis molestias
                                    temporibus minima quaerat!</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="choose-item">
                            <img src="image/offer/project_baced_study.jpg"
                                class="img-fluid">
                            <div>
                                <h3>Project Based Study</h3>
                                <p>Lorem ipsum dolor sit amet consectetur
                                    adipisicing elit. Ipsa veniam deserunt quo
                                    reprehenderit nam soluta possimus
                                    dignissimos ab facilis dolor sapiente
                                    voluptatibus
                                    rerum modi quia, perferendis molestias
                                    temporibus minima quaerat!</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="choose-item">
                            <img src="image/offer/real-worl_development.jpg"
                                class="img-fluid">
                            <div>
                                <h3>Real World Development</h3>
                                <p>Lorem ipsum dolor sit amet consectetur
                                    adipisicing elit. Ipsa veniam deserunt quo
                                    reprehenderit nam soluta possimus
                                    dignissimos ab facilis dolor sapiente
                                    voluptatibus
                                    rerum modi quia, perferendis molestias
                                    temporibus minima quaerat!</p>
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