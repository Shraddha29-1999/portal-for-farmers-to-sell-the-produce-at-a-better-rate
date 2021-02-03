<?php
// Initialize the session
session_start();
 
// Check if the user is logged in, if not then redirect him to login page
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: login.php");
    exit;
}
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Welcome</title>
    <link rel="stylesheet" href="">
    <!-- <link rel="stylesheet.css" href="stylesheet.css"> -->
    <style type="text/css">
        body {
            font: 14px sans-serif;
            text-align: center;
        }

        body {
            font-family: 'Ubuntu', sans-serif;
            color: rgb(14, 13, 13);
            margin-bottom: 20px;
            padding: 0px;
            background-image: url('https://cdn.pixabay.com/photo/2016/11/29/01/31/cereal-1866559_960_720.jpg');
            background-repeat: no-repeat;
            background-size: cover;
            height: 30px;
            background-size: 500x 500px;
            opacity: 1px;
            height: 600px;
        }

        .left {
            position: absolute;
            left: 20px;
            top: 9px;
            /* border: 2px solid red; */
            display: inline-block;
            left: 60px;
            top: 20px;

        }

        .left img {
            width: 50px;
        }

        .left div {
            text-align: center;
        }

        .mid {

            display: block;
            margin: 50px auto;
            /* border: 2px solid green; */
            width: -100px;
            padding-left: 330px;


        }

        .right {
            position: absolute;
            right: 20px;
            top: 20px;
            /* border: 2px solid greenyellow; */
            display: inline-block;
        }

        .navbar {
            display: block;
        }

        .navbar li {
            display: inline-block;
            font-size: 20px;


        }

        .navbar li a {
            color: rgb(7, 4, 4);
            padding: 20px 20px;
            text-decoration: none;
        }

        .navbar li a:hover,
        .navbar li a.active {
            text-decoration: underline;
            color: rgb(226, 114, 21);
        }

        .btn {
            margin-left: 100px;
            margin: 20px, 20px;
            background-color: rgba(102, 138, 218, 0.918);
            color: rgb(14, 12, 12);
            padding: 4px 14px;
            border-radius: 6px;
            font-size: 20px;
            cursor: pointerl;


        }

        .btn:hover {
            background-color: rgba(229, 233, 13, 0.397);
        }

        .container {
            float: left;
            border: 2px solid rgb(10, 10, 10);
            margin-top: 3px;
            margin: 100px 90px;
            padding: 50px;
            width: 25%;
            border-radius: 28px;


        }

        .f1 {
            color: black;
            text-align: center;
            display: block;
            width: 508px;
            padding: 1px;
            margin: 11px auto;
            font-size: 25px;
            border-radius: 8px;
            size: 200px;
            top: 3px;
        }

        .container h1 {

            text-align: center;
        }

        .container button {
            display: block;
            width: 74;
            margin: 20px auto;

        }

        .infouser input {
            width: 340px;
            height: 30px;

        }

        .container-2 {
            float: right;
            margin-right: 180px;
            margin-top: 150px;
            padding: -500px;
            background-color: rgba(250, 233, 2, 0.295);
            border-radius: 16px;
        }

        .text {
            font-size: 70px;
            font-family: serif;
            padding: 15px;
        }

        .page-header {
            float: right;
            /* margin-left: -130px; */
            margin-right: 75px;
            margin-top: 40px;
            /* padding: -100px; */
            background-color: rgba(247, 237, 103, 0.363);
            font-size: 20px;
            font-family: serif;
            padding: 25px;
            padding-right: 10px;
            size: -20px;
            padding-left: 2px;
            border-radius: 25px;

        }

        .dropdown {
            float: left;
            overflow: hidden;
        }

        .dropdown .dropbtn {
            font-size: 20px;
            border: none;
            outline: none;
            color: rgb(24, 19, 19);
            padding: 14px 16px;
            background-color: inherit;
            font-family: inherit;
            margin: 0;
            /* margin-top: 20px; */
        }

        .navbar a:hover,
        .dropdown:hover .dropbtn {
            background-color: rgb(120, 207, 223);
        }

        .dropdown-content {
            display: none;
            position: absolute;
            background-color: #f9f9f9;
            min-width: 160px;
            box-shadow: 0px 8px 16px 0px rgba(0, 0, 0, 0.2);
            z-index: 1;
        }

        .dropdown-content a {
            float: none;
            color: black;
            padding: 20px 20px;
            text-decoration: none;
            display: block;
            text-align: left;
        }

        .dropdown-content a:hover {
            background-color: #ddd;
        }

        .dropdown:hover .dropdown-content {
            display: block;
        }

        .box {
            padding-bottom: 20px;

        }
    </style>
</head>

<body>
    <header class="hearder">
        <!-- left box for logo -->
        <div class="left">
            <img src="farm_logo.png" alt="farming logo">
            <div>farmimg</div>
        </div>



        <!-- mid box for navbar -->
        <div class="mid">
            <ul class="navbar" class="active">
                <li><a href="">Home</a></li>
                <li><a href="http://localhost/farm/about_us.php">About Us</a></li>
                <li><a href="http://localhost/farm/user_product.php">Product</a></li>
                <!-- <li><a href="#">Contact Us</a></li> -->
                <li><a href="http://localhost/farm/cart.php">My Cart</a></li>
                <!-- <li><a href="">Account</a></li> -->
                <li>
                    <div class="dropdown">
                        <a class="dropbtn" style="">Account
                            <!-- <i class="fa fa-caret-down"></i> -->
                        </a>
                        <div class="dropdown-content" style="padding-top: 10px;">
                            <a href="http://localhost/farm/reset-password.php">Reset Your Password</a>
                            <a href="logout.php">Sign Out</a>
                        </div>
                    </div>
                </li>

            </ul>
        </div>
        <!-- 
        <div class="container-2">
            <div class="text">
                
                <button class="btn">Contact Us</button>
            </div>
        </div> -->


        <!-- right box for buttons -->
        <!-- <div class="right">
            <button class="btn">My Cart</button>
        </div> -->

        <div class="page-header">
            <div class="box">
                <h1>Hi, <b><?php echo htmlspecialchars($_SESSION["username"]); ?></b>. Welcome to our site.</h1>
                <!-- <input type="submit" class="btn btn-primary" value="Farmer Login" style="border-radius: 18px;"> -->
                <a href="farmer_login.php">
                    <button
                        style="color:black; border-radius: 20px; background-color:rgba(245, 150, 115, 0.651); padding: 10px; font-size: 20px; padding-left: 30px; padding-right: 30px;">Farmer
                        Login</button>
                </a>
            </div>

            <!-- <p>
                <a href="reset-password.php" class="btn btn-warning">Reset Your Password</a>
                <a style="padding-left: 10px; margin-right: 40px;" href="logout.php" class="btn btn-danger">Sign Out of
                    Your Account</a>
            </p> -->

        </div>
        <marquee behavior="alternate" direction="left" style="margin-top: 160px;">
            <img src="fruit1.jpg" width="165" height="140" alt="Natural" />
            <img src="fru2.jpg" width="165" height="140" alt="Natural" />
            <img src="fru3.jpg" width="165" height="140" alt="Natural" />
            <img src="fru10tomato.jpg" width="165" height="140" alt="Natural" />
            <img src="fru4.jpg" width="165" height="140" alt="Natural" />
            <img src="fru5.jpg" width="165" height="140" alt="Natural" />
            <img src="fru6.jpg" width="165" height="140" alt="Natural" />
            <img src="fru7.jpg" width="165" height="140" alt="Natural" />
            <img src="fru9matki.jpg" width="165" height="140" alt="Natural" />
            <img src="fru8dal.jpg" width="165" height="140" alt="Natural" />
            <!-- <img src="fru" width="165" height="140" alt="Natural" /> -->
        </marquee>
<?php
    include 'footer.php';
?>

</body>

</html>