<?php include '../includes/header.php'; ?>
<h2>Create New Blog Post</h2>
<form action="save-post.php" method="post">
  <div class="mb-3">
    <label for="title" class="form-label">Post Title</label>
    <input type="text" name="title" class="form-control" required>
  </div>
  <div class="mb-3">
    <label for="content" class="form-label">Content</label>
    <textarea name="content" class="form-control" rows="8" required></textarea>
  </div>
  <button type="submit" class="btn btn-primary">Publish</button>
</form>
<?php include '../includes/footer.php'; ?>