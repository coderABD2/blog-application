<?php
session_start();
session_destroy();
if(!isset($_SESSION["id"])){
    header("location:login.php");
}
header("location:login.php");
?>
