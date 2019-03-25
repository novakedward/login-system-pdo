<?php
    //Adds required functions
    include('../config.php');

    //Gets results from form
    $username = $_POST["username"];
    $token =  $_POST["token"];

    //This checks to make sure its not a sql injection attack
    checkToken($token);

    if ($debugmode == "true") {
        echo "Username/email: <b>";
        echo $username;
        echo "</b><br>";

        echo "Token: <b>";
        echo $token;
        echo "</b><br> User Session: <b>";
        echo $_SESSION['auth_token'];
        echo "</b><br>";

    }

    //Check for empty
    if (empty($username)) {
        echo "You did not fill out one of the feilds";
        exit();
    }  
    try {
            
            $stmt = $conn->prepare('SELECT * FROM users WHERE username=? OR email=?');
            $stmt->execute([$username, $username]);

            //this echos how many results were found
            $row_count = $stmt->rowCount();
            if ($row_count > 0) {
                $row = $stmt->fetch();
                $uemail = $row['email'];

                if ($debugmode == "true") {
                    echo "Users email: <b>";
                    echo $uemail;
                    echo "</b><br>";
                } else {}
                
                //Creates the validatetion to link in the email.
                function validhash ($username){
                    $salt = base64_encode (openssl_random_pseudo_bytes (17));
                    $salt = str_replace ('+', '.', substr ($salt, 0, 22));
                    $hash = crypt ($username, $salt);
                    return $hash;
                }

                //Sets the validate hash that will be sent to email to check.
                $validate = validhash($username);

                if ($debugmode == "true") {
                    echo "Users validation token: <b>";
                    echo $validate;
                    echo "</b><br>";
                } else {}

                //Creats the URL to send to the email.
                $theurl = "http://edwardnovak.info/reset.php?username=$username&validate=$validate";
                
                //Sends email to the user so that they can confirm email adress in theirs.
                mail("$uemail", "Verification Link", $theurl);

                echo "Please check email  for verification link";
                echo "<br>";

                // set the PDO error mode to exception
                $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                //this prepares the sql statement to make sure no one can hack it.
                $stmt = $conn->prepare("UPDATE users SET pvalidate=? WHERE username=? OR email=?");
                //Adds the users data into the SQL and pushes to the database+
                $stmt->execute([$validate, $username, $username ]);

                if ($debugmode == "true") {
                    echo "All good!";
                    echo "<br>";
                } else {
                    header("Location: ../forgot.php");
                }

            } else {
                //nothing matches
            }
        }
        catch(PDOException $e) {
            echo "Error: " . $e->getMessage();
        }
    
?>