<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="ar.css">
</head>

<body>

    <?php
    include 'menu.php'
    ?>


    <div class="contact">
        <div>
            <h1>Get in Touch</h1>
            <em>Commodo regione praesent sed ea. Dignissim similique duo te, et euripidis urbanitas sit, nam id utroque inimicus.</em>
            <p>Duis sed odio sit amet nibh vulputate cursus. Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit. Duis sed odio sit amet nibh vulputate cursus a sit amet mauris.
                Morbi accumsan ipsum velit. Nam nec tellus a odio tincidunt auctor a ornare odio.</p>
            <div class="number">
                <div>
                    <p> <i class="fa-solid fa-mobile-screen-button"></i> +002 666 7834</p><br>
                    <p> <i class="fa-solid fa-envelope"></i> CBD@QODE-THEMES.COM</p>
                </div>
                <div>
                    <p><i class="fa-solid fa-mobile-screen-button"></i> +002 555 543 467</p><br>
                    <p><i class="fa-solid fa-location-dot"></i> 27 RUE DU CALVAIRE</p>
                </div>
            </div>
        </div>
        <div id="sendmessage">
            <input type="text" name="" id="" placeholder="EMAIL *">
            <input type="text" name="" id="" placeholder="NAME *">
            <input type="text" name="" id="text" placeholder="TEXT MESSAGE *">
            <a href="#" class="sendmessage">Send Message</a>
        </div>
    </div>




    <div class="ready">
        <h2>Ready to start growing with us?</h2>
        <em>Cu vel decore commune imperdiet, sit habeo errem mollis ei</em>
        <div class="letsdiv">
            <a href="">Let's talk </a>
            <div class="lets">
                <div class="dd">
                    <i class="fa-solid fa-angle-right"></i>
                    <i class="fa-solid fa-plus"></i>
                </div>
            </div>
        </div>

    </div>

    <?php
    include 'final.php'
    ?>

    <style>
        .contact {
            width: 100%;
            height: 500px;
            background: rgb(255, 248, 237);
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .contact>div {
            margin: 10px;
            position: relative;
            width: 40%;
            height: 450px;
            /* background-color: red; */
            display: flex;
            flex-direction: column;
            overflow: hidden;
            animation: textanim forwards .9s;
            opacity: 0;
        }

        .contact>div>input {
            border-bottom: none;
            border-top: none;
            border-left: none;
            border-right: none;
            outline: none;
            font-size: 15px;
            width: 80%;
            height: 50px;
            margin: 10px;
            box-sizing: border-box;
            padding-left: 20px;
        }

        #text {
            height: 120px;
            box-sizing: border-box;
            padding-bottom: 70px;
        }

        .sendmessage {
            width: 30%;
            height: 50px;
            border: 1px solid #006603;
            position: absolute;
            left: 2%;
            top: 70%;
            text-align: center;
            box-sizing: border-box;
            padding: 10px;
            font-size: 18px;
            color: #006603;
            text-decoration: none;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            transition: 0.2s;
        }

        .sendmessage:hover {
            border-color: #fc7878;
            background-color: #fc7878;
            color: whitesmoke;
        }

        #sendmessage {
            display: flex;
            align-items: flex-start;
        }

        .contact>div>h1 {
            font-weight: 100;
            top: 0%;
            position: absolute;
            width: 100%;
            text-align: left;
            color: green;
            font-size: 80px;
            font-family: serif;
            animation-delay: .125s;
            opacity: 0;
            animation: textanim forwards .9s;
            box-sizing: border-box;
            padding-left: 30px;
        }

        .contact>div>em {
            font-weight: 100;
            top: 20%;
            position: absolute;
            width: 80%;
            text-align: center;
            color: #fc7878;
            font-size: 22px;
            font-family: serif;
            animation-delay: .725s;
            opacity: 0;
            animation: textanim forwards 1.1s;
        }

        .contact>div>p {
            color: rgba(0, 0, 0, 0.567);
            opacity: 0;
            width: 70%;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            position: absolute;
            top: 40%;
            left: 5%;
            animation: textanim forwards .9s;
        }

        .number {
            width: 80%;
            height: 100px;
            /* background-color: #006603; */
            position: absolute;
            top: 75%;
            left: 5%;
            display: flex;
            opacity: 0;
            animation: textanim forwards .9s;
        }

        .number>div {
            width: 50%;
            height: 100px;
        }

        .number>div>p {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            color: #006603;
            box-sizing: border-box;
            /* padding: 5px; */
        }

        @media(max-width:1080px) {

            .contact>div{
                width: 50%;
            }

            .contact>div>h1 {
                padding-left: 10px;
            }

            .contact>div>em {
                left: 3%;
            }
            .contact>div>p{
                width: 75%;
            }
            .number{
                top: 77%;
            }
        }

        @media(max-width:990px) {
            .contact {
               flex-direction: column;
               height: 900px;
            }
            .contact>div{
                width: 100%;
                /* background-color: #006603; */
            }

            .contact>div>h1 {
                padding-left: 30px;
                left: 2%;
            }

            .contact>div>em {
                width: 85%;
                left: 4%;
                top: 25%;
            }
            .contact>div>p{
                top: 45%;
                width: 75%;
            }
            .number{
                top: 77%;
            }
            .contact>div>input{
                margin-left: 5%;
            }
            .sendmessage{
                left: 5%;
            }
        }

        @media(max-width:768px) {

            .contact {
               height: 1000px;
            }
            .contact>div{
                width: 100%;
                /* background-color: #006603; */
            }

            .contact>div>h1 {
                padding-left: 30px;
                left: 0%;
            }

            .contact>div>em {
                width: 85%;
                left: 0%;
                top: 25%;
            }
            .contact>div>p{
                top: 45%;
                width: 75%;
            }
            .number{
                top: 77%;
            }
            .contact>div>input{
                margin-left: 5%;
            }
            .sendmessage{
                left: 5%;
            }
        }
        @media (max-width:360px){

            .contact {
               flex-direction: column;
               height: 900px;
            }
            .contact>div{
                width: 100%;
                /* background-color: #006603; */
            }

            .contact>div>h1 {
                padding-left: 0px;
                left: 0%;
                width: 100%;
                font-size: 60px;
                text-align: center;
            }

            .contact>div>em {
                width: 100%;
                left: 0%;
                top: 25%;
            }
            .contact>div>p{
                text-align: center;
                top: 45%;
                width: 100%;
                left: 0;
            }
            .number{
                top: 85%;
            }
            .contact>div>input{
                width: 100%;
                margin-left: 0%;
            }
            .sendmessage{
                width: 50%;
                left: 5%;
            }
        }
    </style>
</body>

</html>