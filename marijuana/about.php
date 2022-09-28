<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About</title>
    <link rel="stylesheet" href="ar.css">
</head>

<body>

    <?php
    include 'menu.php'
    ?>


    <div class="box2">
        <div>
            <h1>About us</h1>
            <em>Commodo regione praesent sed ea. Dignissim similique duo te, et euripidis urbanitas sit, nam id utroque inimicus.</em>
            <p>Duis sed odio sit amet nibh vulputate cursus. Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit. Duis sed odio sit amet nibh vulputate cursus a sit amet mauris. Morbi accumsan ipsum velit. Nam nec tellus a odio tincidunt auctor a ornare odio. Sed non mauris vitae erat consequat auctor eu in elit. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Mauris in erat justo. Nullam ac urna eu felis dapibus condimentum sit amet a augue. Sed non neque elit. Sed ut imperdiet nisi. Proin condimentum fermentum nunc. Etiam pharetra, erat sed fermentum feugiat, velit mauris egestas quam, ut aliquam massa nisl quis neque. Suspendisse in orci enim.</p>
        </div>
        <div id='image'></div>
    </div>
    <div class="container4">
        <div id="product">
            <h1>Our Products</h1>
            <p><em>Commodo regione praesent sed ea. Dignissim similique duo te, et euripidis urbanitas sit, nam id utroque inimicus.</em></p>
            <ul class="ul">
                <li type="none">
                    <i class="fa-solid fa-check"></i>
                    <h2>Anexiety and Stress</h2>
                    <p>Corpora detraxit ut sed, in vitae aliquam vituperata sea. Ad est eleifend.</p>
                </li>

                <li type="none">
                    <i class="fa-solid fa-check"></i>
                    <h2>Migrens and Chronic Pain</h2>
                    <p>Corpora detraxit ut sed, in vitae aliquam vituperata sea. Ad est eleifend.</p>
                </li>

                <li type="none">
                    <i class="fa-solid fa-check"></i>
                    <h2>Alzheimer’s and Glaucoma</h2>
                    <p>Corpora detraxit ut sed, in vitae aliquam vituperata sea. Ad est eleifend.</p>
                </li>
            </ul>
        </div>
        <div class="kasyak" id="kasyak"></div>
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
        .box2 {
            width: 100%;
            height: 700px;
            background: rgb(255, 248, 237);
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .box2 div {
            width: 40%;
            height: 600px;
            margin: 20px;
            /* background-color: green; */
            overflow: hidden;
            position: relative;
            animation: textanim forwards .9s;
            opacity: 0;
        }

        #image {
            background-image: url(img/img/single-img-3.jpg);
            background-size: cover;
            background-position: center;
            animation: textanim forwards .4s;
            opacity: 0;
        }

        .box2 div h1 {
            margin: 10px;
            padding-top: 25px;
            color: #006603;
            font-weight: 100;
            padding-left: 15px;
            font-size: 70px;
            font-family: 'Nanum Myeongjo', serif;
        }

        .box2 div em {
            position: absolute;
            width: 80%;
            top: 25%;
            font-size: 20px;
            color: #fc7878;
            box-sizing: border-box;
            padding-left: 30px;
        }

        .box2 div p {
            color: rgba(0, 0, 0, 0.567);
            position: absolute;
            width: 80%;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            box-sizing: border-box;
            padding-left: 30px;
            top: 40%;
        }

        .container4 {
            margin-top: 0;
        }

        @media(max-width:1080px) {

            #image {
                height: 500px;
            }

            .box2 div em {
                width: 95%;
            }

            .box2 div p {
                width: 95%;
            }
        }

        @media(max-width:990px) {
            .box2 {
                flex-direction: column;
                height: 1200px;
            }

            .box2 div {
                width: 80%;
                margin: 5px;
                /* background-color: #006603; */
            }

            #image {
                height: 500px;
            }

            .box2 div h1 {
                margin: 0;
                padding-left: 0;
            }

            .box2 div em {
                padding-left: 0;
                width: 100%;
            }

            .box2 div p {
                padding-left: 0;
                width: 70%;
            }
        }

        @media(max-width:360px) {
            .box2{
                height: 1000px;
            }

            .box2 div {
                width: 100%;
                margin: 10px;
                height: 500px;
                /* background-color: #006603; */
            }

            #image {
                height: 400px;
            }

            .box2 div h1 {
                margin: 5px;
                padding-left: 15px;
            }

            .box2 div em {
                padding-left: 15px;
                width: 100%;
            }

            .box2 div p {
                padding-left: 15px;
                width: 95%;
            }
        }
    </style>

    <script src="jquery-3.6.0.min.js"></script>
    <script src="ar.js"></script>

</body>

</html>