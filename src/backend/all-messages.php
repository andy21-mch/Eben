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

$messages = $user->getMessages();

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

<body class="">
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
    <div class="p-4 sm:ml-64 pt-20">
        <div class="p-4 border-2 border-gray-800 border-dashed rounded-lg dark:border-gray-700">


            <div class="container mt-5">
                <div class="">
                    <?php if (isset($_GET['success'])) { ?>
                        <span class="alert alert-success">
                            <?php
                            echo $_GET['success'];
                            unset($_GET['success']);
                            ?>
                        </span>
                    <?php } ?>

                    <?php if (isset($_GET['error'])) { ?>
                        <span class="alert alert-danger">
                            <?php
                            echo $_GET['error'];
                            unset($_GET['error']);
                            ?>
                        </span>
                    <?php } ?>
                </div>
            </div>

            <style>
                .accordion-card {
                    color: gray;
                }

                .accordion-card .card-header {
                    background-color: white;
                    /* Shade of green */
                    border: none;
                }

                .accordion-card .btn-link {
                    color: blue;
                }
            </style>


            <div class="accordion accordion-card" id="messageAccordion">

                <h1>Messages</h1>
                <?php
                $perPage = 5; // Messages per page
                $totalMessages = count($messages);
                $totalPages = ceil($totalMessages / $perPage);

                // Get the current page from the query string
                $currentPage = isset($_GET['page']) ? (int) $_GET['page'] : 1;
                $startIndex = ($currentPage - 1) * $perPage;
                $endIndex = min($startIndex + $perPage, $totalMessages);

                for ($i = $startIndex; $i < $endIndex; $i++): ?>
                    <div class="card mb-3">
                        <div class="card-header border-2" id="messageHeading<?php echo $i; ?>">
                            <h2 class="mb-0">
                                <button class="btn btn-link text-decoration-none" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#messageCollapse<?php echo $i; ?>" aria-expanded="true"
                                    aria-controls="messageCollapse<?php echo $i; ?>">
                                    <i class="fas fa-chevron-circle-down me-2"></i>
                                    <strong>
                                        <?php echo $messages[$i]['name']; ?>
                                    </strong>
                                </button>
                            </h2>
                            <p class="small text-gray">
                                <?php echo $messages[$i]['email']; ?>
                            </p>
                        </div>

                        <div id="messageCollapse<?php echo $i; ?>" class="collapse"
                            aria-labelledby="messageHeading<?php echo $i; ?>" data-bs-parent="#messageAccordion">
                            <div class="card-body">
                                <p class="mb-2"><strong>Email:</strong>
                                    <?php echo $messages[$i]['email']; ?>
                                </p>
                                <p class="mb-2"><strong>Message:</strong>
                                    <?php echo $messages[$i]['message']; ?>
                                </p>
                                <div class="d-flex justify-content-end">
                                    <a href="#" class="btn btn-success me-2">
                                        <i class="far fa-eye"></i> View
                                    </a>
                                    <a href="#" class="btn btn-danger">
                                        <i class="far fa-trash-alt"></i> Delete
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php endfor; ?>

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
            </div>


        </div>
    </div>

    <a class="btn btn-success m-3" style="width: 200px" href="./dashboard.php">Dashboard</a>
    </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/js/all.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.8.1/flowbite.min.js"></script>

</body>

</html>