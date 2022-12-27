<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Home Admin</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <link href="Homestyle.css" rel="stylesheet" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

</head>
<body>

<nav class="navbar navbar-inverse" >
    <div class="container-fluid">
        <div class="navbar-header">

            <a class="navbar-brand" href="Homeadmin.php" style="font-size: 25px;">Sugar Bloom</a>
        </div>
        <ul class="nav navbar-nav">
            <li class="active"><a href="Homeadmin.php">Home</a></li>
            <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#"> Bakery Sections <span class="caret"></span></a>
                <ul class="dropdown-menu">
                    <li><a href="cakeAdmin.php">Cakes</a></li>
                    <li><a href="DonutsAdmin.php">Donuts </a></li>
                    <li><a href="DrinksAdmin.php">Drinks</a></li>
                    <li><a href="CookiesAdmin.php">Cookies </a></li>
                </ul>
            </li>
            <li><a href="Addproduct.php">Add product </a></li>
            <!--            <li><a href="Aboutus.html">About Us</a></li>-->
            <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#"> Charts <span class="caret"></span></a>
                <ul class="dropdown-menu">
                    <li><a href="citychart.php">City Chart</a></li>
                    <li><a href="productchart.php">Product Chart </a></li>

                </ul>
            </li>
        </ul>
        <ul class="nav navbar-nav navbar-right">
            <!--         <li><a href="signup.html"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>-->

            <li><a href="Home.html"><span class="glyphicon glyphicon-log-in"></span> Logout</a></li>
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
                    <h3>Happiness </h3>
                    <p>It is always so much fun!</p>
                </div>
            </div>

            <div class="item" style="width:1200px;height: 500px;">
                <img src="imgs/img.png" alt="Chicago" style="width:100%;" >
                <div class="carousel-caption">
                    <h3>Love </h3>
                    <p>Taste from Heaven !</p>
                </div>
            </div>

            <div class="item">
                <img src="imgs/img_2.png" alt="New York" style="width:1200px;height: 500px;">
                <div class="carousel-caption">
                    <h3>Passion </h3>
                    <p>Made with LOVE !</p>
                </div>
            </div>
            <div class="item">
                <img src="imgs/img_3.png" alt="New York" style="width:1200px;height: 500px;">
                <div class="carousel-caption">
                    <h3>Perfection </h3>
                    <p>Exactly what you need !</p>
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