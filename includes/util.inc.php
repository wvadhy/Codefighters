<?php

$token = uniqid();

if (isset($_POST["submit"])){

  $username = $_POST["username"];
  $pswrd = $_POST["password"];
  $elo = 0;

  require_once 'dbh.inc.php';
  require_once 'functions.inc.php';

  if (userNameExists($conn, $username) !== false) {
      header("location: ../index.php?error=usernametaken");
      exit();
  }

  createUser($conn, $username, $pswrd, $elo);

} elseif (isset($_POST["submit_login"])){

  $username = $_POST["username"];
  $pswrd = $_POST["password"];

  require_once 'dbh.inc.php';
  require_once 'functions.inc.php';

  loginUser($conn, $username, $pswrd);

} elseif (isset($_POST["submit_search"])){

  require_once 'dbh.inc.php';
  require_once 'functions.inc.php';

  $name = $_POST["searching"];

  if (userNameExists($conn, $name) !== false) {
      $verified_name = $name;
  } else {
      $verified_name = "No users exist with that name";
  }

} elseif (isset($_POST["submit_contact"])) {

    $email = $_POST["email"];
    $subject = "Bugs";
    $description = $_POST["description"];

    $toEmail = "williamhalliday96@gmail.com";
    $mailHeaders = "From: " . $email . "\r\n";
    if (mail($toEmail, $subject, $description, $mailHeaders)) {
      header("location: ../index.php#bot_jump?sent=success");
      exit();
    }

} else {
  header("location: ../index.php");
  exit();
}
