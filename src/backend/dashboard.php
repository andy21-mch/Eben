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
        <!-- Navbar -->
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
                            <a class="nav-link" href="index.html">Home</a>
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

    <!-- Content Section -->
    <div class="container mt-4">
        <div class="row">
            <!-- Blog Card -->
            <div class="col-md-4 mb-4">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Blogs</h5>
                        <ul class="list-group">
                            <li class="list-group-item d-flex justify-content-between align-items-center">
                                Total Blogs
                                <span class="badge bg-primary">
                                    <?php echo count($post->getAllPosts()) ?>
                                </span>
                            </li>
                            <li class="list-group-item d-flex justify-content-between align-items-center">
                                Total Comments
                                <span class="badge bg-primary">
                                    <?php echo count($post->getAllPosts()) ?>
                                </span>
                            </li>
                        </ul>
                        <div class="mt-3">
                            <a href="addblog.php" class="btn btn-success">Add Blog</a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Categories Card -->
            <div class="col-md-4 mb-4">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Categories</h5>
                        <ul class="list-group">
                            <li class="list-group-item d-flex justify-content-between align-items-center">
                                Total Categories
                                <span class="badge bg-primary">
                                    <?php echo count($category->get_categories()) ?>
                                </span>
                            </li>
                            <li class="list-group-item d-flex justify-content-between align-items-center">
                                Total Categories
                                <span class="badge bg-primary">
                                    <?php echo count($category->get_categories()) ?>
                                </span>
                            </li>
                        </ul>
                        <div class="mt-3">
                            <a href="#" class="btn btn-success">Create New</a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Messages Card -->
            <div class="col-md-4 mb-4">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Messages</h5>
                        <ul class="list-group">
                            <li class="list-group-item d-flex justify-content-between align-items-center">
                                Total Messages
                                <span class="badge bg-primary">
                                    <?php echo count($user->getMessages()) ?>
                                </span>
                            </li>
                            <li class="list-group-item d-flex justify-content-between align-items-center">
                                Total Messages
                                <span class="badge bg-primary">
                                    <?php echo count($user->getMessages()) ?>
                                </span>
                            </li>
                        </ul>
                        <div class="mt-3">
                            <a href="#" class="btn btn-info">View Messages</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Actions Card -->
        <div class="row mt-4">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Actions</h5>
                        <div class="row">
                            <!-- Manage Categories -->
                            <div class="col-md-3">
                                <h6>Manage Categories</h6>
                                <div class="d-grid gap-2">
                                    <a href="#" class="btn btn-outline-secondary">
                                        <i class="bi bi-plus"></i> Add Category
                                    </a>
                                    <a href="#" class="btn btn-outline-secondary">
                                        <i class="bi bi-eye"></i> View Categories
                                    </a>
                                    <!-- Add more category actions as needed -->
                                </div>
                            </div>

                            <!-- Manage Blogs -->
                            <div class="col-md-3">
                                <h6>Manage Blogs</h6>
                                <div class="d-grid gap-2">
                                    <a href="#" class="btn btn-outline-secondary">
                                        <i class="bi bi-plus"></i> Add Blog
                                    </a>
                                    <a href="all-posts.php" class="btn btn-outline-secondary">
                                        <i class="bi bi-eye"></i> View Blogs
                                    </a>
                                    <!-- Add more blog actions as needed -->
                                </div>
                            </div>

                            <!-- Manage Comments -->
                            <div class="col-md-3">
                                <h6>Manage Comments</h6>
                                <div class="d-grid gap-2">
                                    <a href="#" class="btn btn-outline-secondary">
                                        <i class="bi bi-plus"></i> Add Comment
                                    </a>
                                    <a href="#" class="btn btn-outline-secondary">
                                        <i class="bi bi-eye"></i> View Comments
                                    </a>
                                    <!-- Add more comment actions as needed -->
                                </div>
                            </div>

                            <!-- Manage Messages -->
                            <div class="col-md-3">
                                <h6>Manage Messages</h6>
                                <div class="d-grid gap-2">
                                    <a href="#" class="btn btn-outline-secondary">
                                        <i class="bi bi-plus"></i> Add Message
                                    </a>
                                    <a href="all-messages.php" class="btn btn-outline-secondary">
                                        <i class="bi bi-eye"></i> View Messages
                                    </a>
                                    <!-- Add more message actions as needed -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <!-- General Actions Buttons -->
        <div class="row mt-4">
            <div class="col-md-12">
                <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                    <a href="#" class="btn btn-danger me-md-2">Logout</a>
                    <!-- Add more general action buttons as needed -->
                </div>
            </div>
        </div>
    </div>
    <!-- End Content Section -->

    <!-- Bootstrap JS and Popper.js -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>