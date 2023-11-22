<header>

    <?php

    if (session_status() == PHP_SESSION_NONE) {
        // Start the session
        session_start();
    }
    ?>

    <!-- Location and Phone Navigation Bar -->
    <nav class="navbar navbar-expand-lg bg-white d-none d-lg-block">
        <div class="container">
            <a class="navbar-brand text-black" href="#">
                <i class="fas fa-map-marker-alt"></i> Bamenda - Sonac Street
            </a>
            <a class="navbar-brand text-black" href="mailto:info@ebenezer.com">
                <i class="fas fa-envelope"></i> info@ebenezer.com
            </a>
            <a class="navbar-brand text-black" href="#">
                <i class="fas fa-phone"></i> +237681610898
            </a>
        </div>
    </nav>



    <!-- Logo Navigation Bar -->
    <nav class="navbar navbar-expand-lg bg-blue">
        <div class="container">
            <a class="navbar-brand" href="#"><img src="https://ehist.skye8.tech/image/logo/logo.png" height="30"
                    width="140%" alt></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#collapsibleNavbar2">
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
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown">About
                            Us</a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="our-team.php">Our Team</a></li>
                            <li><a class="dropdown-item" href="mission-statement.php">Our
                                    Mission</a></li>
                            <li><a class="dropdown-item" href="FAQs.php">FAQs</a></li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="contact.php">Contact
                            Us</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</header>