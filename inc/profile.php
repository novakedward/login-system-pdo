<?php
    //Adds required functions
    include('../config.php');

    //Gets results from form
    $id = $_GET["userid"];
    $fname = $_GET["fname"];
    $lname = $_GET["lname"];
    $username = $_GET["username"];
    $email = $_GET["email"];
    $token =  $_GET["token"];

    if ($id != $_SESSION['id']) {
        echo "error invalid user id";
        exit();
    }

    //This checks to make sure its not a sql injection attack
    checkToken($token);
    
    //Check for empty
    if (empty($fname) || empty($lname) || empty($username) || empty($email)) {
        echo "You can not leave these feilds blank blank";
        exit();
    } 
    
    //Check if input char are valid
    if (!preg_match("/^[a-zA-Z]*$/", $fname) || !preg_match("/^[a-zA-Z]*$/", $lname)) {
        echo "Invalid first or last name";
        exit();	
    }
    
    //Check if email is valid
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        echo "This is not a valid email";
        exit();	
    }

    //checks if email/username was changed to send verification or check if taken
    $stmt = $conn->prepare('SELECT * FROM users WHERE id=?');
    $stmt->execute([$id]);
    
    //this echos how many results were found
    $row = $stmt->fetch();
    $uemail = $row['email'];
    $uuser = $row['username'];

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
    }  
    
    //this sets validate to one so if they do not change email to keep them validated
    $validate = "1";

    if ($uemail != $email) {

        //Makes sure username is not used
        $stmt = $conn->prepare('SELECT email FROM users WHERE email=?');
        $stmt->execute([$email]);
        //this echos how many results were found
        $resultCheck = $stmt->rowCount();
        
        if ($resultCheck > 0) {
            echo "This email is already taken";
            exit();
        } 

        //Creates the validatetion to link in the email.
        function validhash ($username){
            $salt = base64_encode (openssl_random_pseudo_bytes (17));
            $salt = str_replace ('+', '.', substr ($salt, 0, 22));
            $hash = crypt ($username, $salt);
            return $hash;
        }

        //Sets the validate hash that will be sent to email to check.
        $validate = validhash($username);

        //Creates the URL to send to the email.
        $theurl = "http://edwardnovak.info/inc/verify.php?username=$username&email=$email&validate=$validate";
        
        //Sends email to the user so that they can confirm email adress in theirs.
        mail("$email", "Verification Link", $theurl);

        echo "Please check email  for verification link";
        echo "<br>";
    }

    try {
   
        //Gets date and time now
        $datenow = date("Y-m-d H:i:s");

        // set the PDO error mode to exception
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        //this prepares the sql statement to make sure no one can hack it.
        $stmt = $conn->prepare("UPDATE users SET fname=?, lname=?, username=?, validate=? WHERE id=?");
        //Adds the users data into the SQL and pushes to the database+
        $stmt->execute([$fname, $lname, $username, $validate, $id]);

        unset($_SESSION['fname']);
        unset($_SESSION['lname']);
        unset($_SESSION['username']);
        
        $_SESSION['fname'] = $fname;
        $_SESSION['lname'] = $lname;
        $_SESSION['username'] = $username;
        
        echo "Updated";
        
        //header("Location: ../dash/profile.php?message=account_updated");
        die();
                    
    } catch(PDOException $e) {
        echo $sql . "<br>" . $e->getMessage();
    }             
?>