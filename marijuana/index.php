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
    <title>Home</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="ar.css">
</head>

<body>


    <a href="#con1" class="scrollup" id="scroll"><i class="fa-solid fa-arrow-up"></i></a>
    <div class="container1" id="con1">
        <div class="container2">
            <?php
            include 'menu.php'
            ?>
            <div class="animations">
                <div class="anim1"></div>
                <div class="anim2"></div>
                <div class="anim3"></div>
                <div class="anim4"></div>
                <div class="anim5"></div>
                <h1>Medical Marijuana</h1>
                <p class="ppp"> <em> Vocent labores offendit and usu. Ferri movet aliquid his eu, eos ex vocent <br>bladit, ex uis quem regione. Ad vivendo denique sit </em></p>
                <div class="seemore1">
                    <a href="">See more</a>
                    <div class="see1">
                        <div class="dd1">
                            <i class="fa-solid fa-angle-right"></i>
                            <i class="fa-solid fa-plus"></i>
                        </div>
                    </div>
                </div>
                <a href="#divs" class="down"><i class="fa-solid fa-angle-down"></i></a>
            </div>
        </div>
        <div class="divs" id="divs">
            <div class="nkar" id="nkar"></div>
            <div id="icons">
                <h1>CBD<small>&#8544;</small> and CBD<small>2</small></h1>
                <p class="pp">
                    <em>Commodo regione praesent sed ea. Dignissim similique duo te, et euripidis urbanitas sit, nam id utroque inimicus.</em>
                </p>
                <div class="icons2">
                    <div>
                        <img src="img/iconkeq/icon-1.png">
                        <h6>Indica</h6>
                        <h5>Corpora detraxit ut sed, in vitae aliquam vituperata sea. Ad est eleifend pericula. Vim an.</h5>
                    </div>
                    <div>
                        <img src="img/iconkeq/icon-2.png">
                        <h6>Sativa</h6>
                        <h5>Corpora detraxit ut sed, in vitae aliquam vituperata sea. Ad est eleifend pericula. Vim an.</h5>
                    </div>
                </div>
                <div class="icons3">
                    <div>
                        <img src="img/iconkeq/icon-3.png">
                        <h6>Ruderalis</h6>
                        <h5>Corpora detraxit ut sed, in vitae aliquam vituperata sea. Ad est eleifend pericula. Vim an.</ph5>
                    </div>
                    <div>
                        <img src="img/iconkeq/icon-1.png">
                        <h6>Indica</h6>
                        <h5>Corpora detraxit ut sed, in vitae aliquam vituperata sea. Ad est eleifend pericula. Vim an.</h5>
                    </div>
                </div>

            </div>
        </div>
    </div>

    <div class="container3">
        <div>
            <div class="person1"></div>
            <p>Auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit. Duis sed odio sit amet nibh vulputate cursus a sit amet mauris.</p>
            <h4>Lana Watson</h4>
        </div>
        <div id="dd">
            <div class="person2"> </div>
            <p>Mei sumo phaedrum argumentum ad, eos id dico unum insolens. Ne sint error propriae his. Cu vel decore.</p>
            <h4>Arlie Bourland</h4>
        </div>
        <div>
            <div class="person3"></div>
            <p>Agam sadipscing ex qui, an quidam postulant honestatis mel. At audire tacimates per. Consetetur vituperatoribus sed in.</p>
            <h4>Mark Miller</h4>
        </div>
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

    <div class="container5">
        <h1>Our Products</h1>
        <em>Dignissim similique duo te, et euripidis urbanitas sit, nam id utroque inimicus definiebas. Mei sumo phaedrum.</em>
        </div>
        <div class="apranqner">
            <div class="parent">
                <?php
                //include the database configuration file
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

                ?>
                        <form class="forma" action="admin.php" method="post" enctype="multipart/form-data">
                            <img src="<?php echo $imageURL; ?>" width="100%" alt="">
                            <div class="zzz">
                                <h2><?php echo $anun ?></h2>
                                <p>$<span class="price"><?php echo $arjeq; ?></span></p>
                            </div>
                        </form>

                    <?php }
                } else { ?>
                    <p>No Image(s) found... </p>
                <?php }
                ?>
            </div>
        </div>



    <div class="order">
        <h1>Order at Home</h1>
        <p>Impedit inciderint ea eos, mollis corrumpit est ne. In civibus scripserit has, dico impetus ad sed, quo debet.</p>
        <div class="seemore">
            <a href="">See more</a>
            <div class="see2">
                <div class="dd3">
                    <i class="fa-solid fa-angle-right"></i>
                    <i class="fa-solid fa-plus"></i>
                </div>
            </div>
        </div>
    </div>
    <?php
    include 'final.php'
    ?>
    

    <script src="jquery-3.6.0.min.js"></script>
    <script src="ar.js"></script>


</body>

</html>