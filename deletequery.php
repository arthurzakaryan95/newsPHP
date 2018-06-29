<?php
session_start();
include 'db.php';
$deleteid = $_POST['deleteid'];
$_SESSION['deleteid'] = $deleteid;
header("Location:delete.php");


 ?>
