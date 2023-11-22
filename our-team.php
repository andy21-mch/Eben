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
            <img src="image/slider/slider_1.jpg" alt>
            <div class="carousel-container">
              <div class="carousel-content-container">
                <h2>Our Team</h2>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.
                  Deleniti quidem sint minus
                  dolorum voluptates vitae suscipit molestiae, ipsam deserunt
                  labore tenetur iure nemo
                  numquam esse corporis molestias veritatis libero facere.</p>
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
            <img src="image/slider/slier_2.jpg" alt>
            <div class="carousel-container">
              <div class="carousel-content-container">
                <h2>Self Preform Expertise</h2>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.
                  Deleniti quidem sint minus
                  dolorum voluptates vitae suscipit molestiae, ipsam deserunt
                  labore tenetur iure nemo
                  numquam esse corporis molestias veritatis libero facere.</p>

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
        <button class="carousel-control-prev" type="button" data-bs-target="#demo" data-bs-slide="prev">
          <span class="carousel-control-prev-icon"></span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#demo" data-bs-slide="next">
          <span class="carousel-control-next-icon"></span>
        </button>
      </div>
    </div>
  </section>

  <section class="about mt-5 mb-5">
    <div class="container-fluid">
      <div class="row mt-5 mb-5">
        <h2 class="text-center">About Us</h2>
      </div>
      <div class="row">
        <div class="col-md-6 d-none d-lg-flex">
          <img src="image/about/about.jpg" class="img-fluid">
        </div>
        <div class="col-md-6">
          <div class="about-content">
            <h2>Welcome to Ebenezer Higher Institure of Science and Technology</h2>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.
              Recusandae iste, atque magnam
              molestiae vel tempore. Ipsum, illum magni quaerat recusandae
              placeat eveniet impedit,
              excepturi facilis voluptatum fugiat quam, esse suscipit!</p>
            <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit.
              Inventore, suscipit itaque ipsa,
              voluptas corrupti atque iure commodi porro ex aperiam ab maxime
              delectus, optio facilis
              deleniti deserunt est mollitia culpa? Aperiam quam voluptas
              dicta provident velit molestias?
              Blanditiis impedit aut nemo maxime earum quo nobis, id illum
              eum, deleniti tempora quam
              repudiandae omnis dolor non dolorum delectus, alias ducimus!
              Eos.</p>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Illum
              a cupiditate ex voluptas laudantium,
              quaerat incidunt minus tenetur cum eligendi?Lorem ipsum dolor
              sit amet.</p>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="team">
    <div class="container">
      <div class="row mt-5 mb-5">
        <h2 class="text-center">Our Team</h2>
      </div>
      <div class="row justify-content-evenly">
        <div class="col-sm-6 col-md-6 col-lg-4">
          <div class="img-fluid">
            <img src="image/our team/chancellor.jpg" width="100%" height="320">
          </div>
          <div class="team-info mt-4">
            <h4>Dr. Mbi epse Ojong Alice</h4>
            <p>Director</p>
          </div>
        </div>
        <div class="col-sm-6 col-md-6 col-lg-4">
          <div class="img-fluid">
            <img src="image/our team/pro-chancellor.jpg" width="100%" height="320">
          </div>
          <div class="team-info mt-4">
            <h4>Dr. Joshua Crawford(PhD)</h4>
            <p>Pro Chancellor</p>
          </div>
        </div>
        <div class="col-sm-6 col-md-6 col-lg-4">
          <div class="img-fluid">
            <img src="image/our team/vice-chancellor.jpg" width="100%" height="320">
          </div>
          <div class="team-info mt-4">
            <h4>Dr. Jamal Murray(PhD)</h4>
            <p>Vice Chancellor</p>
          </div>
        </div>
        <div class="col-sm-6 col-md-6 col-lg-4">
          <div class="img-fluid">
            <img src="image/our team/Registrar.jpg" width="100%" height="320">
          </div>
          <div class="team-info mt-4">
            <h4>Engr. Nfon Andrew T.(B.Eng)</h4>
            <p>HOD - Computer Department</p>
          </div>
        </div>
        <div class="col-sm-6 col-md-6 col-lg-4">
          <div class="img-fluid">
            <img src="image/our team/Dean.jpg" width="100%" height="320">
          </div>
          <div class="team-info mt-4">
            <h4>Dr. Howard Potts(PhD)</h4>
            <p>Dean</p>
          </div>
        </div>
        <div class="col-sm-6 col-md-6 col-lg-4">
          <div class="img-fluid">
            <img src="image/our team/vice-dean.jpeg" width="100%" height="320">
          </div>
          <div class="team-info mt-4">
            <h4>Dr. Laura Comfort(PhD)</h4>
            <p>Vice Dean</p>
          </div>
        </div>


      </div>
  </section>

  <?php

  include 'footer.php'; ?>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"></script>

</body>

</html>