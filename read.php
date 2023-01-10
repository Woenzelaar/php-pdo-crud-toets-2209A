<?php

include('config.php');

$dsn = "mysql:host=$dbHost;dbname=$dbName;charset=UTF8";

try {
    $pdo = new PDO($dsn, $dbUser, $dbPass);
    if ($pdo) {
        echo "Connected successfully";
    }
    else {
        echo "Connection failed";
    }
} catch (PDOException $e) {
    echo $e->getMessage();
}



?>