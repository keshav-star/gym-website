<?php
if(isset($_SESSION['loggedin']) && $_SESSION['loggedin']==true){
    $loggedin= true;
}
else{
    $loggedin = false;
}
?>
<nav class="navbar1">
        <div class="nav">
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
            <!-- <li style="margin-left: 30%;">
               <?php if ($loggedin){ ?>
                    <a href="cart.php">Cart</a><?php
                }
                else{ ?>
                    <a href="#" onclick="alert('You must log in')">Cart</a><?php
                }  ?>         
            </li> -->
        <?php
            if(!$loggedin){
             echo '<li>
                <a href="loginsystem/login.php">Login</a>
            </li>';
            }
            if($loggedin){
             echo '<li>
                <a href="loginsystem/logout.php">Logout</a>
            </li>';
           }
        ?>
        </div>
    </nav>