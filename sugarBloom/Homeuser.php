<!DOCTYPE html>
<html lang="en">
<head>
    <title>Sugar Bloom</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <link href="Homestyle.css" rel="stylesheet" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>


    <style>

        .brand_section {
            text-align: center;
            background-color: #ffffff;
            margin-left: 50px;
            margin-right: 50px;
        }

        .brand_section h3 {
            color: #fcfcfc;
        }

        .brand_section .brand_item-container {
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            -webkit-box-pack: center;
            -ms-flex-pack: center;
            justify-content: center;
            -ms-flex-wrap: wrap;
            flex-wrap: wrap;
        }

        .brand_item-box {
            width: 265px;
            margin: 30px 10px 0 10px;
        }

        .brand_img-box {
            height: 310px;
            background-size: cover;
            background-position: center;
            position: relative;
        }

        .brand_img-box.item-1 {
            background-image: url(imgs/img_5.png);
        }

        .brand_img-box.item-2 {
            background-image: url(imgs/img_10.png);
        }

        .brand_img-box.item-3 {
            background-image: url(imgs/img_18.png);
        }

        .brand_img-box.item-4 {
            background-image: url(imgs/img_19.png);
        }

        .brand_img-box {
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            -webkit-box-align: center;
            -ms-flex-align: center;
            align-items: center;
            -webkit-box-pack: center;
            -ms-flex-pack: center;
            justify-content: center;
            overflow: hidden;
        }

        .brand_img-box a {
            display: none;
            opacity: 0;
            background-color: transparent;
            border: 1px solid #999999;
            color: #f9fafa;
            padding: 12px 35px;
            font-size: 15px;
            z-index: 3;
            -webkit-transition: opacity 0.4s;
            transition: opacity 0.4s;
        }

        .brand_img-box::before {
            content: "";
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(37, 37, 37, 0.9);
            z-index: 1;
            -webkit-transform: translateY(320px);
            transform: translateY(320px);
            -webkit-transition: -webkit-transform 0.3s;
            transition: -webkit-transform 0.3s;
            transition: transform 0.3s;
            transition: transform 0.3s, -webkit-transform 0.3s;
        }

        .brand_img-box:hover {
            cursor: pointer;
        }

        .brand_img-box:hover::before {
            -webkit-transform: translateY(0);
            transform: translateY(0);
        }

        .brand_img-box:hover a {
            display: inline-block;
            opacity: 1;
        }

        .brand_detail-box {
            margin-top: 20px;
        }

        .brand_detail-box h4 {
            text-transform: uppercase;
            font-weight: bold;
            color: #c8b81a;
        }

        .brand_detail-box h4 span {
            color: #242425;
        }

        .brand_detail-box h6 {
            text-transform: uppercase;
            font-weight: bold;
            color: #242425;
        }

    </style>



</head>
<body>


<nav class="navbar navbar-inverse" >
    <div class="container-fluid">
        <div class="navbar-header">

            <a class="navbar-brand" href="Homeuser.php" style="font-size: 25px;">Sugar Bloom</a>
        </div>
        <ul class="nav navbar-nav">
            <li class="active"><a href="Homeuser.php">Home</a></li>
            <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#"> Bakery Sections <span class="caret"></span></a>
                <ul class="dropdown-menu">
                    <li><a href="Cakeuser.php">Cakes</a></li>
                    <li><a href="Donutsuser.php">Donuts </a></li>
                    <li><a href="drinksuser.php">Drinks</a></li>
                    <li><a href="Cookiesuser.php">Cookies </a></li>
                </ul>
            </li>
            <li><a href="Contactususer.php">Contact Us</a></li>
            <li><a href="Aboutususer.php">About Us</a></li>
        </ul>
        <ul class="nav navbar-nav navbar-right">
            <li><a href="cart.php"><span class="glyphicon glyphicon-shopping-cart"></span> Cart </a></li>
            <li><a href="account.php"><span class="glyphicon glyphicon-user"></span> My account</a></li>
            <li><a href="Home.html"><span class="glyphicon glyphicon-log-out"></span> Logout</a></li>
        </ul>
    </div>
</nav>
<div class="container">

    <div id="myCarousel" class="carousel slide" data-ride="carousel" >
        <!-- Indicators -->
        <ol class="carousel-indicators">
            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
            <li data-target="#myCarousel" data-slide-to="1"></li>
            <li data-target="#myCarousel" data-slide-to="2"></li>
            <li data-target="#myCarousel" data-slide-to="3"></li>
        </ol>

        <!-- Wrapper for slides -->
        <div class="carousel-inner"  >

            <div class="item active" style="width:1200px;height: 500px;">
                <img src="imgs/img_1.png"  style="width:100%;">
                <div class="carousel-caption">
                    <p  style="border: #c5c1b3 1px ;margin-right: 100px;margin-left: 100px; background-color: #c5c1b3 ; font-weight: bold; font-size: 3rem;text-transform: uppercase;color: #aa8a1a;">Save up to 50% </p>
                    <p style="border: #c5c1b3 1px ;background-color: #c5c1b3 ; font-weight: bold; font-size: 3rem;color: #aa8a1a;">It is always so much fun!</p>
                </div>
            </div>

            <div class="item" style="width:1200px;height: 500px;">
                <img src="imgs/img.png" alt="Chicago" style="width:100%;" >
                <div class="carousel-caption">
                    <p style="border: #c5c1b3 1px ;margin-right: 100px;margin-left: 100px; background-color: #c5c1b3 ; font-weight: bold; font-size: 3rem;text-transform: uppercase;color: #aa8a1a;">Save up to 50% </p>
                    <p style="border: #c5c1b3 1px ; background-color: #c5c1b3 ; font-weight: bold; font-size: 3rem;color: #aa8a1a;">Taste from Heaven !</p>
                </div>
            </div>

            <div class="item">
                <img src="imgs/img_2.png" alt="New York" style="width:1200px;height: 500px;">
                <div class="carousel-caption">
                    <p style="border: #c5c1b3 1px ;margin-right: 100px;margin-left: 100px; background-color: #c5c1b3 ; font-weight: bold; font-size: 3rem;text-transform: uppercase;color: #aa8a1a;">Save up to 50% </p>
                    <p style="border: #c5c1b3 1px ; background-color: #c5c1b3 ; font-weight: bold; font-size: 3rem;color: #aa8a1a;">Made with LOVE !</p>
                </div>
            </div>
            <div class="item">
                <img src="imgs/img_3.png" alt="New York" style="width:1200px;height: 500px;">
                <div class="carousel-caption">
                    <p style="border: #c5c1b3 1px ;margin-right: 100px;margin-left: 100px; background-color: #c5c1b3 ; font-weight: bold; font-size: 3rem;text-transform: uppercase;color: #aa8a1a;">Save up to 50% </p>
                    <p style="border: #c5c1b3 1px ; background-color: #c5c1b3 ; font-weight: bold; font-size: 3rem;color: #aa8a1a;">Exactly what you need !</p>
                </div>
            </div>

        </div>

        <!-- Left and right controls -->
        <a class="left carousel-control" href="#myCarousel" data-slide="prev">
            <span class="glyphicon glyphicon-chevron-left"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="right carousel-control" href="#myCarousel" data-slide="next">
            <span class="glyphicon glyphicon-chevron-right"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>
</div>


<br>
<section class="shop_section layout_padding">
    <div class="container">
        <div class="box">
            <div class="detail-box">
                <h2>
                    Choose Your section
                </h2>

            </div>


        </div>
    </div>
</section>
<br>
<!-- brand section -->

<section class="brand_section layout_padding2">

    <div class="container-fluid brand_item-container">
        <div class="brand_item-box">
            <div class="brand_img-box  item-1">
                <a href="Cakeuser.php">
                    Checkout Now
                </a>
            </div>
            <div class="brand_detail-box">
                <h4>
                    <span>  Cake Section </span>
                </h4>

            </div>

        </div>
        <div class="brand_item-box">
            <div class="brand_img-box  item-2">
                <a href="Cookiesuser.php">
                    Checkout Now
                </a>
            </div>
            <div class="brand_detail-box">
                <h4>
                    <span> Cookies section </span>
                </h4>

            </div>

        </div>
        <div class="brand_item-box">
            <div class="brand_img-box  item-3">
                <a href="Donutsuser.php">
                    Checkout Now
                </a>
            </div>
            <div class="brand_detail-box">
                <h4>
                    <span> Donuts Section </span>
                </h4>

            </div>

        </div>
        <div class="brand_item-box">
            <div class="brand_img-box  item-4">
                <a href="drinksuser.php">
                    Checkout Now
                </a>
            </div>
            <div class="brand_detail-box">
                <h4>
                    <span>  Drinks Section </span>
                </h4>

            </div>


        </div>

    </div>

</section>


<!-- end brand section -->


<<br>
<br>
<!-- footer section -->
<footer class="container-fluid footer_section ">
    <p>
        &copy; <span id="displayYear"></span> All Rights Reserved . Sugar Bloom Creators L&H

    </p>
</footer>
<!-- footer section -->
<br>
<br>

</body>
</html>
