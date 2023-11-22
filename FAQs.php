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

    <section class="hero" id="hero">
        <div id="demo" class="carousel slide" data-bs-ride="carousel">

            <!-- Indicators/dots -->
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#demo" data-bs-slide-to="0" class="active"></button>
                <button type="button" data-bs-target="#demo" data-bs-slide-to="1"></button>
            </div>

            <!-- The slideshow/carousel -->
            <!-- The slideshow/carousel -->
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <div class="carousel-background">
                        <img src="image/slider/slider_1.jpg" alt>
                        <div class="carousel-container">
                            <div class="carousel-content-container">
                                <h2>Frequently Asked Questions (FAQs)</h2>
                                <p>Welcome to Ebenezer Higher Institure of Science and Technology, where we strive to provide answers to your most
                                    common questions. If you have any inquiries or need further clarification, feel free
                                    to explore our programs or start your application process.</p>
                                <div class="buttons">
                                    <a href="#courses" class="button-1">Explore Programs</a>
                                    <a href="application.php" class="button-2">Apply Now</a>
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
                                <h2>Self-Performing Expertise</h2>
                                <p>Discover the power of self-performing expertise at Ebenezer Higher Institure of Science and Technology. Our
                                    commitment to excellence ensures a learning environment where you can excel and
                                    achieve your goals. Explore our programs and start your journey with us today.</p>
                                <div class="buttons">
                                    <a href="#courses" class="button-1">Explore Programs</a>
                                    <a href="application.php" class="button-2">Apply Now</a>
                                </div>
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

    <?php

    include 'about-section.php';

    ?>

    <div class="row mt-5">
        <h2 class="text-center">Frequently Asked Questions</h2>
        <p class="text-center">Here are a series of most common questions
            that are commonly asked by customers</p>
    </div>

    <section class="d-flex flex-column justify-content-center align-items-center">
        <div class="accordion accordion-flush w-75 text-primary mt-3" id="accordionFlushExample">
            <!-- FAQ 1 -->
            <div class="accordion-item">
                <h2 class="accordion-header">
                    <button class="accordion-button collapsed text-primary" type="button" data-bs-toggle="collapse"
                        data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
                        <i class="bi bi-question-circle"></i> Where is the
                        school located?
                    </button>
                </h2>
                <div id="flush-collapseOne" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
                    <div class="accordion-body">Ebenezer Higher Institure of Science and Technology is
                        located in the heart of Bamenda on Sonac Street. Our
                        campus provides a
                        serene and conducive environment for academic
                        excellence.</div>
                </div>
            </div>

            <!-- FAQ 2 -->
            <div class="accordion-item">
                <h2 class="accordion-header">
                    <button class="accordion-button collapsed text-primary" type="button" data-bs-toggle="collapse"
                        data-bs-target="#flush-collapseTwo" aria-expanded="false" aria-controls="flush-collapseTwo">
                        <i class="bi bi-question-circle"></i> Do they offer
                        MSc programs?
                    </button>
                </h2>
                <div id="flush-collapseTwo" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
                    <div class="accordion-body">Yes, Ebenezer Higher Institure of Science and Technology
                        offers a range of MSc programs designed to meet the
                        evolving needs of
                        students in various fields. Explore our academic
                        offerings to find the perfect fit for your career
                        goals.</div>
                </div>
            </div>

            <!-- FAQ 3 -->
            <div class="accordion-item">
                <h2 class="accordion-header">
                    <button class="accordion-button collapsed text-primary" type="button" data-bs-toggle="collapse"
                        data-bs-target="#flush-collapseThree" aria-expanded="false" aria-controls="flush-collapseThree">
                        <i class="bi bi-question-circle"></i> Do they offer
                        HND programs?
                    </button>
                </h2>
                <div id="flush-collapseThree" class="accordion-collapse collapse"
                    data-bs-parent="#accordionFlushExample">
                    <div class="accordion-body">Ebenezer Higher Institure of Science and Technology is
                        committed to providing diverse educational
                        opportunities. Yes, we offer
                        Higher National Diploma (HND) programs in
                        collaboration with recognized accrediting bodies.</div>
                </div>
            </div>

            <!-- Additional FAQs -->
            <div class="accordion-item">
                <h2 class="accordion-header">
                    <button class="accordion-button collapsed text-primary" type="button" data-bs-toggle="collapse"
                        data-bs-target="#flush-collapseFour" aria-expanded="false" aria-controls="flush-collapseFour">
                        <i class="bi bi-question-circle"></i> What
                        extracurricular activities are available?
                    </button>
                </h2>
                <div id="flush-collapseFour" class="accordion-collapse collapse"
                    data-bs-parent="#accordionFlushExample">
                    <div class="accordion-body">At Ebenezer Higher Institure of Science and Technology, we
                        encourage students to engage in a variety of
                        extracurricular
                        activities, including sports, cultural events, and
                        clubs. These activities contribute to a well-rounded
                        educational
                        experience.</div>
                </div>
            </div>

            <div class="accordion-item">
                <h2 class="accordion-header">
                    <button class="accordion-button collapsed text-primary" type="button" data-bs-toggle="collapse"
                        data-bs-target="#flush-collapseFive" aria-expanded="false" aria-controls="flush-collapseFive">
                        <i class="bi bi-question-circle"></i> How can I
                        apply for admission?
                    </button>
                </h2>
                <div id="flush-collapseFive" class="accordion-collapse collapse"
                    data-bs-parent="#accordionFlushExample">
                    <div class="accordion-body">To apply for admission to
                        Ebenezer Higher Institure of Science and Technology, visit our official website and
                        navigate to the
                        admissions section. Follow the outlined steps and
                        submit the required documents for consideration. Our
                        admissions
                        team is ready to assist you throughout the process.</div>
                </div>
            </div>
        </div>
    </section>
    <!-- Footer -->
    <?php

include 'footer.php'
    ?>

</body>

</html>