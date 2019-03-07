<?php
    //Adds the database connection
    include('db.php');

    //Gets results from form
    $fname = $_POST["fname"];
    $lname = $_POST["lname"];
    $username = $_POST["username"];
    $email = $_POST["email"];
    $password = $_POST["password"];
    $rpassword = $_POST["rpassword"];

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
                        echo "This username is already taken";
                        exit();
                    } else {
                        //Makes sure email is not used
                        $stmt = $conn->prepare('SELECT fname FROM users WHERE email=?');
                        $stmt->execute([$email]);
                        //this echos how many results were found
                        $resultCheck = $stmt->rowCount();
                        if ($resultCheck > 0) {
                            echo "This email is used on another account, please login or reset password.";
                            exit();
                        } else {
                            $LastLogin = date("Y-m-d H:i:s");
                            $DateJoined = date("Y-m-d H:i:s");
                            //This hashes the password so its not readable in the database.
                            $hash = password_hash($password, PASSWORD_DEFAULT);

                            try {
                                // set the PDO error mode to exception
                                $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                                //this prepares the sql statement to make sure no one can hack it.
                                $stmt = $conn->prepare("INSERT INTO users SET fname=?, lname=?, username=?, email=?, password=?");
                                //Adds the users data into the SQL and pushes to the database+
                                $stmt->execute([$fname, $lname, $username, $email , $hash ]);
                                
                                //echo "New account created successfully";
                                header("Location: ../login.php");
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