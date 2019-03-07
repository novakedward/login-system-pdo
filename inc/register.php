<?php
//Adds the database connection
include('db.php');

//Gets results from form
$fname = $_POST["fname"];
$lname = $_POST["lname"];
$username = $_POST["username"];
$username = $_POST["email"];
$password = $_POST["password"];

//This hashes the password so its not readable in the database.
$hash = password_hash($password, PASSWORD_DEFAULT);

try {
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    //this prepares the sql statement to make sure no one can hack it.
    $stmt = $conn->prepare("INSERT INTO users SET fname=?, lname=?, username=?, email=?, password=?");
    //Adds the users data into the SQL and pushes to the database+
    $stmt->execute([$fname, $lname, $username, $username , $hash ]);
    
    echo "New record created successfully";
    }
catch(PDOException $e)
    {
    echo $sql . "<br>" . $e->getMessage();
    }

$conn = null;
?>