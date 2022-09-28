<?php
//include the database configuration file
include 'db.php';
$statusMsg = '';


//file upload path
$targetDir = "./";
$faileGiny = $_POST['giny']; 
$fileAnuny = $_POST['anuny'];
$id = $_POST['id'];
$fileName = basename($_FILES["file"]["name"]);
$targetFilePatch = $targetDir . $fileName;
$faileType = pathinfo($targetFilePatch, PATHINFO_EXTENSION);

if (isset($_POST["submit"]) && !empty($_FILES["file"]["name"]) && !empty($_POST['giny'])  && !empty($_POST['anuny'])) {

    //allow certain file formats
    $allowTypes = array('jpg', 'png', 'jpeg', 'gif', 'pdf','avif');
    if (in_array($faileType, $allowTypes)) {
        //ipload file to server
        if (move_uploaded_file($_FILES["file"]["tmp_name"], $targetFilePatch)) {
            //insert image file name inta database
            $insert = "INSERT INTO marijuanna (`id`,`img_name`,`file_giny`,`file_name`)
                                VALUES ('$id','$fileName','$faileGiny','$fileAnuny')";
            mysqli_query($conn, $insert);
            

            //$insert = $db->query("INSERT into images (file_name) VALUES ('".$fileName"')");
            if ($insert) {
                $statusMsg = "the file " . $fileName . " has been uploaded successfuly.";
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

//Display ststus message
echo $statusMsg;
header("location:  admin.php");
