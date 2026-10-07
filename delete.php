<?php
session_start();
include "db.php";
if(isset($_SESSION["id"])){
    $ids = $_SESSION["id"];
    echo $ids;

    $sl=$conn->prepare("delete from blog where userid=?");
    $sl->bind_param("i", $ids);
    $sl->execute();
    header("location:dashbord.php");
}

?>
