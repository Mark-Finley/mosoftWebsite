<?php
session_start();
if (isset($_SESSION['admin'])) {
  header("Location: index.php");
  exit;
}
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $username = $_POST['username'];
  $password = $_POST['password'];
  if ($username === "admin" && $password === "password") {
    $_SESSION['admin'] = true;
    header("Location: index.php");
    exit;
  } else {
    $error = "Invalid login.";
  }
}
?>
<?php include '../includes/header.php'; ?>
<h2>Admin Login</h2>
<?php if (isset($error)) echo "<div class='alert alert-danger'>$error</div>"; ?>
<form method="post">
  <div class="mb-3">
    <label class="form-label">Username</label>
    <input type="text" name="username" class="form-control" required>
  </div>
  <div class="mb-3">
    <label class="form-label">Password</label>
    <input type="password" name="password" class="form-control" required>
  </div>
  <button class="btn btn-primary">Login</button>
</form>
<?php include '../includes/footer.php'; ?>