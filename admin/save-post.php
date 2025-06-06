<?php
session_start();
if (!isset($_SESSION['admin'])) {
  header("Location: login.php");
  exit;
}
require '../config.php';

$title = $_POST['title'];
$content = $_POST['content'];
$stmt = $pdo->prepare("INSERT INTO posts (title, content, created_at) VALUES (?, ?, NOW())");
$stmt->execute([$title, $content]);
header("Location: posts.php");
?>