<?php
include 'db.php';
$statusMsg = '';
session_start();



if (isset($_POST['submit'])) {
    $faileGiny2 = $_POST['giny2'];
    $id = $_GET['id'];
    if (!empty($faileGiny2)) {
        $qu = "UPDATE `marijuanna` SET `file_giny`='$faileGiny2' WHERE `id` =  '$id' ";
        $result = mysqli_query($conn, $qu);
        header("location:   index.php");
    } else {
        echo "error"; 
    }
} 

if (isset($_POST['submit2'])) {
    $faileAnun2 = $_POST['name2'];
    $id = $_GET['id'];
    if (!empty($faileAnun2)) {
        $qu = "UPDATE `marijuanna` SET `file_name`=' $faileAnun2' WHERE `id` =  '$id' ";
        $result = mysqli_query($conn, $qu);
        header("location:   index.php");
    } else {
        echo "error";
    }
}

if (isset($_POST['submit3']) && !empty($_FILES["file2"]["name"])) {
    $targetDir = "./";
    $id = $_GET['id'];
    $imgName = basename($_FILES["file2"]["name"]);
    $targetFilePatch = $targetDir . $imgName;
    $faileType = pathinfo($targetFilePatch, PATHINFO_EXTENSION);

  
    $allowTypes = array('jpg', 'png', 'jpeg', 'gif', 'pdf', 'avif');
    if (in_array($faileType, $allowTypes)) {
        //ipload file to server
        if (move_uploaded_file($_FILES["file2"]["tmp_name"], $targetFilePatch)) {
            //insert image file name inta database
            $qu = "UPDATE `marijuanna` SET `img_name`='  $imgName' WHERE `id` =  '$id' ";
            $result = mysqli_query($conn, $qu);
            if ($qu) {
                $statusMsg = "the file " . $imgName . " has been uploaded successfuly.";
            } else {
                $statusMsg = "File upload filed, please try again.";
            }
        } else {
            $statusMsg = "Sorry, there was an error uploading your file.";
        }
    } else {
        $statusMsg = "Sorry, only JPG, JPEG, PNG, GIF, avif & PDF files are allowed to upload.";
    }
} else {
    $statusMsg = "Please select a file to upload.";
}
echo $statusMsg;
header("location:  admin.php");
