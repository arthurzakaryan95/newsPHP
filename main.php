<?php
include_once 'db.php';


session_start();

if(empty($_SESSION['isloggedin'])){
  header("Location:index.php");
}
  include_once 'home_page.php';

// coursera.enchant_broker_set_ordering
//edx
//events.yandex.ru

//firstname
//lastname
//email
//age



?>
