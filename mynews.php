<?php
  session_start();
 ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>My news</title>
    <link rel="stylesheet" type="text/css" href="./resource/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="./resource/css/bootstrap-grid.min.css">

    <!-- <link rel="stylesheet" type="text/css" href="./resource/css/style.css"> -->
    <link rel="stylesheet" href="css/style.css">

    <script type="text/javascript" src="./resource/js/jquery-3.2.1.min.js"></script>
  </head>
  <body>
    <nav class="navbar navbar-expand-sm bg-dark navbar-dark">
    <!-- Brand/logo -->
    <a class="navbar-brand" href="main.php">Logo</a>

    <!-- Links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" href="main.php">Home</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="addnews.php">Add news</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="mynews.php">My news</a>
      </li>
        <li class="nav-item">
      <?php
        include_once 'admin.php';
       ?>
       </li>
       <li class="nav-item">
         <a class="nav-link" href="logout.php">Log out</a>
       </li>

    </ul>
  </nav>
<br>
<div class="container">
    <?php
      include_once 'mynewsselect.php';
     ?>
</div>

<script type="text/javascript" src="js/script.js"></script>

  </body>
</html>
