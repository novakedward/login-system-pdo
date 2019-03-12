<?php
include('db.php');

session_start();
session_unset();
session_destroy();

if(!isset($_COOKIE['session'])) { 
} else {
    
    try {

        $session = $_COOKIE['session'];

        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        //this prepares the sql statement to make sure no one can hack it.
        $stmt = $conn->prepare('DELETE FROM sessions WHERE session=?');
        $stmt->execute([$session]);
       
        setcookie("session", "", time() - 3600);
    }
    catch(PDOException $e)
        {
        echo $sql . "<br>" . $e->getMessage();
        }


}


header("location: ../index.php");
exit();
?>
