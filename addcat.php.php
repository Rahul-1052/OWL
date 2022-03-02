<?php
require 'config.php';
$conn = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_DATABASE);
if(!$conn) die("Not Connected to Database");

$message = "";

if( isset($_POST['ID']) && isset($_POST['CATEGORY'])){
    $id = $_POST['ID'];
    $cat = $_POST['CATEGORY'];
   

    $result = mysqli_query($conn , "select * from categories where name='$cat'");
    if(mysqli_num_rows($result)==1){
      $message = "<h3>category exists already ! </h3><br>";
    } else {
      $sql = "insert into categories (id,name) values ('$id', '$cat')";
      $result = mysqli_query($conn, $sql);
      if($result){
          $message = "<h3>Your category has been created</h3>";
         
      }
    }
}
?>
<?php require 'adminheader.php'; ?>
<div class="container main-container">
  <div class="row">
    <div class="col-md-4 col-md-offset-4">
      <h1 class="form_title">add category</h1>
      <?php echo $message; ?>
      <form action="addcat.php" method="post">
        <input type="text" name="ID" class="form-control" placeholder="ID" required> <br>
        <input type="text" name="CATEGORY" class="form-control" placeholder="CATEGORY" required> <br>
        <input type="submit" value="submit" class="form-control btn btn-primary">
      </form>
    </div>
  </div>
</div>
<?php require 'footer.php'; ?>
