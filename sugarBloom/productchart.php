<!DOCTYPE html>
<html lang="en">
<head>


    <meta charset="UTF-8">
    <title>Log In</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <link href="loginstyle.css" rel="stylesheet" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>


    <?php

    if (isset($_POST['Show'])&&(isset($_POST['section']))) {

        $section = $_POST['section'];

        $db=new mysqli('localhost','root','','sugarbloom');
        $qrystr="SELECT * FROM products WHERE section='$section'";
        $res=$db->query($qrystr);

        if($res->num_rows>0)
        {
            $product_name=[];
            $Prise=[];
            for ($i=0;$i<$res->num_rows;$i++) {
                $row=$res->fetch_object();
                $product_name[]=$row->product_name;
                $Prise[]=$row->price;


            }



        }





    }


    ?>






    <style>
        body {

            background: #e3dfd0;
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
        footer {
            background-color: #333333;
            padding: 20px 15px;
            position: fixed;
            width: 100%;
            bottom: 0;

        }

        .footer_section p {
            margin: 0;
            text-align: center;
            color: #ffffff;
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
                Show Report !
            </div>

            <div class="col-lg-12 login-form">
                <div class="col-lg-12 login-form">
                    <form action="productchart.php" method="post">
                        <div class="form-group">
                            <label class="form-control-label" > Enter Section name to see all Products and there prices  </label>
                            <input type="text" class="form-control" name="section" required="required" placeholder="Section">
                        </div>

                        <div class="col-lg-6 login-btm login-button">
                            <button type="submit" class="btn btn-outline-primary" name="Show"> Show </button>

                        </div>

                </div>
                </form>
            </div>
        </div>




    </div>
</div>
</div>




<div style="width: 500px;height: 500px;display: inline-flex" >
    <canvas id="myChart" width="400" height="400"></canvas>
</div>
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script>
    var ctx = document.getElementById('myChart').getContext('2d');
    var myChart = new Chart(ctx, {
        type: 'pie',
        data: {
            labels: <?php  echo json_encode($product_name); ?>,
            datasets: [{
                label: '# of Votes',
                data: <?php  echo json_encode($Prise); ?>,
                backgroundColor: [
                    'rgba(255, 99, 132, 0.2)',
                    'rgba(54, 162, 235, 0.2)',
                    'rgba(255, 206, 86, 0.2)',
                    'rgba(75, 192, 192, 0.2)',
                    'rgba(153, 102, 255, 0.2)',
                    'rgba(255, 159, 64, 0.2)'
                ],
                borderColor: [
                    'rgba(255, 99, 132, 1)',
                    'rgba(54, 162, 235, 1)',
                    'rgba(255, 206, 86, 1)',
                    'rgba(75, 192, 192, 1)',
                    'rgba(153, 102, 255, 1)',
                    'rgba(255, 159, 64, 1)'
                ],
                borderWidth: 1
            }]
        },
        options: {
            scales: {
                y: {
                    beginAtZero: true
                }
            }
        }
    });
</script>


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



<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js" integrity="sha384-SR1sx49pcuLnqZUnnPwx6FCym0wLsk5JZuNx2bPPENzswTNFaQU1RDvt3wT4gWFG" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.min.js" integrity="sha384-j0CNLUeiqtyaRmlzUHCPZ+Gy5fQu0dQ6eZ/xAww941Ai1SxSY+0EQqNXNE6DZiVc" crossorigin="anonymous"></script>

</body>
</html>