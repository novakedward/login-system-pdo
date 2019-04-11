<?php
    //Adds required functions
    include('../config.php');

    //Gets results from form
    $username = $_REQUEST["username"];
    
    $stmt = $conn->prepare('SELECT fname FROM users WHERE username=?');
    $stmt->execute([$username]);
    $resultCheck = $stmt->rowCount();
    if ($resultCheck > 0) {
        //user taken
        echo "error";
        exit();
    } else {
        echo "success";
    }
?>