<?php

//check if user has a cookie session
if (!isset($_SESSION['id'])) {
    //no session
    if(!isset($_COOKIE['session'])) {
      //no cookie
    } else {
      
      //cookie set
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
        
      }
      catch(PDOException $e) {
        
        //echo $sql . "<br>" . $e->getMessage();
      
      }

    }
  } else {
    //this checks if the user is verified or not
    try {
  

      $username = $_SESSION['username'];
      
      $stmt = $conn->prepare('SELECT * FROM users WHERE username=?');
      $stmt->execute([$username]);
      $row = $stmt->fetch();

      $emailverified = $row['validate'];
        
     
    }
    catch(PDOException $e) {
      
      //echo $sql . "<br>" . $e->getMessage();
    
    }



  }



?>

