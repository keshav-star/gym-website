<?php
session_start();

// if(!isset($_SESSION['loggedin']) || $_SESSION['loggedin']!=true){
//     header("location: login.php");
//     exit;
// }

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GymFreaks.com</title>
    <link rel="icon" type="image/png" href="pics/gym.ico">
    <link rel="stylesheet" href="gym.css">
    <script type="text/javascript" src="first.js"></script>
    <script src="https://kit.fontawesome.com/9ab58c1aee.js" crossorigin="anonymous"></script>

</head>

<body>

    <img class="bcg" src="pics/pexels-victor-freitas-841130.jpg" alt="">
    
    <?php
    require '_navbar.php';
    ?>
    <div class="container">
        <?php 
        if(!$loggedin) $_SESSION['username']="visitor";
        echo '<div class="con1"><p class="welcomemessage"> Hi '. $_SESSION['username'] .', <br>
           Welcome to the GymFreaks.</p>
           <div class="op">Appoint a counselling now</div>
           <div class="op">Check your BMI here</div>
           <div class="op">Want to loose weight. click here</div>
           <div class="op">Want to gain weight. click here</div>
           <div class="op">See profile of trainers</div>
           <div class="op">Check our location on Map</div>
       </div>'
       ?>
       
        <div class="con2">
            <div class="member">
                <h3>Become a Member</h3>
                <p class="cardtext"> Shape your body with best trainers and facilities at just <strong>10$</strong> per
                    month</p>
                <button class="mem">Join Now</button>
            </div>
            <div class="member">
                <h3>Remain connected</h3>
                <p class="cardtext">Stay motivated and Consistant. Renew your membership now</p>
                <button class="mem">Refuel Card</button>
            </div>
            <div class="member">
                <h3>Explore premium</h3>
                <p class="cardtext">Explore some of our Premium plans for premium members</p>
                <button class="mem">PREMIUM</button>
            </div>
            
            <div class="slideshow-container">

                <!-- Full-width images with number and caption text -->
                <div class="mySlides fade">
                  <img src="pics/offer1.jpg" style="width:100%">
                 
                </div>
              
                <div class="mySlides fade">
                  <img src="pics/offer2.jpg" style="width:100%">
                 
                </div>
              
                <div class="mySlides fade">
                  <img src="pics/offer3.jpg" style="width:100%">
                 
                </div>
              
                <!-- Next and previous buttons -->
                <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
                <a class="next" onclick="plusSlides(1)">&#10095;</a>
              </div>
              <br>

        </div>

        <div class="con3">
            <div class="review">
                <div class="name"><i class='fas fa-user-circle'></i>&nbsp; Keshav</div>
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star"></span>
                <div class="saids">
                    <p>Great place to workout . Nice people and professional Gym trainers.</p>
                </div>
            </div>
            <div class="review">
                <div class="name"><i class='fas fa-user-circle'></i>&nbsp; Loner</div>
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star"></span>
                <div class="saids">
                    <p>Surrounding of kind and hardworking people lits a fire in oneself to. Must join.</p>
                </div>
            </div>
            <div class="review">
                <div class="name"><i class='fas fa-user-circle'></i>&nbsp; Abhi</div>
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star checked"></span>
                <div class="saids">
                    <p>Nice environment and hygeine. Equipments are also latest.</p>
                </div>
            </div>

        </div>
    </div>
    <footer id="footer">
        &copy; <span>Copyright 1999-2029 GymFreaks.com</span>
    </footer>

</body>

</html>
