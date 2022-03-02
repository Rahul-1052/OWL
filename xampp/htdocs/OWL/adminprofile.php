<?php
session_start();
require 'config.php';
// check user login
if(!isset($_SESSION['user_loggedin'])){
  header("location:login.php");
}
// get yor questions
$conn = mysqli_connect(DB_HOST,DB_USER,DB_PASSWORD,DB_DATABASE);
if(!$conn){
  die("Not connected to Database");
}
$sql = "select * from questions";
 $result = mysqli_query($conn, $sql);
?>
<?php require 'adminheader.php'; ?>
echo("here");
<div class="container main-container">
  <div class="row">
    <div class="col-md-10 col-md-offset-2">
      <h2>Your Questions</h2> <hr>
      <ul class="list-group">
        <?php
           while ($row = mysqli_fetch_array($result) ) {
             $id = $row['id'];
             ?>
              <li class="list-group-item"><h4><a href="adminquestion.php?q_id=<?php echo $row['id']; ?>"><?php echo $row['title']; ?> </a></h4>
                <a href="adminedit.php?q_id=<?php echo $id; ?>" class="btn btn-default"> Edit </a>
                <a href="admindelete.php?q_id=<?php echo $id; ?>" class="btn btn-danger"> Delete </a>
              </li>
        <?php } ?>
  </ul>
  </div>
  </div>
</div>
<?php require 'footer.php'; ?>
