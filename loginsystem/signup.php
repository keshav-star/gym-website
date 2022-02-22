<?php
ini_set('display_errors', '0');

    $servername = "localhost";
    $username = "root";
    $password = "";

    $database = "GymWebsite";

    $con = mysqli_connect($servername,$username, $password,$database);

    if(!$con){
        die("Connection failed" . mysqli_connect_error());
    }

    if($_SERVER["REQUEST_METHOD"] == "POST") {
    $uerr = $perr = $cperr = "";
    $username = $password = $cpassword = "";
    

    function Ti($data) {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
      }

    if (empty($_POST["username"])){
        $uerr = "Username cannot be blank";
    }else $username = Ti($_POST["username"]);
    
    if (empty($_POST["password"])){
        $perr = "Password cannot be blank";
    }else $password = Ti($_POST["password"]);

    if (empty($_POST["cpassword"])){
        $cperr = "confirm your password";
    }else $cpassword = Ti($_POST["cpassword"]);
    
    if($password == $cpassword)
    {
        $hash = password_hash($password,PASSWORD_DEFAULT);
        $sql = "INSERT INTO `users` ( `username`, 
        `password`,`time`) VALUES ('$username', 
        '$hash',now())";
        $result = mysqli_query($con, $sql);
    }
    else
    {
        echo "password did not match";
    }
    // if($username !=''&& $password !=''&& $cpassword !='')
    // {
    //     header("Location:https://www.google.com/");
    // }
    
    if($result)
    {
        $sql = "CREATE TABLE `$username` ( `imgSrc` varchar(40), `price` int(10) )" ;
        $done = mysqli_query($con, $sql);
        if($done){
            echo '<p style="color:white">Your account has been created. Now you can login <a href="login.php"> Here</a></p>';
        }
        
    }
    mysqli_close($con);
}
// var_dump
//password_verify
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- <meta http-equiv="Cache-control" content="no-cache"> -->
    <link rel="icon" type="image/png" href="img/icon.png">
    <link rel="stylesheet" href="login.css">
    <title>REGISTER YOURSELF</title>
</head>

<body>

    <h1>MAKE YOUR FREE ACCOUNT NOW</h1>
    <img src="../pics/pexels-victor-freitas-949126.jpg" class="bcg" alt="">
    <div class="container">

        <form method="post" action="<?php echo htmlspecialchars($_SERVER[" PHP_SELF"]) ?>">

            <label for="username">U S E R N A M E :</label>
            <input type="text" name="username" id="username">
            <span class="error"> *
                <?php echo $uerr; ?>
            </span><br>

            <label for="password">P A S S W O R D :</label>
            <input type="password" name="password" id="password">
            <span class="error"> *
                <?php echo $perr; ?>
            </span><br>

            <label for="cpassword">C P A S S W O R D :</label>
            <input type="password" name="cpassword" id="cpassword">
            <span class="error"> *
                <?php echo $cperr; ?>
            </span><br>

            <!-- <label for="captcha">C A P T C H A :</label>
        <input type="text" name="captcha" id="captcha"><br> -->

            <button type="submit" name="submit" id="submit">CREATE ACCOUNT</button>
            <button type="reset">RESET</button>
        </form>

    </div>

</body>

</html>