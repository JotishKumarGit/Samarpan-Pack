<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Samarpan Pack - Services</title>
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

 <style>
    .page-header {
      position: relative;
      background: url('assets/images/Cold-Pressed-Oil.webp') no-repeat center center;
      background-size: cover;
      padding: 100px 0;
      color: white;
      text-align: center;
    }

    .page-header::before {
      content: "";
      position: absolute;
      top: 0; left: 0; right: 0; bottom: 0;
      background-color: rgba(0, 0, 0, 0.5); /* Dark overlay */
      z-index: 1;
    }

    .page-header .container {
      position: relative;
      z-index: 2;
    }

    .page-header h1 {
      font-size: 3rem;
      font-weight: bold;
      animation: fadeDown 1s ease-out;
    }

    .breadcrumb {
      background-color: transparent;
      justify-content: center;
      margin-top: 20px;
      animation: slideIn 1.2s ease-out;
    }

    .breadcrumb a {
      color: #f8f9fa;
      text-decoration: none;
    }

    .breadcrumb-item.active {
      color: #ffc107;
    }

    @keyframes fadeDown {
      from {
        opacity: 0;
        transform: translateY(-30px);
      }
      to {
        opacity: 1;
        transform: translateY(0);
      }
    }

    @keyframes slideIn {
      from {
        opacity: 0;
        transform: translateX(-50px);
      }
      to {
        opacity: 1;
        transform: translateX(0);
      }
    }
  </style>

</head>

<body>

  <!-- header -->
 <?php include('header.php') ?>

 <!-- Page Header Section -->
  <section class="page-header">
    <div class="container">
      <h1>Welcome To Our Services </h1>
      <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="#">Home</a></li>
          <li class="breadcrumb-item"><a href="#">Features</a></li>
          <li class="breadcrumb-item active" aria-current="page">Services</li>
        </ol>
      </nav>
    </div>
  </section>

    <!-- services -->
  <section class="py-5 services-section" id="services">
    <div class="container text-center">
      <h2 class="mb-4" data-aos="fade-up">Our Services</h2>
      <p class="mb-5 section-subtitle" data-aos="fade-up" data-aos-delay="100">
        At <strong>Pal Creation</strong>, we offer reliable, eco-conscious solutions in disposable food packaging and natural wellness products — tailored for both individual and bulk buyers.
      </p>

      <div class="row g-4 justify-content-center">

        <!-- Service 1 -->
        <div class="col-md-6 col-lg-4" data-aos="zoom-in" data-aos-delay="100">
          <div class="service-card">
            <i class="bi bi-cup-hot fs-1 icon-purple"></i>
            <h5 class="mt-3">Custom Paper Cup Printing</h5>
            <p>Get your logo or branding printed on eco-friendly paper cups — ideal for cafes, events, and promotions.</p>
          </div>
        </div>

        <!-- Service 2 -->
        <div class="col-md-6 col-lg-4" data-aos="zoom-in" data-aos-delay="200">
          <div class="service-card">
            <i class="bi bi-box-seam fs-1 icon-pink"></i>
            <h5 class="mt-3">Bulk Supply & Distribution</h5>
            <p>Wholesale distribution of paper cups and cold pressed oils with flexible packaging and logistics support.</p>
          </div>
        </div>

        <!-- Service 3 -->
        <div class="col-md-6 col-lg-4" data-aos="zoom-in" data-aos-delay="300">
          <div class="service-card">
            <i class="bi bi-flower3 fs-1 icon-gold"></i>
            <h5 class="mt-3">Private Labeling</h5>
            <p>Offer cold pressed oils under your own brand with our private labeling and packaging services.</p>
          </div>
        </div>

        <!-- Service 4 -->
        <div class="col-md-6 col-lg-4" data-aos="zoom-in" data-aos-delay="400">
          <div class="service-card">
            <i class="bi bi-droplet-half fs-1 icon-indigo"></i>
            <h5 class="mt-3">Oil Extraction & Purity Testing</h5>
            <p>Our oils are cold-pressed and batch-tested for purity, ensuring high nutritional and health value.</p>
          </div>
        </div>

        <!-- Service 5 -->
        <div class="col-md-6 col-lg-4" data-aos="zoom-in" data-aos-delay="500">
          <div class="service-card">
            <i class="bi bi-shop-window fs-1 icon-coral"></i>
            <h5 class="mt-3">Product Customization</h5>
            <p>We cater to both small retailers and large businesses with flexible MOQ options and competitive pricing.</p>
          </div>
        </div>

        <!-- Service 6 -->
        <div class="col-md-6 col-lg-4" data-aos="zoom-in" data-aos-delay="600">
          <div class="service-card">
            <i class="bi bi-globe fs-1 icon-sky"></i>
            <h5 class="mt-3">Pan-India & Export Service</h5>
            <p>Serving clients across India and abroad with timely delivery, documentation, and export assistance.</p>
          </div>
        </div>

      </div>
    </div>
  </section>
  <!-- end services -->

    <!-- FAQ Section -->
  <div class="container-fluid">
    <section class="faq-section container py-5" data-aos="fade-up">
      <div class="faq-header text-center mb-4">
        <h2>Frequently Asked Questions</h2>
        <p class="text-muted">Have questions about our products? We’re here to help.</p>
      </div>

      <div class="accordion" id="faqAccordion">

        <!-- FAQ 1 -->
        <div class="accordion-item" data-aos="fade-up" data-aos-delay="100">
          <h2 class="accordion-header" id="faqOne">
            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne">
              What types of paper cups do you offer?
            </button>
          </h2>
          <div id="collapseOne" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
            <div class="accordion-body">
              We offer eco-friendly paper cups in various sizes, suitable for hot and cold beverages. Our cups are biodegradable and made from sustainable materials.
            </div>
          </div>
        </div>

        <!-- FAQ 2 -->
        <div class="accordion-item" data-aos="fade-up" data-aos-delay="150">
          <h2 class="accordion-header" id="faqTwo">
            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo">
              What is cold pressed oil and why is it better?
            </button>
          </h2>
          <div id="collapseTwo" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
            <div class="accordion-body">
              Cold pressed oil is extracted by pressing seeds or nuts without heat, preserving the natural nutrients, flavor, and aroma, making it healthier than refined oils.
            </div>
          </div>
        </div>

        <!-- FAQ 3 -->
        <div class="accordion-item" data-aos="fade-up" data-aos-delay="200">
          <h2 class="accordion-header" id="faqThree">
            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree">
              Can I customize paper cups with my branding?
            </button>
          </h2>
          <div id="collapseThree" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
            <div class="accordion-body">
              Yes! We provide custom printing services on paper cups for cafes, events, and businesses to help promote your brand sustainably.
            </div>
          </div>
        </div>

        <!-- FAQ 4 -->
        <div class="accordion-item" data-aos="fade-up" data-aos-delay="250">
          <h2 class="accordion-header" id="faqFour">
            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour">
              Do you accept bulk orders and offer wholesale pricing?
            </button>
          </h2>
          <div id="collapseFour" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
            <div class="accordion-body">
              Yes, we cater to both retail and wholesale customers with competitive pricing for bulk orders. Please <a href="#contact">contact us</a> for more details.
            </div>
          </div>
        </div>

        <!-- FAQ 5 -->
        <div class="accordion-item" data-aos="fade-up" data-aos-delay="300">
          <h2 class="accordion-header" id="faqFive">
            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFive">
              How should I store cold pressed oils?
            </button>
          </h2>
          <div id="collapseFive" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
            <div class="accordion-body">
              Store cold pressed oils in a cool, dark place away from direct sunlight to maintain freshness and extend shelf life.
            </div>
          </div>
        </div>

        <!-- FAQ 6 -->
        <div class="accordion-item" data-aos="fade-up" data-aos-delay="350">
          <h2 class="accordion-header" id="faqSix">
            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseSix">
              Do you ship internationally?
            </button>
          </h2>
          <div id="collapseSix" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
            <div class="accordion-body">
              Yes, we ship our products across India and internationally. Shipping charges and delivery times vary based on location.
            </div>
          </div>
        </div>

        <!-- FAQ 7 -->
        <div class="accordion-item" data-aos="fade-up" data-aos-delay="400">
          <h2 class="accordion-header" id="faqSeven">
            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseSeven">
              Are your paper cups biodegradable?
            </button>
          </h2>
          <div id="collapseSeven" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
            <div class="accordion-body">
              Yes, our paper cups are made from biodegradable materials that break down naturally, helping reduce environmental impact.
            </div>
          </div>
        </div>

        <!-- FAQ 8 -->
        <div class="accordion-item" data-aos="fade-up" data-aos-delay="450">
          <h2 class="accordion-header" id="faqEight">
            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseEight">
              Where is Pal Creation located and where are your products made?
            </button>
          </h2>
          <div id="collapseEight" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
            <div class="accordion-body">
              <strong>Pal Creation</strong> is based in India. Our paper cups and cold pressed oils are produced with strict quality standards to ensure sustainability and purity.
            </div>
          </div>
        </div>

      </div>
    </section>
  </div>
  <!-- end faq -->
 
  <!-- footer -->
   <?php include('footer.php') ?>