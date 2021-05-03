<?php
 session_start();

 include "main/include/connect.php";
 include "main/include/functions.php";
// checking if the user has clicked the button
    if($_SERVER['REQUEST_METHOD']=="POST"){
        //user has enterd some details
        $username = $_POST['username'];
        $password = $_POST['password'];
        if(!empty($username) && !empty($username) && !is_numeric($username))
        {
            // reading from the database
            
            $query = "select * from user where username='$username' limit 1";
            // saving to the database
            $result= mysqli_query($con, $query);
            if($result){
                if($result && mysqli_num_rows($result)>0){
                    // assoc() is the short fro associative array
                    $user_data= mysqli_fetch_assoc($result);
                    if($user_data['password']===$password){
                        $_SESSION['user_id']=$user_data['user_id'];
                        header("location: main/index.php");
                    }
                }
            }
            echo "Enter the correct username or password" ;
        }
        else{
            echo "Enter valid username or information" ;
        }
    }
?> 

<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="../login/css/bootstrap.css">
    <!-- <link rel="stylesheet" href="."> -->
    <link rel="stylesheet" href="../login/css/style.css" type="text/css">
    <script src="../login/js/all.min.js"></script>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
  <div class="container">
      <div class="row">
          <div class="col">
              <ul>
                <li><a class="active" href="../index.php">Home</a></li>
                <li><a href="../index.php">About</a></li>
                <li><a href="../index.php">Our Team</a></li>
                <li><a href="../index.php">Contact Us</a></li>
              </ul>
          </div>
      </div>
  </div>
    <div class="card">
        <img id="log" src="../login/img/pinterest-circle-logo-png-transparent.png" alt="" srcset="">
        <!-- <h1><marquee>Join Sudos</marquee></h1>  -->
    <h2 class="login">Login</h2>
    <div>
    <form method="post">
        <div class="form-group">
            <div class="fa fa-user"></div>
            <Label>Username</Label>
            <input id="username" name="username" class="form-control" type="text" placeholder="Username">
        </div>
    </div>    
        <div class="form-group">
            <div class="fa fa-lock"></div>
            <Label>Password</Label>
            <input class="form-control" type="password" name="password" id="pass" placeholder="New password">
        </div>
        <button class="btn btn-success" type="submit" value="Login">Login</button>
        <p>Don't have an account?
        <a id="registed" href="signup.php">Sign Up</a>
    </p>
<div>
    <div>
        <input type="checkbox" name="remember-me" id="">
        <label for="checkbox">Remember me</label>
    </div>
</form>
</body>

</html>

