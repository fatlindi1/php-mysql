<!DOCTYPE html>
<html lang="en">
<head>
    <title>Display profucts</title>
    <style>

        table, th, td{
            border: 1px solid black;
            border-collapse: collapse;
        }

        td,th{
            padding:10px 20px;
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
    <thead>
        <th>ID</th>
        <th>username</th>
        <th>Name</th>
        <th>surname</th>
        <th>email</th>
        
    </thead>

    <tbody>
        <tr>

        <?php
             foreach($user as $user){ 
                ?>
        <tr>
            <td><?= $user['id'] ?></td>
             <td><?= $user['surname'] ?></td>
              <td><?= $user['name'] ?></td>
               <td><?= $user['email'] ?></td>
        </tr>
    <?php }  ?>
    </tbody>

    </table>
    <a href="add.php">Add a user</a>

        

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