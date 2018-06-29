<?php

include_once 'db.php';
session_start();

$title = $_POST['title'];
$author = $_SESSION['username'];
$news = $_POST['news'];
$isloggedin = $_SESSION['isloggedin'];
$sqll = "SELECT  `news`.`title` FROM `news` WHERE `title` = '$title'";
$result = mysqli_query($conn,$sqll);
if($result->num_rows > 0){
  header("Location:addnews.php?et=1");
}else{
  if (!(empty($title) || empty($author) || empty($news))) {
         $sql = "INSERT INTO news (id, user_id, title, author, news)
       VALUES ('', '$isloggedin', '$title', '$author', '$news')";
       if (mysqli_query($conn, $sql)) {
           header("Location:main.php");
       } else {
           echo "Error: " . $sql . "<br>" . mysqli_error($conn);
       }
       mysqli_close($conn);
  }else{
    header("Location:addnews.php?ar=1");
}
}


 ?>
