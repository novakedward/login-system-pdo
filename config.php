<?php

    session_start();
    date_default_timezone_set('America/New_York');

    //Database connection
    $servername = "localhost";
    $username = "edwardno_db";
    $password = "Y{3?{uv5Zjqf";
    
    //adds all required include files
    include_once 'inc/db.php';
    //include_once 'inc/token.php';
    //include_once 'inc/session.php';
    include_once 'inc/auth/token.php';
    include_once 'inc/auth/cookie.php';
    include_once 'inc/auth/email.php';

?>
