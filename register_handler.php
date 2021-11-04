<?php
if (isset($_POST["btn_reg"])){
    //Receive data from user
    $name = $_POST["val1"];
    $email = $_POST["val2"];
    $password = $_POST["val3"];
    //saving and connecting to database
    require_once "connect.php";

    // now prepare the insert query
    $insertQuery = "INSERT INTO `users`(`ID`, `name`, `email`, `password`) VALUES (null,'$name','$email','$password')";
    //saving the input
    $save = mysqli_query($connection,$insertQuery);
    //checking if saving was successful
    if (isset($save)){
        echo "Registration completed successfully!";
    }else{
        echo "Registration failed, Kindly try again.";
    }
}