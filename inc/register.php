<?php
    //Adds required functions
    include('../config.php');

    //Gets results from form
    $fname = $_REQUEST["fname"];
    $lname = $_REQUEST["lname"];
    $username = $_REQUEST["username"];
    $email = $_REQUEST["email"];
    $password = $_REQUEST["password"];
    $rpassword = $_REQUEST["rpassword"];
    $token =  $_REQUEST["token"];

    checkToken($token);

    //Check for empty
    if (empty($fname) || empty($lname) || empty($username) || empty($email) || empty($password)) {
        echo "You did not fill out one of the feilds";
        exit();
    } else {
        //Checks if passwords are the same
        if ($password != $rpassword) {
            echo "Password mismatch";
        } else {
            //Check if input char are valid
            if (!preg_match("/^[a-zA-Z]*$/", $fname) || !preg_match("/^[a-zA-Z]*$/", $lname)) {
                echo "Invalid first or last name";
                exit();	
            } else {
                //Check if email is valid
                if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                    echo "This is not a valid email";
                    exit();	
                } else {
                    //Makes sure username is not used
                    $stmt = $conn->prepare('SELECT fname FROM users WHERE username=?');
                    $stmt->execute([$username]);
                    //this echos how many results were found
                    $resultCheck = $stmt->rowCount();
                    if ($resultCheck > 0) {
                        echo "user_taken";
                        exit();
                    } else {
                        //Makes sure email is not used
                        $stmt = $conn->prepare('SELECT fname FROM users WHERE email=?');
                        $stmt->execute([$email]);
                        //this echos how many results were found
                        $resultCheck = $stmt->rowCount();
                        if ($resultCheck > 0) {
                            echo "email_taken";
                            exit();
                        } else {
                            
                            
                           

                            try {
                                
                                 //This hashes the password so its not readable in the database.
                                $hash = password_hash($password, PASSWORD_DEFAULT);
                                
                                //Gets date and time now
                                $datenow = date("Y-m-d H:i:s");

                                //Creates the validatetion to link in the email.
                                function validhash ($username){
                                    $salt = base64_encode (openssl_random_pseudo_bytes (17));
                                    $salt = str_replace ('+', '.', substr ($salt, 0, 22));
                                    $hash = crypt ($username, $salt);
                                    return $hash;
                                }

                                //Sets the validate hash that will be sent to email to check.
                                $validate = validhash($username);

                                // set the PDO error mode to exception
                                $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                                //this prepares the sql statement to make sure no one can hack it.
                                $stmt = $conn->prepare("INSERT INTO users SET fname=?, lname=?, username=?, email=?, password=?, validate=?, joined=?, login=?");
                                //Adds the users data into the SQL and pushes to the database+
                                $stmt->execute([$fname, $lname, $username, $email , $hash, $validate, $datenow, $datenow ]);
                                
                                //Creats the URL to send to the email.
                                $theurl = "http://edwardnovak.info/inc/verify.php?username=$username&validate=$validate";

                                //Sends email to the user so that they can confirm email adress in theirs.
                                mail("$email", "Verification Link", $theurl);

                                //echo "Please check email for verification link";
                                echo "true";
                                //echo "New account created successfully";
                                //header("Location: ../login.php?message=Account_Created");
                                die();

                                }
                            catch(PDOException $e)
                                {
                                echo $sql . "<br>" . $e->getMessage();
                                }

                            $conn = null;
                        }
                    }
                }
            }
        }      
    }
?>