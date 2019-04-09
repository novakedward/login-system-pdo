<?php
    //Adds required functions
    include('../config.php');

    //Gets results from form
    $email = $_REQUEST["email"];

    //checkToken($token);
    
    $stmt = $conn->prepare('SELECT fname FROM users WHERE email=?');
    $stmt->execute([$email]);
    $resultCheck = $stmt->rowCount();
    if ($resultCheck > 0) {
        //email taken
        echo "error";
        exit();
    } else {
        echo "success";
    }
?>