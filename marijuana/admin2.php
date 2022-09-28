<?php
include 'db.php';
session_start();
if (isset($_POST['ok'])) {
    $login = $_POST['login'];
    $password = $_POST['password'];
    if (!empty($login) && !empty($password)) {
        $quer = "SELECT * FROM `admin` WHERE `Login` = '" . $login . "';";
        $result = mysqli_query($conn, $quer);
        if (mysqli_num_rows($result) > 0) {
            while ($row = mysqli_fetch_assoc($result)) {
                if (password_verify($password, $row['Password'])) {
                    $_SESSION['Admin'] = $row['id'];
                    header("location:admin.php?Admin");
                } else {
                    header("location:admin.php?err=Admin Password is invalid");
                }
            }
        } else {
            header("location:admin.php?err=Admin is not found");
        }
    } else {
        if (empty($login)) {
            header("location:admin.php?err=Admin login is invalid");
        }
        if (empty($password)) {
            header("location:admin.php?err=Admin lassword is invalid");
        }
    }
} else {
    header("location:admin.php");
    session_destroy();
}
