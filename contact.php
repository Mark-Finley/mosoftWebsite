<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
require 'vendor/autoload.php';
include 'includes/header.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $mail = new PHPMailer(true);
  try {
    // SMTP configuration
    $mail->isSMTP();
    $mail->Host       = 'smtp.gmail.com';          // SMTP server
    $mail->SMTPAuth   = true;
    $mail->Username   = 'oseimarkfinley@gmail.com';    // Your Gmail
    $mail->Password   = 'kzfeuadkpdursdnp';       // App password from Google
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
    $mail->Port       = 587;

    // Email setup
    $mail->setFrom('oseimarkfinley.com', 'MOSOFT Contact Form');
    $mail->addAddress("oseimarkfinley@gmail.com", "Osei Mark Finley");

    // Add a reply-to address
    $mail->addReplyTo($_POST["email"], $_POST["name"]);

    // Email subject and body
    if (!filter_var($_POST["email"], FILTER_VALIDATE_EMAIL)) {
      throw new Exception("Invalid email format.");
    }
    if (empty($_POST["message"])) {
      throw new Exception("Message cannot be empty.");
    }
    if (empty($_POST["name"])) {
      throw new Exception("Name cannot be empty.");
    }
    if (strlen($_POST["message"]) > 500) {
      throw new Exception("Message is too long. Maximum 500 characters allowed.");
    }
    if (strlen($_POST["name"]) > 100) {
      throw new Exception("Name is too long. Maximum 100 characters allowed.");
    }
    if (strlen($_POST["email"]) > 100) {
      throw new Exception("Email is too long. Maximum 100 characters allowed.");
    }
    if (strlen($_POST["message"]) < 10) {
      throw new Exception("Message is too short. Minimum 10 characters required.");
    }
    if (strlen($_POST["name"]) < 2) {
      throw new Exception("Name is too short. Minimum 2 characters required.");
    }
    if (strlen($_POST["email"]) < 5) {
      throw new Exception("Email is too short. Minimum 5 characters required.");
    }
    if (strpos($_POST["message"], 'http://') !== false || strpos($_POST["message"], 'https://') !== false) {
      throw new Exception("Links are not allowed in the message.");
    }
    if (strpos($_POST["name"], 'http://') !== false || strpos($_POST["name"], 'https://') !== false) {
      throw new Exception("Links are not allowed in the name.");
    }
    if (strpos($_POST["email"], 'http://') !== false || strpos($_POST["email"], 'https://') !== false) {
      throw new Exception("Links are not allowed in the email.");
    }
    if (preg_match('/[^\w\s@.-]/', $_POST["name"])) {
      throw new Exception("Name contains invalid characters.");
    }
    if (preg_match('/[^\w\s@.-]/', $_POST["email"])) {
      throw new Exception("Email contains invalid characters.");
    }
    if (preg_match('/[^\w\s.,!?]/', $_POST["message"])) {
      throw new Exception("Message contains invalid characters.");
    }
    $mail->Subject = "Message from " . $_POST["name"];
    $mail->Body    = nl2br(htmlspecialchars($_POST["message"]));
    $mail->isHTML(true); // Send HTML email

    $mail->send();
    echo "<div class='alert alert-success'>Message sent successfully!</div>";
  } catch (Exception $e) {
    echo "<div class='alert alert-danger'>Mailer Error: {$mail->ErrorInfo}</div>";
  }
}
?>

<h2>Contact Us</h2>
<form method="post">
  <div class="mb-3">
    <label class="form-label">Name</label>
    <input type="text" name="name" class="form-control" required>
  </div>
  <div class="mb-3">
    <label class="form-label">Email</label>
    <input type="email" name="email" class="form-control" required>
  </div>
  <div class="mb-3">
    <label class="form-label">Message</label>
    <textarea name="message" class="form-control" required></textarea>
  </div>
  <button class="btn btn-success">Send Message</button>
</form>

<?php include 'includes/footer.php'; ?>
