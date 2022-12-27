<!DOCTYPE html>
<html lang="en">
<head>

    <?php


    if(isset($_POST['username']) && isset($_POST['pwd'])) {
        $username = $_POST['username'];
        $password = $_POST['pwd'];


            $temp=0;
            $db=new mysqli('localhost','root','','sugarbloom');
            $qrystr="SELECT * FROM user where username='$username' and password = sha1('$password')";
            $res=$db->query($qrystr);


        if($res->num_rows==0)
        {
            ?>
            <script>
                alert( "Invalid Username And/Or Password !!!");
            </script>
        <?php
        }

        else {
            if (isset($_POST['login'])) {
                setcookie("username", $username, time() + (86400 * 30), "/");

                if ($username == 'admin' && $password == '0000') {
                    $db->close();
                    header('location: Homeadmin.php');

                } else {
                    $db->close();
                    header('location: Homeuser.php');

                }

            }
        }

}


      ?>






    <meta charset="UTF-8">
    <title>Log In</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <link href="loginstyle.css" rel="stylesheet" />
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
        .sign{
            float: left;
            /*margin-bottom: 50px*/
        }

        /*.btn-outline-primary a {*/
        /*
        /*}*/


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
            margin-bottom: 10px;
        }

        .login-text {
            text-align: left;
            padding-left: 0px;
            color: #a2a4a4;
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
    <div class="row">
        <div class="col-lg-3 col-md-2"></div>
        <div class="col-lg-6 col-md-8 login-box">
            <div class="col-lg-12 login-key">
                <i class="fa fa-key" aria-hidden="true"></i>
            </div>
            <div class="col-lg-12 login-title">
                Login Here
            </div>

            <div class="col-lg-12 login-form">
                <div class="col-lg-12 login-form">
                    <form action="login.php" method="post">
                        <div class="form-group">
                            <label class="form-control-label" >USERNAME</label>
                            <input type="text" class="form-control" name="username" required="required">
                        </div>
                        <div class="form-group">
                            <label class="form-control-label">PASSWORD</label>
                            <input type="password" class="form-control" name="pwd" required="required">
                        </div>

                        <div class="col-lg-12 loginbttm">
                            <div class="col-lg-6 login-btm login-text">
<!--                                <h5 id="warning" style="color: darkred ; display: block">warning </h5>-->

                            </div>
                            <div class="col-lg-6 login-btm login-button">
                                <button type="submit" class="btn btn-outline-primary" name="login">LOGIN</button>

                            </div>
                            <div>
                                <a class="sign" href="signup.php"> Don't have an account?</a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <div class="col-lg-6 col-md-8 ref">

                <!--                <a href="#"> Lost your paaword?</a> <br>-->


            </div>



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



<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js" integrity="sha384-SR1sx49pcuLnqZUnnPwx6FCym0wLsk5JZuNx2bPPENzswTNFaQU1RDvt3wT4gWFG" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.min.js" integrity="sha384-j0CNLUeiqtyaRmlzUHCPZ+Gy5fQu0dQ6eZ/xAww941Ai1SxSY+0EQqNXNE6DZiVc" crossorigin="anonymous"></script>

</body>
</html>
