<?php

if (isset($_POST["submit"])){

  $username = $_POST["username"];
  $pswrd = $_POST["password"];

  require_once 'dbh.inc.php';
  require_once 'functions.inc.php';

  if (userNameExists($conn, $username) !== false) {
      header("location: ../index.php?error=usernametaken");
      exit();
  }

  createUser($conn, $username, $pswrd);

} else {
  header("location: ../index.php");
  exit();
}
