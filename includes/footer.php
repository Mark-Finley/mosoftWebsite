  </main>

  <footer class="bg-dark text-white pt-4 mt-5">
    <div class="container">
      <div class="row text-center text-md-start">
        <!-- Navigation Links -->
        <div class="col-md-6 mb-6">
          <h5 class="mb-3">Quick Links</h5>
          <ul class="list-unstyled">
            <li><a href="/" class="text-white text-decoration-none">Home</a></li>
            <li><a href="/about.php" class="text-white text-decoration-none">About</a></li>
            <li><a href="/services.php" class="text-white text-decoration-none">Services</a></li>
            <li><a href="/contact.php" class="text-white text-decoration-none">Contact</a></li>
            <li><a href="/privacy.php" class="text-white text-decoration-none">Privacy Policy</a></li>
          </ul>
        </div>

        <!-- Company Info -->
        <div class="col-md-6 mb-6">
          <h5 class="mb-3">Company Info</h5>
          <p>MOSOFT LLC<br>
          New Oxford St., <br>Amakom, <br>Kumasi<br>
          Email: <a href="mailto: info@mosoft.software" class="text-white text-decoration-none">info@mosoft.software</a><br>
          Phone: <a href="tel:+1234567890" class="text-white text-decoration-none">+233 (55) 776-8401</a></p>
        </div>

        <!-- Social Media Icons -->
        <div class="col-md-6 mb-6 text-flex flex-column align-items-center">
          <h5 class="mb-3">Follow Us</h5>
          <a href="#" class="text-white me-3 fs-5"><i class="bi bi-facebook"></i></a>
          <a href="#" class="text-white me-3 fs-5"><i class="bi bi-twitter"></i></a>
          <a href="#" class="text-white me-3 fs-5"><i class="bi bi-instagram"></i></a>
          <a href="#" class="text-white fs-5"><i class="bi bi-linkedin"></i></a>
        </div>
      </div>

      <hr class="border-light">
      <div class="text-center pb-3">
        &copy; <?= date('Y') ?> MOSOFT LLC. All rights reserved, made with ❤️ by the Dev Team.
      </div>
    </div>
  </footer>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.js"></script>
  <script src="/assets/js/theme.js"></script>

  <!-- Cookie Consent Banner -->
<div id="cookieConsent" style="position:fixed; bottom:0; left:0; right:0; background:#222; color:#fff; padding:15px; text-align:center; display:flex; justify-content:center; align-items:center; gap:15px; z-index:9999;">
  <span>We use cookies to improve your experience. By using our site, you agree to our <a href="/privacy.php" style="color:#0d6efd; text-decoration:underline;">Privacy Policy</a>.</span>
  <button id="acceptCookies" style="background:#0d6efd; border:none; padding:8px 15px; color:#fff; cursor:pointer; border-radius:4px;">Accept</button>
</div>

<script>
  document.getElementById('acceptCookies').addEventListener('click', function() {
    localStorage.setItem('cookieConsent', 'accepted');
    document.getElementById('cookieConsent').style.display = 'none';
  });

  // Hide banner if consent already given
  if(localStorage.getItem('cookieConsent') === 'accepted') {
    document.getElementById('cookieConsent').style.display = 'none';
  }
</script>

</body>
</html>