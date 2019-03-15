<?php
    //Adds required functions
    include('../config.php');
    
    $validate = $_GET["validate"];
    $username = $_GET["username"];

    try {
      $stmt = $conn->prepare('SELECT * FROM users WHERE username=?');
      $stmt->execute([$username]);

      
      
      //this echos how many results were found
      $row_count = $stmt->rowCount();
      if ($row_count > 0) {
          $row = $stmt->fetch();
          $uvalidate = $row['validate'];
          
          
          if ($validate == $uvalidate) {
                  
            try {

              $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
              //this prepares the sql statement to make sure no one can hack it.
              $stmt = $conn->prepare("UPDATE users SET validate='1' WHERE validate=? AND username=?");
              //Adds the users data into the SQL and pushes to the database+
              $stmt->execute([$validate, $username ]);

              header("Location: ../dash?message=Verified");

            }

            //add handler for integrity volioation
            catch(PDOException $e) {
              echo $sql . "<br>" . $e->getMessage();
            }
          } else {
            echo "token has expired.";
          }

          

          } else {
              //No User
              echo "User does not exist or was deleted.";
          }
    } 
    catch(PDOException $e) {
      echo "Error: " . $e->getMessage();
    }