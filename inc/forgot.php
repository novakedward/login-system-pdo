<?php
    //Adds required functions
    include('../config.php');

    //Gets results from form
    $username = $_GET["username"];
    $token =  $_GET["token"];

    //This checks to make sure its not a sql injection attack
    checkToken($token);

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
                
                //Creates the validatetion to link in the email.
                function validhash ($username){
                    $salt = base64_encode (openssl_random_pseudo_bytes (17));
                    $salt = str_replace ('+', '.', substr ($salt, 0, 22));
                    $hash = crypt ($username, $salt);
                    return $hash;
                }

                //Sets the validate hash that will be sent to email to check.
                $validate = validhash($username);

                //Creats the URL to send to the email.
                $theurl = "http://edwardnovak.info/reset.php?username=$username&validate=$validate";
                
                //Sends email to the user so that they can confirm email adress in theirs.
                mail("$uemail", "Verification Link", $theurl);

                echo "Please check email for verification link";

                // set the PDO error mode to exception
                $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                //this prepares the sql statement to make sure no one can hack it.
                $stmt = $conn->prepare("UPDATE users SET pvalidate=? WHERE username=? OR email=?");
                //Adds the users data into the SQL and pushes to the database+
                $stmt->execute([$validate, $username, $username ]);

                //header("Location: ../forgot.php");
                

            } else {
                //nothing matches (but we do not want to let hackers know)
                echo "Please check email for verification link";
            }
        }
        catch(PDOException $e) {
            echo "Error: " . $e->getMessage();
        }
    
?>