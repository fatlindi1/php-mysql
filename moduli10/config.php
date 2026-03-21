<?php
$host = 'localhost';
$db = 'test';
$username = 'root';
$password = 'db';

try {
    $connect = new PDO("mysql:host=$host; dbname=$db", $username, $password);

    echo "connection successful";

}
catch(Exeption $e){
    echo "somethink went wrong";
}

?>