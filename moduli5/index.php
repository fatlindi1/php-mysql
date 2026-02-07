<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <table border="1">
        <tr>Phone</tr>
        <tr>In stock</tr>
        <tr>Sold</tr>
    </tr>
</body>
</html>


<?php

   $dogs = [
    array("Husky", "Siberia", 15),
    array("Bulldog", "England", 10),
    array("Chiuahua", "Mexico", 20),
   ];

   echo $dogs[0][0], " Origin: ". $dogs[0][1], "Life Span:".$dogs[0][2]."<hr>";
   echo $dogs[1][0], " Origin: ". $dogs[1][1], "Life Span:".$dogs[1][2]."<hr>";
   echo $dogs[2][0], " Origin: ". $dogs[2][1], "Life Span:".$dogs[2][2]."<hr>";


   $phones = [
    ["Iphone 15", 20, 15],
    ["Iphone 16", 30, 20],
    ["Iphone 17", 50, 50]
   ];

for($row = 0; $row<3; $row++){
    echo "<tr>";
    for($col = 0; $col<3; $col++){
        echo "<tr>". $phones[$row][$col]. "</tr>";
    }
    echo "</tr>";
}
echo "</tabele>";

 ?>