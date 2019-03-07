<?php include('header.php'); ?>
  <body>
  <div class="container">
  <?php

    include_once 'inc/db.php';

    echo "<br>";
    //this demo is prepared statements selecting a specific user
    $email = "tommy@example.com";
    $id = "1";
    //we have selected user id 1 and email specified, this should result in tom as the fname  

    try {

        $stmt = $conn->prepare('SELECT fname FROM users WHERE email = ? AND id=?');
        $stmt->execute([$email, $id]);

        //this echos how many results were found
        $row_count = $stmt->rowCount();
        echo $row_count;
    
        echo "<br>";

        $row = $stmt->fetch();
        $fname = $row['fname'];
        echo $fname;
      
    }
    catch(PDOException $e) {
        echo "Error: " . $e->getMessage();
    }

    echo "<br>";

    //this demo is prepared statements showing all users info

    try {

      $stmt = $conn->prepare('SELECT * FROM users');
      $stmt->execute();
      while ($row = $stmt->fetch())
      {
          echo $row['fname'] . "\n";
          echo $row['lname'] . "\n";
          echo $row['username'] . "\n";
          echo $row['email'] . "\n<br>";
      }

    }
    catch(PDOException $e) {
      echo "Error: " . $e->getMessage();
    }

    $conn = null;
  ?>
  <?php include('footer.php'); ?>
</div>