<?php
session_start();
if (!isset($_SESSION['admin'])) {
  header("Location: login.php");
  exit;
}
include '../includes/header.php'; ?>
<h2>Admin Dashboard</h2>
<p>Welcome! <a href="logout.php" class="btn btn-sm btn-danger">Logout</a></p>
<ul>
  <li><a href="new-post.php">Create New Post</a></li>
  <li><a href="posts.php">View All Posts</a></li>
</ul>
<?php include '../includes/footer.php'; ?>