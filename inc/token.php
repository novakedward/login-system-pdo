<?php

  function getToken() {
    if (!isset($_SESSION['auth_token'])) {
      $_SESSION['auth_token'] = md5(uniqid());
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