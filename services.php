<?php include 'includes/header.php'; ?>

<h2 class="text-center mb-4">Our Services</h2>
<p class="text-center mb-5">
  At MOSOFT LLC, we offer a wide range of technology solutions designed to meet the evolving needs of modern businesses and organizations.
</p>

<div class="row g-4">
  <!-- Service 1 -->
  <div class="col-md-6 col-lg-3">
    <div class="card h-100 text-center shadow-sm service-card" 
         data-media-type="image" 
         data-media-src="/assets/img/services/custom_software.jpg">
      <div class="card-body">
        <i class="bi bi-code-slash fs-1 text-primary mb-3"></i>
        <h5 class="card-title">Custom Software</h5>
        <p class="card-text">Tailored web, desktop, and mobile applications built to solve real business problems.</p>
      </div>
    </div>
  </div>

  <!-- Service 2 -->
  <div class="col-md-6 col-lg-3">
    <div class="card h-100 text-center shadow-sm service-card" 
         data-media-type="video" 
         data-media-src="/assets/img/services/it_networking.jpg">
      <div class="card-body">
        <i class="bi bi-diagram-3 fs-1 text-success mb-3"></i>
        <h5 class="card-title">IT Networking</h5>
        <p class="card-text">Design and deployment of reliable network infrastructure for businesses and institutions.</p>
      </div>
    </div>
  </div>

  <!-- Service 3 -->
  <div class="col-md-6 col-lg-3">
    <div class="card h-100 text-center shadow-sm service-card" 
         data-media-type="image" 
         data-media-src="/assets/img/services/consulting.jpg">
      <div class="card-body">
        <i class="bi bi-gear-wide-connected fs-1 text-info mb-3"></i>
        <h5 class="card-title">IT Consulting</h5>
        <p class="card-text">Leverage expert advice to optimize your IT strategy, improve infrastructure, 
          and implement innovative tech solutions tailored to your business goals.</p>
      </div>
    </div>
  </div>

  <!-- Service 4 -->
  <div class="col-md-6 col-lg-3">
    <div class="card h-100 text-center shadow-sm service-card" 
         data-media-type="image" 
         data-media-src="/assets/img/services/audit.png">
      <div class="card-body">
        <i class="bi bi-shield-check fs-1 text-info mb-3"></i>
        <h5 class="card-title">IT Audit</h5>
        <p class="card-text">Ensure your systems meet compliance standards, 
          identify vulnerabilities, and strengthen security through detailed assessments and audits.</p>
      </div>
    </div>
  </div>

  <!-- Service 5 -->
  <div class="col-md-6 col-lg-6">
    <div class="card h-100 text-center shadow-sm service-card" 
         data-media-type="image" 
         data-media-src="/assets/img/services/cloud_solutions.jpg">
      <div class="card-body">
        <i class="bi bi-cloud-upload fs-1 text-info mb-3"></i>
        <h5 class="card-title">Cloud Solutions</h5>
        <p class="card-text">Secure cloud migration, hosting, and management for improved scalability and performance.</p>
      </div>
    </div>
  </div>

  <!-- Service 6 -->
  <div class="col-md-6 col-lg-6">
    <div class="card h-100 text-center shadow-sm service-card" 
         data-media-type="image" 
         data-media-src="/assets/img/services/cybersecurity.jpg">
      <div class="card-body">
        <i class="bi bi-shield-lock fs-1 text-danger mb-3"></i>
        <h5 class="card-title">Cybersecurity</h5>
        <p class="card-text">Threat analysis, penetration testing, and compliance to keep your systems safe and secure.</p>
      </div>
    </div>
  </div>
</div>

<div class="text-center mt-5">
  <h4>Need a custom solution?</h4>
  <a href="/contact.php" class="btn btn-primary mt-3">Talk to Our Team</a>
</div>

<!-- Modal HTML -->
<div class="modal fade" id="mediaModal" tabindex="-1" aria-labelledby="mediaModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="mediaModalLabel">Service Media</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body text-center">
        <!-- Dynamic content injected here -->
      </div>
    </div>
  </div>
</div>

<script>
  // Wait for DOM
  document.addEventListener('DOMContentLoaded', function () {
    const mediaModal = new bootstrap.Modal(document.getElementById('mediaModal'));
    const modalBody = document.querySelector('#mediaModal .modal-body');
    const modalTitle = document.querySelector('#mediaModal .modal-title');

    // Add click listener on all service cards
    document.querySelectorAll('.service-card').forEach(card => {
      card.addEventListener('click', () => {
        const type = card.getAttribute('data-media-type');
        const src = card.getAttribute('data-media-src');
        const title = card.querySelector('.card-title').innerText;

        modalTitle.innerText = title;

        // Clear old content
        modalBody.innerHTML = '';

        if(type === 'image') {
          const img = document.createElement('img');
          img.src = src;
          img.alt = title;
          img.classList.add('img-fluid');
          modalBody.appendChild(img);
        } else if(type === 'video') {
          const iframe = document.createElement('iframe');
          iframe.src = src + "?autoplay=1";
          iframe.width = "100%";
          iframe.height = "400";
          iframe.frameBorder = "0";
          iframe.allow = "accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture";
          iframe.allowFullscreen = true;
          modalBody.appendChild(iframe);
        }

        mediaModal.show();
      });
    });

    // Stop video playback when modal closes
    document.getElementById('mediaModal').addEventListener('hidden.bs.modal', () => {
      modalBody.innerHTML = '';
    });
  });
</script>

<?php include 'includes/footer.php'; ?>
