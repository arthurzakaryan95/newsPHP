<?php
$author = $_SESSION['username'];
include 'db.php';
 $sqll = "SELECT *
 FROM `user`
 LEFT JOIN `news`
 ON (`user`.`id` = `news`.`user_id`) WHERE `user`.`username` ='$author' AND `user`.`id` = `news`.`user_id`";
$result = mysqli_query($conn,$sqll);
if($result->num_rows > 0){
        // output data of each row
        while($row = $result->fetch_assoc()) {
            echo "<h1>$row[title]</h1>";
            echo "<h4>$row[author]</h4>";
            echo "<p>$row[news]</p>";
            echo '<form action="editquery.php" method="post">';
            echo "<button type='submit'  name = 'id' value = '$row[id]' class='btn btn-primary' >Edit</button>";
            echo "</form>";
            echo '<form action="deletequery.php" method="post">';
            echo "<button type='submit' name = 'deleteid' value = '$row[id]' class='btn btn-primary inputnews' >Delete</button>";
            echo '</form>';
        };
}else{
  echo "Not have news yet";
}
 ?>
