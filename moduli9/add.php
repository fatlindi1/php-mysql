<?php

include_once('config.php');

if(isset($_POST['submit'])){

    $username = $_POST['username'];

    $email = $_POST['email'];

    $password = $_POST['password'];

    $sql ="INSERT INTO users(username,email,password) VALUES (:username, :email, :password)";

    $sqlQuery = $connect->prepare($sql);

    $sqlQuery->bindParam(':username', $username);

    $sqlQuery->bindParam(':password', $password);

    $sqlQuery->bindParam(':email', $email);

    if($sqlQuery->execute()){
        echo "The user was added successfully";
    }
    else{
        echo "somethink went wrong";
    }

    
}

?>