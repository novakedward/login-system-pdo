<?php
session_start();

$servername = "localhost";
$username = "edwardno_db";
$password = "Y{3?{uv5Zjqf";

try {
    $conn = new PDO("mysql:host=$servername;dbname=edwardno_db", $username, $password);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    //echo "Connected successfully<br/>"; 
    }
catch(PDOException $e)
    {
    echo "Connection failed: " . $e->getMessage();
    }
?>
