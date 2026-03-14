<?php
  $host = "localhost";
  $user = "root";
  $pass = "";

 
  try{
    $conn = new PDO("mysql:host=$host", $user, $pass);

     $sql = "CREATE DATABASE challenge";

    $conn->exec($sql);

    echo("Connected");

  }catch(Exception $e){

    echo("Not Connected");
  }

?>