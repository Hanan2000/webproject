<!doctype html>
<html lang="en">
<head>
    <?php
    if(isset($_POST['pid']) && isset($_POST['pname']) && isset($_POST['pdisc']) && isset($_POST['photo']) && isset($_POST['price']) && isset($_POST['pSection'])) {
        $id = $_POST['pid'];
        $productname = $_POST['pname'];
        $discrption = $_POST['pdisc'];
        $photo = $_POST['photo'];
        $price = $_POST['price'];
        $section = $_POST['pSection'];
        $db = new mysqli('localhost', 'root', '', 'sugarbloom');

$qry="SELECT * FROM `products` WHERE id='$id'";
        $res3=$db->query($qry);
        if($res3->num_rows==0)
        {
            $db = new mysqli('localhost', 'root', '', 'sugarbloom');

            $Qstr = "INSERT INTO `products`(`ID`, `product_name`, `description`, `photo`, `price`, `section`) VALUES ('$id','$productname','$discrption','$photo','$price','$section')   ;";
          $res7= $db->query($Qstr);
            $db->close();
            ?>

            <script>
                alert("A new product Added successfully");
            </script>
        <?php
        }
        else{

            ?>

            <script>
                alert("This ID already exist !!");
            </script>
    <?php

        }

    }
    ?>


    <title>Add product </title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <link href="Homestyle.css" rel="stylesheet" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>



    <style>
        body {

            background: #222D32;
            font-family: 'Roboto', sans-serif;
        }

        .login-box {
            margin-top: 75px;
            height: auto;
            background: #1A2226;
            text-align: center;
            box-shadow: 0 3px 6px rgba(0, 0, 0, 0.16), 0 3px 6px rgba(0, 0, 0, 0.23);
        }

        .login-key {
            height: 100px;
            font-size: 80px;
            line-height: 100px;
            background: -webkit-linear-gradient(#27EF9F, #0DB8DE);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
        }

        .login-title {
            margin-top: 15px;
            text-align: center;
            font-size: 30px;
            letter-spacing: 2px;
            margin-top: 15px;
            font-weight: bold;
            color: #ECF0F5;
        }

        .login-form {
            margin-top: 25px;
            text-align: left;
        }

        input[type=text] {
            background-color: #1A2226;
            border: none;
            border-bottom: 2px solid #0DB8DE;
            border-top: 0px;
            border-radius: 0px;
            font-weight: bold;
            outline: 0;
            margin-bottom: 20px;
            padding-left: 0px;
            color: #ECF0F5;
        }

        input[type=password] {
            background-color: #1A2226;
            border: none;
            border-bottom: 2px solid #0DB8DE;
            border-top: 0px;
            border-radius: 0px;
            font-weight: bold;
            outline: 0;
            padding-left: 0px;
            margin-bottom: 20px;
            color: #ECF0F5;
        }

        .form-group {
            margin-bottom: 40px;
            outline: 0px;
        }

        .form-control:focus {
            border-color: inherit;
            -webkit-box-shadow: none;
            box-shadow: none;
            border-bottom: 2px solid #0DB8DE;
            outline: 0;
            background-color: #1A2226;
            color: #ECF0F5;
        }

        input:focus {
            outline: none;
            box-shadow: 0 0 0;
        }

        label {
            margin-bottom: 0px;
        }

        .form-control-label {
            font-size: 10px;
            color: #6C6C6C;
            font-weight: bold;
            letter-spacing: 1px;
        }

        .btn-outline-primary {
            border-color: #0DB8DE;
            color: #0DB8DE;
            border-radius: 0px;
            font-weight: bold;
            letter-spacing: 1px;
            box-shadow: 0 1px 3px rgba(0, 0, 0, 0.12), 0 1px 2px rgba(0, 0, 0, 0.24);
        }

        .btn-outline-primary:hover {
            background-color: #0DB8DE;
            right: 0px;
        }

        .login-btm {
            float: left;
        }

        .login-button {
            padding-right: 0px;
            text-align: right;
            margin-bottom: 25px;
        }

        .login-text {
            text-align: left;
            padding-left: 0px;
            color: #A2A4A4;
        }

        .loginbttm {
            padding: 0px;
        }
        .ref{

            text-decoration: none;
            font-size: 14px;
            line-height: 20px;
            color: darkgray;

        }
    </style>
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
    <div class="row">
        <div class="col-lg-3 col-md-2"></div>
        <div class="col-lg-6 col-md-8 login-box">
            <div class="col-lg-12 login-key">
                <i class="fa fa-key" aria-hidden="true"></i>
            </div>
            <div class="col-lg-12 login-title">
                Product information
            </div>

            <div class="col-lg-12 login-form">
                <div class="col-lg-12 login-form">
                    <form action="Addproduct.php" method="post" >
                        <div class="form-group">
                            <label class="form-control-label"  > ID </label>
                            <input type="text" class="form-control" name="pid" required="required">
                        </div>
                        <div class="form-group">
                            <label class="form-control-label">Product name </label>
                            <input type="text" class="form-control" name="pname" required="required">
                        </div>

                        <div class="form-group">
                            <label class="form-control-label"> discrption </label>
                            <input type="text" class="form-control"name="pdisc" required="required">
                        </div>
                        <div class="form-group">
                            <label class="form-control-label"> Photo </label>
                            <input type="text" class="form-control" name="photo" required="required">
                        </div>
                        <div class="form-group">
                            <label class="form-control-label">Price </label>
                            <input type="text" class="form-control" name="price" required="required">

                        </div>
                        <div class="form-group">
                            <label class="form-control-label">Section  </label>
                            <input type="text" class="form-control" name="pSection" required="required">

                        </div>


                        <div class="col-lg-12 loginbttm">
                            <div class="col-lg-6 login-btm login-text">
                                <!--                                <h3 style="color: #1A2226">this  user name already exist </h3>-->
                            </div>
                            <div class="col-lg-6 login-btm login-button">
                                <button type="submit" class="btn btn-outline-primary" name="save"> Add </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>

            <div class="col-lg-3 col-md-2"></div>
        </div>
    </div>
</div>

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


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js" integrity="sha384-SR1sx49pcuLnqZUnnPwx6FCym0wLsk5JZuNx2bPPENzswTNFaQU1RDvt3wT4gWFG" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.min.js" integrity="sha384-j0CNLUeiqtyaRmlzUHCPZ+Gy5fQu0dQ6eZ/xAww941Ai1SxSY+0EQqNXNE6DZiVc" crossorigin="anonymous"></script>

</body>
</html>