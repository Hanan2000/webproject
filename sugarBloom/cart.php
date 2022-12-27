<!DOCTYPE html>
<html lang="en">
<head>
    <title>Cart</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <link href="Homestyle.css" rel="stylesheet" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

    <?php
    if (isset($_POST['delete']) &&isset($_COOKIE['username']))
    {
        $username=$_COOKIE["username"];
//   echo $username;
        $db=new mysqli('localhost','root','','sugarbloom');
        $order_id=$username."ORDER";
//    echo $order_id;

        $quant=$_POST['quantity'];
        // echo $quant;
        $product_id=$_POST['product_id'];
        // echo $product_id;

        $qrystr=" DELETE FROM `order_detailes` WHERE product_id='$product_id'and  order_id='$order_id' and  quantity='$quant'  and username='$username';";
        $res=$db->query($qrystr);
        $db->close();


    }

    if (isset($_POST['checkout']) &&isset($_COOKIE['username']))
    {

        $username=$_COOKIE["username"];

        $db=new mysqli('localhost','root','','sugarbloom');
//        $order_id=$username."ORDER";
        $tempqry = "SELECT * FROM `order_detailes` WHERE username ='$username' ;";
        $tempres = $db->query($tempqry);
        $temprow = $tempres->fetch_object();


        $quant=$temprow->quantity;

        $product_id=$temprow->product_id;
        $city=$_POST['city'];
        $zipcode=$_POST['zip'];
        $street=$_POST['address'];
        $user_number=$_POST['phone_number'];
        $total=$_POST['T'];

        $qrystr=" INSERT INTO `orders`(`user_name`, `order_id`, `city`, `zipcode`, `street`, `user_number`,`total`,`status`) VALUES ('$username','','$city','$zipcode','$street','$user_number','$total',' not delivered')";
        $res=$db->query($qrystr);
        $qrystr2=" DELETE FROM `order_detailes` WHERE username ='$username';";
        $res2=$db->query($qrystr2);
          ?>
        <script>
            alert("You have ordered successfully ")

        </script>
    <?php


    }

    ?>




    <style>

        body {

            font-size: 17px;

        }

        * {
            box-sizing: border-box;
        }

        .row {
            display: -ms-flexbox; /* IE10 */
            display: flex;
            -ms-flex-wrap: wrap; /* IE10 */
            flex-wrap: wrap;
            margin: 0 -16px;
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

        .col-50 {
            -ms-flex: 50%; /* IE10 */
            flex: 50%;
        }

        .col-75 {
            -ms-flex: 75%; /* IE10 */
            flex: 75%;
        }


        .col-50,
        .col-75 {
            padding: 0 16px;
        }

        .container {
            background-color: #f2f2f2;
            padding: 5px 20px 15px 20px;
            border: 1px solid lightgrey;
            border-radius: 3px;
        }

        input[type=text] {
            width: 100%;
            margin-bottom: 20px;
            padding: 12px;
            border: 1px solid #ccc;
            border-radius: 3px;
        }

        label {
            margin-bottom: 10px;
            display: block;
        }



        .btn {
            background-color: #aa8a1a;
            color: white;
            padding: 12px;
            margin: 10px 0;
            border: none;
            width: 100%;
            border-radius: 3px;
            cursor: pointer;
            font-size: 17px;
        }

        .btn:hover {
            background-color: #aa8a1a;
        }

        a {
            color: #2196F3;
        }

        hr {
            border: 1px solid lightgrey;
        }



        @media (max-width: 800px) {
            .row {
                flex-direction: column-reverse;
            }

        }

        .img-box {
            width: 150px;
            height: 150px;
            margin: 30px 10px 0 10px;
            border-bottom: #c5c1b3;
            border-bottom-style: solid;
            border-bottom-width: 1px;
        }
        .brand_img-box {
            height: 100%;
            /*background-size: cover;*/
            width: 100%;
            background-position: center;
            position: relative;
        }




    </style>



</head>
<body  >


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
            <li><a href="Contactus.php">Contact Us</a></li>
            <li><a href="Aboutususer.php">About Us</a></li>
        </ul>
        <ul class="nav navbar-nav navbar-right">
            <li><a href="cart.php"><span class="glyphicon glyphicon-shopping-cart"></span> Cart </a></li>
            <li><a href="account.php"><span class="glyphicon glyphicon-user"></span> My account</a></li>
            <li><a href="Home.html"><span class="glyphicon glyphicon-log-out"></span> Logout</a></li>
        </ul>
    </div>
</nav>





<br>
<section class="shop_section layout_padding" >
    <div class="container">
        <div class="box">
            <div class="detail-box">
                <h2>
                    My Cart
                </h2>
                <p>
                    Check out Now to Enjoy the Taste !
                </p>
            </div>


        </div>
    </div>
</section>
<br>
<!-- brand section -->


<section class="brand_section layout_padding2">

    <div class="container">

        <table class="table " >
            <thead>
            <tr>
                <th>&nbsp;</th>

                <th>Product Name </th>
                <th>Quantity</th>
                <th>Price</th>
                <th>Total</th>
            </tr>
            </thead>
        <?php
         if(isset($_COOKIE['username'])) {
             $count=0;
             $u=$_COOKIE['username'];
             $db = new mysqli('localhost', 'root', '', 'sugarbloom');
             $qrystr = "SELECT * FROM `order_detailes` WHERE username ='$u' ;";
             $res = $db->query($qrystr);

             if ($res->num_rows > 0) {

                 for ($i = 0; $i < $res->num_rows; $i++) {
                     $row = $res->fetch_object();
                     $qrystr2 = "SELECT * FROM `products` WHERE ID ='$row->product_id';";
                     $res2 = $db->query($qrystr2);
                     $row2=$res2->fetch_object();
                   echo "<tbody>";
       echo"<tr>";
           echo"<td class='img-box'><img class='brand_img-box' src='imgs/$row2->photo' alt=''>";
           echo "</td>";

           echo "<td> $row2->product_name </td>";
           echo "<td>$row->quantity</td>";
           echo "<td>$ $row2->price</td>";
           $num1=intval($row->quantity);
           $num2=intval($row2->price);
           $result=$num1*$num2;
           $count=$count+$result;

           echo "<td>$ $result </td>";
           echo "<td><form action='cart.php'method='post'> <input type='submit' name='delete' value='Delete' style='background-color:#aa8a1a ;color: #040404;font-family:'Helvetica Neue' ;font-size:17px;   padding:8px;'>  ";
           echo "</input> ";
           echo "<input type='hidden' name='product_id' value='$row->product_id'>";
                     echo "</input> ";
           echo "<input type='hidden' name='quantity' value='$row->quantity'>";
//           echo "<input type='hidden' name='status' value='$row->status'>";
                     echo "</input> ";

                     echo "</form> ";

           echo "</td>";
        echo "</tr>";

       echo "</tbody>";


                 }
                echo "<tr>";
        echo "<td> </td>";
                 echo "<td> </td>";
                 echo "<td> </td>";

     echo "<td>TOTAL</td>"  ;
        echo "<td>$ $count</td>";

                 echo "<td> </td>";
     echo "</tr>";

                 $db->close();
             }
         }
        ?>


        <?php


        ?>



        </table>
    </div>

</section>









<!-- end brand section -->
<br>
<br>

    <div class="col-75">
        <div class="container">
            <form action="cart.php" method="post">

                <div class="row">
                    <div class="col-50">
                        <h3>Fill your Address information</h3>
                        <label for="fname"><i class="fa fa-user"></i> Phone Number </label>
                        <input type="text" id="fname" name="phone_number" placeholder="+000000000" required="required">

                        <label for="adr"><i class="fa fa-address-card-o"></i> Address</label>
                        <input type="text" id="adr" name="address" placeholder="111 Alquds Street" required="required">
                        <label for="city"><i class="fa fa-institution"></i> City</label>
                        <input type="text" id="city" name="city" placeholder="Nablus" required="required">

                        <div class="row">

                            <div class="col-50">
                                <label for="zip">Zip</label>
                                <input type="text" id="zip" name="zip" placeholder="10001" required="required">
                            </div>
                        </div>
                    </div>



                </div>
                <input type='hidden' name='T' value='<?php echo $count?>'>

                <input type="submit" value="Continue to checkout" class="btn" name="checkout">
            </form>
        </div>
    </div>







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

