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

  <title>Ebenezer University</title>
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


  <section class="form-section p-5 w-75 m-auto">
    <div class="text-center">
      <h2>Application Form</h2>
      <p>Apply with us.</p>
    </div>
    <form>
      <!-- 2 column grid layout with text inputs for the first and last names -->
      <div class="row mb-4">
        <div class="col">
          <div class="form-group">
            <label for="formFirstName"><i class="bi bi-person"></i> First Name</label>
            <input type="text" id="formFirstName" class="form-control border-success"
              placeholder="Enter your first name" />
          </div>
        </div>
        <div class="col">
          <div class="form-group">
            <label for="formLastName"><i class="bi bi-person"></i> Last Name</label>
            <input type="text" id="formLastName" class="form-control border-success"
              placeholder="Enter your last name" />
          </div>
        </div>
      </div>

      <!-- Gender and Address -->
      <div class="row mb-4">
        <div class="col">
          <label><i class="bi bi-gender-male"></i> Gender</label>
          <div class="form-check">
            <input type="radio" class="form-check-input" id="maleRadio" name="gender" value="male">
            <label class="form-check-label" for="maleRadio">Male</label>
          </div>
          <div class="form-check">
            <input type="radio" class="form-check-input" id="femaleRadio" name="gender" value="female">
            <label class="form-check-label" for="femaleRadio">Female</label>
          </div>
        </div>
        <div class="col">
          <div class="form-group">
            <label for="formAddress"><i class="bi bi-house-door"></i> Address</label>
            <input type="text" id="formAddress" class="form-control border-success" placeholder="Enter your address" />
          </div>
        </div>
      </div>

      <!-- Email and Phone -->
      <div class="row mb-4">
        <div class="col">
          <div class="form-group">
            <label for="formEmail"><i class="bi bi-envelope"></i> Email</label>
            <input type="email" id="formEmail" class="form-control border-success" placeholder="Enter your email" />
          </div>
        </div>
        <div class="col">
          <div class="form-group">
            <label for="formPhone"><i class="bi bi-phone"></i> Phone</label>
            <input type="text" id="formPhone" class="form-control border-success"
              placeholder="Enter your phone number" />
          </div>
        </div>
      </div>

      <!-- Department and Level -->
      <div class="row mb-4">
        <div class="col">
          <div class="form-group">
            <label for="formDepartment"><i class="bi bi-journal-code"></i>
              Select Department</label>
            <select name="department" class="w-100 border-success border-1 form-select" aria-label="Select Department">
              <option class="border-success border-1">Civil Engineering</option>
              <option class="border-success border-1">Cybersecurity</option>
              <option class="border-success border-1">Electrical Engineering</option>
              <option class="border-success border-1">IT/Networking</option>
              <option class="border-success border-1">Mineral
                Engineering(Mining)</option>
              <option class="border-success border-1">Software Engineering</option>
            </select>
          </div>
        </div>
        <div class="col">
          <div class="form-group">
            <label for="formLevel"><i class="bi bi-badge"></i> Select Level</label>
            <select name="level" class="w-100 border-success border-1 form-select" aria-label="Select Level">
              <option class="border-success border-1">Level 200(Year 1)</option>
              <option class="border-success border-1">Level 300(Year 2)</option>
              <option class="border-success border-1">Level 400(Year 3)</option>
              <option class="border-success border-1">Level 500(Year 4)</option>
              <option class="border-success border-1">Level 600(Year 5)</option>
            </select>
          </div>
        </div>
      </div>

      <!-- Checkbox -->
      <div class="form-check d-flex justify-content-center mb-4 mt-4">
        <input class="form-check-input border-success me-2" type="checkbox" value id="formAgreeCheck" checked />
        <label class="form-check-label" for="formAgreeCheck"> I agree to the
          Terms and Conditions </label>
      </div>

      <!-- Submit button -->
      <button type="submit" class="btn btn-success rounded-5 w-100 mb-4"><i class="bi bi-check-circle"></i>
        Submit</button>
    </form>
  </section>
  </div>
  <!-- Footer -->
  <?php

  include 'footer.php' ?>
  	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"></script>

</body>

</html>