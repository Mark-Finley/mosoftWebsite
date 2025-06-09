<?php include 'includes/header.php'; ?>

<h2>Request Your Personal Data</h2>

<p>If you wish to request access to, correction, or deletion of your personal data, please fill out the form below. We will respond within 30 days.</p>

<form method="post" action="process-data-request.php" style="max-width:600px;">
  <div class="mb-3">
    <label for="fullName" class="form-label">Full Name</label>
    <input type="text" class="form-control" id="fullName" name="fullName" required>
  </div>

  <div class="mb-3">
    <label for="email" class="form-label">Email Address</label>
    <input type="email" class="form-control" id="email" name="email" required>
  </div>

  <div class="mb-3">
    <label for="requestType" class="form-label">Request Type</label>
    <select class="form-select" id="requestType" name="requestType" required>
      <option value="">Select a request</option>
      <option value="access">Access My Data</option>
      <option value="correction">Correct My Data</option>
      <option value="deletion">Delete My Data</option>
    </select>
  </div>

  <div class="mb-3">
    <label for="details" class="form-label">Additional Details (optional)</label>
    <textarea class="form-control" id="details" name="details" rows="3"></textarea>
  </div>

  <button type="submit" class="btn btn-primary">Submit Request</button>
</form>

<?php include 'includes/footer.php'; ?>
