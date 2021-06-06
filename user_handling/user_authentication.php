<?php
//Checks whether user is in system, verifying it against the password hash
//It will also create a cookie and a session (not sure which one to use yet), storing the username and password


require './db.php';

session_start();

if($_SERVER['REQUEST_METHOD']=='POST'){
    $username = $_POST['username'];
    
    // echo $username . "</br>";
    // echo $hashed_password . "</br>";

    $authenticate_query = "SELECT * FROM users WHERE username='$username'";
    $query_result = mysqli_query($conn,$authenticate_query);
    
    $password_from_database = mysqli_fetch_assoc($query_result)['password'];
    //echo 'Password from DB is : ' . $password_from_database;

    $count = mysqli_num_rows($query_result);

    if($count>0 && password_verify($_POST['password'], $password_from_database)){
        //The user is authenticated because there exists a user in the database
        //echo "Congrats! User authenticated </br>"; 
        $_SESSION['user'] = $username;
        $_SESSION['password'] = $password_from_database;
        header('Location: home.php');


    }
    else{
        echo "User does not exist in system. Please try again </br>"; 
    }
    

    
}

?>
