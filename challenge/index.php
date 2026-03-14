<?php
 $host = "localhost";
  $user = "root";
  $pass = "";
  $db= "challange1";


try{
    $conn = new PDO("mysql:host=$host;dbname=$db", $user, $pass);


    $sql = "CREATE TABLE category(
      id INT PRIMARY KEY,
      Name VARCHAR(255) NOT NULL
    );
   

    CREATE TABLE  products(
      ID INT PRIMARY KEY,
      name VARCHAR(255) NOT NULL,
      category_id INT NOT NULL,
      FOREIGN KEY (category_id) REFERENCES category(id)
    );
   

    INSERT INTO category(id, name) VALUES 
    (1, 'Fruta'),
    (2, 'Fast food');
   
   

    INSERT  INTO products(id, name, category_id) VALUES 
    (1, 'Molla', 1),
    (2, 'Hamburgeri', 2),
    (3, 'Pizza', 2),
    (4, 'Dardha', 1),
    (5, 'Tosti', 2),
    (6, 'Ananasi', 1),
    (7, 'Rrushi', 1),
    (8, 'Hotdog', 2),
    (9, 'Dredhza', 1),
    (10, 'Pasta', 2),
    (11, 'Shalqini', 1),
    (12, 'Ftoni', 1),
    (13, 'Kokos', 1),
    (14, 'Mango', 1),
    (15, 'Sandwich', 2);";

   $conn->exec($sql);

    echo("Connected");

  }catch(Exception $e){

    echo("Not Connected: " . $e->getMessage());
  }
  
?>

