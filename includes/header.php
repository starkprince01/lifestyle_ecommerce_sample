<?php
require 'connection.php';
session_start();
?>
<html>
    <head>
        <title>
            lifestyle
        </title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >

        <!-- jQuery library -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>


        <!-- Latest compiled and minified JavaScript -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" type="text/css" href="style.css">
    </head>
    <!-- body section -->
    <body>
        <!-- title -->
        <nav class="navbar navbar-inverse" style="margin-bottom:0px">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>                        
                    </button>
                    <a class="navbar-brand" href="home.php">Lifestyle Store</a>
                </div>
                <div class="collapse navbar-collapse" id="myNavbar">
                    <ul class="nav navbar-nav navbar-right">
                        <?php
                        if (isset($_SESSION['email'])) {
                        ?>
                        <li><a href = "home.php"></span> 
                        <?php echo $_SESSION['name']?></a></li>
                        <li><a href = "cart.php"><span class = "glyphicon glyphicon-shoppingcart"></span> Cart </a></li>
                        <li><a href = "settings.php"><span class = "glyphicon glyphicon-user"></span> 
                        Settings</a></li>
                         <li><a href = "logout.php"><span class = "glyphicon glyphicon-login"></span> Logout</a></li>
                        
                        <?php
                        } else {
                            ?>
                            <li><a href="signup.php"><span class="glyphicon glyphicon-user"></span> 
                        Sign Up</a></li>
                            <li><a href="login.php"><span class="glyphicon glyphicon-log-in"></span> 
                        Login</a></li>
                            <?php
                            }
                            ?>
                    </ul>
                </div>
            </div>
        </nav>