<?php
session_start();
include 'db.php';
$title = $_POST['title'];
$news = $_POST['news'];
$author = $_SESSION['username'];
$editid = $_SESSION['id'];

 $sqll = "SELECT * FROM `news`
  WHERE `news`.`id` = '$editid'";
$result = mysqli_query($conn,$sqll);
while($row = $result->fetch_assoc()){
  $newstitle = $row['title'];
  $newsnews = $row['news'];
  $_SESSION['title'] = $newstitle;
  $_SESSION['news'] = $newsnews;
}


  if (!(empty($title) || empty($news))) {
        $sql = "UPDATE `news`
         SET `news`.`title`='$title', `news`.`news` ='$news' WHERE `news`.`id` = '$editid'";
       if (mysqli_query($conn, $sql)) {
           header("Location:mynews.php");
       } else {
           echo "Error: " . $sql . "<br>" . mysqli_error($conn);
       }
       mysqli_close($conn);
  }else{
    header("Location:edit.php?ar=1");
}


 ?>
