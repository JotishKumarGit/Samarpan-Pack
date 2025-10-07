
<!-- Enquiry Modal -->
<div class="modal fade" id="enquiryModal" tabindex="-1" aria-labelledby="enquiryModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="enquiryModalLabel">Enquiry Form</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form id="enquiryForm">
                    <div class="row g-3">
                        <div class="col-md-6">
                            <input type="text" class="form-control" id="name" placeholder="Your Name" required>
                        </div>
                        <div class="col-md-6">
                            <input type="email" class="form-control" id="email" placeholder="Your Email" required>
                        </div>
                        <div class="col-md-6">
                            <input type="text" class="form-control" id="phone" placeholder="Phone Number" required>
                        </div>
                        <div class="col-md-6">
                            <input type="text" class="form-control" id="subject" placeholder="Subject" required>
                        </div>
                        <div class="col-md-12">
                            <textarea class="form-control" id="message" rows="3" placeholder="Your Message" required></textarea>
                        </div>
                    </div>
                    <div class="text-end mt-3">
                        <button type="button" class="btn btn-success" onclick="sendToWhatsApp()">Send Message</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<!-- enquiry  WhatsApp Script -->
<script>
    function sendToWhatsApp() {
        const name = document.getElementById("name").value.trim();
        const email = document.getElementById("email").value.trim();
        const phone = document.getElementById("phone").value.trim();
        const subject = document.getElementById("subject").value.trim();
        const message = document.getElementById("message").value.trim();

        if (!name || !email || !phone || !subject || !message) {
            alert("Please fill in all fields.");
            return;
        }

        const whatsappNumber = "918758959542"; // Replace with your WhatsApp number (no + or spaces)
        const text = `Enquiry Details:\n\nName: ${name}\nEmail: ${email}\nPhone: ${phone}\nSubject: ${subject}\nMessage: ${message}`;
        const url = `https://wa.me/${whatsappNumber}?text=${encodeURIComponent(text)}`;

        window.open(url, "_blank");
    }
</script>

<!--  -->
<script>
    function sendToWhatsApp() {
        // Get values
        const name = document.getElementById("name").value.trim();
        const email = document.getElementById("email").value.trim();
        const message = document.getElementById("message").value.trim();
        const phoneNumber = "918758959542";
        const whatsappMessage = `Hello, my name is *${name}* (%0AEmail: ${email})%0A%0A${message}`;
        const url = `https://wa.me/${phoneNumber}?text=${whatsappMessage}`;
        window.open(url, "_blank");
    }
</script>

  <!-- Footer -->
  <footer class="pt-5 pb-4" data-aos="fade-up" data-aos-delay="100">
    <div class="container text-center text-md-start">
      <div class="row text-center text-md-start">

        <!-- Company Info -->
        <div class="col-md-3 col-lg-4 col-xl-4 mx-auto mb-4">
          <h5 class="text-uppercase fw-bold mb-4">Samarpan Pack</h5>
          <p>
            We offer premium embroidery fabrics that blend traditional craftsmanship with modern designs — perfect for creating elegant and timeless fashion statements.
          </p>
        </div>

        <!-- Products -->
        <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mb-4">
          <h6 class="text-uppercase fw-bold mb-4">Products</h6>
          <ul class="list-unstyled">
            <li><a href="#">Cold pressed oil</a></li>
            <li><a href="#">Paper Cups</a></li>
          </ul>
        </div>

        <!-- Quick Links -->
        <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mb-4">
          <h6 class="text-uppercase fw-bold mb-4">Quick Links</h6>
          <ul class="list-unstyled">
            <li><a href="about.php">About Us</a></li>
            <li><a href="product.php">Products</a></li>
            <li><a href="services.php">Services</a></li>
            <li><a href="#faq">FAQ</a></li>
            <li><a href="contact.php">Contact</a></li>
          </ul>
        </div>

        <!-- Contact Info -->
        <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4">
          <h6 class="text-uppercase fw-bold mb-4">Contact</h6>
          <p><i class="bi bi-house-door-fill me-2"></i>1st Floor, Shop. No. 118, Shiv Shakti Residency, C-Building, Gundlav Road, Gundlav, Valsad, Valsad, Gujarat, 396035</p>
          <p><i class="bi bi-envelope-fill me-2"></i>samarpanpack.sales@gmail.com</p>
          <p><i class="bi bi-telephone-fill me-2"></i> +91 8758959542 || 8601950861</p>
        </div>
      </div>

      <!-- Divider -->
      <hr class="my-4">

      <!-- Social Media + Copyright -->
      <div class="row align-items-center text-center">
        <div class="col-md-6">
          <p class="mb-0 text-center">© 2025 Samarpan Pack. All Rights Reserved.</p>
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