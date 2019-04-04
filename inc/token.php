<?php

  function getToken() {
    if (!isset($_SESSION['auth_token'])) {

    //Generate a random string.
    $token = openssl_random_pseudo_bytes(16);
    //Convert the binary data into hexadecimal representation.
    $token = bin2hex($token);

    $_SESSION['auth_token'] = $token;
    }
  }

  function checkToken($token, $debugmode) {
    if ($token != $_SESSION['auth_token']) {
      //echo "Invalid Token";
      die();
    } else {
      if ($debugmode == "true") {
        //echo "Token Match";
      }
    }
  }

  function getTokenField() {
    echo '<input type="hidden" id="token" name="token" value="'.$_SESSION['auth_token'].'" />';
  }

  function destroyToken() {
    unset($_SESSION['auth_token']);
  }