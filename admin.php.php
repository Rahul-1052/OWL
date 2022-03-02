
<?php require 'adminheader.php'; ?>
<div class="container main-container">
  <div class="row">
    <div class="col-md-4 col-md-offset-4">
      <h1 class="form_title">Admin Login</h1>
      <?php echo $message; ?>
      <form action="admin1.php" method="post">
        <input type="text" name="email" class="form-control" placeholder="email" required> <br>
        <input type="password" name="password" class="form-control" placeholder="password" required> <br>
        <input type="submit" value="Admin Login" class="form-control btn btn-primary">
      </form>
    </div>
  </div>
</div>
<?php require 'footer.php'; ?>
