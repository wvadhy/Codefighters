<?php

// Checks if user already exists,
// Users prepared statements to prevent dependency injection
function userNameExists($conn, $username){
  $sql = "SELECT * FROM users WHERE userName = ?;";
  $stmt = mysqli_stmt_init($conn);

  if (!mysqli_stmt_prepare($stmt, $sql)){
    header("location: ../index.php?error=stmtFailed");
    exit();
  }

  mysqli_stmt_bind_param($stmt, "s", $username);
  mysqli_stmt_execute($stmt);

  $resultData = mysqli_stmt_get_result($stmt);

  if ($row = mysqli_fetch_assoc($resultData)){
    return $row;
  }
  else{
    $result = false;
    return $result;
  }

  mysqli_stmt_close($stmt);
}

// Signup user,
// Hashes password with bcrypt to prevent data tampering
function createUser($conn, $username, $pswrd, $elo){
  $sql = "INSERT INTO users (userName, userPswrd, userElo) VALUES (?, ?, ?);";
  $stmt = mysqli_stmt_init($conn);

  if (!mysqli_stmt_prepare($stmt, $sql)){
    header("location: ../index.php?error=stmtFailed");
    exit();
  }

  $hashedPswrd = password_hash($pswrd, PASSWORD_DEFAULT);

  mysqli_stmt_bind_param($stmt, "ssi", $username, $hashedPswrd, $elo);
  mysqli_stmt_execute($stmt);
  mysqli_stmt_close($stmt);

  header("location: ../index.php?error=None");
  exit();
}

// Logs in user,
// Verifies password by decrypting and comparing string literals
function loginUser($conn, $username, $pswrd){
  $usernameExists = userNameExists($conn, $username);

  if ($usernameExists === false){
    header("location: ../index.php?error=wrongLogin");
    exit();
  }

  $pswrdHashed = $usernameExists["userPswrd"];
  $checkPswrd = password_verify($pswrd, $pswrdHashed);

  if ($checkPswrd === false){
    header("location: ../index.php?error=incorrectPassword");
    exit();
  }
  else {
    session_start();
    $_SESSION["userid"] = $usernameExists["usersId"];
    $_SESSION["username"] = $usernameExists["userName"];
    $_SESSION["elo"] = $usernameExists["userElo"];
    header("location: ../index.php");
    exit();
  }
}
