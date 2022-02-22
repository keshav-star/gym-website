
<?php
    require 'dbconnect.php';
    $uerr = $perr = "";
    $username = $pass = "";
    $login=false;
    $showerror=false;
    if($_SERVER["REQUEST_METHOD"] == "POST") {

    function Ti($data) {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
      }

    if (empty($_POST["username"])){
        $uerr = "Username cannot be blank";
    }else {
        $username = Ti($_POST["username"]);
        if (!preg_match("/^[a-zA-Z-' ]*$/",$username)) {
            $uerr = "Only letters and white space allowed";
          }
    }
    if (empty($_POST["password"])){
        $perr = "Password cannot be blank";
    }else {
        $pass = Ti($_POST["password"]);
        
    }
    $sql = "Select * from users where username='$username'";
    $result = mysqli_query($con, $sql);
    $num = mysqli_num_rows($result);
    if ($num == 1){
        while($row=mysqli_fetch_assoc($result)){
            if (password_verify($pass, $row['password'])){ 
                $login=true;
                session_start();
                $_SESSION['loggedin']= true;
                $_SESSION['username']= $username;
                header("location: ../Gym.php");
            } 
            else{
                $showerror = "Invalid Credentials";
            }
        }
    }
    else $showerror = "Invalid Credentials";
    mysqli_close($con);

}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/png" href="img/icon.png">
    <link rel="stylesheet" href="login.css">
    <title>Login to continue</title>
</head>
<body>

    <?php
        if($login)
        {
            echo '<div class="err" >You are logged in . welcome '.$username.'</div>';
        }
        if($showerror)
        {
            echo '<div class="err" >'.$showerror.'</div>';
        }
    ?>

    <h1>LOGIN TO YOUR ACCOUNT TO CONTINUE</h1>
    <img src="../pics/pexels-victor-freitas-949126.jpg" class="bcg" alt="">
<div class="container">
    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]) ?>">

        <label for="username">U S E R N A M E :</label>
        <input type="text" name="username" id="username">
        <span class="error" > * <?php echo $uerr; ?></span><br>

        <label for="password">P A S S W O R D :</label>
        <input type="password" name="password" id="password">
        <span class="error" > * <?php echo $perr; ?></span><br>

        <button type="submit" name="submit" id="submit" >Sign In</button>
        <button name="signup" ><a href="signup.php" style="text-decoration:none; color:black;">SIGN UP</a></button>
    </form>

    <!-- <script type="text/javascript">
        document. getElementById("myButton"). onclick = function () {
        location. href = "www.yoursite.com";
        };
    </script> -->
    </div>
</body>
</html>
