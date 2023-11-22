<!DOCTYPE html>
<?php
if (session_status() !== PHP_SESSION_ACTIVE) {
    session_start();
}

require './Connection.php';
include './User.php';

include './Application.php';

$user = new User();
$application = new Application();

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
                <?php
                $perPage = 2; // Applications per page
                $totalApplications = $application->countApplications();

                // Get the current page from the query string
                $currentPage = isset($_GET['page']) ? (int) $_GET['page'] : 1;
                $perPage = 5; // Applications per page
                $totalPages = ceil($totalApplications / $perPage);

                $startIndex = ($currentPage - 1) * $perPage;
                $endIndex = min($startIndex + $perPage, $totalApplications);

                $applications = $application->getAllApplications($startIndex, $perPage);
                ?>
            



                <!-- Content Section -->
                <div class="container mt-4">
                    <h2 class="mb-4">Manage Applications</h2>

                    <!-- Accordions to display applications -->
                    <div class="accordion" id="applicationsAccordion">

                        <?php
                        // Adjust the loop based on your actual data model
                        foreach ($applications as $application):
                            ?>
                            <div class="accordion-item mt-2 p-3">
                                <h2 class="accordion-header" id="heading<?= $application['id'] ?>">
                                    <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapse<?= $application['id'] ?>" aria-expanded="true"
                                        aria-controls="collapse<?= $application['id'] ?>">
                                        <?= $application['first_name'] ?> -
                                        <?= $application['program'] ?>
                                    </button>
                                </h2>
                                <div id="collapse<?= $application['id'] ?>" class="accordion-collapse collapse"
                                    aria-labelledby="heading<?= $application['id'] ?>"
                                    data-bs-parent="#applicationsAccordion">
                                    <div class="accordion-body">
                                        <p><strong>Name:</strong>
                                            <?= $application['first_name'] ?>
                                        </p>
                                        <p><strong>Program:</strong>
                                            <?= $application['program'] ?>
                                        </p>
                                        <p><strong>Degree:</strong>
                                            <?= $application['degree'] ?>
                                        </p>
                                        <p><strong>Gender:</strong>
                                            <?= $application['gender'] ?>
                                        </p>
                                        <!-- Add more details as needed -->

                                        <!-- Actions buttons for each application -->
                                        <div class="d-flex mt-3">
                                            <button class="btn btn-success me-2">
                                                <i class="far fa-eye"></i> View
                                            </button>
                                            <button class="btn btn-danger">
                                                <i class="far fa-trash-alt"></i> Delete
                                            </button>
                                            <!-- Add more action buttons as needed -->
                                        </div>
                                    </div>
                                </div>
                            </div>
                        <?php endforeach; ?>

                    </div>

                    <!-- Pagination -->
                    <?php if ($totalApplications > 0): ?>
                        <nav aria-label="Page navigation example">
                            <ul class="pagination justify-content-center mt-4">
                                <?php for ($page = 1; $page <= $totalPages; $page++): ?>
                                    <li class="page-item <?php echo ($page === $currentPage) ? 'active' : ''; ?>">
                                        <a class="page-link" href="?page=<?= $page ?>">
                                            <?= $page ?>
                                        </a>
                                    </li>
                                <?php endfor; ?>
                            </ul>
                        </nav>
                    <?php endif; ?>
                </div>


            </div>
        </div>

        <a class="btn btn-success m-3" style="width: 200px" href="./dashboard.php">Dashboard</a>
    </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/js/all.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.8.1/flowbite.min.js"></script>

</body>

</html>