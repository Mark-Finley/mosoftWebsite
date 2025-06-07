<?php include 'includes/header.php'; ?>

<!-- Hero Section -->
<section class="text-center py-5" style="background: linear-gradient(135deg, #0f172a, #1e3a8a); color: white;">
  <div class="container">
    <h1 class="display-4 fw-bold">Empowering Society Through Technology</h1>
    <p class="lead mt-3">Delivering innovative software, secure networks, and scalable cloud solutions to uplift our community.</p>
    <a href="services.php" class="btn btn-primary btn-lg mt-4">Explore Our Services</a>
  </div>
</section>

<!-- About Section -->
<section class="py-5 bg-light text-dark">
  <div class="container">
    <div class="row align-items-center">
      <div class="col-md-6 mb-4 mb-md-0">
        <img src="assets/img/teamwork.jpg" alt="Teamwork" class="img-fluid rounded">
      </div>
      <div class="col-md-6">
        <h2>About MOSOFT LLC</h2>
        <p>MOSOFT LLC was founded with a vision to contribute to societal development through cutting-edge technology solutions. We specialize in software development, networking, cloud computing, and cybersecurity.</p>
        <a href="about.php" class="btn btn-outline-primary mt-3">Read Our Story</a>
      </div>
    </div>
  </div>
</section>

<!-- Services Section -->
<section class="py-5">
  <div class="container text-center">
    <h2 class="mb-5">What We Do</h2>
    <div class="row">
      <div class="col-md-3 mb-4">
        <div class="card h-100 shadow-sm border-0">
          <div class="card-body">
            <h5 class="card-title">Software Development</h5>
            <p class="card-text">Custom web and mobile apps tailored to your community and business needs.</p>
          </div>
        </div>
      </div>
      <div class="col-md-3 mb-4">
        <div class="card h-100 shadow-sm border-0">
          <div class="card-body">
            <h5 class="card-title">Networking</h5>
            <p class="card-text">Reliable, secure networking infrastructure and support for all environments.</p>
          </div>
        </div>
      </div>
      <div class="col-md-3 mb-4">
        <div class="card h-100 shadow-sm border-0">
          <div class="card-body">
            <h5 class="card-title">Cloud Technologies</h5>
            <p class="card-text">Cloud migration, DevOps, and scalable solutions for modern businesses.</p>
          </div>
        </div>
      </div>
      <div class="col-md-3 mb-4">
        <div class="card h-100 shadow-sm border-0">
          <div class="card-body">
            <h5 class="card-title">Cybersecurity</h5>
            <p class="card-text">Protecting digital assets through best-in-class security practices.</p>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- Call to Action -->
<section class="py-5 bg-primary text-white text-center">
  <div class="container">
    <h3>Ready to work with a team that understands your needs?</h3>
    <a href="contact.php" class="btn btn-light mt-3">Contact Us Today</a>
  </div>
</section>

<!-- Testimonials Carousel Section -->
<section class="py-5 bg-light">
  <div class="container">
    <h2 class="text-center mb-5">What Our Clients Say</h2>
    <div id="testimonialCarousel" class="carousel slide carousel-fade" data-bs-ride="carousel" data-bs-interval="6000">
      <div class="carousel-inner">

        <!-- Testimonial 1 -->
        <div class="carousel-item active">
          <div class="d-flex flex-column align-items-center text-center px-3">
            <img src="assets/img/testimonial1.jpg" alt="Sarah Mensah" class="rounded-circle mb-3" style="width: 100px; height: 100px; object-fit: cover;">
            <p class="fst-italic mb-4">"MOSOFT LLC transformed the way we do business. Their custom app helped us reach more customers and streamline our operations."</p>
            <h5 class="fw-bold mb-0">Sarah Mensah</h5>
            <small class="text-muted">CEO, Urban Market Hub</small>
          </div>
        </div>

        <!-- Testimonial 2 -->
        <div class="carousel-item">
          <div class="d-flex flex-column align-items-center text-center px-3">
            <img src="assets/img/testimonial2.jpg" alt="Kwame Adjei" class="rounded-circle mb-3" style="width: 100px; height: 100px; object-fit: cover;">
            <p class="fst-italic mb-4">"Professional, reliable, and skilled. Their team delivered our networking solution on time and exceeded expectations."</p>
            <h5 class="fw-bold mb-0">Sarup Gupta</h5>
            <small class="text-muted">IT Manager, GreenWave Logistics</small>
          </div>
        </div>

        <!-- Testimonial 3 -->
        <div class="carousel-item">
          <div class="d-flex flex-column align-items-center text-center px-3">
            <img src="assets/img/testimonial3.jpg" alt="Linda Boateng" class="rounded-circle mb-3" style="width: 100px; height: 100px; object-fit: cover;">
            <p class="fst-italic mb-4">"Their cybersecurity audit helped us identify key vulnerabilities. MOSOFT truly understands digital risk."</p>
            <h5 class="fw-bold mb-0">Linda Boateng</h5>
            <small class="text-muted">Operations Director, FinTrust Bank</small>
          </div>
        </div>

      </div>
      <!-- Carousel Controls -->
      <button class="carousel-control-prev" type="button" data-bs-target="#testimonialCarousel" data-bs-slide="prev">
        <span class="carousel-control-prev-icon"></span>
      </button>
      <button class="carousel-control-next" type="button" data-bs-target="#testimonialCarousel" data-bs-slide="next">
        <span class="carousel-control-next-icon"></span>
      </button>
    </div>
  </div>
</section>


<?php include 'includes/footer.php'; ?>
