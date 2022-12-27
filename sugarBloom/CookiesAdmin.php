<!DOCTYPE html>
<html lang="en">
<head>
    <?php
    if(isset($_POST['delete'])&& isset( $_POST['product_id'])){
        $pid=$_POST['product_id'];
        $db=new mysqli('localhost','root','','sugarbloom');
        $qrystr="DELETE FROM products WHERE products.`ID` = '".$pid."';";
        $res=$db->query($qrystr);
        $db->close();
    }

    ?>

    <title>Cookies section</title>
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
            border-bottom: #c5c1b3;
            border-bottom-style: solid;
            border-bottom-width: 1px;
        }

        .brand_img-box {
            height: 310px;
            background-size: cover;
            background-position: center;
            position: relative;
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
            text-space: 7px;
            color: #1d1a1a;
            padding: 12px 35px;
            font-size: 15px;
            z-index: 3;
            -webkit-transition: opacity 0.4s;
            transition: opacity 0.4s;
            text-decoration: none;
            font-family: fantasy;
        }

        .brand_img-box::before {
            content: "";
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(155, 152, 152, 0.9);
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

        .brand_detail-box h5 {
            text-transform: uppercase;
            font-weight: bold;
            color: #242425;
        }
        .order{
            margin-top: 10px; background-color: #242425;color: #c5c1b3;border: #242425 ;box-shadow: #242425;height: 45px;width: 200px;

        }
        .order:hover{
            background-color:#aa8a1a ;
            color: #1d1a1a;


        }

    </style>



</head>
<body  >


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




<br>
<section class="shop_section layout_padding" >
    <div class="container">
        <div class="box">
            <div class="detail-box">
                <h2>
                    Cookies section
                </h2>
                <p>
                    From our Hearts to Yours
                </p>
            </div>


        </div>
    </div>
</section>
<br>
<!-- brand section -->

<section class="brand_section layout_padding2">

    <div class="container-fluid brand_item-container">

        <?php


        $db=new mysqli('localhost','root','','sugarbloom');
        $qrystr="SELECT * FROM products WHERE section ='Cookies';";
        $res=$db->query($qrystr);


        if($res->num_rows>0)
        {

            for($i=0;$i<$res->num_rows;$i++){
                $row=$res->fetch_object();

                echo  "<div class='brand_item-box'>";
                echo "<form action='EditProduct.php' method='post'> ";
                echo"<div class='brand_img-box  item-<?php $i ?>' style='background-image: url(imgs/$row->photo)'> " ;
                echo "<a  >";
                echo "$row->description";
                echo "</a>";
                echo"</div>";
                echo " <div class='brand_detail-box'>";
                echo"<h4>"   ;
                echo " $<span>  $row->price </span> ";
                echo "</h4>";
                echo"<h5 class=''>";
                echo $row->product_name ;
                echo "<input type='hidden' name='product_id' value='$row->ID'>";


                echo "</input>";
                echo "<input type='hidden' name='section' value='$row->section'>";


                echo "</input>";
                echo"</h5>";


                echo "<div>";
                echo "<input class='order' type='submit'  name='edit' value='Edit'  >";

                echo "</input>";

                echo "</form>";
                echo "<form action='cakeAdmin.php' method='post'> ";
                echo "<input type='hidden' name='product_id' value='$row->ID'>";
                echo "</input>";
                echo "<input class='order' type='submit'  name='delete' value='Delete'  >";

                echo "</input>";
                echo "</form>";
                echo "</div>";
                echo "</div>";
                echo"</div>";


            }


            $db->close();
        }
        ?>






    </div>
</section>


<!-- end brand section -->


<br>
<br>


<br>

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

</body>
</html>