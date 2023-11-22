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

    <div class="container-fluid bg-services text-center p-5 text-light-blue">
        <h1>Contact Us</h1>
    </div>

    <main id="main">

        <!-- ======= Contact Section ======= -->
        <section id="contact" class="contact">
            <div class="container">

                <div class="section-title">
                    <p>Our team is ready to implement your ideas.
                        Contact us now to discuss your roadmap!</p>
                </div>

                <div>
                    <iframe style="border:0; width: 100%; height: 270px;" <iframe
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3968.251265587062!2d10.15282317354269!3d5.960083129457146!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x105f16111a4e6d2f%3A0x234ffa30b0f47c16!2sEbenezer%20Education%20Group!5e0!3m2!1sen!2scm!4v1700594990303!5m2!1sen!2scm"
                        width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                        referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>

                <div class="row mt-5">

                    <div class="col-lg-4">
                        <div class="info">
                            <div class="address">
                                <i class="bi bi-geo-alt"></i>
                                <h4>Location:</h4>
                                <p>Sonac Street, Bamenda |
                                    NW | Cameroon</p>
                            </div>

                            <div class="email">
                                <i class="bi bi-envelope"></i>
                                <h4>Email:</h4>
                                <p>infon@ebenezer.com</p>
                            </div>

                            <div class="phone">
                                <i class="bi bi-phone"></i>
                                <h4>Call:</h4>
                                <p>(+237) 672 269 760</p>
                            </div>

                        </div>

                    </div>

                    <div class="col-lg-8 mt-5 mt-lg-0">

                        <form action="src/backend/useraction.php" method="POST">
                            <div class="row">
                                <div class="col-md-6 form-group">
                                    <input type="text" name="name" class="form-control" id="name"
                                        placeholder="Your Name" required>
                                </div>
                                <div class="col-md-6 form-group mt-3 mt-md-0">
                                    <input type="email" class="form-control" name="email" id="email"
                                        placeholder="Your Email" required>
                                </div>
                            </div>
                            <div class="form-group mt-3">
                                <input type="text" class="form-control" name="subject" id="subject"
                                    placeholder="Subject" required>
                            </div>
                            <div class="form-group mt-3">
                                <textarea class="form-control" name="message" rows="5" placeholder="Message"
                                    required></textarea>
                            </div>

                            <button type="submit" name="contact-submit" class="btn btn-success mt-3">Send
                                Message</button>
                        </form>

                        <div class="my-3">
                            <?php
                            if (isset($_SESSION['message'])) {
                                ?>
                                <div class="alert alert-success" role="alert">
                                    <?php echo $_SESSION['message']; ?>
                                    <?php unset($_SESSION['message']); ?>

                                </div>
                                <?php
                            }
                            if (isset($_SESSION['error'])) {
                                ?>
                                <div class="alert alert-danger" role="alert">
                                    <?php echo $_SESSION['error']; ?>
                                    <?php unset($_SESSION['error']); ?>
                                </div>
                                <?php
                            }
                            ?>

                        </div>

                    </div>

                </div>

            </div>
        </section><!-- End Contact Section -->

        <?php

        include 'footer.php'
            ?>
            	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"></script>

</body>

</html>