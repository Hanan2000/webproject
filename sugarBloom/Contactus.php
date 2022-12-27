<!DOCTYPE html>
<html lang="en">
<head>


    <meta charset="UTF-8">
    <title>Contact Us</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <link href="Homestyle.css" rel="stylesheet" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

    <style>
        body {

            background: #222D32;

        }
        * {
            box-sizing: border-box;
        }


        input[type=text], select, textarea {
            width: 100%;
            padding: 12px;
            border: none;
            background-color: #1A2226;
            border-bottom: 2px solid #0DB8DE;
            border-top: 0px;
            border-radius: 0px;
            margin-top: 6px;
            margin-bottom: 16px;
            resize: vertical;
            color: #ECF0F5;
        }

        input[type=submit] {
            background-color: #b1820b;
            color: white;
            padding: 12px 20px;
            border: none;
            cursor: pointer;
        }

        input[type=submit]:hover {
            background-color: #a09402;
        }


        .container {
            border-radius: 5px;
            background-color: #1A2226;
            padding: 10px;
            color: #ECF0F5;
            font-family: "Helvetica Neue",Helvetica,Arial,sans-serif;
        }



        .row:after {
            content: "";
            display: table;
            clear: both;
        }

        @media screen and (max-width: 600px) {
            .column, input[type=submit] {
                width: 100%;
                margin-top: 0;
            }
        }

        .map_container {
            height: 450px;
            margin-top: 55px;
            width: 100%;
        }

        .map_container .map-responsive {
            height: 100%;
        }

        .info_section .info_social {
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
        }

        .info_section .info_social img {
            width: 35px;
            margin-right: 8px;
        }
    </style>



</head>
<body>


<nav class="navbar navbar-inverse" >
    <div class="container-fluid">
        <div class="navbar-header">

            <a class="navbar-brand" href="Home.html" style="font-size: 25px;">Sugar Bloom</a>
        </div>
        <ul class="nav navbar-nav">
            <li class="active"><a href="Home.html">Home</a></li>
            <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#"> Bakery Sections <span class="caret"></span></a>
                <ul class="dropdown-menu">
                    <li><a href="Cakes.html">Cakes</a></li>
                    <li><a href="Donuts.html">Donuts </a></li>
                    <li><a href="Drinks.html">Drinks</a></li>
                    <li><a href="Cookies.html">Cookies </a></li>
                </ul>
            </li>
            <li><a href="Contactus.php">Contact Us</a></li>
            <li><a href="Aboutus.html">About Us</a></li>
        </ul>
        <ul class="nav navbar-nav navbar-right">
            <li><a href="signup.php"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
            <li><a href="login.php"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
        </ul>
    </div>
</nav>





<div class="container">
    <div style="text-align:center">
        <h2>Contact Us</h2>

    </div>
    <div class="">
        <div class="map_container">
            <div class="map-responsive">
                <iframe src="https://www.google.com/maps/embed/v1/place?key=AIzaSyA0s1a7phLN0iaD6-UE7m4qP-z21pH0eSc&q=Palestine" width="600" height="300" frameborder="0" style="border:0; width: 100%; height:100%" allowfullscreen></iframe>
            </div>
        </div>

    </div>
</div>

    <section class="info_section layout_padding">
        <div class="container">

            <div class="info_contact">
                <div class="row">
                    <div class="col-md-4">
                        <a href="">
                            <img src="imgs/location.png" alt="">
                            <span style="color: white">
                Nablus-Palestine
              </span>
                        </a>
                    </div>
                    <div class="col-md-4">
                        <a href="">
                            <img src="imgs/call.png" alt="">
                            <span style="color: white">
                Call : +012334567890
              </span>
                        </a>
                    </div>
                    <div class="col-md-4">
                        <a href="mailto:SugarBloom@gmail.com">
                            <img src="imgs/mail.png" alt="">
                            <span style="color: white">
                SugarBloom@gmail.com
              </span>
                        </a>
                    </div>
                </div>



                <div class="info_social">
                    <div>
                        <a href="https://www.facebook.com/">
                            <img src="imgs/facebook-logo-button.png" alt="">
                        </a>
                    </div>
                    <div>
                        <a href="https://twitter.com">
                            <img src="imgs/twitter-logo-button.png" alt="">
                        </a>
                    </div>

                    <div>
                        <a href="https://www.instagram.com">
                            <img src="imgs/instagram.png" alt="">
                        </a>
                    </div>
                </div>
            </div>
        </div>

</div>
</section>

</div>


<!-- info section -->

<!-- end info section -->

<br>
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