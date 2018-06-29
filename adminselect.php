<!-- <?php
include 'db.php';
$sqll = "SELECT  * FROM `news`";
$result = mysqli_query($conn,$sqll);
if($result->num_rows > 0){
        // output data of each row
        while($row = $result->fetch_assoc()) {
            echo "<h1>$row[title]</h1>";
            echo "<h4>$row[author]</h4>";
            echo "<p>$row[news]</p>";
            echo '<input type="checkbox" name="" class="input">';
        }
}else{
  echo "Not have news yet";
}
 ?> -->
