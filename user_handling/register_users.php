<?php

require './db.php';
//echo "Inlcude success!";



if($_SERVER['REQUEST_METHOD']=='POST'){
    
    $username = $_POST['username'];
    
    $hashed_password = password_hash($_POST['password'],PASSWORD_BCRYPT);
    echo $username . "</br>";
    echo $_POST['password'] . "</br>";
    echo $hashed_password . "</br>";

    //Check if username exists, if it does, do not signup user, since there cannot be duplicates

    $sql_query = "SELECT * FROM users WHERE username='$username'";

    //Execute the sql query
    $sql_query_execute = mysqli_query($conn,$sql_query);

    if(mysqli_num_rows($sql_query_execute)!=0){
        //If the number of rows from the result of the sql query isn't 0, a user already exists
        echo "Username taken!";
    }
    else{
        //Else, insert into the DB
        $query = "INSERT INTO users (username,password) VALUES ('$username','$hashed_password')";
        $query_insert = mysqli_query($conn,$query);
        echo "Inserted into DB!";
        exit();
    }
    


}

?>
