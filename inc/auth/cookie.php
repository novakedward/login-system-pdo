<?php
if (!isset($_SESSION['id'])) {

    if(!isset($_COOKIE['session'])) {
        //no cookie
    } else {
        $session = $_COOKIE['session'];
  
        try {
  
            $stmt = $conn->prepare('SELECT * FROM sessions WHERE session=?');
            $stmt->execute([$session]);
            $row = $stmt->fetch();
            $username = $row['user'];
            
            $stmt = $conn->prepare('SELECT * FROM users WHERE username=?');
            $stmt->execute([$username]);
            $row = $stmt->fetch();
    
            $_SESSION['id'] = $row['id'];
            $_SESSION['fname'] = $row['fname'];
            $_SESSION['lname'] = $row['lname'];
            $_SESSION['username'] = $row['username'];
            $_SESSION['email'] = $row['email'];

            $emailverified = $row['validate'];
            echo $emailverified;
            
        } catch(PDOException $e) {
            echo $sql . "<br>" . $e->getMessage();
        }
    }
}
?>
