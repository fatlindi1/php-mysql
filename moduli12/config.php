<?php
$host = 'localhost';
$db = 'mop12';
$username = 'root';
$password = 'db';

try {
    $connect = new PDO("mysql:host=$host; dbname=$db", $username, $password);

    echo "connection successful";

}
catch(Exception $e){
    echo "something went wrong";
}

?>