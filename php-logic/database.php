<?php
$host = "localhost";
$port = 3306;
$username = "root";
$password = "";
$dbname = "Portfolio";

$dsn = "mysql:host=$host;port=$port;dbname=$dbname";

try{
    $pdo = new PDO($dsn, $username, $password);
    // echo "Connected successfully";
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

}catch(PDOException $e){
    echo "Connection failed: " .$e->getMessage();

}
