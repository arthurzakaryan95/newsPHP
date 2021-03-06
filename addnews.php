<?php
session_start();
$errortitle = false;
$errorreq = false;
    if(!empty($_GET['ar']) && $_GET['ar'] == 1){
        $errorreq = true;
    }
    if(!empty($_GET['et']) && $_GET['et'] == 1){
        $errortitle = true;
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
        <label class="h2">Add news</label>
        <form action="news.php" method="post">
            <div class="form-group">
                <div id="title"></div>
               <?php if( $errorreq){
                    echo "<span>please enter all fields</span>";
                  }elseif($errortitle){
                    echo "<span>Already have this title</span>";
                  }else {
                        echo "Title:";
                    }
                ?>

                <br/>
                <input type="text" class="form-control" name="title" placeholder="Title"/>
            </div>
            <div class="form-group">
                <div id="author"></div>
                Author:
                <br/>
                <input type="text" class="form-control" name="author" placeholder="<?=$_SESSION['username'] ?>" disabled>
            </div>
            <div class="form-group">
                <div id="addnews"></div>
                Type text:
                <br/>
                <textarea name="news" rows="8" cols="80"></textarea>
            </div>

            <button type="submit" class="btn btn-primary">Send</button>
        </form>
    </div>
</div>
<script type="text/javascript" src="js/script.js"></script>

</body>
</html>
