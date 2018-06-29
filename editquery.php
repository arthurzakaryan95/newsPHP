<?php
session_start();
include 'db.php';
$editid = $_POST['id'];
header("Location:queryedit.php");
$_SESSION['id'] = $editid;

 ?>
