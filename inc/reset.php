<?php
    //Adds required functions
    include('../config.php');

    //Gets results from form
    $validate = $_POST["validate"];
    $username = $_POST["username"];
    
    $stmt = $conn->prepare('SELECT * FROM users WHERE username=?');
    $stmt->execute([$username]);

    $row = $stmt->fetch();
    $id = $row['id'];
    
    $npass = $_POST["npass"];
    $cnpass = $_POST["cnpass"];
    $token =  $_POST["token"];

    if ($debugmode == "true") {
        echo "User id: <b>";
        echo $id;
        echo "</b><br> New Pass: <b>";
        echo $npass;
        echo "</b><br> Confirm New Pass: <b>";
        echo $cnpass;
        echo "</b><br>";

        echo "Password Token: <b>";
        echo $validate;
        echo "</b><br>";

    }
    //This checks to make sure its not a sql injection attack
    checkToken($token, $debugmode);

    //Check for empty
    if (empty($npass) || empty($cnpass)) {
        echo "You can not leave these feilds blank blank";
        exit();
    }      
    //Checks if new pass matches
    if ($npass != $cnpass) {
        echo "Your new passwords do not match";
        exit();
    }

    $hash = password_hash($npass, PASSWORD_DEFAULT);

    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    
    //this prepares the sql statement to make sure no one can hack it.
    $stmt = $conn->prepare("UPDATE users SET password=?, pvalidate=? WHERE id=?");
    
    //Adds the users data into the SQL and pushes to the database+
    $stmt->execute([$hash, "", $id]);
    
    
    if ($debugmode == "true") {
        echo "all good";
    } else {
        header("Location: ../login.php?message=password_updated");
        die();
    }
?>