<?php

  function getToken() {
    if (!isset($_SESSION['auth_token'])) {
      $_SESSION['toauth_tokenken'] = md5(uniqid());
    }
  }

  function checkToken($token) {
    if ($token != $_SESSION['auth_token']) {
      echo "Invalid Token";
      die();
    }
  }

  function getTokenFeild() {
    echo '<input type="hidden" name="token" value="'.$_SESSION['auth_token'].'" />';
  }

  function destroyToken() {
    unset($_SESSION['auth_token']);
  }