<?php
include('db.php');

$fname = $_POST["fname"];
$lname = $_POST["lname"];
$username = $_POST["username"];
$email = $_POST["email"];
$password = $_POST["password"];

try {
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $sql = "INSERT INTO users (fname, lname, username, email, password)

    VALUES ('$fname', '$lname', '$username', '$email', '$password')";
    // use exec() because no results are returned
    $conn->exec($sql);
    echo "New record created successfully";
    }
catch(PDOException $e)
    {
    echo $sql . "<br>" . $e->getMessage();
    }

$conn = null;
?>