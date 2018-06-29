<?php

session_start();

$errorusr = false;
$errorpwd = false;
    if(!empty($_GET['eu']) && $_GET['eu'] == 1){
        $errorusr = true;
    }
     if(!empty($_GET['ep']) && $_GET['ep'] == 1){
        $errorpwd = true;
    }
?>
<html>
<head>
    <link rel="stylesheet" type="text/css" href="./resource/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="./resource/css/bootstrap-grid.min.css">

    <link rel="stylesheet" type="text/css" href="./resource/css/style.css">
    <link rel="stylesheet" href="css/style.css">


    <script type="text/javascript" src="./resource/js/jquery-3.2.1.min.js"></script>

    <!-- <script type="text/javascript" src="./resource/js/bootstrap.min.js"></script -->
</head>
<body>
<div class="container-fluid log-in d-flex justify-content-center" style="height: 100%">
    <div class="col-md-3 align-self-center">
        <label class="h2">LogIn</label>
        <form action="login.php" method="post">
            <div class="form-group">
                <div id="username"></div>
               <?php if( $errorusr){
                    echo "<span>please enter your username</span>";
                    }else {
                        echo "Username:";
                    }
                ?>

                <br/>
                <input type="text" class="form-control" name="username" placeholder="Username"/>
            </div>
            <div class="form-group">
                <div id="pass"></div>
                   <?php if($errorpwd){
                    echo "<span>please enter your password</span>";
                    }else {
                        echo "Password:";
                    }
                   ?>
                <br/>
                <input type="password" class="form-control" name="password" placeholder="Password">
            </div>
            <div class="form-group form-check">
              <label class="form-check-label">
                <input class="form-check-input" type="checkbox" name="remember"> Remember me
              </label>
            </div>
            <button type="submit" class="btn btn-primary">LogIn</button>
            <a href="registration.php">Registration</a>
        </form>
    </div>
</div>
<script type="text/javascript" src="js/script.js"></script>

</body>
</html>
