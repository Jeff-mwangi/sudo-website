<?php
session_start();

 include "main/include/connect.php";
 include "main/include/functions.php";

// checking if the user has clicked the button
    if($_SERVER['REQUEST_METHOD']=="POST"){
        //user has enterd some details
        $username = $_POST['username'];
        $password = $_POST['password'];
        $email = $_POST['email'];
        if(!empty($username) && !empty($username) && !is_numeric($username))
        {
            // save the data to the db
            // generating a random number for the user_id
            $user_id = random_num(20);
            // posting to the database
            $query = "insert into user (user_id,username,password,email) values ('$user_id','$username','$password','$email')";
            // saving to the database
            mysqli_query($con, $query);
            header("location: login.php");
            die;
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
    <title>Sign Up</title>
</head>
<body>
  <div class="container">
      <div class="row">
          <div class="col">
              <ul>
                <li><a class="active" href="../main/index.php"></a></li>
                <li><a href="../index.php"></a></li>
                <li><a href="../index.php"></a></li>
                <li><a href="../index.php"></a></li>
              </ul>
          </div>
      </div>
  </div>
    <div class="card">
        <img id="log" src="../login/img/pinterest-circle-logo-png-transparent.png" alt="" srcset="">
        <!-- <h1><marquee>Join Sudos</marquee></h1>  -->
    <h2 class="login">Create Account</h2>
    <div>
        <form method="post">
        <div class="form-group">
            <div class="fa fa-user"></div>
            <Label>Username</Label>
            <input id="username" class="form-control" name="username" type="text" placeholder="Username">
        </div>
    </div>    
        <div class="form-group">
            <div class="fa fa-lock"></div>
            <Label>Password</Label>
            <input class="form-control" type="password" name="password" id="pass" placeholder="New password">
        </div>
    <div class="form-group">
        <i class="fa fa-envelope"></i>
        <Label>Email</Label>
        <input class="form-control " type="email" name="email" id="" placeholder="Email">
    </div>
    <button class="btn btn-success" type="submit" value="create">Create</button>
        <p>Registered?
        <a id="registed" href="login.php">Login</a>
    </p>
    </form>
<div>
    <!-- <div>
        <input type="checkbox" name="remember-me" id="">
        <label for="checkbox">Remember me</label>
    </div> -->
    
</body>

</html>
