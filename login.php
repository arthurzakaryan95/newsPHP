<?php
include_once 'db.php';
session_start();

	$username = $_POST['username'];
	$password = $_POST['password'];
	// $remember = $_POST['remember'];
	$sql = "SELECT `user`.`id`, `user`.`username`, `user`.`password` FROM user WHERE username = '$username'";

	$result = mysqli_query($conn,$sql);



	// if("SELECT `user`.`username` FROM user WHERE username ='$username'"){// mysqli_query
	// 	if("SELECT `user`.`password` FROM user WHERE password ='$password'"){
	// 		echo "<pre>";
	// 			// output data of each row
	// 			while($row = $result->fetch_assoc()) {
	// 					print_r($row);
	// 			}
	// 	} else {
	// 		 header("Location:index.php?ep=1");
	// 	}
	// 	}else{
	// 		header("Location:index.php?eu=1");
	// 	}

	if ($result->num_rows > 0) {
		echo "<pre>";
	    // output data of each row
	    $row = $result->fetch_assoc();
				if ($password == $row['password']) {
					$_SESSION['isloggedin'] = $row['id'];
					$_SESSION['username'] = $row['username'];
					header("Location:main.php");
				}else{
					header("Location:index.php?ep=1");
				}
	} else {
	    header("Location:index.php?eu=1");
	}
	$conn->close();

?>
