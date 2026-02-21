<?php
  $host = "localhost";
  $user = "root";
  $pass = "";

  try{
    $conn = new PDO("mysql:host=$host", $user, $pass);
    $conn->exec("CREATE DATABASE IF NOT EXISTS moduli8");
    
    $conn = new PDO("mysql:host=$host;dbname=moduli8", $user, $pass);

    echo("Connected");

  }catch(Exception $e){

    echo("Not Connected");
  }

?>
