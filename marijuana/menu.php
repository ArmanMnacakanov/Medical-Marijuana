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
    <div class="box">
        <div class="icon"></div>
        <div class="menuicon" id="menuclick"><i class="fa-solid fa-bars"></i></div>
        <a href="#" class="karzina" id="karzina"><i class="fa-solid fa-bag-shopping"></i></a>
        <div class="karzinadiv" id="karzinadiv">
            <h3>NO Productes in the card</h3>
        </div>
        <div class="menu" id="menu">
            <a href="index.php" id="home">Home</a>
            <a href="about.php" id="about">About Us</a>
            <a href="contact.php" id="contact">Contact</a>
        </div>
    </div>

    <style>
        body {
            background: rgb(255, 248, 237);
        }

        .box {
            z-index: 1;
            width: 100%;
            height: 100px;
            background: rgb(255, 248, 237);
            /* overflow: hidden; */
            position: relative;
            display: flex;
            flex-direction: column;
        }

    
    </style>



    <script src="jquery-3.6.0.min.js"></script>
    <script src="ar.js"></script>

</body>

</html>