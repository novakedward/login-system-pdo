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

  function checkToken($token) {
    if ($token != $_SESSION['auth_token']) {
      echo "Invalid Token";
      die();
    }
  }

  function getTokenField() {
    echo '<input type="hidden" name="token" value="'.$_SESSION['auth_token'].'" />';
  }

  function destroyToken() {
    unset($_SESSION['auth_token']);
  }