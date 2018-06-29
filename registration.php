<?php
$errorusr = false;
$errorpwd = false;
$errorusername = false;
$errorage = false;
    if(!empty($_GET['fr']) && $_GET['fr'] == 1){
        $errorusr = true;
    }
     if(!empty($_GET['cp']) && $_GET['cp'] == 1){
        $errorpwd = true;
    }
    if(!empty($_GET['eu']) && $_GET['eu'] == 1){
       $errorusername = true;
   }
   if(!empty($_GET['ea']) && $_GET['ea'] == 1){
      $errorage = true;
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
        <label class="h2">Registration</label>
        <form action="registrate.php" method="post">
            <div class="form-group">
                <div id="username"></div>
               <?php if( $errorusr){
                    echo "<span>please enter all fields</span>";
                  }elseif( $errorusername){
                         echo "<span>Duplicate username</span>";
                       }else {
                           echo "Username:";
                       }
                ?>

                <br/>
                <input type="text" class="form-control" name="username" placeholder="Username"/>
            </div>

            <div class="form-group">
                <div id="firstname"></div>
                Firstname:
                <br/>
                <input type="text" class="form-control" name="firstname" placeholder="Firstname"/>
            </div>

            <div class="form-group">
                <div id="lastname"></div>
                Lasstname:
                <br/>
                <input type="text" class="form-control" name="lastname" placeholder="Lasstname"/>
            </div>

            <div class="form-group">
                <div id="email"></div>
                Email:
                <br/>
                <input type="email" class="form-control" name="email" placeholder="email"/>
            </div>

            <div class="form-group">
                <div id="age"></div>
               <?php if( $errorage){
                    echo "<span>please enter 16+ value</span>";
                    }else {
                        echo "Age:";
                    }
                ?>

                <br/>
                <input type="number" class="form-control" name="age" placeholder="Age"/>
            </div>


            <div class="form-group">
                <div id="pass"></div>
                   <?php if($errorpwd){
                    echo "<span>please enter same password</span>";
                    }else {
                        echo "Password:";
                    }
                   ?>
                <br/>
                <input type="password" class="form-control" name="password" placeholder="Password">
            </div>

            <div class="form-group">
                <div id="pass"></div>
                   <?php if($errorpwd){
                    echo "<span>please enter your confirm password</span>";
                    }else {
                        echo "Confirm Password:";
                    }
                   ?>
                <br/>
                <input type="password" class="form-control" name="repassword" placeholder="Password">
            </div>
            <button type="submit" class="btn btn-primary">Registration</button>
            <a href="index.php">LogIn</a>
        </form>
    </div>
</div>
<script type="text/javascript" src="js/script.js"></script>

</body>
</html>
