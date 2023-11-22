<?php

include 'src/backend/User.php';
include 'src/backend/Blog.php';
$blogpost = new Blog();
$user = new User();
$posts = $blogpost->getAllPosts();

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

    <style>
        .fixed-image {
            max-width: 100%;
            /* Ensures the image doesn't exceed its parent container */
            height: 400px;
            /* Allows the height to adjust proportionally based on the width */
            width: 400px;
            /* Set your desired width */
            max-height: 300px;
            /* Set your maximum desired height */
            object-fit: cover;


        }


        .about-content {
            padding: 15px;
            background-color: #fff;
            /* Set the initial background color */
            transition: background-color 0.3s ease, box-shadow 0.3s ease;
            /* Add smooth transition */
        }

        .img-container {
            overflow: hidden;
            /* Ensure the image doesn't overflow */
        }

        .img-container img {
            transition: transform 0.5s ease;
            /* Add smooth transition for the image */
        }

        .img-container:hover img {
            transform: scale(1.1);
            /* Zoom in by 10% on hover */
        }

        .about-content:hover {
            background-color: #f4f4f4;
            /* Change the background color on hover */
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            /* Add a box shadow on hover */
        }
    </style>
    <link rel="stylesheet" href="css/style.css">

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
                                <h2>Explore Our Blog</h2>
                                <p>Discover the latest insights, news, and stories in our blog. Stay informed and
                                    engaged
                                    with our
                                    community.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="carousel-background">
                        <img src="image/slider/slier_2.jpg" alt="">
                        <div class="carousel-container">
                            <div class="carousel-content-container">
                                <h2>Dive into Knowledge</h2>
                                <p>Immerse yourself in a world of knowledge and information. Our blog is a source of
                                    valuable insights
                                    and updates.</p>
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


    <section class="about mt-5" style="font-family: 'Rubik',sans-serif;">
        <div class="container-fluid">
            <div class="row">
                <h2 class="text-center" style="font-family: 'Rubik', sans-serif;">Our Recent Posts</h2>
            </div>


            <div class="row mt-2 p-5">
                <?php if (count($posts) > 0) {
                    foreach ($posts as $post) { ?>
                        <div class="col-sm-6 col-md-6 col-lg-4">
                            <div class="img-container">
                                <img src="<?php echo 'src/images/' . $post['image']; ?>" class="img-fluid fixed-image">
                            </div>
                            <div class="about-content">
                                <h3>
                                    <?php echo $post['title']; ?>
                                </h3>
                                <span class="text-secondary">
                                    <?php echo $user->getUserNameById($post['userid']); ?>
                                </span>
                                <p><i class="bi bi-alarm" style="color: #336233;"></i> 30 Minutes ago</p>
                                <p class="text-justify">
                                    <?php echo substr($post['content'], 0, 200) . '...'; ?>
                                </p>
                                <span><i class="fa fa-calendar text-success"></i>
                                    <?php echo $post['date']; ?>
                                </span>

                                <div class="buttons">
                                    <form action="src/backend/useraction.php" method="GET">
                                        <input type="hidden" value="<?php echo $post['slug']; ?>" name="slug">
                                        <button name='blog-single' class="button-3" type="submit">Read More <i
                                                class="bi bi-arrow-right"></i>
                                        </button>

                                    </form>
                                </div>
                            </div>
                        </div>
                    <?php }
                } ?>
            </div>
        </div>
    </section>

    <?php

    include 'footer.php'
        ?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"></script>

</body>

</html>