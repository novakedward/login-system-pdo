<?php
    
    //Adds the database connection
    include('db.php');

    //Gets results from form
    $username = $_POST["username"];
    $password = $_POST["password"];
    $remember =  $_POST["remember"];

    //Check for empty
    if (empty($username) || empty($password)) {
        echo "You did not fill out one of the feilds";
        exit();
    }  else {

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

                    if ($remember == "true") {
                        
                        $validate = validhash($username);
                        
                        function passhash ($password){
                            $salt = base64_encode (openssl_random_pseudo_bytes (17));
                            $salt = '$2y$07$' . str_replace ('+', '.', substr ($salt, 0, 22));
                            $hash = crypt ($password, $salt);
                            return $hash;
                        }

                        function validhash ($username){
                            $salt = base64_encode (openssl_random_pseudo_bytes (17));
                            $salt = '$2y$07$' . str_replace ('+', '.', substr ($salt, 0, 22));
                            $hash = crypt ($password, $salt);
                            return $hash;
                        }

                        echo $validate;

                    }

                    //header("Location: ../account.php");

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
    }
?>