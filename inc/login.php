<?php
    //Adds required functions
    include('../config.php');

    //Gets results from form
    $username = $_REQUEST["username"];
    $password = $_REQUEST["password"];
    $remember =  $_REQUEST["remember"];
    $token =  $_REQUEST["token"];

    //This checks to make sure its not a sql injection attack
    checkToken($token);

    //Check for empty
    if (empty($username) || empty($password)) {
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
            $upassword = $row['password'];
            if (password_verify($password, $upassword)) {
                        
                $_SESSION['id'] = $row['id'];
                $_SESSION['fname'] = $row['fname'];
                $_SESSION['lname'] = $row['lname'];
                $_SESSION['username'] = $row['username'];
                $_SESSION['email'] = $row['email'];

                $datenow = date("Y-m-d H:i:s");
                $user_id = $row['id'];

                try {

                    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                    $stmt = $conn->prepare("UPDATE users SET login=? WHERE id=?");
                    $stmt->execute([$datenow, $user_id]);                        
                }

                catch(PDOException $e) {
                    echo $sql . "<br>" . $e->getMessage();
                }
   
                if ($remember == "true") {
                        
                    //Creates the validatetion to link in the email.
                    function validhash ($username){
                        $salt = base64_encode (openssl_random_pseudo_bytes (17));
                        $salt = '$2y$07$' . str_replace ('+', '.', substr ($salt, 0, 22));
                        $hash = crypt ($username, $salt);
                        return $hash;
                    }

                    //Sets the validate hash that will be sent to email to check.
                    $validate = validhash($username);

                    //60 days from now
                    $expires = date('Y-m-d H:m:s', time() + 86400 * 60);
                    
                    try {

                        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                        $stmt = $conn->prepare("INSERT INTO sessions SET session=?, token=?, user=?, expires=?");
                        $stmt->execute([$validate, $validate, $username, $expires ]);
                        
                        setcookie("session", $validate, time() + (86400 * 60), "/"); // 86400 = 1 day
                            
                    }

                    catch(PDOException $e) {
                        echo $sql . "<br>" . $e->getMessage();
                    }
                }
                //this is for ajax to handle
                echo "true";

            } else {
                //Wrong pass
                echo "Either the email address or password you entered is incorrect";
            }
        } else {
            //No such user
            echo "Either the email address or password you entered is incorrect";
        }
    }

    catch(PDOException $e) {
            echo "Error: " . $e->getMessage();
    }
?>