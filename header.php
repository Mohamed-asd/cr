<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" type="text/css" href="css/reset">
    <link rel="stylesheet" type="text/css" href="responsivereset">

    <script type="text/javascript" src="js/jquery.js"></script>
    <script type="text/javascript" src="js/main.js"></script>
    <title>Sonko Car Rental</title>
</head>
<body>
<section class="caption">
    <h2 class="caption" style="text-align: center">Find you Dream Cars For Hire</h2>
    <h3 class="properties" style="text-align: center">Range Rovers - Mercedes Benz - Landcruisers</h3>
</section>
</section><!-- end hero section -->
    
    <section class="">
<?php
session_start();
error_reporting("E-NOTICE");
?>
<header>
    <div class="wrapper">
        <h1 class="log">Sonko Car Company</h1>
        <a href="#" class="hamburger"></a>
        <nav>
            <?php
            if(!$_SESSION['email'] && (!$_SESSION['pass'])){
            ?>
            <ul>
                <li><a href="index.php">Home</a></li>
                <li><a href="index.php">Rent Cars</a></li>
                <li><a href="#">About</a></li>
                <li><a href="#">Contact</a></li>
            </ul>
            <a href="account.php">Client Login</a>
            <a href="login.php">Admin Login</a>
            <?php
        }else
        {
            ?>
            <ul>
                <li><a href="index.php">Home</a></li>
                <li><a href="status.php">View Status</a></li>
                <li><a href="message_admin.php">Message Admin</a></li>
            </ul>
            <a href="admin/logout.php">Logout</a>
            <?php
        }
            ?>
        </nav>
    </div>
</header>