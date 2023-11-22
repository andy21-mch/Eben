<!DOCTYPE html>
<?php
if (session_status() !== PHP_SESSION_ACTIVE) {
    session_start();
}

require './Connection.php';
include './Blog.php';
include './User.php';
include './Projects.php';
include './Categories.php';

$post = new Blog();
$user = new User();
$project = new Projects();
$category = new Categories();

if (!isset($_SESSION['username'])) {
    // get the ip address of the user
    $ip = $_SERVER['REMOTE_ADDR'];
    // get the user agent of the user
    $user_agent = $_SERVER['HTTP_USER_AGENT'];
    // get the current time
    $time = date("Y-m-d H:i:s");
    // get the current page
    $page = $_SERVER['PHP_SELF'];
    header("Location: ./unauthorized?ip=$ip&user_agent=$user_agent&time=$time");
}
?>

<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
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

    <style>
        .bg-blue {
            background-color: red;
        }
    </style>
</head>

<body class="bg-light">
    <!-- Navbar -->
    <header>
        <!-- Location and Phone Navigation Bar -->
        <nav class="navbar navbar-expand-lg bg-white">
            <div class="container">
                <a class="navbar-brand text-black" href="#">
                    <i class="fas fa-map-marker-alt"></i> Bamenda - Sonac
                    Street
                </a>
                <a class="navbar-brand text-black" href="#">
                    <i class="fas fa-phone"></i> +237681610898
                </a>
            </div>
        </nav>

        <!-- Logo Navigation Bar -->
        <nav class="navbar navbar-expand-lg bg-blue">
            <div class="container">
                <a class="navbar-brand" href="#"><img src="https://andy21-mch.github.io/Eben/image/logo/logo.png"
                        height="30" width="140%" alt></a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#collapsibleNavbar2">
                    <span class="navbar-toggler-icon">
                        <p style="border-bottom: 2px solid #fff;margin-bottom: .4rem;"></p>
                        <p style="border-bottom: 2px solid #fff;margin-bottom: .4rem;"></p>
                        <p style="border-bottom: 2px solid #fff;margin-bottom: .4rem;"></p>
                    </span>
                </button>
                <div class="collapse navbar-collapse d-sm-flex flex-row-reverse d-sm-block" id="collapsibleNavbar2">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link" href="index.php">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="blog.php">Blog</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="contact.php">Contact Us</a>
                        </li>
                    </ul>
                    <?php if (isset($_SESSION['username'])): ?>
                        <span class="h4 navbar-text text-warning">
                            Logged in as
                            <?php echo $_SESSION['username']; ?> (Admin Panel - Be careful!)
                        </span>
                    <?php endif; ?>
                </div>
            </div>
        </nav>
    </header>

    <div class="container mt-4">
        <div class="row justify-content-center">
            <div class="col-md-11">
                <div class="card p-5">
                    <h2 class="card-title text-center mb-4">Add a New Blog Post</h2>
                    <form action="useraction.php" method="post" enctype="multipart/form-data">
                        <div class="row mb-3">
                            <label for="title" class="col-sm-3 col-form-label"><i class="bi bi-card-heading"></i>
                                Title</label>
                            <div class="col-sm-9">
                                <input type="text" name="title" id="title" class="form-control"
                                    placeholder="Type product name" required="">
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="content" class="col-sm-3 col-form-label"><i class="bi bi-file-text"></i>
                                Blog Content</label>
                            <div class="col-sm-9">
                                <textarea id="content" name="content" rows="8" class="form-control"
                                    placeholder="Your content here"></textarea>
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="category" class="col-sm-3 col-form-label"><i class="bi bi-tags"></i>
                                Category</label>
                            <div class="col-sm-9">
                                <select name="categories[]" id="categories" class="form-select" multiple required>
                                    <?php foreach ($category->get_categories() as $row): ?>
                                        <option value="<?php echo $row['id']; ?>">
                                            <?php echo $row['cat_title']; ?>
                                        </option>
                                    <?php endforeach; ?>
                                </select>
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="url" class="col-sm-3 col-form-label"><i class="bi bi-link"></i> Video
                                Url</label>
                            <div class="col-sm-9">
                                <input type="link" name="url" id="url" class="form-control"
                                    placeholder="Type product name" required="">
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="image" class="col-sm-3 col-form-label"><i class="bi bi-file-image"></i>
                                Image</label>
                            <div class="col-sm-9">
                                <input type="file" class="form-control" id="image" name="image" required>
                            </div>
                        </div>

                        <div class="row mb-3">
                            <div class="col-sm-12 text-center">
                                <button type="submit" name="blog-submit" class="btn btn-success">
                                    <i class="bi bi-plus"></i> Add Blog Post
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>

</html>