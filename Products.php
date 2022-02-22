<?php
session_start();

// if(!isset($_SESSION['loggedin']) || $_SESSION['loggedin']!=true){
//     header("location: Gym.php");
//     exit;
// }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Products and nutritions</title>
    <link rel="stylesheet" href="products.css">
</head>
<body>
    
    <?php 
    require '_navbar.php';
    ?>

    <iframe src="pd.html" frameborder="1" width="300px" height="600px"></iframe>
    <iframe class="f1" src="drinks.html" frameborder="0" name="f1" height="600px" width="600px"></iframe>
    <iframe class="f1" src="cart.php" frameborder="0" name="f2" height="600px" width="300px"></iframe>
     
</body>
</html>