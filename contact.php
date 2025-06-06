<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
require 'vendor/autoload.php';
include 'includes/header.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $mail = new PHPMailer(true);
  try {
    $mail->setFrom($_POST["email"], $_POST["name"]);
    $mail->addAddress("your-email@example.com");
    $mail->Subject = "Message from " . $_POST["name"];
    $mail->Body = $_POST["message"];
    $mail->send();
    echo "<div class='alert alert-success'>Message sent successfully!</div>";
  } catch (Exception $e) {
    echo "<div class='alert alert-danger'>Mailer Error: {$mail->ErrorInfo}</div>";
  }
}
?>
<h2>Contact Us</h2>
<form method="post">
  <div class="mb-3"><label class="form-label">Name</label><input type="text" name="name" class="form-control" required></div>
  <div class="mb-3"><label class="form-label">Email</label><input type="email" name="email" class="form-control" required></div>
  <div class="mb-3"><label class="form-label">Message</label><textarea name="message" class="form-control" required></textarea></div>
  <button class="btn btn-success">Send Message</button>
</form>
<?php include 'includes/footer.php'; ?>