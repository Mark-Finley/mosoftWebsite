<?php
session_start();
if (!isset($_SESSION['admin'])) {
  header("Location: login.php");
  exit;
}
require '../config.php';
include '../includes/header.php';

$posts = $pdo->query("SELECT * FROM posts ORDER BY created_at DESC")->fetchAll();
?>
<h2>All Blog Posts</h2>
<ul class="list-group">
<?php foreach ($posts as $post): ?>
  <li class="list-group-item">
    <strong><?= htmlspecialchars($post['title']) ?></strong>
    <div><small><?= $post['created_at'] ?></small></div>
  </li>
<?php endforeach; ?>
</ul>
<?php include '../includes/footer.php'; ?>