<?php
// it checks if the user has login otherwise,it directs him to the signup page
function check_login($con){
    // checking if there is a user_id
    if(isset($_SESSION['user_id'])){
        // checking if it is in the database
        $id=$_SESSION['user_id'];
        //checking in the database
        $query="select * from user where user_id= '$id' limit 1 ";
        // reading from the database
        $result=mysqli_query($con, $query);
        // checking if the result is positive
        if($result && mysqli_num_rows($result)>0){
            // assoc() is the short fro associative array
            $user_data= mysqli_fetch_assoc($result);
            return $user_data;
        }
    }
    // redirect to login if something is wrong
    header("Location: login.php");
    die; 
}
function random_num($length){
    $text="";
    if($length < 5){
        $length = 5;
    }
    $len=rand(4,$length);
    for($i=0;$i<$len;$i++){
        $text .=rand(0,9);
    }
    return $text;
}

?>