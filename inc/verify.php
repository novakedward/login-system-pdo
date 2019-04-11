<?php
  //Adds required functions
  include('../config.php');
    
  $validate = $_GET["validate"];
  $username = $_GET["username"];
  $email = $_GET["email"];

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
          //this prepares the sql statement to make sure no one can hack it.
          $stmt = $conn->prepare("UPDATE users SET validate='1' WHERE validate=? AND username=?");
          //Adds the users data into the SQL and pushes to the database+
          $stmt->execute([$validate, $username ]);

          if ($email != "") {
            $stmt = $conn->prepare("UPDATE users SET email=? WHERE username=?");
            //Adds the users data into the SQL and pushes to the database+
            $stmt->execute([$email, $username ]);

            unset($_SESSION['email']);
            $_SESSION['email'] = $email;

          }

          header("Location: ../dash?message=Verified");

        } catch(PDOException $e) {
          echo $sql . "<br>" . $e->getMessage();
        }

      } else {
        echo "token has expired.";
      }

    } else {
      //No User
      echo "User does not exist or was deleted.";
    }
  } catch(PDOException $e) {
    echo "Error: " . $e->getMessage();
  }