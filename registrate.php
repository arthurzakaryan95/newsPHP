<?php

include_once 'db.php';
$username = $_POST['username'];
$firstname = $_POST['firstname'];
$lastname = $_POST['lastname'];
$email = $_POST['email'];
$age = $_POST['age'];
$password = $_POST['password'];
$repassword = $_POST['repassword'];
$sqll = "SELECT `user`.`username` FROM `user` WHERE `username` = '$username'";
$result = mysqli_query($conn,$sqll);

if($result->num_rows > 0){
  header("Location:registration.php?eu=1");
}else{
  if (!(empty($username) || empty($password) || empty($repassword) || empty($firstname)
   || empty($lastname) || empty($email) || empty($age))) {
     if($age<16){
       header("Location:registration.php?ea=1");
     }else{
       if($password == $repassword){
         $sql = "INSERT INTO user (id, username, firstname, lastname, email, age, password)
       VALUES ('', '$username', '$firstname', '$lastname', '$email', '$age',  '$password')";
       }else{
         header("Location:registration.php?cp=1");
       }
       if (mysqli_query($conn, $sql)) {
           header("Location:index.php");
       } else {
           echo "Error: " . $sql . "<br>" . mysqli_error($conn);
       }
       mysqli_close($conn);
     }

  }else{
    header("Location:registration.php?fr=1");
}
}
 ?>
