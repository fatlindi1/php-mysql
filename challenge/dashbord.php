<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Display profucts</title>
    <style>

        table, th, td{
            border: 1px solid black;
        }

        td,th{
            padding: 20px;
        }

    </style>



</head>
<body>


<?php
    include_once ('config.php');

    $sql = "SELECT * FROM products";

    $getproducts = $connect->prepare($sql);

    $getproducts->execute();

    $products = $getproducts->fetchAll;


?>

<table>
    <tr>
        <th>ID</th>
        <th>Name</th>
        <th>Category</th>
    </tr>

    
        <tr>

        <?php
             foreach($products as $product){ 
                ?>


            <td><?= $product['id'] ?></td>
            <td><?= $product['name'] ?></td>
            <td><?= $product['category'] ?></td>
        </tr>

    <?php }  ?>
    
    

    
</body>
</html>