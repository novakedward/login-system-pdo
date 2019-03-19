<?php
    //Adds required functions
    include('../config.php');

    //Gets results from form
    $id = $_POST["id"];
    $cpass = $_POST["cpass"];
    $npass = $_POST["npass"];
    $cnpass = $_POST["cnpass"];
    $token =  $_POST["token"];

    if ($id != $_SESSION['id']) {
        echo "error invalid user id";
    }

    if ($debugmode == "true") {
        echo "Current Pass: <b>";
        echo $cpass;
        echo "</b><br> New Pass: <b>";
        echo $npass;
        echo "</b><br> Confirm New Pass: <b>";
        echo $cnpass;
        echo "</b><br>";

        echo "User ID: <b>";
        echo $id;
        echo "</b><br> User Session ID: <b>";
        echo $_SESSION['id'];
        echo "</b><br>";

    }
    //This checks to make sure its not a sql injection attack
    checkToken($token, $debugmode);

    //Check for empty
    if (empty($cpass) || empty($npass) || empty($cnpass)) {
        echo "You can not leave these feilds blank blank";
        exit();
    }      
    //Checks if new pass matches
    if ($npass != $cnpass) {
        echo "Your new passwords do not match";
        exit();
    }

    //checks if current password matches 
    $stmt = $conn->prepare('SELECT * FROM users WHERE id=?');
    $stmt->execute([$id]);

    //this echos how many results were found
    $row_count = $stmt->rowCount();
    
    if ($row_count = 0) {
        echo "Error no such user";
        die();
    }

    $row = $stmt->fetch();
    $upassword = $row['password'];
    
    if (!password_verify($cpass, $upassword)) {
        echo "wrong pass";
        die();
    } 

    $hash = password_hash($npass, PASSWORD_DEFAULT);

    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    
    //this prepares the sql statement to make sure no one can hack it.
    $stmt = $conn->prepare("UPDATE users SET password=? WHERE id=?");
    
    //Adds the users data into the SQL and pushes to the database+
    $stmt->execute([$hash, $id]);
    
    if ($debugmode == "true") {
        echo "all good";
    } else {
        header("Location: ../dash/security.php?message=account_updated");
        die();
    }
?>