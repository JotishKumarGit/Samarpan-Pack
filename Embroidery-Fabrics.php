<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Pal creation</title>
    <!-- bootstrap icnos -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" />
    <!-- bootstrap css -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <!-- AOS CSS -->
    <link rel="stylesheet" href="https://unpkg.com/aos@2.3.4/dist/aos.css" />
    <link rel="stylesheet" href="assets/css/style.css">

    <style>
        .product-img {
            height: 250px;
            object-fit: cover;
        }

        .card:hover {
            transform: translateY(-5px);
            transition: 0.3s ease;
        }

        footer a:hover {
            color: #0dcaf0 !important;
            /* Bootstrap info color */
            transition: 0.3s ease;
        }
    </style>

</head>

<body>

    <!-- header -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light sticky-top" data-aos="fade-down" data-aos-duration="1000">
        <div class="container-fluid">
            <a class="navbar-brand" href="index.php">Pal creation</a>

            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse justify-content-end" id="navbarSupportedContent">
                <ul class="navbar-nav mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" href="index.php">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="about.php">About</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            Products
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" href="#">Embroidery Fabrics</a></li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="services.php">Services</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="contact.php">Contact</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>


    <!-- products details  -->

    <!-- end products details  -->


    <!-- Footer -->
    <footer class="pt-5 pb-4" data-aos="fade-up" data-aos-delay="100">
        <div class="container text-center text-md-start">
            <div class="row text-center text-md-start">

                <!-- Company Info -->
                <div class="col-md-3 col-lg-4 col-xl-4 mx-auto mb-4">
                    <h5 class="text-uppercase fw-bold mb-4">Pal Creation</h5>
                    <p>
                        We offer premium embroidery fabrics that blend traditional craftsmanship with modern designs —
                        perfect for creating elegant and timeless fashion statements.
                    </p>
                </div>

                <!-- Products -->
                <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mb-4">
                    <h6 class="text-uppercase fw-bold mb-4">Products</h6>
                    <ul class="list-unstyled">
                        <li><a href="#">Embroidery Fabrics</a></li>
                    </ul>
                </div>

                <!-- Quick Links -->
                <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mb-4">
                    <h6 class="text-uppercase fw-bold mb-4">Quick Links</h6>
                    <ul class="list-unstyled">
                        <li><a href="#about">About Us</a></li>
                        <li><a href="#products">Products</a></li>
                        <li><a href="#services">Services</a></li>
                        <li><a href="#faq">FAQ</a></li>
                        <li><a href="#contact">Contact</a></li>
                    </ul>
                </div>

                <!-- Contact Info -->
                <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4">
                    <h6 class="text-uppercase fw-bold mb-4">Contact</h6>
                    <p><i class="bi bi-house-door-fill me-2"></i> Ground Floor, Plot No 915, 916, Old G.I.D.C.,
                        Katargam, Surat-395004, Gujarat, India</p>
                    <p><i class="bi bi-envelope-fill me-2"></i> Palcrestion1017@gmail.com</p>
                    <p><i class="bi bi-telephone-fill me-2"></i> +91 7990457170 || 9099266360</p>
                </div>

            </div>

            <!-- Divider -->
            <hr class="my-4">

            <!-- Social Media + Copyright -->
            <div class="row align-items-center text-center">
                <div class="col-md-6">
                    <p class="mb-0 text-center">© 2025 Pal Creation. All Rights Reserved.</p>
                    <span>Design By <a href="https://trade4export.com/">Trade4Export</a></span>
                </div>
                <div class="col-md-6">
                    <div class="d-flex justify-content-center justify-content-md-end gap-3">
                        <a href="#"><i class="bi bi-facebook fs-5"></i></a>
                        <a href="#"><i class="bi bi-instagram fs-5"></i></a>
                        <a href="#"><i class="bi bi-whatsapp fs-5"></i></a>
                        <a href="#"><i class="bi bi-linkedin fs-5"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </footer>

    <!-- AOS JS -->
    <script src="https://unpkg.com/aos@2.3.4/dist/aos.js"></script>
    <script src="assets/js/script.js"></script>
    <!-- bootstrap js  -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI"
        crossorigin="anonymous"></script>
</body>

</html>