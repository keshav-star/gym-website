<?php
session_start();

if(!isset($_SESSION['loggedin']) || $_SESSION['loggedin']!=true){
    header("location: Gym.php");
    exit;
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cart</title>
    <link rel="stylesheet" href="cart.css">
    <script src="cart.js"></script>

</head>
<body>
    <!-- <nav class="navbar1">
        <li>
            <a href="Gym.php">Home</a>
        </li>
        <li>
            <a href="Products.php">Products</a>
        </li>
        <li>
           <a onclick="alert('Email-Gymfreaks@gym.fr \n\r contact-98234XXXXX')">Contact</a>
        </li>
        <li>
            <a href="Help.php">Help?</a>
        </li>                
        <li>
            <a href="loginsystem/logout.php">Logout</a>
        </li>
    </nav> -->

    <div class="container">
        <span class="heading">Name</span>
        <span class="heading">Price</span>
        <span class="heading">Quantity</span>
        <div class="items">
            <div class="item">
                <div class="name">spark</div>
                <div class="price">$15</div>
                <input type="number" name="quantity" class="quantity" value="1">
                <button class="remove">Remove</button>
            </div>
          
            <div class="item">
                <div class="name">spark</div>
                <div class="price">$15</div>
                <input type="number" name="quantity" class="quantity" value="1">
                <button class="remove">Remove</button>
            </div>
        </div>
        <div class="total">
            <span>Total : &nbsp </span>
            <span class="value">$5</span>
        </div>
    </div>

</body>
</html>