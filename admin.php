<!-- <?php
include 'db.php';
$id = $_SESSION['isloggedin'];
$sqll = "SELECT  * FROM `user` WHERE `user`.`status` = '1' AND `user`.`id` = '$id'";
$result = mysqli_query($conn,$sqll);

if($result->num_rows > 0){
      echo '<a class="nav-link" href="adminpanel.php">Panel admin</a>';
}
 ?> -->
