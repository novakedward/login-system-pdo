<?php
try {
   $username = $_SESSION['username'];
    
    $stmt = $conn->prepare('SELECT * FROM users WHERE username=?');
    $stmt->execute([$username]);
    $row = $stmt->fetch();

    $emailverified = $row['validate'];  
   
} catch(PDOException $e) {
    echo $sql . "<br>" . $e->getMessage();
}
?>
