<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <table border="1">
        <tr>
            <th>Phone</th>
            <th>In stock</th>
            <th>Sold</th>
        </tr>
</body>
</html>

<?php

 $dogs = [


      array("Husky", "Siberia", 15),
       array("Bulldog", "England", 10), 
        array("Chihuahua", "Mexico", 20) 
    ];


    echo $dogs[0][0]. " Origin: ".  $dogs[0][1]. " Life Span: ". $dogs[0][2]. "<hr>";
    echo $dogs[1][0]. " Origin: ".  $dogs[1][1]. " Life Span: ". $dogs[1][2]. "<hr>";
    echo $dogs[2][0]. " Origin: ".  $dogs[2][1]. " Life Span: ". $dogs[2][2]. "<hr>";


    for($x = 0; $x<3; $x++){
        echo "<ul>";
        for($y = 0; $y<3; $y++){
            echo "<li>".$dogs[$x][$y]."</li>";
        }
        echo "</ul>";
    }

     $phones = [
        ["Iphone 15", 20, 15],
        ["Iphone 16", 30, 20],
        ["iphone 17", 50, 50]
    ];


    for($row = 0; $row<3; $row++){
        echo "<tr>";
        for($col = 0; $col<3; $col++){
            echo "<td>". $phones[$row][$col]. "</td>";
        }
        echo "</tr>";
    }
    echo "</table>";



    $grades = [
        "Matematika" => "3",
        "Biologji" => "2",
        "Histori" => "5",
        "Muzik" => "4"
    ];

    echo "Math grade is ".$grades["Matematika"]."<br>";
    echo "Bio grande is ".$grades["Matematika"]."<br>";
    echo "History grade is ".$grades["Matematika"]."<br>"; 
    echo "Music grade is ".$grades["Matematika"]."<br>";

?>