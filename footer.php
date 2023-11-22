<footer class="text-center text-lg-start pt-4 text-white mt-5">
    <!-- Section: Social media -->

    <!-- Section: Social media -->

    <!-- Section: Links  -->
    <section class>
        <div class="container text-center text-md-start mt-5">
            <!-- Grid row -->
            <div class="row mt-3">
                <!-- Grid column -->
                <div class="col-md-3 col-lg-4 col-xl-3 mx-auto mb-4">
                    <!-- Content -->
                    <h6 class="text-uppercase fw-bold mb-4">
                        Ebenezer University
                    </h6>
                    <p>
                        Here you can use rows and columns to
                        organize your footer
                        content. Lorem ipsum
                        dolor sit amet, consectetur adipisicing
                        elit.
                    </p>
                </div>
                <!-- Grid column -->

                <!-- Grid column -->

                <!-- Grid column -->
                <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mb-4">
                    <!-- Links -->
                    <h6 class="text-uppercase fw-bold mb-4">
                        Useful links
                    </h6>
                    <p>
                        <a href="#!" class="text-reset">Privacy</a>
                    </p>
                    <p>
                        <a href="#!" class="text-reset">Settings</a>
                    </p>
                    <p>
                        <a href="#!" class="text-reset">Terms and
                            Conditions</a>
                    </p>
                    <p>
                        <a href="#!" class="text-reset">Help</a>
                    </p>
                </div>
                <!-- Grid column -->

                <!-- Grid column -->
                <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4">
                    <!-- Links -->
                    <h6 class="text-uppercase fw-bold mb-4">Follow
                        Us</h6>
                    <p><i class="bi bi-facebook"></i> Ebenezer
                        University</p>
                    <p><i class="bi bi-twitter"></i> Ebenezer
                        University</p>
                    <p><i class="bi bi-linkedin"></i> Ebenezer
                        University</p>
                </div>
                <!-- Grid column -->
            </div>
            <!-- Grid row -->
        </div>
    </section>
    <!-- Section: Links  -->

    <!-- Copyright -->
    <div class="text-center p-4" style="background-color: rgba(0, 0, 0, 0.05);">
        © 2023 Copyright:
        <a class="text-reset fw-bold" href="https://mdbootstrap.com/">Ebenezer
            University</a>
    </div>
    <!-- Copyright -->
</footer>

<script>
    document.addEventListener('DOMContentLoaded', function () {
        // Get the current URL path and remove the leading slash
        var pathName = window.location.pathname.substring(1);

        // Select the corresponding nav link based on the URL
        var navLinks = document.querySelectorAll('.navbar-nav a');

        // Check each nav link and add the "active" class if the current URL contains the href
        navLinks.forEach(function (navLink) {
            if (pathName.includes(navLink.getAttribute('href'))) {
                navLink.classList.add('active');
            }
        });
    });
</script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"></script>

