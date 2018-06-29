<?php
  session_start();
  include 'db.php';

$deleteid = $_SESSION['deleteid'];

  $sql = "DELETE from `news`
    WHERE `news`.`id` = '$deleteid'";
    if (mysqli_query($conn, $sql)) {
        header("Location:mynews.php");
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
    mysqli_close($conn);


 ?>
