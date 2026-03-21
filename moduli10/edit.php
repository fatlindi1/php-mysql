<?php

include_once ('config.php');

$id = $_GET['id'];

$sql = "SELECT * FROM users WHERE id = :id";

$getUser = $connect->prepare($sql);

$getUser->bindParam(':id', $id);

$getUser->execute();

$data = $prep -> fetch();
?>


<!DOCTYPE html>
<html lang="en">
<head>
    
    <title>Document</title>
</head>
<body>
    
<form action="update.php" method="POST">
    
</body>
</html>