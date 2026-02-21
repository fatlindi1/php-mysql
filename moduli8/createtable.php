<?php
  $host = "localhost";
  $db = "testFatlindi";
  $user = "root";
  $pass = "";

 
  try{
    $conn = new PDO("mysql:host=$host", $user, $pass);
    $conn->exec("CREATE DATABASE $db");
    
    $conn = new PDO("mysql:host=$host;dbname=$db", $user, $pass);

    $sq = "CREATE TABLE  users (
      id INT(20) NOT NULL AUTO_INCREMENT PRIMARY KEY,
      username VARCHAR(255) NOT NULL,
      password VARCHAR(255) NOT NULL
    );";
   

    $sq = "CREATE TABLE category(
      id INT PRIMARY KEY,
      Name VARCHAR(255) NOT NULL
    );";
   

    $sq = "CREATE TABLE  products(
      ID INT PRIMARY KEY,
      name VARCHAR(255) NOT NULL,
      category_id INT NOT NULL,
      FOREIGN KEY (category_id) REFERENCES category(id)
    );";
   

    $sq = "INSERT INTO category (id, name) VALUES 
    (1, 'Fruta'),
    (2, 'Bakery'),
    (3, 'Fast Food');";
   

    $sql = "INSERT  INTO products (id, name, category_id) VALUES 
    (1, 'Molla', 1),
    (2, 'Torte', 2),
    (3, 'Pizza', 3),
    (4, 'Dardha', 1),
    (5, 'Hamburgeri', 3);";
   

    echo("Connected");

  }catch(Exception $e){

    echo("Not Connected: " . $e->getMessage());
  }

?>
