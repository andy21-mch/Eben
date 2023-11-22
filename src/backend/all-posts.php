<html lang="en">

<?php
session_start();

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

include 'Blog.php';
$blogpost = new Blog();
$posts = $blogpost->getAllPosts();


?>

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
            <div class="col-md-12">
                <div class="card">
                    <div class="card-body">
                        <div class="flex-container bg-primary">

                        </div>
                        <div class="mt-5">
                            <?php if (isset($_GET['success'])): ?>
                                <span class="alert alert-success">
                                    <?php echo $_GET['success'];
                                    unset($_GET['success']); ?>
                                </span>
                            <?php endif; ?>
                            <?php if (isset($_GET['error'])): ?>
                                <span class="alert alert-danger">
                                    <?php echo $_GET['error'];
                                    unset($_GET['error']); ?>
                                </span>
                            <?php endif; ?>
                        </div>
                        <table class="table table-striped mt-3">
                            <thead>
                                <tr>
                                    <th style="width: 20%">Title</th>
                                    <th style="width: 40%">Body</th>
                                    <th style="width: 15%">Created On</th>
                                    <th style="width: 10%">Created By</th>
                                    <th style="width: 10%">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                 if (is_array($posts)) {


                                $perPage = 5; // Messages per page
                                $totalMessages = count($posts);
                                $totalPages = ceil($totalMessages / $perPage);

                                // Get the current page from the query string
                                $currentPage = isset($_GET['page']) ? (int) $_GET['page'] : 1;
                                $startIndex = ($currentPage - 1) * $perPage;
                                $endIndex = min($startIndex + $perPage, $totalMessages);

                                for ($i = $startIndex; $i < $endIndex; $i++):
                                    ?>
                                    <tr>
                                        <td class="border">
                                            <?php echo $posts[$i]['title'] ?>
                                        </td>
                                        <td class="border">
                                            <?php echo $posts[$i]['content'] ?>
                                        </td>
                                        <td class="border">
                                            <?php echo $posts[$i]['date'] ?>
                                        </td>
                                        <td class="border">
                                            <?php
                                            $user = $blogpost->getUser($posts[$i]['userid']);
                                            echo $user['fullname'];
                                            ?>
                                        </td>
                                        <td class="border">
                                            <div class="flex flex-row space-x-4">
                                                <form class="w-1/4">
                                                    <a class="btn btn-success"
                                                        href="./edit-blog.php?id=<?php echo $posts[$i]['slug'] ?>">
                                                        <i class="fas fa-edit"></i>
                                                    </a>
                                                </form>
                                                <form action="./useraction.php" method="post" class="w-1/4">
                                                    <input type="hidden" value="<?php echo $posts[$i]['postid'] ?>"
                                                        name="id">
                                                    <button class="btn btn-danger" name="blog-delete">
                                                        <i class="fas fa-trash-alt"></i>
                                                    </button>
                                                </form>
                                            </div>
                                        </td>
                                    </tr>
                                <?php endfor; 
                                 }
                                else {
                                    echo $posts;
                                }
                                
                                ?>
                            </tbody>
                        </table>

                        <!-- Pagination -->
                        <nav class="mt-4" aria-label="Page navigation example">
                            <ul class="pagination justify-content-center">
                                <?php for ($page = 1; $page <= $totalPages; $page++): ?>
                                    <li class="page-item <?php echo ($page === $currentPage) ? 'active' : ''; ?>">
                                        <a class="page-link" href="?page=<?php echo $page; ?>">
                                            <?php echo $page; ?>
                                        </a>
                                    </li>
                                <?php endfor; ?>
                            </ul>
                        </nav>

                        <a class="rounded bg-blue-500 p-3" style="width: 250px" href="./addblog.php">Add Blog</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.8.1/flowbite.min.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js"
        integrity="sha384-SqSTkOB6vj5PSIS6rf6AQ8Fp+oD0bSv3pQvaJr6jzZlTu8+hxq5N9ZU+7y5Xb4I9"
        crossorigin="anonymous"></script>
</body>

</html>