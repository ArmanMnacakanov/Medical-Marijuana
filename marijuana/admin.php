<?php
include 'db.php';
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="ar.css">
</head>

<body>

<a href="logout.php?logout" class="logout">Logout</a>

    <?php
    if (!isset($_SESSION['Admin'])) {
    ?>
        <div class="admin">
            <form action="admin2.php" class="adm" method="POST">
                <input type="text" name="login" placeholder="Name">
                <input type="password" name="password" placeholder="Password">
                <input id="btn" type="submit" value="OK" name="ok">
            </form>
        </div>
    <?php
    } else {
    ?>

        <form class="form" action="upload.php" method="post" enctype="multipart/form-data">
            <input type="text" name="anuny" placeholder="apranqi anuny">
            <input type="text" name="giny" placeholder="apranqi giny">
            <p>Select image to upload</p>
            <input type="file" name="file">
            <input type="submit" name="submit" class="submit" value="Upload">
        </form>

        <div class="apranqner">
            <div class="parent">
                <?php
                //include the database configuration file

                // geti popoxakan@ mnacac@ admin2 uma poxac
                //////////////////////////////////////////////////////////////
                //Get images from the database
                //$query = $db->query("SELECT * FROM images ORDER BY uploaded_on DESC");
                $query = "SELECT * FROM marijuanna";
                $result = mysqli_query($conn, $query);
                $resultCheck = mysqli_num_rows($result);
                if ($resultCheck > 0) {
                    while ($row = mysqli_fetch_assoc($result)) {
                        $imageURL =  $row["img_name"];
                        $arjeq =  $row["file_giny"];
                        $anun = $row["file_name"];
                        $id = $row["id"];
                ?>

                        <div class="forma">
                            <div class="del"><i class="fa-solid fa-xmark"></i></div>
                            <img src="<?php echo $imageURL; ?>" width="100%" alt="">
                            <button class="image" name="image" type="button">Թարմացնել նկարը</button>
                            <button class="name" name="btn" type="button">ԹարմացնելԱնունը</button>
                            <button class="kgg" name="btn2" type="button">Թարմացնել գինը</button>
                            <div class="zzz">
                                <h2><?php echo $anun ?></h2>
                                <p>$<span class="price"><?php echo $arjeq; ?></span></p>
                            </div>
                            <div class="fonn" id="fon">
                                <p><?php echo $id ?></p>
                                <form id="gin" class="ginForm" action="update.php?id=<?php echo $id; ?>" method="post" enctype="multipart/form-data">
                                    <button type="button" class="close"><i class="fa-solid fa-xmark"></i></button>
                                    <input type="text" name="giny2" placeholder="Թարմացնել գինը">
                                    <button type="submit" class="sub" name="submit">Update</button>
                                </form>
                                <form id="name" class="nameForm" action="update.php?id=<?php echo $id; ?>" method="post" enctype="multipart/form-data">
                                    <button type="button" class="close"><i class="fa-solid fa-xmark"></i></button>
                                    <input type="text" name="name2" placeholder="Թարմացնել Անունը">
                                    <button type="submit" class="sub" name="submit2">Update</button>
                                </form>
                                <form id="newimage" class="newimage" action="update.php?id=<?php echo $id; ?>" method="post" enctype="multipart/form-data">
                                    <button type="button" class="close"><i class="fa-solid fa-xmark"></i></button>
                                    <input type="file" name="file2">
                                    <button type="submit" class="sub" name="submit3">Update</button>
                                </form>
                                <div class="harc">
                                    <p>Do you really want to delete ?</p>
                                    <a class="delete" href="delete.php?id=<?php echo $id; ?>">Yes</a>
                                    <button type="button" class="no">No</button>
                                </div>
                            </div>
                        </div>


                    <?php }
                } else { ?>
                    <p>No Image(s) found... </p>
                <?php }
                ?>
            </div>
        </div>
    <?php } ?>
    <style>
        * {
            margin: 0;
            padding: 0;
        }

        .admin {
            top: 0;
            left: 0%;
            position: absolute;
            width: 100%;
            height: 1000px;
            background: rgb(174, 216, 238);
            background: linear-gradient(270deg, rgba(174, 216, 238, 0.9) 0%, rgba(255, 255, 255, 0.9) 80%);
            position: fixed;
            z-index: 99999999;
            display: <?php echo $display ?>;
            /* display: none; */
        }

        .adm {
            position: relative;
            display: flex;
            justify-content: center;
            align-items: center;
            flex-direction: column;
            width: 40%;
            height: 300px;
            background-color: #d3f0ea;
            border-radius: 20px;
            box-shadow: 2px 2px 10px rgb(54, 53, 53), -2px -2px 10px rgb(138, 135, 135);
            margin: 10% auto;
            animation: textanim forwards .40s;
            opacity: 0;
        }

        #btn {
            cursor: pointer;
            text-align: center;
            width: 30%;
            height: 60px;
            border-radius: 30px;
            background-color: darkslategray;
            margin: 5px;
            z-index: 999999;
            right: 35%;
            top: 75%;
            color: whitesmoke;
            font-size: 25px;
            box-sizing: border-box;
            padding: 10px;
            text-decoration: none;
            border-bottom: none;
            border-top: none;
            border-left: none;
            border-right: none;
            cursor: pointer;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            transition: 0.2s;
            animation: textanim forwards .80s;
            opacity: 0;
        }

        .logout{
            position: absolute;
            text-align: center;
            width: 30%;
            height: 60px;
            border-radius: 30px;
            background-color: darkslategray;
            margin: 5px;
            right: 35%;
            top: 5%;
            color: whitesmoke;
            font-size: 25px;
            box-sizing: border-box;
            padding: 10px;
            text-decoration: none;
            border-bottom: none;
            border-top: none;
            border-left: none;
            border-right: none;
            cursor: pointer;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            transition: 0.2s;
            animation: textanim forwards .80s;
            opacity: 0;
        }

        .logout:hover{
            background-color: brown;
            color: whitesmoke;
        }
        .adm>button:hover {
            background-color: brown;
            color: whitesmoke;
        }

        .adm>input {
            outline: none;
            box-sizing: border-box;
            padding-left: 20px;
            width: 60%;
            height: 60px;
            font-size: 20px;
            border-radius: 30px;
            margin: 10px;
            border-bottom: none;
            border-top: none;
            border-left: none;
            border-right: none;
            box-shadow: 5px 5px 20px #282727;
            animation: textanim forwards .60s;
            opacity: 0;
        }

        .form {
            position: relative;
            margin-top: 2%;
            margin-left: 2%;
            width: 27%;
            height: 400px;
            /* background-color: red; */
            border-radius: 20px;
            box-shadow: 5px 5px 15px black;
            display: flex;
            flex-direction: column;
        }

        .form>input {
            font-size: 15px;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            outline: none;
            padding-left: 5px;
            margin: 15px;
            width: 70%;
            height: 50px;
            animation: textanim forwards .60s;
            opacity: 0;
        }

        .form>p {
            width: 100%;
            text-align: center;
        }

        .submit {
            top: 65%;
            left: 5%;
            cursor: pointer;
            position: absolute;
            width: 15%;
            height: 40px;
        }

        .apranqner {
            top: 70%;
            background-color: gray;
        }

        .fonn {
            top: 0;
            left: 0%;
            position: absolute;
            width: 100%;
            height: 1000px;
            background: rgb(174, 216, 238);
            background: linear-gradient(270deg, rgba(174, 216, 238, 0.9) 0%, rgba(255, 255, 255, 0.9) 80%);
            position: fixed;
            z-index: 99999999;
            display: none;
        }

        .fonn>form {
            position: relative;
            display: flex;
            justify-content: center;
            align-items: center;
            flex-direction: column;
            width: 40%;
            height: 200px;
            background-color: #d3f0ea;
            border-radius: 20px;
            box-shadow: 2px 2px 10px rgb(54, 53, 53), -2px -2px 10px rgb(138, 135, 135);
            margin: 15% auto;
        }

        .fonn>form>input {
            top: 30%;
            left: 5%;
            position: absolute;
            border-radius: 10px;
            font-size: 20px;
            outline: none;
            width: 55%;
            border-bottom: none;
            border-top: none;
            border-left: none;
            border-right: none;
            box-shadow: 5px 5px 15px rgb(174, 216, 238);
            height: 50px;
            margin: 10px;
        }

        .delete {
            text-align: center;
            width: 30%;
            height: 60px;
            border-radius: 30px;
            background-color: darkslategray;
            position: absolute;
            z-index: 999999;
            right: 5%;
            top: 50%;
            color: whitesmoke;
            font-size: 30px;
            box-sizing: border-box;
            padding: 12px;
            text-decoration: none;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }

        .no {
            text-align: center;
            width: 30%;
            height: 60px;
            border-radius: 30px;
            background-color: darkslategray;
            position: absolute;
            z-index: 999999;
            left: 5%;
            top: 50%;
            color: whitesmoke;
            font-size: 30px;
            box-sizing: border-box;
            padding: 12px;
            text-decoration: none;
            border-bottom: none;
            border-top: none;
            border-left: none;
            border-right: none;
            cursor: pointer;
        }

        .no:hover {
            background-color: brown;
            color: whitesmoke;
        }

        .delete:hover {
            background-color: brown;
            color: whitesmoke;
        }

        .name {
            left: -70%;
            width: 60%;
            height: 50px;
            top: 5%;
            position: absolute;
            z-index: 99999999;
            text-align: center;
            box-sizing: border-box;
            background-color: darkslategray;
            color: whitesmoke;
            font-size: 15px;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            border-bottom: none;
            border-top: none;
            border-left: none;
            border-right: none;
            box-shadow: 5px 5px 10px rgb(54, 53, 53);
            border-radius: 30px;
            cursor: pointer;
            transition: .65s cubic-bezier(.2, .6, .0, 1);
        }

        .forma:hover .name {
            left: 5%;
        }

        .name:hover {
            background-color: brown;
            color: whitesmoke;
        }

        .image {
            opacity: o;
            text-align: center;
            box-sizing: border-box;
            background-color: darkslategray;
            color: whitesmoke;
            font-size: 15px;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            border-bottom: none;
            border-top: none;
            border-left: none;
            border-right: none;
            box-shadow: 5px 5px 10px rgb(54, 53, 53);
            border-radius: 30px;
            cursor: pointer;
            top: 35%;
            left: -70%;
            width: 60%;
            height: 50px;
            position: absolute;
            transition: .65s cubic-bezier(.2, .6, .0, 1);
        }

        .image:hover {
            background-color: brown;
            color: whitesmoke;
        }

        .forma:hover>.image {
            opacity: 1;
            left: 5%;
        }

        .close {
            right: 3%;
            top: 3%;
            width: 10%;
            height: 55px;
            font-size: 25px;
            text-align: center;
            position: absolute;
            box-sizing: border-box;
            padding: 8px;
            background-color: darkslategray;
            cursor: pointer;
            color: whitesmoke;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            border-bottom: none;
            border-top: none;
            border-left: none;
            border-right: none;
            box-shadow: 5px 5px 10px rgb(54, 53, 53);
            border-radius: 50%;
            transition: 0.5s;

        }

        .close:hover {
            background-color: brown;
            color: whitesmoke;
        }

        .kgg {
            position: absolute;
            width: 60%;
            height: 50px;
            z-index: 99999999;
            text-align: center;
            box-sizing: border-box;
            background-color: darkslategray;
            color: whitesmoke;
            font-size: 15px;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            border-bottom: none;
            border-top: none;
            border-left: none;
            border-right: none;
            box-shadow: 5px 5px 10px rgb(54, 53, 53);
            border-radius: 30px;
            cursor: pointer;
            transition: .65s cubic-bezier(.2, .6, .0, 1);
            top: 20%;
            left: -70%;
        }

        .kgg:hover {
            background-color: brown;
            color: whitesmoke;
        }

        .forma:hover .kgg {
            left: 5%;
        }

        .sub {
            right: 10%;
            top: 35%;
            position: absolute;
            width: 25%;
            text-decoration: none;
            text-align: center;
            box-sizing: border-box;
            padding: 10px;
            background-color: darkslategray;
            height: 50px;
            cursor: pointer;
            color: whitesmoke;
            font-size: 20px;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            border-bottom: none;
            border-top: none;
            border-left: none;
            border-right: none;
            box-shadow: 5px 5px 10px rgb(54, 53, 53);
            border-radius: 30px;
            transition: 0.5s;
        }

        .sub:hover {
            background-color: brown;
            color: whitesmoke;
        }

        .harc {
            width: 40%;
            height: 300px;
            background-color: #d3f0ea;
            box-shadow: 5px 5px 25px black;
            display: none;
            position: relative;
            border-radius: 30px;
            top: 20%;
            left: 30%;
        }

        .harc>p {
            width: 100%;
            text-align: center;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            position: absolute;
            font-size: 30px;
            top: 25%;
        }

        .del {
            right: 3%;
            top: 3%;
            width: 14%;
            height: 55px;
            font-size: 25px;
            text-align: center;
            position: absolute;
            box-sizing: border-box;
            padding: 8px;
            background-color: darkslategray;
            cursor: pointer;
            color: whitesmoke;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            border-bottom: none;
            border-top: none;
            border-left: none;
            border-right: none;
            box-shadow: 5px 5px 10px rgb(54, 53, 53);
            border-radius: 50%;
            transition: 0.5s;
        }

        .del:hover {
            background-color: brown;
            color: whitesmoke;
        }
    </style>

    <script src="jquery-3.6.0.min.js"></script>
    <script src="ar.js"></script>


</body>


</html>