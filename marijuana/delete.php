<?php
include 'db.php';
session_start();

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $query = "DELETE FROM marijuanna WHERE `id` = '$id'";
    $result = mysqli_query($conn, $query);
    session_destroy();
    header("location:admin.php");
}else{
    header("location:admin.php");
}


?>