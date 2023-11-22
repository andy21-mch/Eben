<?php

if (session_status() !== PHP_SESSION_ACTIVE) {
  session_start();
}

?>
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
      <div class="carousel-inner">
        <div class="carousel-item active">
          <div class="carousel-background">
            <img src="image/slider/slider_1.jpg" alt="">
            <div class="carousel-container">
              <div class="carousel-content-container">
                <h2>Unlock Your Potential</h2>
                <p>Explore our HND program and take the next step towards a successful career.</p>
                <div class="d-flex justify-content-center mt-4">
                  <a href="application.php" class="btn btn-success me-3">Apply Now</a>
                  <a href="contact.php" class="btn btn-outline-secondary me-3">Contact Us</a>

                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="carousel-item">
          <div class="carousel-background">
            <img src="image/slider/slier_2.jpg" alt="">
            <div class="carousel-container">
              <div class="carousel-content-container">
                <h2>Empower Yourself</h2>
                <p>Join our HND program to gain practical expertise and excel in your chosen field.</p>
                <div class="d-flex justify-content-center mt-4">
                  <a href="application.php" class="btn btn-success me-3">Apply Now</a>
                  <a href="contact.php" class="btn btn-outline-secondary me-3">Contact Us</a>

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


  <section class="contact mt-5 mb-5" id="contact">
    <div class="container">

      <?php
      // Check if there is a success message
      if (isset($_SESSION['message'])) {
        echo '<div class="alert alert-success" role="alert">' . $_SESSION['message'] . '<br> Thank you for your application! We will review it and get back to you shortly. If you have not done so already, please submit the following documents to our office:<br>
        - GCE A Level certificate<br>
        - Photocopy of ID<br>
        - Transcript or other relevant documents<br>
        You may also drop by our office to submit the documents in person. We look forward to assisting you on your educational journey.</div>';
        // Clear the message after displaying it
        unset($_SESSION['message']);
      }
      // Check if there is an error message
      if (isset($_SESSION['error'])) {
        echo '<div class="alert alert-danger" role="alert">' . $_SESSION['error'] . '</div>';
        // Clear the error after displaying it
        unset($_SESSION['error']);
      }
      ?>

      <h2 class="text-center">Apply Now</h2>

      <form action="src/backend/useraction.php" method="post" class="mt-4">
        <div class="mb-3">
          <label for="program" class="form-label">
            <i class="bi bi-book"></i> Select Program:
          </label>
          <select class="form-select" name="program" id="program">
            <option value="nursing">Nursing</option>
            <option value="computer_engineering">Computer Engineering</option>
            <option value="medical_lab_science">Medical Laboratory Science</option>
            <option value="business_management">Business and Management</option>
            <!-- Add more options as needed -->
          </select>
        </div>

        <!-- Your Name -->
        <!-- Your Name -->
        <div class="row">
          <div class="col-md-6 mb-3">
            <label for="first_name" class="form-label">
              <i class="bi bi-person"></i> First Name:
            </label>
            <input type="text" class="form-control border-success border-1" name="first_name" id="first_name" value="">
          </div>

          <div class="col-md-6 mb-3">
            <label for="last_name" class="form-label">
              <i class="bi bi-person"></i> Last Name:
            </label>
            <input type="text" class="form-control border-success border-1" name="last_name" id="last_name" value="">
          </div>
        </div>



        <div class="mb-3">
          <label for="email" class="form-label">
            <i class="bi bi-envelope"></i> Your Email:
          </label>
          <input type="email" class="form-control border-success border-1" name="email" id="email" value="">
        </div>

        <div class="mb-3">
          <label for="phone" class="form-label">
            <i class="bi bi-phone"></i> Your Phone Number:
          </label>
          <input type="tel" class="form-control border-success border-1" name="phone" id="phone" value="">
        </div>

        <div class="mb-3">
          <label for="degree" class="form-label">
            <i class="bi bi-award"></i> Select Degree:
          </label>
          <select class="form-select" name="degree" id="degree">
            <option value="hnd">HND</option>
            <option value="bsc">BSc</option>
            <option value="msc">MSc</option>
            <!-- Add more options as needed -->
          </select>
        </div>

        <div class="mb-3">
          <label for="gender" class="form-label">
            <i class="bi bi-gender-male"></i> Select Gender:
          </label>
          <select class="form-select" name="gender" id="gender">
            <option value="male">Male</option>
            <option value="female">Female</option>
            <!-- Add more options as needed -->
          </select>
        </div>

        <div class="mb-3">
          <label for="comments" class="form-label">
            <i class="bi bi-chat-dots"></i> Additional Comments:
          </label>
          <textarea class="form-control border-success border-1" name="comment" id="comments" rows="4"></textarea>
        </div>

        <button type="submit" class="btn form-control btn-success btn-block" name="application-submit">
          <i class="bi bi-check-circle"></i> Submit Application
        </button>

      </form>
    </div>
  </section>



  </div>
  <!-- Footer -->
  <?php

  include 'footer.php' ?>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"></script>
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
</body>

</html>