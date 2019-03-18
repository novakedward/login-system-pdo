<?php
    //Adds required functions
    include('../config.php');

    //Gets results from form
    $id = $_POST["id"];
    $fname = $_POST["fname"];
    $lname = $_POST["lname"];
    $username = $_POST["username"];
    $email = $_POST["email"];
   
    echo $fname;
    echo "<br>";

    //Check for empty
    if (empty($fname) || empty($lname) || empty($username) || empty($email)) {
        echo "You can not leave these feilds blank blank";
        exit();
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


                     //checks if email was changed to send verification 
                     $stmt = $conn->prepare('SELECT * FROM users WHERE id=?');
                     $stmt->execute([$id]);
                     //this echos how many results were found
                     $row = $stmt->fetch();
                     $uemail = $row['email'];
                     $uuser = $row['username'];

                     echo $uuser;
                     echo "<br>";
                     echo $username;

                     if ($uuser != $username) {


                    


                    //Makes sure username is not used
                    $stmt = $conn->prepare('SELECT username FROM users WHERE username=?');
                    $stmt->execute([$username]);
                    //this echos how many results were found
                    $resultCheck = $stmt->rowCount();
                    if ($resultCheck > 0) {
                        echo "This username is already taken";
                        exit();
                    } 
                    
                    }  else { 
                      

                        $validate = "1";

                        if ($uemail != $email) {

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
                            $theurl = "http://edwardnovak.info/inc/verify.php?username=$username&validate=$validate";

                            //Sends email to the user so that they can confirm email adress in theirs.
                            mail("$email", "Verification Link", $theurl);

                            echo "Please check email  for verification link";


                        }

                            try {
   
                               //Gets date and time now
                               $datenow = date("Y-m-d H:i:s");

                               // set the PDO error mode to exception
                               $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                               //this prepares the sql statement to make sure no one can hack it.
                               $stmt = $conn->prepare("UPDATE users SET fname=?, lname=?, username=?, email=?, validate=? WHERE id=?");
                               //Adds the users data into the SQL and pushes to the database+
                               $stmt->execute([$fname, $lname, $username, $email , $validate, $id]);

                               echo "New account created successfully";

                               unset($_SESSION['fname']);
                               unset($_SESSION['lname']);
                               unset($_SESSION['username']);
                               unset($_SESSION['email']);

                               $_SESSION['fname'] = $fname;
                               $_SESSION['lname'] = $lname;
                               $_SESSION['username'] = $username;
                               $_SESSION['email'] = $email;

                               header("Location: ../dash/profile.php?message=account_updated");
                               die();

                               }
                           catch(PDOException $e)
                               {
                               echo $sql . "<br>" . $e->getMessage();
                               }


                                }


                            }

                            $conn = null;
                        }
                    }
             
?>